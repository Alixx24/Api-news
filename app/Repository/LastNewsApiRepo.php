<?php

namespace App\Repository;

use App\Models\Home\Article;
use Illuminate\Support\Facades\Http;

class LastNewsApiRepo
{

    public $latests_newsApi;

    public function getData()
    {
        $apiKey = '***';

        $response = Http::get("https://newsapi.org/v2/top-headlines?country=us&pageSize=5&apiKey={$apiKey}");
        $articles = json_decode($response->body(), true)['articles'];

        foreach ($articles as $article) {
            Article::create([
                'title' => $article['title'],
                'content' => 'havent',
                'api_source' => $article['url'],
                'published_at' => $article['publishedAt'],
                'source' => 'newsApi',
            ]);
        }


       return $this->latests_newsApi = $articles;
    }
}
