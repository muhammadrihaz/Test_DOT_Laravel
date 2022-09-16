<?php

namespace App\Http\Controllers\auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Category;

class CategoryController extends Controller
{
    public function index()
    {
        $category = Category::paginate(5);
        return view('auth/category/index',['category'=>$category]);
    }

    public function create()
    {
        return view('auth/category/create');
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
        return redirect()->route('category')->with('success', 'Data Kategori baru berhasil ditambahkan !');

    }

    public function edit($id)
    {
        // Mengambil Perameter id dari fungsi dan mencari.
        $category = category::where('id', $id)->first();
        // Menampilkan dan mengirimkan data kedalam view.
        return view('auth/category/edit',['category'=>$category]);
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
        return redirect()->route('category')->with('success', 'Data Kategori baru berhasil diupdate !');
    }

    public function destroy($id)
    {
        $category = category::find($id);
        $category->delete();
        return redirect()->route('category')->with('success', 'Data Kategori baru berhasil Dihapus !');
    }
}
