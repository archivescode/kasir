<?php
//////////////////////////////////////////////////
//program ini di buat oleh archivescode(sarono) //
//////////////////////////////////////////////////

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BarangController extends Controller
{
	public function index()
	{

	}
    /**
     * [add description]
     * function untuk menampilkan form input master barang
     * Program ini di buat oleh archivescode
     * @sarono
     * @version version
     */
    public function add()
    {   		
    	return view('admin.barang.input');
    }
}
