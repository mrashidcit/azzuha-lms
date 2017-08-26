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
            <h2 class="custom-heading">Add New Questions</h2>
            <!-- <p class="lead">Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p> -->
        </div>

        <div>
            <form>
                <div class="form-group row">
                    <label for="staticEmail" class="col-sm-2 col-form-label">Question: </label>
                    <div class="col-sm-10">
                        <textarea class="form-control" id="question" cols="10" rows="4"></textarea>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="inputPassword" class="col-sm-2 col-form-label">A</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" name="a" id="a" placeholder="">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="inputPassword" class="col-sm-2 col-form-label">B</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" name="b" id="b" placeholder="">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="inputPassword" class="col-sm-2 col-form-label">C</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" name="c" id="c" placeholder="">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="inputPassword" class="col-sm-2 col-form-label">D</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" name="d" id="d" placeholder="">
                    </div>
                </div>

                <div class="form-group row">
                    <label for="correct_option" class="col-sm-2 col-form-label">Correct Option:</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" name="correct_option" id="correct_option" placeholder="">
                    </div>
                </div>



            </form>
        </div>

    </div>
</section>
@yield('footer')
</body>
</html>
