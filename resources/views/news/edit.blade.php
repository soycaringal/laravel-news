@extends('layouts.app')

@section('content')

<h1>Edit news: {{ $news->title }}</h1>

<form 
	action="{{ route('news.update', $news->id) }}" 
	method="post" 
	enctype="multipart/form-data"
>
	@method('PUT')
    @include('news.partials.form')
</form>

@endsection