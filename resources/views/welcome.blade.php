<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="{{ URL::to('app.css') }}">
    <title>Hello, world!</title>
  </head>
  <body>
    
  @foreach($posts as $post)
  <div class="container bootstrap snippets bootdey  ">
    <div class="row">
        <div class="col-md-4 d-flex justify-content-center">
            <div class="card card-favorite">
              <div class="card-img-container">
              <img class="imgt" src="https://media.istockphoto.com/vectors/single-hand-drawn-mosque-vector-illustration-in-doodle-style-isolate-vector-id1368267384?k=20&m=1368267384&s=612x612&w=0&h=2AFbmhZNFT_V9-wbXCuL2SZ5y5P7CfL8b1UYWE152e4=" alt="image">
              </div>
              <div class="card-content">
                <div class="card-meta">
                    <h1>مسجد {{$post->mosque}} </h1>
                </div>
                <div class="d-flex justify-content-center mt-3">
                    <a  target="_blank" href="{{$post->location}}" id="bottle" ><button class="btn btn-primary">إحصل على الموقع</button></a>
                </div>
            </div>
    
            
              
  
            
        </div>
        
    </div> 
    
    @endforeach 
  



    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
  </body>
</html>