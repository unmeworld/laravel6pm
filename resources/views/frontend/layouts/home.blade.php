<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="{{url('backend/assets/vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{url('backend/assets/vendor/bootstrap-icons/bootstrap-icons.css')}}" rel="stylesheet">
</head>
<body>
    
<div class="container">
    <div class="row mt-2 mb-4">
        <div class="col-md-12">
            <h1 class="text-center">News List</h1>
        </div>
    </div>
    <div class="row">
       @foreach ($newsData as $news)
       <div class="col-md-4 mb-3">
           <div class="card">
                @if($news->image)
               <img src="{{url($news->image)}}" height="250" class="card-img-top" alt="...">
               @endif
               <div class="card-body">
                   <h5 class="card-title">{{$news->title}}</h5>
                  <p class="card-text">
                        {!! $news->summary !!}
                  </p>      
                   <a href="#" class="btn btn-primary">Go somewhere</a>
                </div>
           </div>
       </div>
       @endforeach
       
   </div>
    </div>
    
</body>
</html>