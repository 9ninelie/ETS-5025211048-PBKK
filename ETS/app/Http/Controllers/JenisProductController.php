<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\JenisProduct;

class JenisProductController extends Controller
{
    public function view(){
        return view('create-jenis-product');
    }

    public function create(Request $request) {

        $request->validate([
            'nama' => 'required|string|min:3',
        ]);
    
        $results = [
            'nama' => $request->input('nama'),
        ];
    
        JenisProduct::create($results);
    
        return view('create-jenis-product-result', ['results' => $results['nama']]);
    }

}
