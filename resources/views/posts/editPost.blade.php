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
                            <span class="subheading">{{$post->created_at->diffForHumans()}}</span>
                     
                        </div>
                    </div>
                </div>
            </div>
        </header>

    <!-- Main Content -->
     <article>
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">
                        
                    </div>
                </div>
                <hr>
                <h4>Editing this post</h4>
              	<form method="POST" action="/posts/{{$post->id}}/edit">
            		{{ csrf_field() }}
                        <div class="row control-group">
                            <div class="form-group col-xs-12 floating-label-form-group controls">
                                <label>Body</label>
                                <textarea rows="5" class="form-control" placeholder="Body" id="body" name="body">{{$post->body}}</textarea>
                                <p class="help-block text-danger"></p>
                            </div>
                        </div>
                	<br>
                	<div id="success"></div>
                	<div class="row">
                    	<div class="form-group col-xs-12">
                        	<button type="submit" class="btn btn-default">Edit Post!</button>
                    	</div>
                	</div>
               	@include ('layouts.errors')
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
@endsection ('content')
