
@extends('layouts.app')
@section('title', 'create New article')
    

@section('content')
<form action="{{route('articles.store')}}" method="post">
    
<h4>Create New Article</h4> 
@include('articles.form',['submetText'=>'Create'])
</form>
@endsection