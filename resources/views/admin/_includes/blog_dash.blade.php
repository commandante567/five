
<nav>
    <div class="admin_widget_header text-center">
        <h3>Блог</h3>
    </div>
    <div class="admin_widget_content">
    <ul>
        @foreach($blogs as $blog)
        <li><a href="/admin/blog/{{$blog->id}}">{{$blog->title}}</a> | <a href="/admin/blog/{{$blog->id}}/edit">Edit</a></li>
        @endforeach
    </ul>
        <div class="text-center">
           <a href="/admin/blog/create">Добавить Рубрику</a>
        </div>
    </div>
</nav>



