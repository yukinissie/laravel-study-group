@extends('layouts.app')

@section('content')
  <div class="w-100 d-flex justify-content-between align-items-center flex-column gap-4">
    <div class="w-100 d-flex justify-content-between align-items-end">
      <h1>{{ $movie['title'] }}</h1>
      <nav class="d-flex justify-content-center align-items-center gap-2">
        <a
          class="btn border border-primary text-primary"
          href="{{ route('admin.movies.edit', ['movie' => $movie['id']]) }}"
        >
          編集
        </a>
        {!! Form::open(['method'=>'delete', 'route' => ['admin.movies.destroy', $movie['id']] ]) !!}
          {!! Form::submit('削除', ['class' => 'btn border-danger text-danger']) !!}
        {!! Form::close() !!}
      </nav>
    </div>
    <img
      class="w-100 rounded"
      style="max-width: 600px;"
      src="{{ $movie['imageUrl'] }}"
    />
  </div>
@endsection
