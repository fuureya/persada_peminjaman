<?php

namespace App\Http\Controllers;

use App\Models\Peminjaman;
use Illuminate\Http\Request;

class PeminjamanController extends Controller
{
    public function index(Request $request)
    {

        $data = Peminjaman::paginate(10);
        if ($request->search) {
            $data = Peminjaman::where('nama_peminjam', 'like', '%' . $request->search . '%')->get();
            return response()->json([
                'data' => $data,
                'message' => 'data di temukan!!',
            ]);
        }
        return response()->json($data);
    }

    public function store(Request $request)
    {
        // Validasi data jika diperlukan
        $validatedData = $request->validate([
            'nama_peminjam' => 'required|string',
            'foto' => 'required|string',
            'kelas' => 'required|string',
            'jurusan' => 'required|string',
            'tanggal_peminjaman' => 'required|date',
            'alat_peminjaman' => 'required|string',
            'keperluan' => 'required|string',
        ]);

        // Insert data ke database
        $peminjaman = Peminjaman::create($validatedData);

        // Kembalikan respons JSON
        return response()->json([
            'success' => true,
            'data' => $peminjaman,
        ], 201);
    }
}
