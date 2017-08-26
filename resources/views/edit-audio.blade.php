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
        <h2 class="custom-heading">Edit Audio Lecture</h2>
        <!-- <p class="lead">Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p> -->
      </div>
      <div class="row contact-wrap">
        <!-- <div class="status alert alert-success" style="display:none"></div> -->
        <form class="contact-form" name="add-course" method="post" action="/update-audio" enctype="multipart/form-data">
          {!! csrf_field() !!}
          <div class="col-sm-5 col-sm-offset-1">
            <div class="form-group">
              <label>Lecture Title *</label>
              <input type="text" name="name" value="{{$name}}" class="form-control" required="required" placeholder="Please Enter your Document Title">
            </div>
            <div class="form-group">
              <label>Date *</label>
              <input type="date" name="date" class="form-control" >
              <input type="hidden" name="id" class="form-control" value="{{$id}}">
            </div>
            <div class="form-group">
              <label>Audio File </label>
              <input type="file" name="audio_file" class="form-control" accept=".mp3,mpeg,audio/*">
            </div>
          </div>
          <div class="col-sm-5">
            <div class="form-group">
              <label>Description *</label>
              <textarea name="description" id="description" required="required" class="form-control" rows="9">{{$description}}</textarea>
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
