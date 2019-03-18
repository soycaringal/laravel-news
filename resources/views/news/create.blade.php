@extends('layouts.app')

@section('content')

<h1>Create News</h1>

<form action="{{ route('news.store') }}" method="post" enctype="multipart/form-data">
    @include('news.partials.form')
</form>

@endsection