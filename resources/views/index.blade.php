@extends('layouts.app')
@section('title', 'Blog')
@section('content')

<div class="row">

    @auth
    <div class="form-group">
    <a href="{{route('articles.create')}}">
            <button class="btn btn-info">Create Article</button>
    </a>
    <a href="/home">
        <button class="btn btn-info">My Articles</button>
</a>
    </div> 
    @endauth
    @forelse ($articles as $article)
    
    @include('articles.carde')
    
    @empty
        {{'No articles yet'}}
    @endforelse

    <div>
    <a href="{{route('articles.index')}}" class="btn btn-info"> Browes all articles</a>
    </div>
</div>
@endsection

