<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $table = 'barangs';
    protected $fillable = ['nama_barang' , 'kategori', 'harga'];
}
