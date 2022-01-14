@extends('layouts.app')

@section('content')
  <h1>Edit</h1>
  {!! Form::model($movie, ['method'=>'put', 'route' => ['admin.movies.update', 'movie' => $movie->id]]) !!}
    @include('admin.movies.form')
  {!! Form::close() !!}
@endsection
