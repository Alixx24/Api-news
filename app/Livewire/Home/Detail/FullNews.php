<?php

namespace App\Livewire\Home\Detail;

use App\Models\Home\Article;
use Livewire\Component;

class FullNews extends Component
{
    public $allNews;
    public $id;
    public function mount(Article $allNews)
    {
        $this->allNews = Article::find($allNews);
       
    }
    public function render()
    {
       
        return view('livewire.home.detail.full-news')->extends('components.layouts.detail-news-app')->section('content');
    }
}
