<?php

namespace App\Livewire\Dashboard;

use App\Models\Home\Article;
use Livewire\Component;

class EditNews extends Component
{
    public $news;
    public $id;
    public function mount($id)
    {
        $this->news = Article::find($id);
    }
    public function render()
    {
        return view('livewire.dashboard.edit-news')->extends('components.layouts.news-edit')->section('content');
    }
}
