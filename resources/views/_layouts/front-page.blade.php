<!DOCTYPE html>
<html lang="en">
<head>
    @include('_includes.head')
</head>

<body>
@include('_includes.header')


<nav class="main-nav">
    <div class="container">
        @include('front_page.main_nav')

    </div>
</nav>

<section class="main-slider">
    <div class="container">
        @include('front_page.main_slider')
    </div>
</section>

<section class="main-catalog">
    <div class="container">
        @include('front_page.main_catalog')
    </div>
</section>

<section class="best-sales">
    <div class="container">
        @include('front_page.best_sales')
    </div>
</section>

<section class="landing">
    <div class="container">
        @include('front_page.landing')
    </div>
</section>

<section class="fp-about">
    <div class="container">
        @include('front_page.about')
    </div>
</section>

<section class="pluses">
    <div class="container">
        @include('front_page.pluses')
    </div>
</section>


<section class="fp-last-work">
    <div class="container">
        @include('front_page.last_work')
    </div>
</section>

<section class="landing form_landing">
    <div class="container">
        @include('front_page.form_landing')
    </div>
</section>


<section class="news">
    <div class="container">
        @include('front_page.news')
    </div>
</section>


<footer class="main-footer">
    <div class="container">
        @include('_includes.footer')
    </div>
</footer>
@yield('content')

<!-- Scripts -->

</body>
</html>
