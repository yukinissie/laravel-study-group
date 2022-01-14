@extends('layouts.app')

@section('content')
  <h1>Create</h1>
  {!! Form::open(['route' => 'admin.movies.store']) !!}
    @include('admin.movies.form')
  {!! Form::close() !!}
@endsection
