<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    
    protected $fillable = ['judul', 'tahun_terbit', 'penerbit','pengarang'];
    public $primaryKey='id';
    public $timestamp = true;
}
