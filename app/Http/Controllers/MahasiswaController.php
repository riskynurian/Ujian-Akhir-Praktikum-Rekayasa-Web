<?php

namespace App\Http\Controllers;

use App\Models\Mahasiswa;
use Illuminate\Http\Request;

class MahasiswaController extends Controller
{
    public function create(Request $request) {
        $mahasiswa = Mahasiswa::create($request->all());
        return response()->json($mahasiswa, 201);
    }

    public function read() {
        return response()->json(Mahasiswa::all(), 200);
    }

    public function update(Request $request, $id) {
        $mahasiswa = Mahasiswa::find($id);
        $mahasiswa->update($request->all());
        return response()->json($mahasiswa, 200);
    }

    public function delete($id) {
        Mahasiswa::destroy($id);
        return response()->json(null, 204);
    }
}

