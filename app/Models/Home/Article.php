<?php

namespace App\Models\Home;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    use HasFactory;
    protected $fillable = ['title', 'content', 'api_source', 'source', 'category', 'updated_at'];

    public function getLatest()
    {
       return Article::latest('created_at')->take(10)->select('title', 'created_at', 'source')->get();
    }
}
