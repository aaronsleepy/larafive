@extends('layouts.master')

@section('content')
  <h1>{{ $article->title }}</h1>
  <p>{{ $article->content }}</p>
@stop
