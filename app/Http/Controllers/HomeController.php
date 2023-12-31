<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Item;
use App\Models\Order;
use App\Models\OrderDetail;
use Illuminate\Support\Facades\Auth;

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
    
    // public function product(){
    //     return view('user.item.index', [
    //         'kategori' => Category::latest()->take(5)->get(),
    //         'items' => Item::latest()->take(12)->get()
    //     ]);
    // }

    public function product(){
        $category = null;

        if (request('category')) {
            $category = Category::firstWhere('id', request('category'));
        }
        if (request('item')) {
            $items = Item::all();
        } else {
            $items = Item::when(request('category'), function ($query) {
                return $query->where('category_id', request('category'));
            })->get();
        }
    
        return view('user.item.index', ['items' => $items, 'category' => $category]);
        
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
        return view('user.order.order',[
            'order'=>Order::where('user_id', Auth::id())->where('status', 'ordered')->get()
        ]);
    }

    public function order_show($id){
        return view('user.order.show', [
            'order' => Order::where('id', $id)->first(),
            'odetail' => OrderDetail::where('order_id', $id)->where('status', 'paid')->get()
        ]);
    }

    public function track(){
        return view('user.order.tracking');
    }

    public function search(Request $request)
    {
        $namaQuery = $request->input('nama');
        $category = null;

        if ($request->has('category')) {
            $category = Category::firstWhere('id', $request->input('category'));
        }

        if ($request->has('item')) {
            $items = Item::all();
        } else {
            $items = Item::when($request->input('category'), function ($query) use ($request) {
                return $query->where('category_id', $request->input('category'));
            })->when($namaQuery, function ($query) use ($namaQuery) {
                return $query->where('nama', 'LIKE', '%' . $namaQuery . '%');
            })->get();
        }

        return response()->json(['items' => $items, 'namaQuery' => $namaQuery, 'category' => $category]);
    }
}
