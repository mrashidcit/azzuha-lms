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

            @if (session('status'))
                <div class="alert alert-success">
                    {{ session('status') }}
                </div>
        @endif
            <!-- <p class="lead">Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p> -->
        </div>

        <div>
            <form method="post" action="{{ route('questions.store') }}">

                {{ csrf_field() }}

                <div class="form-group row">
                    <label for="correct_option" class="col-sm-2 col-form-label">Correct Option:</label>
                    <div class="col-sm-10" required>
                        <select id="subject_id" name="subject_id" class="custom-select" autofocus>
                            @foreach($subjects as $subject)

                                <option value="{{ $subject->id }}" >{{ $subject->name }}</option>

                            @endforeach
                        </select>
                    </div>
                </div>

                <div class="form-group row">
                    <label for="staticEmail" class="col-sm-2 col-form-label">Question: </label>
                    <div class="col-sm-10">
                        <textarea class="form-control" required id="question" name="question" cols="10" rows="4"></textarea>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="inputPassword" class="col-sm-2 col-form-label">A</label>
                    <div class="col-sm-10">
                        <input type="text" required  class="form-control" name="a" id="a" placeholder="">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="inputPassword" class="col-sm-2 col-form-label">B</label>
                    <div class="col-sm-10">
                        <input type="text" required  class="form-control" name="b" id="b" placeholder="">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="inputPassword" class="col-sm-2 col-form-label">C</label>
                    <div class="col-sm-10">
                        <input type="text" required  class="form-control" name="c" id="c" placeholder="">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="inputPassword" class="col-sm-2 col-form-label">D</label>
                    <div class="col-sm-10">
                        <input type="text" required  class="form-control" name="d" id="d" placeholder="">
                    </div>
                </div>

                <div class="form-group row">
                    <label for="correct_option" class="col-sm-2 col-form-label">Correct Option:</label>
                    <div class="col-sm-10" required>
                        <select id="correct_option" name="correct_option" class="custom-select">
                            <option value="a" selected>A</option>
                            <option value="b">B</option>
                            <option value="c">C</option>
                        </select>
                    </div>
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>



            </form>
        </div>

    </div>
</section>
@yield('footer')
</body>
</html>
