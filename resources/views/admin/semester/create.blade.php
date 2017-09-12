@extends('layouts.master')

@section('content')

    <section id="contact-page">
        <div class="container">
            <div class="center">
                <h2 class="custom-heading">Add New Semester</h2>
                <!-- <p class="lead">Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p> -->
            </div>

            @if (session('status'))
                <div class="alert alert-success">
                    {{ session('status') }}
                </div>
            @endif

            @if (session('duplicate'))
                <div class="alert alert-danger">
                    {{ session('duplicate') }}
                </div>
            @endif

            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

            <div class="row contact-wrap">
                <!-- <div class="status alert alert-success" style="display:none"></div> -->
                <form class="contact-form" name="add-teacher" method="post" action="{{ route('semesters.store') }}">
                    {!! csrf_field() !!}
                    <div class="col-sm-6 col-sm-offset-4">
                        <div class="form-group">
                            <label>Name </label>
                            <select name="name" class="custom-select">
                                <option value="fall">Fall</option>
                                <option value="spring">Spring</option>

                            </select>
                        </div>

                        <div class="form-group">
                            <label>Year </label>
                            <select name="year" class="custom-select">
                                <option value="2017" selected>2017</option>
                                <option value="2018">2018</option>
                                <option value="2019">2019</option>
                                <option value="2020">2020</option>
                                <option value="2021">2021</option>
                                <option value="2022">2022</option>

                            </select>
                        </div>

                        <div class="form-group">
                            <label>Status </label>
                            <select name="status" class="custom-select">
                                <option value="0" selected>Un-Active</option>
                                <option value="1">Active</option>
                            </select>
                        </div>

                        <div class="form-group">
                            <button type="submit" name="submit" class="btn btn-primary btn-lg" required="required">
                                Save
                            </button>
                        </div>
                    </div>

                </form>
            </div>
        </div>
    </section>

@endsection('content');