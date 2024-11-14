<?php

namespace App\Http\Controllers;
use App\Models\Masukan;
use App\Models\DetailLowongan;
use Illuminate\Support\Facades\Validator;


use Illuminate\Http\Request;

class ProfileCompany extends Controller
{
    public function home(Request $request)
    {
        // dd($request->all());
        $testimoni = Masukan::all();
        return view('User.index', compact ('testimoni',));
    }
    public function faq()
    {
        return view('User.faq');
    }
    public function snk()
    {
        return view('User.snk');
    }
    public function about()
    {
        return view('User.about');
    }
    public function kontak()
    {
        return view('User.kontak');
    }
    public function loker()
    {
        $lowongan = DetailLowongan::all();
        return view('User.loker', compact('lowongan',));
    }

public function actionmasukan(Request $request)
{
    // dd($request->all());
    $validator = Validator::make($request->all(), [
        'email' => 'required|email|exists:users',
        'name' => 'required|string|max:255',
        'subjek' => 'required|string|max:255',
        'pesan' => 'required|string',
    ], [
        'email.required' => 'Email tidak boleh kosong.',
        'email.email' => 'Format alamat email tidak valid.',
        'email.exists' => 'Email yang anda masukkan belum terdaftar.',
        'email.unique' => 'Email sudah terdaftar',
        'subjek.required'=>'Subjek wajib diisi',
        'subjek.max' => 'Subjek maximal 255 huruf',
        'pesan.required' => 'Pesan wajib diisi'
    ]);

    $masukan = Masukan::create([
        'email' => $request->email,
        'name' => $request->name,
        'subjek' => $request->subjek,
        'pesan' => $request->pesan,
    ]);

    return redirect('User.kontak')->with('success', 'Pesan mu sudah terkirim! Terima kasih.');
    
}

public function updateprofile(Request $request, $id)
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
        $data->name = $request->input('name'); // Memperbarui nama dari input form
        $data->update(); // Memperbarui data selain foto

        if ($request->hasFile('foto')) {
            $file = $request->file('foto');
            $extention = $file->getClientOriginalExtension();
            $filename = time() . '.' . $extention;
            $file->move('foto/', $filename);
            $data->foto = $filename;
            $data->save();
        }
        return redirect('profile')->with('success', 'Foto Profile Berhasil DiUpdate');
    }
}
