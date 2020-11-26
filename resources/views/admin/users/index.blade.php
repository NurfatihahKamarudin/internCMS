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

    @if (session('status'))
        <div class="alert alert-info">
            {{ session('status')}}
        </div>
        @endif
        
        {{ $model->links()}}
 
        <div class="row justify-content-center">

        <div class="card" style="width: 50rem;" >

            <table class="table">
            <thead>
            <tr>
                <th>Name</th>
                <th>Email</th>
                <th>Roles</th>

            </tr>
      
            @foreach($model as $user)
                <tr>
                    <td> 
                        <a href="{{ route('users.edit',['user' =>$user->id])}}">{{$user->name}}</a>
                    </td>
                    <td>{{$user->email}}</td>
                    <td>
                        {{ implode( ',', $user->roles()->get()->pluck('name')->toArray() )}}
                    </td>
                </tr>

            @endforeach
     
            </div>
        </div>
     </div>
</div>
 
@endsection
 
 
