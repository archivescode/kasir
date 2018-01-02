<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Kategori3 extends Model
{
	/**
	 * nama table kategori 3 pada database
	 * @var string
	 */
    protected $table = 'kategori3';
    protected $fillable = [
        'kode_kategori3', 'nama_kategori3', 'id_kategori2'
    ];
    /**
     * scope join kategori 1 dengan parameter yang diambil dari kategori 2 untuk kategori 3
     * Program ini di buat oleh archivescode
     * @sarono
     * @version version
     * @param   [type]  $query [description]
     * @return  [type]         [description]
     */
    public function scopeJoinKategori1($query)
	{
		return $query->join('kategori1', 'kategori1.id' , '=', 'kategori2.id_kategori1');
	}
	/**
	 * join dengan kategori 2 yang diambil dengan id_kategori2
	 * Program ini di buat oleh archivescode
	 * @sarono
	 * @version version
	 * @param   [type]  $query [description]
	 * @return  [type]         [description]
	 */
	public function scopeJoinKategori2($query)
	{
		return $query->join('kategori2', 'kategori2.id' , '=', 'kategori3.id_kategori2');
	}
	/**
	 * mengambil semua field yang diperlukan dengan select
	 * Program ini di buat oleh archivescode
	 * @sarono
	 * @version version
	 * @param   [type]  $query [description]
	 * @return  [type]         [description]
	 */
	public function scopeGetAll($query)
	{
		return $query->select('kategori3.id','kategori3.kode_kategori3', 'kategori3.nama_kategori3', 'kategori2.kode_kategori2', 'kategori2.nama_kategori2', 'kategori1.kode_kategori1', 'kategori1.nama_kategori1');
	}
}
