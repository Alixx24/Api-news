<?php

namespace App\Http\Controllers\dashboard;

use App\Http\Controllers\Controller;
use App\Models\Home\Article;
use Illuminate\Http\Request;

class EditNewsController extends Controller
{
    public function edit($id)
    {
        $result = Article::find($id);

        return view('dashboard.news-edit', compact('id', 'result'));
    }
    public function update(Request $request, Article $article)
    {
        $this->validate($request, [
            'title' => 'required|min:3|max:1000',
        ]);
        $inputs = $request->all();

        $article->update($inputs);

        return redirect()->route('dashboard');
    }
}
