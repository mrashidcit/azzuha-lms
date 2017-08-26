
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
        <h2 class="custom-heading">Assign Subject To Teacher </h2>
        <!-- <p class="lead">Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p> -->
      </div>
      <?php $options='';?>
      @foreach ($subjects as $s_key => $s_value)
        <?php
            $options .= '<option value='.$s_value->id.' >'.$s_value->name.'</option>';?>
      @endforeach

      <?php
        $t_options='';
      ?>
      @foreach ($teachers as $t_key => $t_value)
        <?php
          if($teacher_id == $t_value->id && $teacher_id != ''){
            $selected = 'selected';
          }
          else{
            $selected = '';
          }
         $t_options .= '<option '.$selected.'  value='.$t_value->id.' >'.$t_value->first_name." ".$t_value->last_name.'</option>';?>
      @endforeach

      <div class="row contact-wrap">
        <!-- <div class="status alert alert-success" style="display:none"></div> -->
        <form class="contact-form" name="add-teacher" method="post" action="/store-teacher-subject" >
          {!! csrf_field() !!}
          <div class="col-sm-5 col-sm-offset-1">

            <div class="form-group">
              <label>Teachers *</label>
              <select type="text" name="t_id" class="form-control" >
                <?php echo $t_options;?>
              </select>
            </div>
            <div class="form-group">
              <button type="submit" name="submit" class="btn btn-primary btn-lg" required="required">Assign</button>
            </div>

          </div>
          <div class="col-sm-5">
            <div class="form-group">
              <label>subjects *</label>
              <select type="text" name="s_id" class="form-control" >
                <?php echo $options;?>
              </select>
            </div>

          </div>
        </form>
      </div>
    </div>
  </section>
  @yield('footer')
</body>
</html>
