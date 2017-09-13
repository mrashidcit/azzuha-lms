@extends('layouts.master')

@section('content')

    <section id="contact-page">
        <div class="container">
            <div class="center">
                <h2 class="custom-heading">List of Semesters</h2>
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
                <a href="{{ route('semesters.create') }}" class="custom-btn"><button name="submit" class="btn btn-primary">ADD New Semester</button></a>
            </div>

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
                                

                                <form method="post" action="{{ route('semesters.destroy', $semester->id) }}">
                                    {{ csrf_field() }}
                                    {{ method_field('DELETE') }}

                                    
                                    {{-- To Edit the Semester Info   --}}

                                    <a href="{{ route('semesters.edit', ['id' => $semester->id])}}">
                                        <span class="fa fa-pencil" aria-hidden="true"></span>
                                    </a>

                                    <a  href="{{ url('semesters/' . $semester->id) }}"> 
                                    <button type="submit" name="submit" class="glyphicon glyphicon-remove-circle" aria-hidden="true"></button>
                                </a>

                                </form>


                                {{--  onclick="return confirm('Are You Sure to Delete this Record?');"  --}}
                                 
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