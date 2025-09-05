
<body>
@extends('layouts.master')
@section('content')
 <main id="main" class="main">
<div class="container">
    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-header mb-2">
                    <h4><i class="bi bi-people"></i>{{$catData->name}}
                        <a href ="{{route('manage-category.index')}}">Back</a>
                </h4>
                    
                    @include('layouts.message')
                </div>
               <div class="card-body">
                    <div class="row">
                   
                    </div>
               </div>
            </div>
        </div>
    </div>
    
</div>

  </main>
@endsection
 
