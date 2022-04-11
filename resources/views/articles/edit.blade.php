
@extends('layouts.app')
@section('title', 'Edite article')
    

@section('content')
<form action="{{route('articles.update' , $article)}}" method="post">
    @method('PATCH')
<h4>edit Article : {{$article->title}}</h4>
@include('articles.form' ,['submetText'=>'Edite'])
</form>
@endsection