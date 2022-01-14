@extends('layouts.app')

@section('content')
  <div class="w-100 d-flex flex-column gap-4">
    <h1>Create</h1>
    <div class="w-100 d-flex justify-content-center align-items-center">
      {!!
        Form::open([
          'route' => 'admin.movies.store',
          'class' => 'w-100 d-flex flex-column gap-3',
          'style' => 'max-width: 400px;'
        ])
      !!}
        @include('admin.movies.form')
      {!! Form::close() !!}
    </div>
  </div>
@endsection
