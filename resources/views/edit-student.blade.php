<!DOCTYPE html>
<html lang="en">
@include('layout.internal')
@yield('head')
<body>
  @yield('header')
  <!-- <span>Add New Course Outline<span> -->
  <section id="contact-page">
    <div class="container">
      <div class="center">
        <h2 class="custom-heading">Edit Stuudent</h2>
        <!-- <p class="lead">Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p> -->
      </div>
      <div class="row contact-wrap">
        <!-- <div class="status alert alert-success" style="display:none"></div> -->
        <form class="contact-form" name="add-student" method="post" action="/update-student" enctype="multipart/form-data">
          {!! csrf_field() !!}
          <div class="col-sm-5 col-sm-offset-1">
            <div class="form-group">
              <label>First Name *</label>
              <input value="{{$first_name}}" type="text" name="first_name" class="form-control" required="required" placeholder="Please Enter Student First Name">
              <input value="{{$id}}" type="hidden" name="id" class="form-control" required="required">
            </div>
            <div class="form-group">
              <label>Last Name *</label>
              <input value="{{$last_name}}" type="text" name="last_name" class="form-control" required="required" placeholder="Please Enter Student Last Name">
            </div>
            <div class="form-group">
              <label>Student Image </label>
              <input type="file" name="image_file" class="form-control" accept="image/gif, image/jpeg, image/png">
            </div>
          </div>
          <div class="col-sm-5">
            <div class="form-group">
              <label>Gender *</label>
              <select type="text" name="gender" class="form-control" >
                <option value="Male" <?php if($gender == 'Male'){?>selected<?php } ?>>Male</option>
                <option value="Femail" <?php if($gender == 'Femail'){?>selected<?php } ?> >Femail</option>
              </select>
            </div>
            <div class="form-group">
              <label>Email *</label>
              <input value="{{$email}}" readonly type="email" name="email" class="form-control" required="required" placeholder="Please Enter Student Email">
            </div>
            <div class="form-group">
              <label>Password *</label>
              <input value="{{$password}}" readonly type="text" name="password" class="form-control" required="required" placeholder="Please Enter Student Password">
            </div>
            <div class="form-group">
              <button type="submit" name="submit" class="btn btn-primary btn-lg" required="required">Submit Message</button>
            </div>
          </div>
        </form>
      </div>
    </div>
  </section>
  @yield('footer')
</body>
</html>
