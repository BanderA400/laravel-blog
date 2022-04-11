<?php

namespace App\Http\Controllers;
use App\Models\Article;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index(){
        $articles = Article::take(3)->orderby('id',)->get();
        return view('index', compact('articles'));
    }
}
