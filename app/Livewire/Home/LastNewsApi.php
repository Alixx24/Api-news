<?php

namespace App\Livewire\Home;

use App\Models\Home\Article;
use App\Repository\LastNewsApiRepo;
use Illuminate\Support\Facades\Http;
use Livewire\Component;

class LastNewsApi extends Component
{
    public $latests_newsApi;
 


    public function mount(LastNewsApiRepo $repoLastApi)
    {
       $this->latests_newsApi = $repoLastApi->getData();
    }
    public function render()
    {

        return view('livewire.home.last-news-api')->extends('components.layouts.last-news-api')->section('content');
    }
}
