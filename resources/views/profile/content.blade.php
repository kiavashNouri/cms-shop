@extends('layouts.master')
@section('content')
    <section class="content">
        <div class="container-fluid">
            <div class="row m-0 pt-5">
                {{$slot}}
            </div>
        </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
@endsection
