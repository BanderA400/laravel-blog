@extends('layouts.app')
@section('title', 'Home')
@section('content')

<div class="row">
    
    
    @forelse ($articles as $article)
    
    @include('articles.carde')
    
    @empty
        {{'No articles yet'}}
    @endforelse

    
</div>
@endsection