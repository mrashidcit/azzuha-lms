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
      <a href="{{url('create-audio')}}" class="custom-btn"><button name="submit" class="btn btn-primary">ADD New Audio</button></a>
        <div class="course-title">
            <div id="editbutton">
            </div>
            <h1 style="color:black;text-align:center;">See All Audio Lectures</h1> </div>
        <div id="course-header">
        </div>
        <div role="main"><span id="maincontent"></span>
            <div class="course-content">
                <h2 class="accesshide">Weekly outline</h2>
                <ul class="weeks">

                  @foreach ($audio as $key => $value)
                  <!-- {{$value->name}}
                  {{$value->id}} -->
                  <?php
                    // $st_data= strtotime($value->start_date);
                    $end_data= strtotime($value->date);
                    $date = date('d-M-Y', $end_data);
                    // $endDate = date('d-M-Y', $end_data);
                    $path = str_replace('audio/','', $value->file_path);

                    ?>

                  <li id="section-1" class="section main clearfix" role="region" aria-label="1 March - 7 March">
                        <div class="left side"><img width="1" height="1" class="spacer" alt="" title="" src="http://lms.umt.edu.pk/theme/image.php/evolved/core/1493210661/spacer"></div>

                        <div class="right side">
                            <a href="{{url('edit-audio/'.$value->id)}}"><i class="fa fa-pencil" aria-hidden="true"></i></a>
                            <a onclick="return confirm('Are You Sure Want To Delete This Record !');" href={{ url('delete-audio/'.$value->id) }}><i class="fa fa-remove" aria-hidden="true"></i></a>
                        </div>





                        <div class="content">
                            <h3 class="sectionname">{{$date}}</h3>
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
                                                  <audio controls>
                                                    <source src="{{ url('audio/'.$path) }}">
                                                  </audio>
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
                                                  <textarea name="description" id="description" required="required" class="form-control" rows="9" cols="60" readonly="">{{$value->description}}</textarea>

                                                    <!-- <a class="" onclick="" href="http://lms.umt.edu.pk/mod/resource/view.php?id=24283"><img src="http://lms.umt.edu.pk/theme/image.php/evolved/core/1493210661/f/document-24" class="iconlarge activityicon" alt=" " role="presentation"><span class="instancename">Assignment 1<span class="accesshide "> File</span></span>
                                                    </a> -->
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
