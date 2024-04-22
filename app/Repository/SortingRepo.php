<?php

namespace App\Repository;

use App\Models\Home\Article;

class SortingRepo {
    public function filterByGuardian()
    {
        return Article::latest('created_at')->take(20)->select('title', 'created_at', 'source')->where('source', 'guardian')->get();

    }

    public function filterByNewsApi()
    {
       return Article::latest('created_at')->take(20)->select('title', 'created_at', 'source')->where('source', 'newsApi')->get();
    }
}