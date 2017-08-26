<html>
@include('layout.internal')
<head>
  <link href="{!! asset('css/custom-table.css') !!}" rel="stylesheet">
  <link href="{!! asset('css/view-table.css') !!}" rel="stylesheet">
</head>
@yield('head')

<body>
  @yield('header')
  <!-- <p class="custom-heading">ADD New Course OutLine </p> -->
  <div class="container">

    <h1 class="custom-heading">See All Subjects For Teachers</h1>

    @if(! empty($email))
      email already exist
    @endif
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

      ?>
    <!-- <a href="{{url('create-subject')}}" class="custom-btn" style="margin-left: 171px"><button name="submit" class="btn btn-primary">ADD New Subject</button></a> -->
    <table id="racetimes">
    <tr id="firstrow" style="color:#fff">
      <th class="th-class">Name</th>
      <th class="th-class">Subject</th>
      <!-- <th>Edit</th> -->
      <?php
      if($user == 'admin'){ ?>
        <th class="th-class">Delete</th>
    <?php } ?>
    </tr>
    @foreach ($data as $key => $value)
      <tr>
        <td>{{$value->first_name.' '.$value->last_name}}</td>
        <td>{{$value->name}}</td>
        <!-- <td><a href="{{url('edit-teacher-subject/'.$value->id)}}"><i class="fa fa-pencil" aria-hidden="true"></i></a></td> -->
        <?php
        if($user == 'admin'){ ?>
          <td><a onclick="return confirm('Are You Sure Want To Delete This Record !');" href={{ url('delete-teacher-subject/'.$value->id) }}><i class="fa fa-remove" aria-hidden="true"></i></a></td>
         <?php } ?>
      </tr>
    @endforeach
    </table>
  </div>
</body>

</html>
