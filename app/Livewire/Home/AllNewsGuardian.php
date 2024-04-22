<?php

namespace App\Livewire\Home;

use App\Models\Home\Article;
use Illuminate\Support\Facades\Http;
use Livewire\Component;

class AllNewsGuardian extends Component
{
    public $allNewsGuardian;
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
                    'source' => 'guardian',
                    'title' => $news['sectionName'],
                ];
            }
            $this->allNewsGuardian = $latest_news;
        } else {
            return 'خطا در دریافت اطلاعات از API';
        }
    }

    public function filterByDate()
    {
        $this->allNewsGuardian = Article::whereDate('created_at', now())->get();
    }

    public function filterBySource()
    {
        // عملیات فیلتر بر اساس منبع
    }

    public function filterByCategory()
    {
        // عملیات فیلتر بر اساس دسته بندی
    }


    public function render()
    {
        return view('livewire.home.all-news-guardian')->extends('components.layouts.all-guardian')->section('content');
    }
}
