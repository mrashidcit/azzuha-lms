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

