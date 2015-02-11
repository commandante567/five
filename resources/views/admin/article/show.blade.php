@extends('_layouts.admin')

@section('content')
    <h1>{!! $articles->title !!}</h1>
    <hr>
    <div>
        {{ $articles->desc }}
    </div>

@stop
