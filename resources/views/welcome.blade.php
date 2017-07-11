<!DOCTYPE html>
<html >
  <head>
    <meta charset="UTF-8">
    <title>Sprobie Login</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/meyer-reset/2.0/reset.min.css">
    <link rel='stylesheet prefetch' href='https://fonts.googleapis.com/css?family=Roboto:400,100,300,500,700,900'>
    <link rel='stylesheet prefetch' href='https://fonts.googleapis.com/css?family=Montserrat:400,700'>
    <link rel='stylesheet prefetch' href='https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css'>
    <link rel="stylesheet" href="/css/styles_1.css">
    
    <style>
    .alert {
        padding: 20px;
        background-color: #f44336;
        color: white;
        opacity: 1;
        transition: opacity 0.6s;
        margin-bottom: 15px;
    }

    .alert.success {background-color: #4CAF50;}
    .alert.info {background-color: #2196F3;}
    .alert.warning {background-color: #ff9800;}

    .closebtn {
        margin-left: 15px;
        color: white;
        font-weight: bold;
        float: right;
        font-size: 22px;
        line-height: 20px;
        cursor: pointer;
        transition: 0.3s;
    }

    .closebtn:hover {
        color: black;
    }
    </style>
  </head>

  <body>
    
    <!-- Form Title -->
    <div class="container">
      <div class="info">
        <h1>Sprobie Blog</h1><span>Made with <i class="fa fa-heart"></i> by <a href="http://andytran.me">Steven Ceniza</a></span>
      </div>
    </div>

    <!-- Form -->
    <div class="form">
      <div class="thumbnail"><img src="https://image.flaticon.com/icons/svg/16/16941.svg"/></div>

      <!-- Sign-up Form -->
      <form class="register-form" method="POST" action="register">
          {{ csrf_field() }}
          <input type="text" placeholder="Name" name="name" id="name" required/>
          <input type="password" placeholder="Password" name="password" id="password" required/>
          <input type="password" placeholder="Confirm Password" id="password_confirmation" name="password_confirmation" required/>
          <input type="text" placeholder="Email Address" id="email" name="email" required/>
          <button>Create</button>
          <p class="message">Already registered? <a href="#">Sign In</a></p>
          @include('layouts.errors')
      </form>

      <!-- Log-in Form -->
      <form class="login-form" method="POST" action="login">
        {{ csrf_field() }}
        <input type="text" placeholder="Email" id="email" name="email" />
        <input type="password" placeholder="Password" name="password" id="password"/>
        <button>Login</button>
        <p class="message">Not registered? <a href="#">Create an account</a></p>
        @include('layouts.errors')
      </form>

    </div>
    <!-- Form -->

    <!-- Scripts -->
    <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
    <script>
    var close = document.getElementsByClassName("closebtn");
    var i;

    for (i = 0; i < close.length; i++) {
        close[i].onclick = function(){
            var div = this.parentElement;
            div.style.opacity = "0";
            setTimeout(function(){ div.style.display = "none"; }, 600);
        }
    }
    </script>
    <script src="/js/index_1.js"></script>
