@extends('layouts.app')

@section('content')

<div class="container">
<div class="card-header">{{ __('Edit Page') }}</div>
 
     <form method="post" action="{{ route('blog.update', ['blog' => $model->id]) }}" >
        {{method_field('PUT')}}
         
        @include('admin.blog.partials.fields')


        </form>
 </div>
@endsection