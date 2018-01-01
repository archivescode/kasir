<?php
//////////////////////////////////////////////////
//program ini di buat oleh archivescode(sarono) //
//////////////////////////////////////////////////

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Kategori1 extends Model
{
    protected $table = 'kategori1';
    protected $fillable = [
        'kode_kategori1', 'nama_kategori1'
    ];
    
}
