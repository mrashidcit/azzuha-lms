@extends('layouts.master')

@section('content')
    <section id="contact-page">
        <div class="container">
            <div class="center">
                <h2 class="cutom-heading">Add New Assignment</h2>
            </div>
            
        </div>

        <div>
            <form id="new-question" method="post" action="{{ route('questions.store') }}">

                {{ csrf_field() }}

                <div class="form-group row">
                    <label for="correct_option" class="col-sm-2 col-form-label">Correct Option:</label>
                    <div class="col-sm-10" >
                        <select id="subject_id"   name="subject_id" class="custom-select" autofocus>
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
                        <input type="text"    class="form-control" name="a" id="a" placeholder="">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="inputPassword" class="col-sm-2 col-form-label">B</label>
                    <div class="col-sm-10">
                        <input type="text"    class="form-control" name="b" id="b" placeholder="">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="inputPassword" class="col-sm-2 col-form-label">C</label>
                    <div class="col-sm-10">
                        <input type="text"    class="form-control" name="c" id="c" placeholder="">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="inputPassword" class="col-sm-2 col-form-label">D</label>
                    <div class="col-sm-10">
                        <input type="text"    class="form-control" name="d" id="d" placeholder="">
                    </div>
                </div>

                <div class="form-group row">
                    <label for="correct_option" class="col-sm-2 col-form-label">Correct Option:</label>
                    <div class="col-sm-10" required>
                        <select id="correct_option" name="correct_option" class="custom-select">
                            <option value="a" selected>A</option>
                            <option value="b">B</option>
                            <option value="c">C</option>
                            <option value="c">D</option>

                        </select>
                    </div>
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>


            </form>

        
        </div>



    </section>
@endsection