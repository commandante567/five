@extends('_layouts.admin')

@section('content')

    <h1>Изменить рубрику {!! $blog->title !!}</h1>
    <hr>

    {!! Form::model($blog,['method' => 'PATCH' ,'action' => ['Admin\BlogsController@update', $blog->id]]) !!}
     @include('admin.blog.partials.form',['submitButton' => 'Изменить'])

    {!! Form::close() !!}

    @include('admin.errors.list')

@stop