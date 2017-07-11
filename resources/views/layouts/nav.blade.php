<!-- Navigation Bar Layout  -->
<nav class="navbar navbar-default navbar-custom navbar-fixed-top">
    <div class="container-fluid">
     <!-- Brand and toggle get grouped for better mobile display -->
     @if(Auth::check())
        <div class="navbar-header page-scroll">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                <span class="sr-only">Toggle navigation</span>
                Menu <i class="fa fa-bars"></i>
            </button>
            <a class="navbar-brand" href="/user">Welcome {{Auth::user()->name}}!</a>
        </div>
        @endif
        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav navbar-right">
                <li>
                    <a href="/posts">Home</a>
                </li>
                <li>
                    <a href="/user">My Posts</a>
                </li>
                <li>
                    <a href="/posts/create">Publish</a>
                </li>
                <li>
                    <a href="/logout">Logout</a>
                </li>
            </ul>
        </div>
        <!-- /.navbar-collapse -->
    </div>
    <!-- /.container -->
</nav>


