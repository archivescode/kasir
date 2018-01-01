<?php
//////////////////////////////////////////////////
//program ini di buat oleh archivescode(sarono) //
//////////////////////////////////////////////////
namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Kategori2 extends Model
{
    protected $table = 'kategori2';
    protected $fillable = [
        'kode_kategori2', 'nama_kategori2', 'id_kategori1'
    ];
    public function scopeJoinKategori1($query)
    {
    	return $query->join('kategori1', 'kategori1.id' , '=', 'kategori2.id_kategori1');
    }
    public function scopeGetAll($query)
    {
    	return $query->select('kategori2.kode_kategori2', 'kategori2.nama_kategori2', 'kategori1.kode_kategori1', 'kategori1.nama_kategori1');
    }
}
