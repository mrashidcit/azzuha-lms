@extends('dashboard.master')

@section('footer')
    <!-- /. WRAPPER  -->
    <!-- SCRIPTS -AT THE BOTOM TO REDUCE THE LOAD TIME-->
    <!-- JQUERY SCRIPTS -->
    <script src="{!! asset('js/dashboard/jquery-1.10.2.js') !!}"></script>
    <!-- BOOTSTRAP SCRIPTS -->
    <script src="{!! asset('js/dashboard/bootstrap.min.js') !!}"></script>
    <!-- CUSTOM SCRIPTS -->
    <script src="{!! asset('js/dashboard/custom.js') !!}"></script>



@endsection