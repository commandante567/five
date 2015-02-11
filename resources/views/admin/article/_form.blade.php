<div class="form-group">
    {!! Form::select('blog_id', $data , null, array('id' => 'category', 'class' => 'form-control',  )) !!}
</div>
<div class="form-group">
    {!! Form::label('title', 'Name:') !!}
    {!! Form::text('title',null,['class' => 'form-control']) !!}
</div>
<div class="form-group">
    {!! Form::label('desc', 'Текс:') !!}
    {!! Form::textarea('desc',null,['class' => 'form-control']) !!}
</div>
<div class="form-group">
    {!! Form::submit($submitButton,['class' => 'btn btn-primary form-control']) !!}
</div>