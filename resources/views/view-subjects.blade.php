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

    <h1 class="custom-heading">See All Subjects</h1>
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
     if($user == 'admin'){
    ?>
      <a href="{{url('create-subject')}}" class="custom-btn" style="margin-left: 171px"><button name="submit" class="btn btn-primary">ADD New Subject</button></a>
    <?php } ?>
    <table id="racetimes">
    <tr id="firstrow" style="color:#fff">
      <th class="th-class">Name</th>
      <th class="th-class">Description</th>
      <?php
      if($user == 'admin'){
      ?>
      <th class="th-class">Edit</th>
      <th class="th-class">Delete</th>
      <?php } ?>
    </tr>
    @foreach ($subjects as $key => $value)

      <tr>
        <td>{{$value->name}}</td>
        <td>{{$value->description}}</td>
        <?php if($user == 'admin'){
        ?>
        <td><a href="{{url('edit-subject/'.$value->id)}}"><i class="fa fa-pencil" aria-hidden="true"></i></a></td>
        <td><a onclick="return confirm('Are You Sure Want To Delete This Record !');" href={{ url('delete-subject/'.$value->id) }}><i class="fa fa-remove" aria-hidden="true"></i></a></td>
        <?php } ?>
      </tr>
    @endforeach
    </table>





  </div>
</body>

</html>
