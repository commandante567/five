@extends('_layouts.admin')

@section('content')
    <div class="row">
        <div class="col-md-4">
    @include('admin._includes.blog_dash')
        </div>
        <div class="col-md-4">
            @include('admin._includes.articles_dash')
        </div>
        </div>
    <h1>Админка</h1>
@stop
