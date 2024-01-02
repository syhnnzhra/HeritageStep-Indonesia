<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Item;
use App\Models\Category;
use File;
use RealRashid\SweetAlert\Facades\Alert;

class ItemController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('admin.produk.index', [
            'items' => Item::all()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.produk.create', [
            'category' => Category::all()
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $item= new Item;
        $item->nama=$request->nama;
        $item->category_id=$request->category_id;
        $item->stok=$request->stok;
        $item->harga=$request->harga;
        $item->keterangan=$request->keterangan;

        $foto =$request->foto;
        $imageName = time().'.'.
        $foto->extension();
        $request->foto->move(public_path().'/img/items', $imageName);
        $item->foto = $imageName;
        $item->save();

        Alert::success('Product ditambahkan!', 'Produk Berhasil ditambahkan!');
        return redirect('/produk');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $category = Category::all();
        $item = Item::FindOrFail($id);
        return view('admin.produk.edit', compact('item', 'category'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $foto =$request->foto;
        if($foto != NULL){
            $item=Item::FindOrFail($id);
            File::delete('img/items'.$item->image);
            $imageName = time().'.'.$foto->extension();
            $request->foto->move(public_path('img/items'), $imageName);
            $item->nama=$request->nama;
            $item->category_id=$request->category_id;
            $item->stok=$request->stok;
            $item->harga=$request->harga;
            $item->keterangan=$request->keterangan;
            $item->foto=$imageName;
            $item->save();
        }
        else{
            $item =Item::FindOrFail($id);
            $item->nama=$request->nama;
            $item->category_id=$request->category_id;
            $item->stok=$request->stok;
            $item->harga=$request->harga;
            $item->keterangan=$request->keterangan;
            $item->foto=$request->foto;
            $item->save();
        }

        Alert::success('Product diubah!', 'Produk Berhasil diubah!');
        return redirect('/produk');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $item = Item::FindOrFail($id);
        $item->delete();
        
        Alert::success('Product dihapus!', 'Produk Berhasil dihapus!');
        return redirect('/produk');
    }
}
