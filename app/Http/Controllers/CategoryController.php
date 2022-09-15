<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function index()
    {
        return view('auth/category');
    }

    public function create()
    {
        return view('auth/create-category');
    }

    public function store(Request $request)
    {
        // Memvalidasi request yang diterima.
        $request->validate([
            'nama' => ['required', 'string', 'max:255']
        ]); // jika telah sesuai.
        // Menginalisasi Model category
        $category = new category;
        $category->nama = $request->nama;
        // Menyimpan kedalam database
        $category->save();
        return $category;

    }

    public function edit($id)
    {
        // Mengambil Perameter id dari fungsi dan mencari.
        $category = category::where('id', $id)->first();
        // Menampilkan dan mengirimkan data kedalam view.
        return view('auth/edit-category',['category'=>$category]);
    }

    public function update(Request $request, $id)
    {
        // Memvalidasi request yang diterima.
        $request->validate([
            'nama' => ['required', 'string', 'max:255']
        ]); // jika telah sesuai.
        // Menginalisasi Model category dengan id dari parameter fungsi.
        $category = category::find($id);
        $category->nama = $request->nama;
        // Menyimpan kedalam database
        $category->save();
        return $category;
    }

    public function destroy($id)
    {
        $category = category::find($id);
        $category->delete();
        return $category;
    }
}
