@extends('layouts.app')

@section('content')

<div class="container">
 
    <!-- sidebar content -->
    <div id="sidebar" class="row">
    <div class="col-1">
        @include('layouts.sidebar')
        </div>
    </div>
 
    <div class="col-10">
    <a href="{{ route('pages.create')}}" class="btn btn-success">Create New</a>

        <div class="row justify-content-center">
 
         
        </div>
    </div>
</div>
@endsection