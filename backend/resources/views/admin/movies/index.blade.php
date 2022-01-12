<h1>Index</h1>

<table border="1">
  <tr>
    <td>ID</td>
    <td>タイトル</td>
    <td>画像</td>
  </tr>
  @foreach($movies as $movie)
  <tr>
    <td>{{ $movie->id }}</td>
    <td>{{ $movie->title }}</td>
    <td>{{ $movie->image_url }}</td>
  </tr>
  @endforeach
</table>
