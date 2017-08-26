<html>
@include('layout.internal')
<head>
  <link href="{!! asset('css/custom-table.css') !!}" rel="stylesheet">
</head>
@yield('head')

<body>
  @yield('header')
  <!-- <p class="custom-heading">ADD New Course OutLine </p> -->
  <div class="container">
    <section id="region-main" class="span9">
      <?php
      $user = '';
      if(Auth::user()){
        if( Auth::user()->user_type == 1){
          $user = 'admin';
        }
        else if(Auth::user()->user_type == 2){
          $user = 'teacher';
        }
        else {
          $user = 'student';
        }
      }
      if($user != 'student'){
      ?>
        <a href="{{url('create-course')}}" class="custom-btn"><button name="submit" class="btn btn-primary">ADD New Course</button></a>
      <?php }
      ?>
        <div class="course-title">
            <div id="editbutton">
            </div>
            <h1 style="color:black;text-align:center;">See Course Outline For All Subjects</h1> </div>
        <div id="course-header">
        </div>
        <div role="main"><span id="maincontent"></span>
            <div class="course-content">
                <h2 class="accesshide">Weekly outline</h2>
                <ul class="weeks">
                  @foreach ($course as $key => $value)

                  <?php
                    $st_data= strtotime($value->start_date);
                    $end_data= strtotime($value->end_date);
                    $startDate = date('d-M-Y', $st_data);
                    $endDate = date('d-M-Y', $end_data);
                    $path = str_replace('courseOutline/','', $value->file_path);
                    ?>

                  <li id="section-1" class="section main clearfix" role="region" aria-label="1 March - 7 March">
                        <div class="left side"><img width="1" height="1" class="spacer" alt="" title="" src="http://lms.umt.edu.pk/theme/image.php/evolved/core/1493210661/spacer"></div>
                      <?php
                          if($user != 'student'){
                      ?>
                        <div class="right side">
                            <a href="{{url('edit-course/'.$value->id)}}"><i class="fa fa-pencil" aria-hidden="true"></i></a>
                            <a onclick="return confirm('Are You Sure Want To Delete This Record !');" href={{ url('delete-corse/'.$value->id) }}><i class="fa fa-remove" aria-hidden="true"></i></a>
                        </div>
                        <?php }?>
                        <div class="content">
                            <h3 class="sectionname">{{$startDate}}   /  {{$endDate}}</h3>
                            <div class="summary"></div>
                            <ul class="section img-text">
                                <li class="activity resource modtype_resource " id="module-23991">
                                    <div>
                                        <div class="mod-indent-outer">
                                            <div class="mod-indent"></div>
                                            <div>
                                                <div class="activityinstance">
                                                  <p class="sectionname">{{$value->name}}</p>

                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li class="activity resource modtype_resource " id="module-23992">
                                    <div>
                                        <div class="mod-indent-outer">
                                            <div class="mod-indent"></div>
                                            <div>
                                                <div class="activityinstance">
                                                  <a class="" href="download-corse/{{$path}}"><img src="{{url('images/pdf-24.png')}}" class="iconlarge activityicon" alt=" " role="presentation">Download Corse Outline File
                                                  </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li class="activity resource modtype_resource " id="module-24283">
                                    <div>
                                        <div class="mod-indent-outer">
                                            <div class="mod-indent"></div>
                                            <div>
                                                <div class="activityinstance">
                                                  <?php if(!empty ($value->description)){ ?>
                                                    <textarea name="description" id="description" required="required" class="form-control" rows="9" cols="60" readonly="">{{$value->description}}</textarea>
                                                  <?php } ?>
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
