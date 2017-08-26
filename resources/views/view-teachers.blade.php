<html>
@include('layout.internal')
<head>
  <link href="{!! asset('css/custom-table.css') !!}" rel="stylesheet">
</head>
@yield('head')

<body>
  @yield('header')
  <?php
    $admin = '';
    if(Auth::user()){
      if( Auth::user()->user_type == 1){
        $user = 'admin';
      }
      else if(Auth::user()->user_type == 2){
        $user = 'teacherD:\picturesD:\pictures';
      }
      else {
        $user = 'student';
      }
    }
  ?>

  <!-- <p class="custom-heading">ADD New Course OutLine </p> -->
  <div class="container">
    <section id="region-main" class="span9">
      <?php if($user == 'admin') { ?>
        <a href="{{url('create-teacher')}}" class="custom-btn"><button name="submit" class="btn btn-primary">ADD New Teacher</button></a>
      <?php }?>
        <div class="course-title">
            <div id="editbutton">
            </div>
            <h1 style="color:black;text-align:center;">See All Teachers</h1> </div>
        <div id="course-header">
        </div>
        <div role="main"><span id="maincontent"></span>
            <div class="course-content">
                <h2 class="accesshide">Weekly outline</h2>
                <ul class="weeks">

                  @foreach ($teachers as $key => $value)
                        <?php
                        if($user != 'admin'){
                            if($value->email != Auth::user()->email){
                                $value->password = "Sorry Password IS Confidential :-)";
                            }

                        }
                        ?>
                  <li id="section-1" class="section main clearfix" role="region" aria-label="1 March - 7 March">
                        <div class="left side"><img width="1" height="1" class="spacer" alt="" title="" src="http://lms.umt.edu.pk/theme/image.php/evolved/core/1493210661/spacer"></div>

                        <div class="right side">
                          <?php if($user == 'admin'){ ?>
                              <a href="{{url('edit-teacher/'.$value->id)}}"><i class="fa fa-pencil" aria-hidden="true"></i></a>
                              <a onclick="return confirm('Are You Sure Want To Delete This Record !');" href={{ url('delete-teacher/'.$value->id) }}><i class="fa fa-remove" aria-hidden="true"></i></a>
                            <?php } ?>
                        </div>
                        <div class="content">
                            <h3 class="sectionname" style="font-style: italic;">{{$value->first_name. ' '. $value->last_name }}</h3>
                            <div class="summary"></div>
                            <ul class="section img-text">
                                <li class="activity resource modtype_resource ">
                                    <div>
                                        <div class="mod-indent-outer">
                                            <div class="mod-indent"></div>
                                            <div>
                                                <div class="activityinstance">
                                                  @if($value->file_path != '')
                                                  <img class="student-img" alt="Smiley face" height="60" width="60" style="vertical-align: middle;" src="{{ url($value->file_path) }}" />
                                                  @endif
                                                  <p class="sectionname">Gender :  {{$value->gender}}</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li class="activity resource modtype_resource " id="module-23991">
                                    <div>
                                        <div class="mod-indent-outer">
                                            <div class="mod-indent"></div>
                                            <div>
                                                <div class="activityinstance">
                                                  <p class="sectionname">Teacher EMAIL :  {{$value->email}}</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li class="activity resource modtype_resource">
                                    <div>
                                        <div class="mod-indent-outer">
                                            <div class="mod-indent"></div>
                                            <div>
                                                <div class="activityinstance">
                                                    <p class="sectionname">Teacher Password :<span style="color:red"> {{$value->password}} </span></p>
                                                  <?php if($user == 'admin'){ ?>
                                                    <a href="{{url('assign-subject/'.$value->id)}}"><button class="btn-primary" style="margin-left: 585px;">Assign Subject</button></a>
                                                  <?php }?>
                                                  <a href="{{url('show-teacher-subject/'.$value->id)}}"><button class="btn-primary" style="margin-left: 585px;">Show Subjects</button></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </li>
                  @endforeach

                </ul>
            </div>
        </div>
    </section>


  </div>
</body>

</html>
