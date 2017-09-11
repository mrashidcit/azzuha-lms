@extends('dashboard.master')

@section('side-bar')
    <!-- /. Side Nav Bar  -->
    <nav class="navbar-default navbar-side" role="navigation">
        <div class="sidebar-collapse">
            <ul class="nav" id="main-menu">

                <li class="active-link">
                    <a href="{{ url('dashboard') }}" ><i class="fa fa-desktop "></i>Dashboard <span class="badge">Admin</span></a>
                </li>
                <li>
                    <a href="{{ url('home') }}"><i class="fa fa-table "></i>Home </a>
                </li>


            </ul>
        </div>

    </nav>

@endsection