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
}
