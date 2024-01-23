<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;

class Post extends Model
{
    use HasFactory;

    protected $table = 'posts'; //разное наименование таблиц и модели
    //protected $primaryKey = 'post_id'; 
    //public $incrementing = false;
    protected $KeyType = 'string';
    public $timestamps = true;
    protected $fillable = ['title', 'content', 'rubric_id'];

    public function rubric()
    {
        return $this->belongsTo(Rubric::class);
    }
    public function tags()
    {
        return $this->belongsToMany(Tag::class);
    }
    public function getDate()
    {
        return Carbon::parse($this->created_at)->diffForHumans();
    }
}

