@section('head')
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="csrf-token" content="{{ csrf_token() }}">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Learning Management System</title>
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
  <link href="{!! asset('css/font-awesome.min.css') !!}" rel="stylesheet">
  <link href="{!! asset('css/animate.min.css') !!}" rel="stylesheet">
  <link href="{!! asset('css/prettyPhoto.css') !!}" rel="stylesheet">
  <link href="{!! asset('css/main.css') !!}" rel="stylesheet">
  <link href="{!! asset('css/responsive.css') !!}" rel="stylesheet">
  <link rel="shortcut icon" href="images/ico/favicon.ico">
  <link rel="apple-touch-icon-precomposed" sizes="144x144" href="images/ico/apple-touch-icon-144-precomposed.png">
  <link rel="apple-touch-icon-precomposed" sizes="114x114" href="images/ico/apple-touch-icon-114-precomposed.png">
  <link rel="apple-touch-icon-precomposed" sizes="72x72" href="images/ico/apple-touch-icon-72-precomposed.png">
  <link rel="apple-touch-icon-precomposed" href="images/ico/apple-touch-icon-57-precomposed.png">
</head>
@stop

@section('header')

<?php
$view = '';
$login = 1;
if (Auth::user()) {   // Check is user logged in
    $user = Auth::user();
      if($user->user_type == 1){
        $view = 'admin';
      }
       else if($user->user_type == 2) {
        $view = 'teacher';
      }
      else{
        $view = 'student';
      }
    }
    else {
      $login = 0;
    }

?>

<header id="header">
  <nav class="navbar navbar-inverse" role="banner">
    <div class="container">
      <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
          <span class="sr-only">Toggle navigation</span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
        <a class="navbar-brand"><img src="{{url('images/grey.png')}}" height="110" width="100" alt="logo"></a>
      </div>
      <div class="collapse navbar-collapse navbar-right">
        <ul class="nav navbar-nav">
                    <li><a href="{!! asset('view-audio') !!}">Audio Lectures</a></li>
          <!-- <li class="dropdown">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">Drop Down<i class="fa fa-angle-down"></i></a>
            <ul class="dropdown-menu">
              <li><a href="#">One</a></li>
              <li><a href="#">One</a></li>
              <li><a href="#">One</a></li>
              <li><a href="#">One</a></li>
            </ul>
          </li> -->
          @if($view == 'admin')
            <li><a href="{!! asset('dashboard') !!}">Dashboard</a></li>
            <li><a href="{!! asset('logout') !!}">Logout</a></li>
          @elseif($view == 'student' || $view == 'teacher')
            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown">Questions<i class="fa fa-angle-down"></i></a>
              <ul class="dropdown-menu">
                <li><a href="{{ route('questions.create') }}">Add New </a></li>
                <li><a href="{{ route('questions.index') }}">All Questions</a></li>
                <li><a href="{!! asset('view-subjects') !!}">Subjects</a></li>
                <li><a href="{!! asset('view-corse') !!}">Course Out Lines</a></li>
              </ul>
            </li>
            <li><a href="{{ route('quiz.index') }}">Quiz</a></li>
            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown">LMS<i class="fa fa-angle-down"></i></a>
              <ul class="dropdown-menu">
                <li><a href="{!! asset('view-teachers') !!}">Teachers</a></li>
                <li><a href="{!! asset('view-students') !!}">Students</a></li>
                <li><a href="{!! asset('view-subjects') !!}">Subjects</a></li>
                <li><a href="{!! asset('view-corse') !!}">Course Out Lines</a></li>
              </ul>
            </li>
            <li><a href="{!! asset('logout') !!}">Logout</a></li>
          @else
            <li><a href="{!! asset('login') !!}">Login</a></li>
          @endif
        </ul>
      </div>
    </div>
  </nav>
</header>
@stop

@section('footer')

  <script src="{!! asset('js/jquery.js') !!}"></script>
  <!--
  <script type="text/javascript">$(".carousel").carousel();</script>
  -->
  <script src="{!! asset('js/bootstrap.min.js') !!}"></script>
  <script src="{!! asset('js/jquery.prettyPhoto.js') !!}"></script>
  <script src="{!! asset('js/jquery.isotope.min.js') !!}"></script>
  <script src="{!! asset('js/main.js') !!}"></script>
  <script src="{!! asset('js/wow.min.js') !!}"></script>
@stop
