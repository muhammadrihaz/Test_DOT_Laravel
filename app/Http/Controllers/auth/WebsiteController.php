<?php

namespace App\Http\Controllers\auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Product;
use App\Models\User;

class WebsiteController extends Controller
{
    public function index(){
        $t_category = Category::all()->count();
        $t_product = Product::all()->count();
        $product = Product::paginate(5);
        $category = Category::all();
        $user = User::all()->count();
        return view('auth/dashboard',['t_category'=>$t_category,'category'=>$category ,'t_product'=>$t_product, 'product'=>$product,'user'=>$user]);
    }
}
