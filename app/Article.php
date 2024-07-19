<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Article extends Model
{
    // use HasFactory;
    // public $timestamps = false;
    protected $table = 'artikel';
    protected $primaryKey = 'id';
    protected $fillable = [
        'title',
        'content',
    ];
}
