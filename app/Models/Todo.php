<?php
//////////////////////////////////////////////////
//program ini di buat oleh archivescode(sarono) //
//////////////////////////////////////////////////
namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Todo extends Model
{
	protected $table = 'todo';
    protected $fillable = [
        'judul', 'isi', 'status'
    ];
}
