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
            'kategori' => Category::latest()->take(5)->get(),
            'items' => Item::all()
        ]);
    }
}
