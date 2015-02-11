@extends('_layouts.admin')

@section('content')

<h1>Добавить новую рубрику</h1>
    <hr>

    {!! Form::open(['action' => 'Admin\BlogsController@store']) !!}
        @include('admin.blog.partials.form',['submitButton' => 'Добавить'])

    {!! Form::close() !!}


    @include('admin.errors.list')

@stop