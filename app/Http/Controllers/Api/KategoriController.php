<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\kategori;

class KategoriController extends Controller
{
    public function index()
    {
        $kategori = Kategori::latest()->get();
        $response = [
            'success' => true,
            'message' => 'Daftar Kategori',
            'data' => $kategori,
        ];
        return response()->json($response, 200);
    }
    public function store(Request $request)
    {
        $kategori = new Kategori();
        $kategori->nama_kategori = $request->nama_kategori;
        $kategori->save();
        return response()->json([
            'success' => true,
            'message' => 'data berhasil disimpan',
        ], 201);
    }
    public function show($id)
    {
        $kategori = Kategori::find($id);
        if ($kategori) {
            return response()->json([
                'succes' => true,
                'message' => 'detail kategori berhasil disimpan',
                'data' => $kategori,
            ], 200);
        } else {
            return response()->json([
                'succes' => true,
                'message' => 'data tidak ditemukan',
            ], 404);
        }
    }
     public function update(Request $request, $id)
    {
        $kategori = Kategori::find($id);
        if ($kategori) {
            $kategori->nama_kategori = $request->nama_kategori;
            $kategori->save();
            return response()->json([
                'success' => true,
                'message' => 'data berhasil diperbarui',
            ], 404);
        } else {
            return response()->json([
                'success' => true,
                'message' => 'data berhasil diperbarui',
            ], 404);
        }
    }
     public function destroy($id)
    {
        $kategori = Kategori::find($id);
        if ($kategori) {
            $kategori->delete();
            return response()->json([
                'success' => true,
                'message' =>'data' .$kategori->nama_kategori. 'berhasil disimpan',
            ]);
        } else {
            return response()->json([
                'success' => false,
                'message' => 'data tidak ditemukan',
            ], 404);
        }
    }
}
