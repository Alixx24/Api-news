<?php

namespace App\Repository;

use App\Models\Home\Article;
use Illuminate\Support\Facades\Http;

class AllNewsGuardianRepo
{

    public $latest_news;

    public function getData()
    {
        $apiKey = 'c6397f0b-bd63-40b2-a4fe-8610b24461c8';
        $url = 'https://content.guardianapis.com/search?api-key=' . $apiKey . '&order-by=newest&page-size=5';
        $response = Http::get($url);
        if ($response->successful()) {
            $data = $response->json();
            $latest_news = [];
            foreach ($data['response']['results'] as $news) {

                $latest_news[] = [
                    'title' => $news['webTitle'],
                    'api_source' => $news['apiUrl'],
                    'created_at' => $news['webPublicationDate'],
                    'content' => isset($news['fields']['trailText']) ? $news['fields']['trailText'] : '',

                ];
                foreach ($latest_news as $latest_news) {
                    Article::create([
                        'title' => $latest_news['title'],
                        'content' => $latest_news['content'],
                        'api_source' => $latest_news['api_source'],
                        'published_at' => $latest_news['created_at'],
                        'source' => 'guardian'
                    ]);
                }
            }
            return  $this->latest_news = $latest_news;
            
        } else {
            return 'problem...';
        }
        

    }
}
