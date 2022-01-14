<div class="w-100 d-flex flex-column">
  {!!
    Form::label('title', 'タイトル',)
  !!}
  {!! Form::text('title', null) !!}
</div>
<div class="w-100 d-flex flex-column">
  {!! Form::label('image_url', '画像URL') !!}
  {!! Form::text('image_url', null) !!}
</div>
{!!
  Form::submit(
    '登録',
    [
      'class' => 'btn border border-secondary text-secondary align-self-center mt-2',
      'style' => 'width: 60px; height: 36px;'
    ]
  )
!!}
