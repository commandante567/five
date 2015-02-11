@extends('_layouts.admin')

@section('content')

    <h1>Добавить новую статью</h1>
    <hr>

    {!! Form::open(['action' => 'Admin\ArticlesController@store']) !!}
    @include('admin.article._form',['submitButton' => 'Добавить'])

    {!! Form::close() !!}


    @include('admin.errors.list')

@stop