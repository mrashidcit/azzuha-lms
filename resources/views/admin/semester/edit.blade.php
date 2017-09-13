@extends('layouts.master')

@section('content')

    <section id="contact-page">
        <div class="container">
            <div class="center">
                <h2 class="custom-heading">Edit Semester Info.</h2>
                <!-- <p class="lead">Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p> -->
            </div>

            @if (session('success'))
                <div class="alert alert-success">
                    {{ session('success') }}
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
                <form class="contact-form" name="add-teacher" method="post" action="{{ route('semesters.update', ['id' => $semester->id]) }}">
                    {!! csrf_field() !!}
                    {{ method_field('PUT') }}
                    <div class="col-sm-6 col-sm-offset-4">
                        <div class="form-group">
                            <label>Name </label>
                            <select name="name" class="custom-select">
                                @if($semester->name == 'fall')
                                    <option value="fall" selected>Fall</option>
                                    <option value="spring">Spring</option>
                                @else
                                    <option value="fall" >Fall</option>
                                    <option value="spring" selected>Spring</option>

                                @endif
                                
                            </select>
                        </div>

                        <div class="form-group">
                            <label>Year </label>
                            <select name="year" class="custom-select">
                                @for($year = 2017; $year <= 2022; $year++)

                                    @if($semester->year == $year)
                                        <option value="{{ $year }}" selected>{{ $year }}</option>
                                    @else
                                        <option value="{{ $year }}">{{ $year }}</option>
                                    @endif

                                    

                                @endfor
{{--  
                                <option value="2017" selected>2017</option>
                                <option value="2018">2018</option>
                                <option value="2019">2019</option>
                                <option value="2020">2020</option>
                                <option value="2021">2021</option>
                                <option value="2022">2022</option>  --}}

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
                                Update
                            </button>
                            <a href="{{ route('semesters.index') }}">
                                <span class="btn btn-primary btn-lg">
                                    Back to List
                                </span>
                                
                            </a>
                            
                        </div>
                    </div>

                </form>
            </div>
        </div>
    </section>

@endsection('content');