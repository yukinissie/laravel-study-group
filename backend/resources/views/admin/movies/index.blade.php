<h1>Index</h1>
<a href="{{ route('admin.movies.create') }}">作成</a>

<table border="1">
  <tr>
    <td>タイトル</td>
    <td>画像URL</td>
  </tr>
  @foreach($movies as $movie)
  <tr>
    <td>
      <a href="{{ route('admin.movies.show', ['movie' => $movie->id]) }}">
        {{ $movie->title }}
      </a>
    </td>
    <td>{{ $movie->image_url }}</td>
  </tr>
  @endforeach
</table>
