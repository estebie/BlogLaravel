
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Sprobie Blog</title>

    <!-- Bootstrap Core CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

    <!-- Theme CSS -->
    <link href="/css/clean-blog.min.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="/vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href='https://fonts.googleapis.com/css?family=Lora:400,700,400italic,700italic' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css'>

    <style>
    .alert {
        padding: 20px;
        background-color: #FF8C8C;
        color: white;
        opacity: 1;
        transition: opacity 0.6s;
        margin-bottom: 15px;
    }

    .alert.success {background-color: #4CAF50;}
    .alert.info {background-color: #2196F3;}
    .alert.warning {background-color: #ffd8d8;}

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

<body style="background-color: #FCFBFA">

    <!-- Navigation -->
    @include('layouts.nav')

    <!-- Main Content -->
    @yield('content')
    <!-- Footer  -->
    <br>
    @include('layouts.footer')
</body>
</html>
