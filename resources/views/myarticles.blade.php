@extends('layouts.app')
@section('title', 'My Articles')
@section('content')
<div class="container">
<a href="{{route('articles.create')}}"> <button class="btn btn-info mb-3">Creat Article</button></a>
</div>

<div>

    @forelse ($articles as $article)

        <div class="mb-3">
        <a href="{{route('articles.edit', $article)}}" class="btn btn-warning">Edit</a>

        <form method="POST" action="{{route('articles.destroy',$article)}}" style="display:inline-block">
            @method('DELETE')
            @csrf
            <button class="btn btn-danger" onclick="return confirm('Are You Sure?')">Delete</button>
        </form>

        <a href="{{route('articles.show', $article)}}"> {{$article->title}}</a>
        </div>

    @empty 
        <p> you dont have articles yet</p>
    @endforelse
</div>
@endsection
