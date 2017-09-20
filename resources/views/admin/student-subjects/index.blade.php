@extends('layouts.master')

@section('content')
    <section id="contact-page">
        <div class="container">
            <div class="center">
                <h2 class="custom-heading">List of Students</h2>
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
            <table class="table table-striped">
                <thead>
                <tr>
                    <th>No.</th>
                    <th>Name</th>
                    <th>Father_Name</th>
                    <th>Gender</th>
                    <th>Action</th>
                </tr>
                </thead>
                <tbody>
    
                     @foreach($students as $student)
                        <tr>
                            <td>{{ $loop->index + 1 }}</td>
                            <td>{{ $student->first_name }} </td>
                            <td>{{ $student->last_name }}</td>
                            <td>{{ $student->gender }}</td>
                            
                            <td>
                                <a href="{{ route('student_subjects.assign', $student->id)}}" class="btn btn-primary">Assign Subjects</a>
                            </td>
                            
                        </tr>
                    @endforeach 

                </tbody>
            </table>

                
            </div>
        </div>
    </section>
@endsection