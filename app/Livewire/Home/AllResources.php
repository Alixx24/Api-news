<?php

namespace App\Livewire\Home;

use App\Models\Home\Article;
use Livewire\Component;

class AllResources extends Component
{
    public $latestsResources;

    public function mount(Article $article)
    {
        $data = $article->getLatest();
        $this->latestsResources = $data;
    }

    public function more()
    {
        return redirect()->route('home.all-news');
    }

    public function render()
    {
        return view('livewire.home.all-resources')->extends('components.layouts.all-resources-api')->section('content');
    }
}
