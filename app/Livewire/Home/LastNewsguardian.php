<?php

namespace App\Livewire\Home;

use App\Models\Home\Article;
use App\Repository\AllNewsGuardianRepo;
use Illuminate\Support\Facades\Http;
use Livewire\Component;

class LastNewsguardian extends Component
{
    public $latest_news;
    public function mount()
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
            }
            $this->latest_news = $latest_news;
            foreach ($latest_news as $latest_news) {
                Article::create([
                    'title' => $latest_news['title'],
                    'content' => $latest_news['content'],
                    'api_source' => $latest_news['api_source'],
                    'published_at' => $latest_news['created_at'],
                    'source' => 'guardian'
                ]);
            }
        } else {
            return 'problem....';
        }
    }
    public function render()
    {
        return view('livewire.home.last-news-guardian')->extends('components.layouts.app-lastUser')->section('content');
    }
}
