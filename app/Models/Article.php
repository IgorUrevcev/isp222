<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    use HasFactory;
   // protected $table = 'myposts'; 
    //protected $primaryKey = 'post_id'; 
    //public $incrementing = false;
   // protected $KeyType = 'string';
    public $timestamps = false;
    protected $fillable = ['title', 'desc', 'text', 'date'];
}
