<!DOCTYPE html>
<html lang="en">
@include('layout.internal')
<link href="{{ asset('css/quiz/quiz.css') }}" rel="stylesheet">
@yield('head')
<body>
@yield('header')
<!-- <span>Add New Course Outline<span> -->
<section id="contact-page">
    <div class="container">
        <div class="center">

            <h2 class="custom-heading">Quiz</h2>

            @if (session('status'))
                <div class="alert alert-success">
                    {{ session('status') }}
                </div>
        @endif
        <!-- <p class="lead">Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p> -->
        </div>

        <div id="select-subject">
            <form method="get" action="">

                {{ csrf_field() }}

                 <div class="form-group row">
                    <label for="correct_option" class="col-sm-1 col-form-label">Subject:</label>
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
        </div>

        <div id="subject-info">
            <div class="row">
                <label for="question" class="col-sm-2 col-form-label">Subject: </label>
                <div class="col-sm-10">
                    <label id="subject-name" class="col-form-label"></label>

                </div>
            </div>
            <div class="row">
                <div class="col-sm-10">
                    <span>
                        Question
                            <span id="current-question"></span>
                                of
                            <span id="total-questions"></span>
                    </span>
                </div>
            </div>

        </div>

        <div id="quiz-form">
                <div class="container">
                    <form>
                        <div class="form-group row">
                            <label for="question" class="col-sm-2 col-form-label">Question: </label>
                            <div class="col-sm-10">
                                <label id="question" class="col-form-label">Hello</label>
                            </div>
                        </div>

                        <fieldset class="form-group">
                            <div class="row">

                                <div class="col-sm-10">
                                    <div class="form-check">
                                        <label class="form-check-label">
                                            <input class="form-check-input" type="radio" name="option" id="option" value="a" required/>
                                            <span id="a"></span>
                                        </label>
                                    </div>
                                    <div class="form-check">
                                        <label class="form-check-label">
                                            <input class="form-check-input" type="radio" name="option" id="option" value="b">
                                            <span id="b"></span>

                                        </label>
                                    </div>
                                    <div class="form-check">
                                        <label class="form-check-label">
                                            <input class="form-check-input" type="radio" name="option" id="option" value="c">
                                            <span id="c"></span>
                                        </label>
                                    </div>
                                    <div class="form-check">
                                        <label class="form-check-label">
                                            <input class="form-check-input" type="radio" name="option" id="option" value="d">
                                            <span id="d"></span>
                                        </label>
                                    </div>
                                </div>
                            </div>
                        </fieldset>

                        <div class="form-group row">
                            <div class="col-sm-10">
                                <button id="save-and-next" type="submit" class="btn btn-primary">
                                    Save & Next
                                </button>
                            </div>
                        </div>
                    </form>
                </div>

            </div>


    </div>
</section>


@yield('footer')
<script src="{!! asset('js/quiz/quiz.js') !!}"></script>
</body>
</html>
