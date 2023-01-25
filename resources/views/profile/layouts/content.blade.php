@extends('layouts.master')
@section('style')
    <style>
        .profile-ul li{
            margin-bottom: 7px;
        }
        .form-control{
            border: none;
            background-color:#e9ecef;
        }
    </style>
@endsection
@section('content')
    <section class="content">
        <div class="container-fluid">
            <div class="row m-0 pt-5">
                @include('profile.layouts.right-links')
                {{$slot}}
            </div>
        </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
@endsection
