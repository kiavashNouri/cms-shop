@extends('layouts.master')
@section('content')
    <section class="content p-1 p-md-3">
        <div class="container-fluid p-0">
            <div class="row m-0 pt-5">
                @include('profile.notifications.links')
                {{$slot}}
            </div>
        </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
@endsection
