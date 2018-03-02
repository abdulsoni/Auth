<!DOCTYPE html>
<html lang="en">
<head>
    <title>Laravel Magic!!</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="{{asset('css/style.css')}}">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body id="myPage" data-spy="scroll" data-target=".navbar" data-offset="50">
<nav class="navbar navbar-default navbar-fixed-top">
    <div class="container-fluid">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="#myPage">Laravel</a>
        </div>
        <div class="collapse navbar-collapse" id="myNavbar">
            <ul class="nav navbar-nav navbar-right">
                <li><a href="{{route('index')}}">HOME</a></li>
                <li><a href="#band">BAND</a></li>
                <li><a href="#tour">TOUR</a></li>
                <li><a href="#contact">CONTACT</a></li>
                @if(!Auth::user())
                <li><a href="{{route('register')}}">REGISTER</a></li>
                <li><a href="{{route('login')}}">LOGIN</a></li>

                @else
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                        <img src="{{ auth()->user()->avatar }}" alt="" width="30" class="img-circle">
                        {{ Auth::user()->name }} <span class="caret"></span>
                    </a>
                    <ul class="dropdown-menu">
                        <li><a href="#">Dashboard</a></li>
                        <li>
                            <a href="{{route('logout')}}">Logout</a>
                        </li>
                    </ul>
                </li>
                @endif
                <li><a href="#"><span class="glyphicon glyphicon-search"></span></a></li>
            </ul>
        </div>
    </div>
</nav>