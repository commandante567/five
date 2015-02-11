<nav>
    <div class="admin_widget_header text-center">
        <h3>Новости</h3>
    </div>
    <div class="admin_widget_content">
        <ul>
            @foreach($news as $new)
                <li><a href="/admin/blog/{{$new->blog_id}}/{{$new->id}}">{{$new->title}}</a></li>
            @endforeach
        </ul>
    </div>
    <div class="admin_widget_header text-center">
        <h3>Акции</h3>
    </div>
    <div class="admin_widget_content">
        <ul>
            @foreach($sales as $sale)
                <li><a href="/admin/blog/{{$sale->blog_id}}/{{$sale->id}}">{{$sale->title}}</a></li>
            @endforeach
        </ul>
    </div>
    <div class="admin_widget_header text-center">
        <h3>Статьи</h3>
    </div>
    <div class="admin_widget_content">
        <ul>
            @foreach($recent_posts as $post)
                <li><a href="/admin/blog/{{$post->blog_id}}/{{$post->id}}">{{$post->title}}</a></li>
            @endforeach
        </ul>
    </div>
</nav>



