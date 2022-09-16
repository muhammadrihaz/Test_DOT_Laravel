<?php

namespace App\Http\Controllers\auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Category;
use Illuminate\Support\Facades\file;
use DB;

class ProductController extends Controller
{
    public function index()
    {
        $product = Product::paginate(5);
        $category = Category::all(); 
        return view('auth/product/index',['product'=>$product, 'category'=>$category]);
    }

    public function create()
    {
        $category = Category::all(); 
        return view('auth/product/create',['category'=>$category]);
    }

    public function store(Request $request)
    {
        // Memvalidasi request yang diterima.
        $request->validate([
            'nama' => ['required', 'string', 'max:255'],
            'id_category' => ['required'],
            'images' => ['required','image'],
        ]); // jika telah sesuai.
        // Menginalisasi Model product
        $product = new Product;
        $product->nama = $request->nama;
        $product->id_category = $request->id_category;
        // Mengupload Images
        $statement = DB::select("show table status like 'tbl_product'");
        $imageName = 'product'.$statement[0]->Auto_increment.date('YmdHi'). '.' . $request->images->extension();
        $request->images->move(public_path('storage/img/product/'), $imageName);
        $product->images = $imageName;
        // Menyimpan kedalam database
        $product->save();
        return redirect()->route('product')->with('success', 'Data Produk baru berhasil ditambahkan !');

    }

    public function edit($id)
    {
        // Mengambil Perameter id dari fungsi dan mencari.
        $product = Product::where('id', $id)->first();
        $category = Category::all(); 
        // Menampilkan dan mengirimkan data kedalam view.
        return view('auth/product/edit',['product'=>$product,'category'=>$category]);
    }

    public function update(Request $request, $id)
    {
        // Memvalidasi request yang diterima.
        $request->validate([
            'nama' => ['required', 'string', 'max:255'],
            'id_category' => ['required'],
            'images' => ['image'],
            'status' => ['required']
        ]); // jika telah sesuai.
        // Menginalisasi Model product
        $product = Product::find($id);
        $product->nama = $request->nama;
        $product->status = $request->status;
        $product->id_category = $request->id_category;
        // Mengupload Images batu jika ada
        if ($request->images != null){
            $old_picture = DB::table('tbl_product')->where('id', $id)->value('images');
            if( File::exists(public_path('storage/img/product/'.$old_picture)) ) {
                File::delete(public_path('storage/img/product/'.$old_picture));
            }
            $imageName = 'product'.$id.date('YmdHi'). '.' . $request->images->extension();
            $request->images->move(public_path('storage/img/product/'), $imageName);
            $product->images = $imageName;
        }
        // Menyimpan kedalam database
        $product->save();
        return redirect()->route('product')->with('success', 'Data Produk berhasil diupdate !');
    }

    public function destroy($id)
    {
        $product = Product::find($id);
        if( File::exists(public_path('storage/img/product/'.$product->images)) ) {
            File::delete(public_path('storage/img/product/'.$product->images));
        }
        $product->delete();
        return redirect()->route('product')->with('success', 'Data Produk berhasil Dihapus !');
    }

    public function search(Request $request)
    {
        $product = product::where('nama', $request->nama_produk)->first();
        if ($product == null){
           return redirect()->back()->with('toast_error', 'Product name not found !');
        }else{
            return redirect()->route('edit_product', ['id' => $product->id])->with('success', 'Produk ditemukan !');
        }
    }
}
