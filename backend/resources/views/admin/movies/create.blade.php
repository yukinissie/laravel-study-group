<h1>Create</h1>
{!! Form::open(['route' => 'admin.movies.store']) !!}
  {!! Form::label('タイトル') !!}
  {!! Form::text('title', null) !!}
  {!! Form::label('画像URL') !!}
  {!! Form::text('image_url', null) !!}
  {!! Form::submit('登録') !!}
{!! Form::close() !!}
