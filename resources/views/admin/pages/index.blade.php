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

        {{ $pages->links()}}

    <a href="{{ route('pages.create')}}" class="btn btn-success">Create New</a>

        <div class="row justify-content-center">
 
        <div class="card" style="width: 50rem;" >

 

            <table class="table">
            <thead>
            <tr>
                <th>Title</th>
                <th>URL</th>
            </tr>

            @foreach($pages as $page)
                <tr>
                    <td> 
                        <a href="{{ route('pages.edit',['page' =>$page->id])}}">{{$page->title}}</a>
                    </td>
                    <td>{{$page->url}}</td>
                    <td>
                    <a href="{{ route('pages.destroy',['page' =>$page->id])}}" class="btn btn-danger delete-link"
                            data-message="Are you sure you wat to delete this?"
                            data-form="delete-form">
                            Delete
                    </a>
                    </td>

                
                </tr>

            @endforeach
            </div>
        </div>
    </div>
</div>

<form id="delete-form" action="" method="POST">
    {{ method_field('DELETE') }}
    {!! csrf_field() !!}

</form>
@endsection