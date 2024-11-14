<?php

namespace App\Http\Controllers;
use App\Models\Loker;
use App\Models\DetailLowongan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Log;

class LokerController extends Controller
{
    public function show($id)
    {

        $lowongan = DetailLowongan::find($id);
        if (!$lowongan) {
            abort(404);
        }
        return view('details', compact('lowongan'));
    }


    public function applyloker(Request $request)
{
    // Validate input
    $validator = Validator::make($request->all(), [
        'email' => 'required|email|unique:lokers,email',
        'name' => 'required|string|max:25',
        'name_sekolah' => 'required|min:5',
        'file_cv' => 'required|mimes:pdf,doc,docx|max:2048' // Menambahkan dukungan untuk DOC dan DOCX
    ], [
        'email.required' => 'Email tidak boleh kosong.',
        'email.email' => 'Format alamat email tidak valid.',
        'email.unique' => 'Email sudah terdaftar.',
        'name.required' => 'Nama wajib diisi',
        'name.max' => 'Nama maksimal 25 huruf',
        'name_sekolah.min' => 'Nama Sekolah minimal 5 huruf',
        'file_cv.required' => 'Lampiran wajib diisi',
        'file_cv.mimes' => 'Lampiran harus berupa PDF, DOC, atau DOCX',
    ]);

    if ($validator->fails()) {
        return back()->withErrors($validator)->withInput();
    }

    try {
        // Handle file upload
        if ($request->hasFile('file_cv')) {
            $file_cv = $request->file('file_cv');
            $file_cv_name = $file_cv->hashName();
            $file_cv->storeAs('public/posts', $file_cv_name);
        } else {
            return back()->withErrors(['file_cv' => 'Lampiran file tidak ditemukan.'])->withInput();
        }

        // Store data to database
        Loker::create([
            'file_cv' => $file_cv_name,
            'email' => $request->email,
            'name' => $request->name,
            'name_sekolah' => $request->name_sekolah
        ]);

        return redirect()->route('details')->with(['success' => 'Data Berhasil Disimpan!']);

    } catch (\Exception $e) {
        Log::error('Error saving data: ' . $e->getMessage());
        return back()->withErrors(['error' => 'Terjadi kesalahan saat menyimpan data.']);
    }
}
}
