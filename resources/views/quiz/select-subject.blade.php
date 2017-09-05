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
            <form method="get" action="">

                {{ csrf_field() }}

                 <div class="form-group row">
                    <label for="correct_option" class="col-sm-2 col-form-label">Subject:</label>
                    <div class="col-sm-10" >
                        <select id="subject_id" required name="subject_id" class="custom-select" autofocus>
                            @foreach($subjects as $subject)

                                <option value="{{ $subject->id }}" >{{ $subject->name }}</option>

                            @endforeach
                        </select>

                        <button id="submit" type="submit" class="btn btn-primary">Start Quiz</button>


                    </div>
                </div>






            </form>

            <div id="app-quiz">

            </div>
        </div>

    </div>
</section>


@yield('footer')
<script src="{!! asset('js/quiz/quiz.js') !!}"></script>
</body>
</html>
