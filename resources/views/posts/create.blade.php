@extends('layouts.master')

@section ('content')
    <!-- Header Image -->
    <header class="intro-header" style="background-image: url('/img/write-bg.jpg')">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">
                    <div class="site-heading">
                    
                        <h1>Publish Something</h1>
                        <hr class="small">
                        <span class="subheading">What's on your mind?</span>
                 
                    </div>
                </div>
            </div>
        </div>
    </header>
    
    <!-- Main Content -->
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">
                <p>“There is no greater agony than bearing an untold story inside you.” 
				― Maya Angelou, I Know Why the Caged Bird Sings</p>
                @include ('layouts.errors')
                <form method="POST" action="/posts">
                	{{ csrf_field() }}
                    <div class="row control-group">
                        <div class="form-group col-xs-12 floating-label-form-group controls">
                            <label>Title Post</label>
                            <input type="text" class="form-control" placeholder="Post Title" id="title" name="title">
                            <p class="help-block text-danger"></p>
                        </div>
                    </div>
                    <div class="row control-group">
                        <div class="form-group col-xs-12 floating-label-form-group controls">
                            <br>
                            Tags: &nbsp &nbsp   
                                <input type="checkbox" name="tags[]" value="1">  Personal &nbsp 
                                <input type="checkbox" name="tags[]" value="2"> Health &nbsp 
                                <input type="checkbox" name="tags[]" value="3"> Sports &nbsp
                                <input type="checkbox" name="tags[]" value="4"> Arts &nbsp
                                <input type="checkbox" name="tags[]" value="5"> Travel &nbsp
                            <p class="help-block text-danger"></p>
                        </div>
                    </div>
                    <div class="row control-group">
                        <div class="form-group col-xs-12 floating-label-form-group controls">
                            <label>Body</label>
                            <textarea rows="5" class="form-control" placeholder="Body" id="body" name="body"></textarea>
                            <p class="help-block text-danger"></p>
                        </div>
                    </div>
                    <br>
                    <div id="success"></div>
                    <div class="row">
                        <div class="form-group col-xs-12">
                            <button type="submit" class="btn btn-default" id="myButton" onclick="return disableMe()" value="OK">Publish Now!</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
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

