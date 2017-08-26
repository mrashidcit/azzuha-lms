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
        <h2 class="custom-heading">Add New Teacher</h2>
        <!-- <p class="lead">Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p> -->
      </div>
      @if(! empty($error))
      <p style='color:red; text-align:center;'>Email "{{$error}}" is Already Exist !!</p>

      @endif
      <div class="row contact-wrap">
        <!-- <div class="status alert alert-success" style="display:none"></div> -->
        <form class="contact-form" name="add-teacher" method="post" action="/add-teacher" enctype="multipart/form-data">
          {!! csrf_field() !!}
          <div class="col-sm-5 col-sm-offset-1">
            <div class="form-group">
              <label>First Name *</label>
              <input type="text" name="first_name" class="form-control" required="required" placeholder="Please Enter Teacher First Name">
            </div>
            <div class="form-group">
              <label>Last Name *</label>
              <input type="text" name="last_name" class="form-control" required="required" placeholder="Please Enter Teacher Last Name">
            </div>
            <div class="form-group">
              <label>Teacher Image </label>
              <input type="file" name="image_file" class="form-control" accept="image/gif, image/jpeg, image/png">
            </div>
          </div>
          <div class="col-sm-5">
            <div class="form-group">
              <label>Gender *</label>
              <select type="text" name="gender" class="form-control" >
                <option value="Male">Male</option>
                <option value="Femail">Femail</option>
              </select>
            </div>
            <div class="form-group">
              <label>Email *</label>
              <input type="email" name="email" class="form-control" required="required" placeholder="Please Enter Teacher Email">
              @if ($errors->has('email'))
                  <span class="help-block">
                      <strong>{{ $errors->first('email') }}</strong>
                  </span>
              @endif

            </div>
            <div class="form-group">
              <label>Password *</label>
              <input type="text" name="password" class="form-control" minlength="6" required="required" placeholder="Please Enter Teacher Password">
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
