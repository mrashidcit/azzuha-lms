@extends('dashboard.master')

@section('content')

    <section id="contact-page">
        <div class="container">
            <div class="center">
                <h2 class="custom-heading">Add New Teacher</h2>
                <!-- <p class="lead">Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p> -->
            </div>
            @if(! empty($error))
                <p style='color:red; text-align:center;'>Email "{{$error}}" is Already Exist !!</p>

            @endif
            <div class="row contact-wrap">
                <!-- <div class="status alert alert-success" style="display:none"></div> -->
                <form class="contact-form" name="add-teacher" method="post" action="{{ route('semesters.store') }}">
                    {!! csrf_field() !!}
                    <div class="col-sm-5 col-sm-offset-1">
                        <div class="form-group">
                            <label>Name *</label>
                            <select class="custom-select">
                                <option value="fall" selected>Fall</option>
                                <option value="spring">Spring</option>

                            </select>
                        </div>

                        <div class="form-group">
                            <label>Year *</label>
                            <select class="custom-select">
                                <option value="2017" selected>2017</option>
                                <option value="2018">2018</option>
                                <option value="2019">2019</option>
                                <option value="2020">2020</option>
                                <option value="2021">2021</option>
                                <option value="2022">2022</option>

                            </select>
                        </div>

                        <div class="form-group">
                            <label>Status</label>
                            <select class="custom-select">
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