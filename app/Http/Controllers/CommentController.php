<?php

namespace App\Http\Controllers;

use App\Models\Article;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CommentController extends Controller{
    public function __construct()
    {
        $this->middleware('auth');
    }
public function store (Request $request , Article $article)

{ 
    $request->validate(['content' => 'required']);

    //dd($article->id);

    $request['user_id'] = auth()->id();
    $article->comments()->create($request->all());
    return redirect()->back();
}
}