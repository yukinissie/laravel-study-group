<h1>{{ $movie->title }}</h1>
<a href="{{ route('admin.movies.edit', ['movie' => $movie->id]) }}">編集</a>
<img src="{{ $movie->image_url }}" />
