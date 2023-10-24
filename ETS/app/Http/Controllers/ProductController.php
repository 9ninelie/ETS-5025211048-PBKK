<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class ProductController extends Controller
{
    public function view(){
        return view('create-product');
    }

    public function create(Request $request) {

        $request->validate([
            'nama' => 'required|string|min:3',
            'jenis_products_id' => 'required|integer',
            'kondisi' => 'required|in:Baik,Layak,Rusak',
            'deskripsi' => 'required|string|min:3',
            'kecacatan' => 'string|min:3',
            'jumlah' => 'required|int',
            'gambar' => 'required|max:2048|mimes:jpg,jpeg,png',

        ]);

        $request->gambar->storeAs('public/images', $request->gambar->getClientOriginalName());
    
        $results = [
            'nama' => $request->input('nama'),
            'jenis_products_id' => $request->input('jenis_products_id'),
            'kondisi' => $request->input('kondisi'),
            'deskripsi' => $request->input('deskripsi'),
            'kecacatan' => $request->input('kecacatan'),
            'jumlah' => $request->input('jumlah'),
            'gambar' => $request->gambar->getClientOriginalName()
        ];
    
        Product::create($results);
        
        return view('create-product-result', ['results' => $results]);
    }



}
