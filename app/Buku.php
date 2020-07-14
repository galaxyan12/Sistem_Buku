<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Buku extends Model
{
    protected $fillable = ['id', 'judul_buku', 'penulis', 'deskripsi'];
}
