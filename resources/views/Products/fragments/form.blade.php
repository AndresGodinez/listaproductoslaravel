<div class="form-group">
  {!!Form::label('name', 'Nombre del producto')!!}
  {!!Form::text('name', null, ['class'=>'form-control', 'Placeholder'=>'Nombre del producto']) !!}
</div>
<div class="form-group">
  {!!Form::label('short', 'Descripción Breve')!!}
  {!!Form::text('short', null, ['class'=>'form-control', 'placeholder'=>'Descripción breve del producto'] )!!}

</div>
<div class="form-group">
  {!!Form::label('body', 'Descripción del producto')!!}
  {!!Form::textArea('body', null, ['class'=>'form-control', 'placeholder'=>'Descripción del producto'])!!}
</div>
<div class="form-group">
  {!!Form::submit('Alta', ['class'=>'btn btn-info'])!!}
</div>
