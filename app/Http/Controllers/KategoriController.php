<?php
/**
 * archivescode kategori controller
 * disini terletak code controller semua kategori
 * 1. kategori 1
 * 2. kategori 2
 * 3. kategori 3
 */

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Kategori1;
use App\Models\Kategori2;
use App\Models\Kategori3;
use Exception;

class KategoriController extends Controller
{
	/**
	 * [$mKategori1 description]
	 * model untuk kategori 1
	 * model untuk kategori 2
	 * @var [type]
	 */
	protected $mKategori1;
	protected $mKategori2;
	protected $mKategori3;
	/**
	 * [__construct description]
	 * untuk menampung semua yang diload ketika controller di akses
	 * Program ini di buat oleh archivescode
	 * @sarono
	 * @version version
	 */
	public function __construct()
	{
		$this->mKategori1 = new Kategori1;
		$this->mKategori2 = new Kategori2;
		$this->mKategori3 = new Kategori3;
	}
	/**
	 * controller untuk kategori index
	 * Program ini di buat oleh archivescode
	 * @sarono
	 * @version version
	 * @return  [type]  [description]
	 */
	public function index()
	{
		return view('admin.barang.kategori.kategori');
	}

	/**
	 * [kategori1 description]
	 * Program ini di buat oleh archivescode
	 * @sarono
	 * @version version
	 * @return  [type]  [description]
	 */
	public function kategori1()
	{
		$data['listskat1'] = $this->mKategori1::all();
		$data['status'] = 'kosong';
		return view('admin.barang.kategori.kategori1')->with($data);
	}
    /**
     * [kategori1Store description]
     * input data kategori 1 -> redirect ke halaman awal
     * input kategori1 ke database
     * Program ini di buat oleh archivescode
     * @sarono
     * @version version
     * @param   Request $request [post dari form]
     * @return  [type]           [description]
     */
    public function kategori1Store(Request $request)
    {
    	$data['kode_kategori1'] = $request->kode_kategori1;
    	$data['nama_kategori1'] = $request->nama_kategori1;
    	try{
    		$this->mKategori1->kode_kategori1 = $request->kode_kategori1;
    		$this->mKategori1->nama_kategori1 = $request->nama_kategori1;
    		if ($this->mKategori1->save()) {
    			return redirect('/admin/barang/kategori/kategori1');
    		}else{
    			return redirect('/admin/barang/kategori/kategori1');
    		}
    	} catch (\Illuminate\Database\QueryException $e) {
    		return redirect()->back();
    	}
    	
    }
    /**
     * [kategori1Edit description]
     * link edit dengan id yang dikirim dari tabel
     * Program ini di buat oleh archivescode
     * @sarono
     * @version version
     * @param   [type]  $id [description]
     * @return  [type]      [description]
     */
    public function kategori1Edit($id)
    {
    	$data['kategoris1'] = $this->mKategori1::find($id);
    	//print_r($this->mKategori1::find($id));
    	return view('admin.barang.kategori.kategori1Edit')->with($data);
    }
    /**
     * [kategori1Update description]
     * controller untuk menyimpan hasil editan dari form edit kategori
     * Program ini di buat oleh archivescode
     * @sarono
     * @version version
     * @param   Request $request [description]
     * @return  [type]           [description]
     */
    public function kategori1Update(Request $request)
    {
    	try{
    		$update = $this->mKategori1::find($request->id_kategori1);
    		$update->kode_kategori1 = $request->kode_kategori1;
    		$update->nama_kategori1 = $request->nama_kategori1;
    		if($update->save())
    		{
    			return redirect('/admin/barang/kategori/kategori1');
    		}else{
    			return redirect('/admin/barang/kategori/kategori1/'.$request->id_kategori1);
    		}
    	} catch (\Illuminate\Database\QueryException $e) {
    		return redirect()->back()->with('id_kategori1',$request->id_kategori1);
    	}

    }
    /**
     * [kategori1Delete description]
     * delete dari tabel kategori
     * Program ini di buat oleh archivescode
     * @sarono
     * @version version
     * @param   Request $request [description]
     * @return  [type]           [description]
     */
    public function kategori1Delete(Request $request)
    {
    	$delete = $this->mKategori1::find($request->id_kategori1);
    	if($delete->delete()){
    		return response()->json([
    			'success' => 'true'
    		]);
    	}
    }
    /**
     * [kategori2 description]
     * halaman awal kategori 2
     * Program ini di buat oleh archivescode
     * @sarono
     * @version version
     * @return  [type]  [description]
     */
    public function kategori2()
    {
    	$data['listskat1'] = $this->mKategori1::all();
    	$data['listskat2'] = $this->mKategori2::GetAll()->joinKategori1()->get();
    	return view('admin.barang.kategori.kategori2')->with($data);
    }
    /**
     * [kategori2Store description]
     * fungsi untuk menyimpan kategori 2
     * Program ini di buat oleh archivescode
     * @sarono
     * @version version
     * @param   Request $request [description]
     * @return  [type]           [description]
     */
    public function kategori2Store(Request $request)
    {
    	try{
    		$this->mKategori2->kode_kategori2 = $request->kode_kategori2;
    		$this->mKategori2->nama_kategori2 = $request->nama_kategori2;
    		$this->mKategori2->id_kategori1 = $request->id_kategori1;
    		if ($this->mKategori2->save()) {
    			return redirect('/admin/barang/kategori/kategori2');
    		}else{
    			return redirect('/admin/barang/kategori/kategori2');
    		}
    	} catch (\Illuminate\Database\QueryException $e) {
    		return redirect()->back();
    	}
    }
    /**
     * edit kategori 2
     * Program ini di buat oleh archivescode
     * @sarono
     * @version version
     * @param   [type]  $id [description]
     * @return  [type]      [description]
     */
    public function kategori2Edit($id)
    {
    	$data['listskat1'] = $this->mKategori1::all();
    	$data['kategoris2'] = $this->mKategori2::find($id);
    	return view('admin.barang.kategori.kategori2Edit')->with($data);
    }
    /**
     * kode eksekusi kategori 2
     * Program ini di buat oleh archivescode
     * @sarono
     * @version version
     * @param   Request $request [description]
     * @return  [type]           [description]
     */
    public function kategori2Update(Request $request)
    {
    	try{
    		$update = $this->mKategori2::find($request->id_kategori2);
    		$update->kode_kategori2 = $request->kode_kategori2;
    		$update->nama_kategori2 = $request->nama_kategori2;
    		$update->id_kategori1 = $request->id_kategori1;
    		if($update->save())
    		{
    			return redirect('/admin/barang/kategori/kategori2');
    		}else{
    			return redirect('/admin/barang/kategori/kategori2/'.$request->id_kategori2);
    		}
    	} catch (\Illuminate\Database\QueryException $e) {
    		return redirect()->back()->with('id_kategori2',$request->id_kategori2);
    	}

    }
    /**
     * delete kategori 2
     * Program ini di buat oleh archivescode
     * @sarono
     * @version version
     * @param   Request $request [description]
     * @return  [type]           [description]
     */
    public function kategori2Delete(Request $request)
    {
    	$delete = $this->mKategori2::find($request->id_kategori2);
    	if($delete->delete()){
    		return response()->json([
    			'success' => 'true'
    		]);
    	}
    }

    public function kategori3()
    {
    	$data['listskat2'] = $this->mKategori2::all();
    	$data['listskat3'] = $this->mKategori3::GetAll()->joinKategori1()->joinKategori2()->get();
    	return view('admin.barang.kategori.kategori3')->with($data);
    }
}
