<h1>Index</h1>

<table border="1">
  <tr>
    <td>ID</td>
    <td>タイトル</td>
    <td>画像</td>
  </tr>
  <tr>
    @foreach($movies as $movie)
    <td>{{ $movie->id }}</td>
    <td>{{ $movie->title }}</td>
    <td>{{ $movie->image_url }}</td>
    @endforeach
  </tr>
</table>
