<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Item;

class HomeController extends Controller
{
    public function index(){
        return view('user.home', [
            'kategori' => Category::all(),
            'items' => Item::latest()->take(12)->get()
        ]);
    }
    
    public function show(string $id)
    {
        return view('user.item.detail');
    }
    
    public function product(){
        return view('user.item.index', [
            'kategori' => Category::latest()->take(5)->get(),
            'items' => Item::latest()->take(12)->get()
        ]);
    }

    public function category(){
        return view('user.item.category', [
            'kategori' => Category::all(),
            'items' => Item::all()
        ]);
    }

    public function cart(){
        return view('user.item.cart');
    }
    public function order(){
        return view('user.order.order');
    }
    public function track(){
        return view('user.order.tracking');
    }
}
