<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title> Admin User </title>
  <!-- BOOTSTRAP STYLES-->
  <link href="{!! asset('css/dashboard/bootstrap.css') !!}" rel="stylesheet" />
  <!-- FONTAWESOME STYLES-->
  <link href="{!! asset('css/dashboard/font-awesome.css') !!}" rel="stylesheet" />
  <!-- CUSTOM STYLES-->
  <link href="{!! asset('css/dashboard/custom.css') !!}" rel="stylesheet" />
  <!-- GOOGLE FONTS-->
  <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />
</head>
<!-- @include('layout.internal')
@yield('head') -->
<body>



  <div id="wrapper">
    <div class="navbar navbar-inverse navbar-fixed-top">
      <div class="adjust-nav">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".sidebar-collapse">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="{{url('dashboard')}}">
            <img src="images/logo.png" />

          </a>

        </div>

        <span class="logout-spn" >
          <a href="{{url('logout')}}" style="color:#fff;">LOGOUT</a>

        </span>
      </div>
    </div>
    <!-- /. NAV TOP  -->
    <nav class="navbar-default navbar-side" role="navigation">
      <div class="sidebar-collapse">
        <ul class="nav" id="main-menu">

          <li class="active-link">
            <a href="{{ url('dashboard') }}" ><i class="fa fa-desktop "></i>Dashboard <span class="badge">Admin</span></a>
          </li>
          <li>
            <a href="{{ url('home') }}"><i class="fa fa-table "></i>Home </a>
          </li>


        </ul>
      </div>

    </nav>
    <!-- /. NAV SIDE  -->
    <div id="page-wrapper" >
      <div id="page-inner">
        <div class="row">
          <div class="col-lg-12">
            <h2>ADMIN DASHBOARD</h2>
          </div>
        </div>
        <!-- /. ROW  -->
        <hr />
        <div class="row">
          <div class="col-lg-12 ">
            <div class="alert alert-info">
              <strong>Welcome <?php echo Auth::user()->name; ?> ! </strong>
            </div>

          </div>
        </div>
        <!-- /. ROW  -->
        <div class="row text-center pad-top">
          <div class="col-lg-2 col-md-2 col-sm-2 col-xs-6">
            <div class="div-square">
              <a href="{{url('create-teacher')}}" >
                <i class="fa fa-male fa-5x"></i>
                <h4>ADD New Teacher</h4>
              </a>
            </div>


          </div>

          <div class="col-lg-2 col-md-2 col-sm-2 col-xs-6">
            <div class="div-square">
              <a href="{{url('view-teachers')}}" >
                <i class="fa fa-users fa-5x"></i>
                <h4>View Teachers</h4>
              </a>
            </div>


          </div>
          <div class="col-lg-2 col-md-2 col-sm-2 col-xs-6">
            <div class="div-square">
              <a href="{{url('create-student')}}" >
                <i class="fa fa-graduation-cap fa-5x"></i>
                <h4>Add students</h4>
              </a>
            </div>


          </div>
          <div class="col-lg-2 col-md-2 col-sm-2 col-xs-6">
            <div class="div-square">
              <a href="{{url('view-students')}}" >
                <i class="fa fa-users fa-5x"></i>
                <h4>View Students</h4>
              </a>
            </div>


          </div>
          <div class="col-lg-2 col-md-2 col-sm-2 col-xs-6">
            <div class="div-square">
              <a href="{{url('create-audio')}}" >
                <i class="fa fa-file-audio-o fa-5x"></i>
                <h4>ADD Audio Lecture </h4>
              </a>
            </div>


          </div>
          <div class="col-lg-2 col-md-2 col-sm-2 col-xs-6">
            <div class="div-square">
              <a href="{{url('view-audio')}}" >
                <i class="fa fa-eye fa-5x"></i>
                <h4>View Audio Lectures</h4>
              </a>
            </div>


          </div>
        </div>
        <!-- /. ROW  -->
        <div class="row text-center pad-top">

          <div class="col-lg-2 col-md-2 col-sm-2 col-xs-6">
            <div class="div-square">
              <a href="{{url('create-course')}}" >
                <i class="fa fa-file-pdf-o fa-5x"></i>
                <h4>Add New Course Out Line</h4>
              </a>
            </div>


          </div>
          <div class="col-lg-2 col-md-2 col-sm-2 col-xs-6">
            <div class="div-square">
              <a href="{{url('view-corse')}}" >
                <i class="fa fa-eye fa-5x"></i>
                <h4>See Course Outlines</h4>
              </a>
            </div>


          </div>
          <div class="col-lg-2 col-md-2 col-sm-2 col-xs-6">
            <div class="div-square">
              <a href="{{url('create-subject')}}" >
                <i class="fa fa-book fa-5x"></i>
                <h4>ADD New Subject</h4>
              </a>
            </div>


          </div>
          <div class="col-lg-2 col-md-2 col-sm-2 col-xs-6">
            <div class="div-square">
              <a href="{{url('view-subjects')}}" >
                <i class="fa fa-eye fa-5x"></i>
                <h4>See All Subjects </h4>
              </a>
            </div>


          </div>
          

  <!-- /. WRAPPER  -->
  <!-- SCRIPTS -AT THE BOTOM TO REDUCE THE LOAD TIME-->
  <!-- JQUERY SCRIPTS -->
  <script src="{!! asset('js/dashboard/jquery-1.10.2.js') !!}"></script>
  <!-- BOOTSTRAP SCRIPTS -->
  <script src="{!! asset('js/dashboard/bootstrap.min.js') !!}"></script>
  <!-- CUSTOM SCRIPTS -->
  <script src="{!! asset('js/dashboard/custom.js') !!}"></script>


</body>
</html>
