@extends('layouts.master')

@section('content')

    <section id="contact-page">
        <div class="container">
            <div class="center">
                <h2 class="custom-heading">List of Study Programs</h2>
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

            <div class="row">
                <a href="{{ route('studyprograms.create') }}" class="custom-btn"><button name="submit" class="btn btn-primary">ADD New Study Program</button></a>
            </div>

            <div class="row contact-wrap">
            <table class="table table-striped">
                <thead>
                <tr>
                    <th>No.</th>
                    <th>Name</th>
                    <th>Pre_Requisite</th>
                    <th>Duration</th>
                    <th>Action</th>
                </tr>
                </thead>
                <tbody>
    
                     @foreach($studyPrograms as $studyProgram)
                        <tr>
                            <td>{{ $loop->index + 1 }}</td>
                            <td>{{ $studyProgram->name }} </td>
                            <td>{{ $studyProgram->pre_requisite }}</td>
                            <td>{{ $studyProgram->duration }}</td>
                            <td>
                                @auth
                                    {{--  If user_type is 1 its means its an admin   --}}
                                    @if(Auth::user()->user_type == '1')
                                    

                                    <form method="post" action="{{ route('studyprograms.destroy', $studyProgram->id) }}">
                                        {{ csrf_field() }}
                                        {{ method_field('DELETE') }}

                                        
                                        {{-- To Edit the Semester Info   --}}

                                        <a href="{{ route('studyprograms.edit', ['id' => $studyProgram->id])}}">
                                            <span class="fa fa-pencil" aria-hidden="true"></span>
                                        </a>
                                            <button type="submit" name="submit" class="glyphicon glyphicon-remove-circle" aria-hidden="true"></button>
                                    
                                    </form>

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