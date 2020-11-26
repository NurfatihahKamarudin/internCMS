@extends('layouts.app')

@section('content')

<div class="container">
<div class="card-header">Edit {{ $model->name }}</div>
 
     <form method="post" action="{{ route('users.update', ['user' => $model->id]) }}" >
        {{method_field('PUT')}}
         
        @foreach ($roles as $role)

        {!! csrf_field() !!}
                
            <div class="checkbox">
                <label> 
                    <input type="checkbox" name="roles[]" value="{{$role->id}}"
                    {{ $model->hasRole($role->name)?'checked':''}} />
                     {{$role->name}}
                </label>

            </div>
        @endforeach

            <button type="submit" class="btn btn-primary">Save</button>            

        </form>
 </div>
@endsection