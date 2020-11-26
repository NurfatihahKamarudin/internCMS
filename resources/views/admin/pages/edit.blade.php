@extends('layouts.app')

@section('content')

<div class="container">
<div class="card-header">{{ __('Edit Page') }}</div>
 
     <form method="post" action="{{ route('pages.update', ['page' => $model->id]) }}" >
        {{method_field('PATCH')}}
         
        @include('admin.pages.partials.fields')


        </form>
 </div>
@endsection