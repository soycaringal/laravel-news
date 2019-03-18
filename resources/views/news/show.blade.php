@extends('layouts.app')

@section('title', "Detalhes do new: {$news->title}")

@section('content')

<h1>Detalhes do new <b>{{ $news->title }}</b></h1>

@php
    $pathImage = url('imgs/news/default.png');

    if ($news->image)
        $pathImage = url("storage/news/{$news->image}");
@endphp
<img src="{{ $pathImage }}" alt="{{ $news->title }}" class="img-circle">

<p>{{ $news->body }}</p>

<form action="{{ route('news.destroy', $news->id) }}" method="new">
    @csrf
    <input type="hidden" name="_method" value="DELETE">
    <button type="submit" class="btn btn-danger">Deletar o new: {{ $news->title }}</button>
</form>

@endsection