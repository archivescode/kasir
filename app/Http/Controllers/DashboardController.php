<?php
//////////////////////////////////////////////////
//program ini di buat oleh archivescode(sarono) //
//////////////////////////////////////////////////
///
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Todo;

class DashboardController extends Controller
{
	protected $mTodo;

	public function __construct()
    {
    	$this->mTodo = new Todo;
    }

    public function index()
    {
    	$data['lists'] = $this->mTodo::all();
      	return view('admin.dashboard')->with($data);
    }
}
