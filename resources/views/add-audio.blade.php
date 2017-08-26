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
        <h2 class="custom-heading">Add New Audio Lecture</h2>
        <!-- <p class="lead">Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p> -->
      </div>
      <div class="row contact-wrap">
        <!-- <div class="status alert alert-success" style="display:none"></div> -->
        <form class="contact-form" name="add-course" method="post" action="add-audio" enctype="multipart/form-data">
          {!! csrf_field() !!}
          <div class="col-sm-5 col-sm-offset-1">
            <div class="form-group">
              <label>Lecture Title *</label>
              <input type="text" name="name" class="form-control" required="required" placeholder="Please Enter your Document Title">
            </div>
            <div class="form-group">
              <label>Date *</label>
              <input type="date" name="date" class="form-control" required="required">
            </div>
            <div class="form-group">
              <label>Audio File </label>
              <input type="file" name="audio_file" class="form-control" required="" accept=".mp3,mpeg,audio/*">
            </div>
          </div>
          <div class="col-sm-5">
            <div class="form-group">
              <label>Description *</label>
              <textarea name="description" id="description" required="required" class="form-control" rows="9"></textarea>
            </div>
            <div class="form-group">
              <button type="submit" name="submit" class="btn btn-primary btn-lg" required="required">Submit Message</button>
            </div>
          </div>
        </form>
        <!-- <iframe width="469" height="264" src="https://www.youtube.com/embed/y60wDzZt8yg" frameborder="0" allowfullscreen></iframe> -->
        <!-- <iframe width="640" height="360" src="https://www.youtube.com/embed/nhcSh15akAQ" frameborder="0" allowfullscreen></iframe> -->
      </div>
    </div>
  </section>
  @yield('footer')
</body>
</html>
