<h1>Edit</h1>
{!! Form::model($movie, ['method'=>'put', 'route' => ['admin.movies.update', 'movie' => $movie->id]]) !!}
  {!! Form::label('タイトル') !!}
  {!! Form::text('title', null) !!}
  {!! Form::label('画像URL') !!}
  {!! Form::text('image_url', null) !!}
  {!! Form::submit('登録') !!}
{!! Form::close() !!}