@extends('layouts.app')

@section('content')
  <h1>{{ $movie->title }}</h1>
  <a href="{{ route('admin.movies.edit', ['movie' => $movie->id]) }}">編集</a>
  {!! Form::open(['method'=>'delete', 'route' => ['admin.movies.destroy', $movie->id] ]) !!}
    {!! Form::submit('削除') !!}
  {!! Form::close() !!}
  <img src="{{ $movie->image_url }}" />
@endsection
