@extends('layouts.master')

@section('content')

    <section id="contact-page">
        <div class="container">
            <div class="center">
                <h2 class="custom-heading">Add New Study Program</h2>
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
                {{--  <form class="contact-form" name="add-teacher" method="post" action="{{ route('studyprograms.store') }}">
                    {!! csrf_field() !!}
                    <div class="col-sm-6 col-sm-offset-4">
                        <div class="form-group">
                            <label>Name </label>
                            <input name="name" type="text" class="form-control">
                            
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
                            <a href="{{ route('semesters.index') }}">
                                <span class="btn btn-primary btn-lg">
                                    Show List
                                </span>
                                
                            </a>
                        </div>
                    </div>

                </form>  --}}

                <form class="form-horizontal" method="post" action="{{ route('studyprograms.store') }}">
                    <div class="form-group">
                    <label class="control-label col-sm-2" for="email">Name:</label>
                    <div class="col-sm-4">
                        <input type="text" class="form-control" autofocus id="name" name="name">
                    </div>
                    </div>
                    <div class="form-group">
                    <label class="control-label col-sm-2" for="pwd">Pre-Requisite:</label>
                    <div class="col-sm-6">          
                        <input type="text" name="pre_requisite" class="form-control" >
                    </div>
                    </div>
                    <div class="form-group">
                            <label class="control-label col-sm-2">Duration </label>
                            <div class="col-sm-2">
                                <select name="duration" class="form-control custom-select">
                                    <option value="1" selected>1</option>
                                    <option value="1.5">1.5</option>
                                    <option value="2">2</option>
                                    <option value="2.5">2.5</option>
                                    <option value="3">3</option>
                                    <option value="3.5">3.5</option>
                                    <option value="4">4</option>
                                    

                                </select>
                                
                            </div>
                            <label class="control-label cols-ms-2"> Year</label>
                            
                    </div>
                    <div class="form-group">
                        <label class="control-label col-sm-2">Description</label>
                        <div class="col-sm-8">
                            <textarea name="description" cols="30" rows="6" class="form-control"></textarea>
                        </div>
                        
                    </div>
                    <div class="form-group">        
                    <div class="col-sm-offset-2 col-sm-10">
                        <button type="submit" class="btn btn-primary btn-larg">Save</button>
                    </div>
                    </div>
                </form>
            </div>
        </div>
    </section>

@endsection('content');