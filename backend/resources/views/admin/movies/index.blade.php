@extends('layouts.app')

@section('content')
  <div class="w-100 d-flex justify-content-between align-items-center flex-column gap-4">
    <div class="w-100 d-flex justify-content-between align-items-end">
      <h2>映画一覧</h2>
      <a class="btn border border-primary text-primary" href="{{ route('admin.movies.create') }}">作成</a>
    </div>
    <div>
    <div class="container w-100">
      <div class="row row-cols-auto gap-4 justify-content-center">
        @foreach($movies as $movie)
        <a
          class="col d-flex justify-content-between align-items-center flex-column gap-2"
          style="text-decoration: none;"
          href="{{ route('admin.movies.show', ['movie' => $movie->id]) }}"
        >
          <img
            class="rounded"
            style="width: 304px; height: 228px; object-fit: cover;"
            src="{{ $movie->image_url }}"
          />
          <h3 class="text-dark">
            {{ $movie->title }}
          </h3>
        </a>
        @endforeach
      </div>
    </div>
  </div>
@endsection
