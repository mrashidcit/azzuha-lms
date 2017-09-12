@extends('layouts.master')

@section('content')

    @php
        $user_type = null;
    @endphp

    @auth 
        
        @if(Auth::user()->user_type == 1)
            $user = 'admin';

        @elseif(Auth::user()->user_type == 2)
            $user = 'teacher'
        @else 
            $user = 'student'
        @endif

    @endauth



    <section id="contact-page">
        <div class="container">
            <div class="center">
                <h2 class="custom-heading">List of Semesters</h2>
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
            <table class="table table-striped">
                <thead>
                <tr>
                    <th>No.</th>
                    <th>Semester</th>
                    <th>Status</th>
                    <th>Action</th>
                </tr>
                </thead>
                <tbody>
                @foreach($semesters as $semester)
                    <tr>
                        <td>{{ $loop->index + 1 }}</td>
                        <td>{{ $semester->name }} - {{ $semester->year }}</td>
                        <td>{{ $semester->status }}</td>
                        <td>
                            @auth
                                {{--  If user_type is 1 its means its an admin   --}}
                                @if(Auth::user()->user_type == '1')
                                <a href="#">
                                    <span class="fa fa-pencil" aria-hidden="true"></span>
                                </a>
                                <a href="#">
                                    <span class="fa fa-remove" aria-hidden="true"></span>
                                    <span class="glyphicon glyphicon-remove-circle" aria-hidden="true"></span>
                                </a>
                            @endif
                            @endauth
                            
                        </td>
                        
                    </tr>
                @endforeach
                </tbody>
            </table>

                
            </div>
        </div>
    </section>

@endsection('content');