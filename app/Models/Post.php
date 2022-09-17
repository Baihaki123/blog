<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    // protected $fillable = ['title', 'excerpt', 'body']; // memperbolehkan field yg boleh di isi (yang lain tdk bisa)
    protected $guarded = ['id']; // memperbolehkan field yg tidak boleh di isi (yang lain bisa)
}
