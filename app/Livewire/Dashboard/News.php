<?php

namespace App\Livewire\Dashboard;

use App\Models\Home\Article;
use Livewire\Component;

class News extends Component
{
    public $newses;
    public $news;
    public function mount()
    {
        $this->newses = Article::latest('created_at')->take(20)->select('id', 'title', 'created_at','updated_at', 'source')->get();

    }

    public function deleteRecord($recordId)
{
    $record = Article::find($recordId);
    if ($record) {
        $record->delete();
        session()->flash('message', 'Record deleted successfully.');
    }
}

    public function render()
    {
       
        return view('livewire.dashboard.news')->extends('components.layouts.panel-dashboard')->section('content');
    }
}
