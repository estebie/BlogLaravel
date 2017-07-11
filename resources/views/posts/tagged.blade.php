@extends ('layouts.master')

@section ('content')

    <!-- Header Image -->
    <header class="intro-header" style="background-image: url('/img/home-bg.jpg')">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">
                    <div class="site-heading">
                        <h1>Sprobie Blog</h1>
                        <hr class="small">
                        <span class="subheading">Laravel Learning Activity :)</span>
                    </div>
                </div>
            </div>
        </div>
    </header>

    <!-- Main Content -->
    <div class="container">
        <hr>
        <div class="row">
            <center>
             <a href="/posts" class="btn btn-default" role="button">Everything</a>
            <a href="/posts/tags/Personal" class="btn btn-default" role="button">Personal</a>
            <a href="/posts/tags/Health" class="btn btn-default" role="button">Health</a>
            <a href="/posts/tags/Sports" class="btn btn-default" role="button">Sports</a>
            <a href="/posts/tags/Arts" class="btn btn-default" role="button">Arts</a>
            <a href="/posts/tags/Travel" class="btn btn-default" role="button">Travel</a>
            </center>
        </div>
        <hr>
        <div class="row">
            <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">
            <h4 style="color:#0085A1"> Showing posts tagged as: "{{$tag->name}}" </h4>
            
           @foreach($posts=$tag->posts as $post)
                @include('posts.post')
           @endforeach

                <!-- Pager -->
                <ul class="pager">
                    <li class="next">
                        <a href="#">Older Posts &rarr;</a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
@endsection ('content')