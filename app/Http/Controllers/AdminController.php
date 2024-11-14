<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\User;
use App\Models\Loker;
use App\Models\Website;
use App\Models\Posisi;
use App\Models\DetailLowongan;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Mail;
use App\Mail\ContactEmail;
use PDF;
use Illuminate\Support\Facades\Validator;
use Carbon\Carbon;

class AdminController extends Controller
{
    public function beranda()
    {
        // Menghitung jumlah pengguna, pengunjung, lowongan, dan diterima
        $countpengguna = User::all()->count();
        $countpengunjung = DB::table('visitors')->count();
        $countapply = Loker::all()->count();
        $countditerima = Loker::where('status', 'diterima')->count();

        // Mengambil data pengunjung per bulan
        $visitorData = DB::table('visitors')
            ->select(DB::raw('MONTH(created_at) as month'), DB::raw('YEAR(created_at) as year'), DB::raw('count(*) as total'))
            ->whereYear('created_at', Carbon::now()->year)
            ->groupBy(DB::raw('MONTH(created_at)'), DB::raw('YEAR(created_at)'))
            ->orderBy('year', 'asc')
            ->orderBy('month', 'asc')
            ->get();
        return view('Admin.dashboard', compact('countpengguna', 'countpengunjung', 'countapply', 'countditerima', 'visitorData'));
    }

    public function pengguna()
    {
        $pengguna = User::all();
        return view('Admin.pengguna', compact('pengguna'));
    }

    public function profileadmin()
    {
        $profile = User::all();
        return view('Admin.profileadmin', compact('profile'));
    }

    public function updateprofileadmin(Request $request, $id)
    {
        $this->validate($request,[
            'foto' => 'required|image|mimes:jpg,png,jpeg|max:2048',
        ],[
            'foto.required' => 'Foto Profil Foto Harus Diisi',
            'foto.image' => 'Foto Profil Foto Harus Berisi File Foto',
            'foto.mimes' => 'Foto Profil Foto Harus Berupa Extensi jpg, png, jpeg',
            'foto.max' => 'Foto Profil Foto Maksimal Berisi 2MB',
        ]);

        $data = User::find($id);
        $data->update($request->all());

        if ($request->hasFile('foto')) {
            $file = $request->file('foto');
            $extention = $file->getClientOriginalExtension();
            $filename = time() . '.' . $extention;
            $file->move('foto/', $filename);
            $data->foto = $filename;
            $data->save();
        }
        return redirect('profileadmin')->with('success', 'Foto Profile Berhasil DiUpdate');
    }

    public function applyer()
    {
        $lowongan = DetailLowongan::orderBy('created_at', 'desc')->get();
        return view('Admin.applyer', compact('lowongan',));
    }

    public function diterima()
    {
        $apply = Loker::where('status', 'diterima')->get();
        return view('Admin.diterima', compact('apply',));
    }

    public function pending()
    {
        $apply = Loker::where('status', 'pending')->get();
        return view('Admin.pending', compact('apply',));
    }

    public function approve($id)
    {
        $data = Loker::findOrFail($id);
        $data->status = 'diterima';
        $data->save();

        return redirect()->back()->with('success', 'Lamaran Kerja Diterima.');
    }

    public function reject($id)
    {
        $data = Loker::findOrFail($id);
        $data->status = 'ditolak';
        $data->delete();

        return redirect()->back()->with('error', 'Lamaran Kerja Ditolak.');
    }

    public function updateweb(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'namaperusahaan' => 'required|string|max:255',
            'logo' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'banner' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'foto' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'deskripsi' => 'required|string',
            'instagram' => 'nullable|url',
            'facebook' => 'nullable|url',
            'website' => 'nullable|url',
            'x' => 'nullable|string',
        ]);

        if ($validator->fails()) {
            return redirect()->back()
                ->withErrors($validator)
                ->withInput();
        }

        $website = Website::All();

        if ($request->hasFile('foto')) {
            $foto = $request->file('foto');
            $fotoName = time() . '.' . $foto->getClientOriginalExtension();
            $foto->move(public_path('foto'), $fotoName);
            $website->foto = $fotoName;
        }

        if ($request->hasFile('logo')) {
            $logo = $request->file('logo');
            $logoName = time() . '.' . $logo->getClientOriginalExtension();
            $logo->move(public_path('logo'), $logoName);
            $website->logo = $logoName;
        }

        if ($request->hasFile('banner')) {
            $banner = $request->file('banner');
            $bannerName = time() . '.' . $banner->getClientOriginalExtension();
            $banner->move(public_path('banner'), $bannerName);
            $website->banner = $bannerName;
        }

        $website->namaperusahaan = $request->input('namaperusahaan');
        $website->deskripsi = $request->input('deskripsi');
        $website->instagram = $request->input('instagram');
        $website->facebook = $request->input('facebook');
        $website->website = $request->input('website');
        $website->x = $request->input('x');

        $website->save();

        return redirect()->route('managementweb')->with('success', 'Website updated successfully');
    }

    public function managementweb()
    {
        $website = Website::all();
        return view('Admin.managementweb', compact('website'));
    }

    public function tambahlowongan()
    {
        $lowongan = DetailLowongan::all();
        return view('Admin.tambahlowongan', compact('lowongan',));
    }

    public function createlowongan(Request $request)
    {
        $validatedData = $request->validate([
            'gambar' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
            'kualifikasi' => 'required|string',
            'penempatan' => 'required|string',
            'tanggal_berakhir' => 'required|date',
            // 'posisi' => 'required|string',
        ], [
            'gambar.required' => 'Gambar harus diunggah.',
            'gambar.image' => 'File harus berupa gambar.',
            'gambar.mimes' => 'Gambar harus berformat jpeg, png, jpg, atau gif.',
            'gambar.max' => 'Ukuran gambar maksimal 2MB.',

            'kualifikasi.required' => 'Kualifikasi wajib diisi.',
            'kualifikasi.string' => 'Kualifikasi harus berupa teks.',

            'penempatan.required' => 'Penempatan wajib diisi.',
            'penempatan.string' => 'Penempatan harus berupa teks.',

            'tanggal_berakhir.required' => 'Tanggal berakhir wajib diisi.',
            'tanggal_berakhir.date' => 'Tanggal berakhir harus berupa tanggal yang valid.',

            // 'posisi.required' => 'Posisi wajib diisi.',
            // 'posisi.string' => 'Posisi harus berupa teks.',
        ]);

        if ($request->hasFile('gambar')) {
            $fileName = time() . '.' . $request->gambar->extension();
            $request->gambar->move(public_path('posts'), $fileName);
            $validatedData['gambar'] = 'posts/' . $fileName;
        }

        DetailLowongan::create($validatedData);

        return redirect('applyer')->with('success', 'Lowongan berhasil ditambahkan!');
    }

    public function download($file)
    {
        $path = storage_path('app/public/posts/' . $file);

        if (file_exists($path)) {
            return response()->download($path);
        }

        abort(404, 'File not found');
    }

    public function downloaddata()
    {
        $apply = Loker::all();
        view()->share('apply', $apply);
        $pdf = PDF::loadview('Admin.calonditerima-pdf');
        return $pdf->download('DataCalonKaryawan.pdf');
    }

    public function editloker($id)
    {
        $loker = DetailLowongan::findOrFail($id);
        return view('Admin.editloker', compact('loker'));
    }

    public function updateloker(Request $request, $id)
    {
        $validatedData = $request->validate([
            'gambar' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'kualifikasi' => 'required|string',
            'penempatan' => 'required|string',
            'tanggal_berakhir' => 'required|date',
            // 'posisi' => 'required|string',
        ]);

        $loker = DetailLowongan::findOrFail($id);

        if ($request->hasFile('gambar')) {
            $fileName = time() . '.' . $request->gambar->extension();
            $request->gambar->move(public_path('posts'), $fileName);
            $validatedData['gambar'] = 'posts/' . $fileName;
        }

        $loker->update($validatedData);

        return redirect('applyer')->with('success', 'Lowongan berhasil diperbarui!');
    }

    public function hapusloker($id)
    {
        $loker = DetailLowongan::findOrFail($id);
        $loker->delete();

        return redirect('applyer')->with('success', 'Lowongan berhasil dihapus!');
    }

    public function posisi()
    {
        $posisi = Posisi::all();
        return view('Admin.posisi', compact('posisi'));
    }

    public function tambahposisi()
    {
        return view('Admin.tambahposisi',);
    }

    public function createposisi(Request $request)
    {
        $validatedData = $request->validate([
            'posisi' => 'required|',
            'kualifikasi' => 'required|string',
        ]);

        Posisi::create($validatedData);

        return redirect('posisi')->with('success', 'Lowongan berhasil ditambahkan!');
    }

    public function profileuser()
    {
        $profile = User::all();
        return view('User.profileuser', compact('profile'));
    }
}
