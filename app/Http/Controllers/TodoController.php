<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Todo;

class TodoController extends Controller
{
	protected $mTodo;
	public function __construct()
    {
    	$this->mTodo = new Todo;
    }
    public function store(Request $request)
    {
    	$this->mTodo->judul = $request->judul;
    	$this->mTodo->isi = $request->isi;
    	$this->mTodo->status = 'belum';
    	$this->mTodo->save();
    	return redirect('admin');
    }
    public function edit(Request $request)
    {
    	$update = $this->mTodo::find($request->idedit);
    	$update->judul = $request->juduledit;
    	$update->isi = $request->isiedit;
    	$update->status = $request->statusedit;
    	$update->save();
    	return redirect('admin');
    }
}
