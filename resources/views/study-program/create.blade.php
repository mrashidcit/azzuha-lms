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
                

                <form class="form-horizontal" method="post" action="{{ route('studyprograms.store') }}">
                    {{ csrf_field() }}

                    <div class="form-group">
                    <label class="control-label col-sm-2" for="email">Name:</label>
                    <div class="col-sm-4">
                        <input type="text" required class="form-control" autofocus id="name" name="name">
                    </div>
                    </div>
                    <div class="form-group">
                    <label class="control-label col-sm-2" for="pwd">Pre-Requisite:</label>
                    <div class="col-sm-6">          
                        <input type="text" required name="pre_requisite" class="form-control" >
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
                            <textarea name="description" required cols="30" rows="6" class="form-control"></textarea>
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