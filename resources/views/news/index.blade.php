@extends('layouts.app')

@section('content')

<h1>
    News
    <a href="{{ route('news.create') }}" class="btn btn-primary">
        <i class="fas fa-plus-square"></i> Create
    </a>
</h1>

<div class="col-sm-5">
    @foreach ($news as $value)
        <div class="blog-post">
            <h2 class="blog-post-title">{{ $value->title }} 
                <a href="{{ route('news.edit', $value->id) }}"><i class="fa fa-edit"></i></a>
                <form action="{{ route('news.destroy', $value->id) }}" class="d-inline" method="post">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="close text-danger" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                    </button>
                </form>
            </h2>
            <p class="blog-post-meta"><em>{{ $value->created_at->format('m-d-Y h:i' ) }}</em></p>
            <p>
                {{ $value->body }}
            </p>

            <div class="comments">
                <h4>Comments</h4>
                @foreach ($value->comments as $comment)
                    <div class="d-block clearfix"> 
                        <div class="comment float-left">{{ $comment->body }}</div>
                    <form action="{{ route('comment.destroy', $comment->id) }}" method="post" class="float-right">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="close text-danger" aria-label="Close">
                          <span aria-hidden="true">&times;</span>
                        </button>
                    </form>
                    </div>
                @endforeach
                <br>
            </div>
            <form action="{{ route('comment.store') }}" method="post">
                @csrf
                <input type="hidden" name="news_id" value="{{ $value->id }}">
                <textarea name="comment" id="" cols="30" rows="3"></textarea>
                <div class="form-group">
                    <button type="submit" class="btn btn-success">Add Comment</button>
                </div>
            </form>
        </div>
        <hr>
    @endforeach
</div>

@endsection