<div class="staff-catalog">
    @foreach($catalogs as $catalog)
        <div class="staff-catalog-item">
            <div class="sci-title"><a href="#"><h2>{{$catalog->title}}</h2><div class="sci-title-icon"></div></a></div>
        </div>

    @endforeach
</div>