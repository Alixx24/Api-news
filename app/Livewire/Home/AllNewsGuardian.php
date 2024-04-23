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
        
    }

    public function filterByDate()
    {
        $this->allNewsGuardian = Article::whereDate('created_at', now())->get();
    }

    public function filterBySource()
    {
       
    }

    public function filterByCategory()
    {
        
    }


    public function render()
    {
        return view('livewire.home.all-news-guardian')->extends('components.layouts.all-guardian')->section('content');
    }
}
