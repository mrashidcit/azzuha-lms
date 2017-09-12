@extends('dashboard.master')

@section('content')

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
                    <a href="{{ route('semesters.index') }}" >
                        <i class="fa fa-male fa-5x"></i>
                        <h4>View Semesters</h4>
                    </a>
                </div>
            </div>

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
        </div>
    </div>
@endsection