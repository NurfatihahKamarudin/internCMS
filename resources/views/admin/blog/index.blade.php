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

    <a href="{{ route('blog.create')}}" class="btn btn-success">Create New</a>

        <div class="row justify-content-center">
 
        <div class="card" style="width: 50rem;" >

 

            <table class="table">
            <thead>
            <tr>
                <th>Title</th>
                <th>Author</th>
                <th>Slug</th>
                <th>Published</th>
                <th></th>
            </tr>
            </thead>

            @foreach($model as $post)
                <tr>
                    <td> 
                        <a href="{{ route('blog.edit',['blog' =>$post->id])}}">{{$post->title}}</a>
                    </td>
                    <td>{{ $post->user()->first()->name }}</td>
                    <td>{{ $post->slug }}</td>
                    <td></td>
                    </td>

                    <td>
                    <a href="{{ route('blog.destroy',['blog' =>$post->id])}}" class="btn btn-danger delete-link"
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