@extends ('layouts.master')

@section ('content')

    <!-- Header Image -->
    <header class="intro-header" style="background-image: url('/img/post-bg.jpg')">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">
                        <div class="site-heading">
                        
                            <h1>{{$post->title}}</h1>
                            <hr class="small">
                            <span class="subheading">{{$post->created_at->diffForHumans()}} by {{$post->user->name}}</span>
                     
                        </div>
                    </div>
                </div>
            </div>
        </header>

    <!-- Main Content -->
     <article>
        <div class="container">
             <div class="row">
             <div class="form-group col-xs-12 floating-label-form-group controls">
                <a href="{{url()->previous()}}" class="btn btn-default" role="button" style="float: left;"><span class="glyphicon glyphicon-arrow-left"></span>   Back</button></a>
                
                <!-- Hidden Edit and Delete Functions  -->
                @if(Auth::user()->getId()==$post->user->id)
                    <form method="POST" action="/posts/{{$post->id}}/delete">
                                {{ csrf_field() }}
                                <button type="submit" class="btn btn-default" style="float: right;"><span class="glyphicon glyphicon-trash"></span>   Delete Post</button>
                    </form>

                    <a class="btn btn-default" href="/posts/{{$post->id}}/edit" style="float: right;"><span class="glyphicon glyphicon-pencil"></span>   Edit Post</a>
                @endif                               
            </div>
         </div>
         <br>
            <div class="row">
                <center>
                @if(count($post->tags))
                    Tagged as:
                    @foreach($post->tags as $tag)
                    <a href="/posts/tags/{{$tag->name}}" class="btn btn-default" role="button">{{$tag->name}}</a>
                    @endforeach
                @endif
                </center>
            </div>
            <div class="row">
                <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">
                    <p style="text-align: justify">
                        {{$post->body}}
                    </p>
                </div>
            </div>
            <br>
            <br>


            <div class="comments">
    			<ul class="list-group">
    				@foreach($post->comments as $comment)
    					<li class="list-group-item">
    						<strong>{{$comment->created_at->diffForHumans()}}:</strong>
    						{{$comment->body}}
                            <strong>by</strong>  {{$comment->user->name}}
    					</li>
    				@endforeach
    			</ul>
    		</div>
            <hr>


            <!-- Add Comment Area -->
            @include ('layouts.errors')
            <h4> Write a comment!</h4>
          	<form method="POST" action="/posts/{{$post->id}}/comments">
        	   {{ csrf_field() }}
            	<div class="row control-group">
                	<div class="form-group col-xs-12 floating-label-form-group controls">
                    	<label>Comment</label>
                    	<input type="text" class="form-control" placeholder="Comment" id="body" name="body">
                    	<p class="help-block text-danger"></p>
                	</div>
            	<br>
            	<div id="success"></div>
            	<div class="row">
                	<div class="form-group col-xs-12">
                    	<button type="submit" class="btn btn-default" id="myButton" onclick="return disableMe()" value="OK">Submit Comment!</button>
                	</div>
            	</div>
        	</form>
        </div>
    </article>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <hr>
    <script type="text/javascript">
    var clicked = false;
    function disableMe() {
        if (document.getElementById) {
            if (!clicked) {
                document.getElementById("myButton").value = "thank you";
                clicked = true;
                return true;
            } else {
                return false;
            }
        } else {
            return true;
        }
    }
</script>
@endsection ('content')
