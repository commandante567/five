@extends('_layouts.admin')

@section('content')
     <h1> <a href="/admin/blog/{{$blog->id}}/edit">{!! $blog->title !!}</a></h1>
    <hr>
     <ul>
         @foreach($articles as $article)
         <li><a href="/admin/blog/{{$article->blog_id}}/{{$article->id}}">{{ $article->title }}</a></li>
             @endforeach
     </ul>
@stop
