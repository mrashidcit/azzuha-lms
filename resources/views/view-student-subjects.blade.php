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

    <h1 class="custom-heading">See All Subjects For Students</h1>

    <!-- <a href="{{url('create-subject')}}" class="custom-btn" style="margin-left: 171px"><button name="submit" class="btn btn-primary">ADD New Subject</button></a> -->
    <table id="racetimes">
    <tr id="firstrow" style="color:#fff">
      <th class="th-class">Name</th>
      <th class="th-class">Subject</th>
      <!-- <th>Edit</th> -->
      <th class="th-class">Delete</th>
    </tr>
    @foreach ($data as $key => $value)
      <tr>
        <td>{{$value->first_name.' '.$value->last_name}}</td>
        <td>{{$value->name}}</td>
        <!-- <td><a href="{{url('edit-teacher-subject/'.$value->id)}}"><i class="fa fa-pencil" aria-hidden="true"></i></a></td> -->
        <td><a onclick="return confirm('Are You Sure Want To Delete This Record !');" href={{ url('delete-student-subject/'.$value->id) }}><i class="fa fa-remove" aria-hidden="true"></i></a></td>
      </tr>
    @endforeach
    </table>
  </div>
</body>

</html>
