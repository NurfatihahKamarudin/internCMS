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
             <div class="card" style="width: 50rem;">
                <div class="card-header">{{ __('Create New') }}</div>
                

                <div class="card-body">
                    <form action="{{ route('blog.store')}}" method="post">
 
                    @include('admin.blog.partials.fields')
                     
                    </form>

                </div>
         </div>
    </div>
    </div>
</div>


</div>
@endsection
 