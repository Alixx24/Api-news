<?php

namespace App\Livewire\Home;

use App\Models\Home\Article;
use App\Repository\SortingRepo;
use Illuminate\Support\Facades\Redirect;
use Livewire\Component;

class AllSort extends Component
{
    public $latestsResources;
    public $allNews;
    public $redirectToRoute;
    public $showAll;
    public $more;
    public function mount()
    {
        $data = Article::latest('created_at')->take(20)->select('id', 'title', 'created_at', 'source')->get();

        $this->latestsResources = $data;
    }

    public function redirectToArticle($more)
    { $article = Article::findOrFail($more);
        
        return redirect()->route('home.detail.full-news', $more);
    }


    public function redirectToRoute()
    {
        return redirect()->route('/');
    }

    public function filterByDate()
    {
        $this->latestsResources = Article::whereDate('created_at', now())->get();
    }

    public function filterByGuardian(SortingRepo $sortRepo)
    {
        
        $this->latestsResources = $sortRepo->filterByGuardian();
    }

    public function filterByNewsApi(SortingRepo $sortRepo)
    {
       
        $this->latestsResources = $sortRepo->filterByNewsApi();
    }


    public function seeMore($id)
    {

        return redirect()->route('home.detail.full-news', $id);
    }

    public function render()
    {
        return view('livewire.home.all-sort')->extends('components.layouts.all-news')->section('content');
    }
}
