{{--  Assign Subject to Student   --}}
@extends('layouts.master')

@section('content')

    <section id="contact-page">
        <div class="container">
            <div class="center">
                <h2 class="custom-heading">Assign Subject to Student</h2>
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
                <form class="contact-form" name="add-teacher" method="post" action="{{ route('student_subjects.store') }}">
                    {!! csrf_field() !!}
                    



                    <div class="col-sm-6 col-sm-offset-4">
                        
                        <div class="form-group">
                            <label>Id:  {{$student->id}}</label>
                            <input type="hidden" name="student_id" value="{{$student->id}}">
                            
                            
                        </div>
                        
                        <div class="form-group">
                            <label>Name: {{$student->first_name }} {{$student->last_name}} </label>
                            
                        </div>

                        <div class="form-group">
                            <label>Subjects </label>
                            <select name="subject_id" class="custom-select">
                                
                                @foreach($subjects as $subject)

                                    <option value="{{$subject->id}}" >{{$subject->name}}</option>
                                    
                                @endforeach
                                
                            </select>
                        </div>

                        
                        <div class="form-group">
                            <button type="submit" name="submit" class="btn btn-primary btn-lg" >
                                Assign
                            </button>
                            {{--  <a href="{{ route('semesters.index') }}">
                                <span class="btn btn-primary btn-lg">
                                    Show List
                                </span>
                                
                            </a>  --}}
                        </div>
                    </div>

                </form>
            </div>
        </div>
    </section>

@endsection('content');