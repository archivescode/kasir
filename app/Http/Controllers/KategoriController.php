<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class KategoriController extends Controller
{
    public function index()
    {
    	return view('admin.barang.kategori');
    }

    /*kategori1*/
    public function kategori1()
    {
    	return view('admin.barang.kategori1');
    }
}
