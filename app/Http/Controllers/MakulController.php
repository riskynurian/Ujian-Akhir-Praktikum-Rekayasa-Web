<?php

namespace App\Http\Controllers;

use App\Models\Makul;
use Illuminate\Http\Request;

class MakulController extends Controller
{
    public function create(Request $request)
    {
        $makul = Makul::create($request->all());
        return response()->json($makul, 201);
    }

    public function read()
    {
        return response()->json(Makul::all(), 200);
    }

    public function update(Request $request, $id)
    {
        $makul = Makul::findOrFail($id);
        $makul->update($request->all());
        return response()->json($makul, 200);
    }

    public function delete($id)
    {
        Makul::destroy($id);
        return response()->json(null, 204);
    }
}
