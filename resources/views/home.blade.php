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
<div class="row justify-content-center">
             <div class="card" style="width: 50rem;" >
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

            <a href="{{ route('blog.create') }}" class="btn btn-success">Create Post</a>
            <a href="{{ route('blog.index') }}" class="btn btn-default">All Post</a>                </div>
            </div>
        </div>
    </div>
</div>
@endsection
