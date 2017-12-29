<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BarangController extends Controller
{
    public function index()
    {

    }

    /*input barang*/

   public function add()
   {
   		
   		return view('admin.barang.input');
   }
}
