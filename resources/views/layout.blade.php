
<!DOCTYPE html>
<html>
<head>
    <title>Contact Laravel 8 CRUD</title>
   <!-- Boostrap 4 CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>

    <!-- Boostrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
</head>
<body>
  
<div class="container">
   <div class="jumbotron">
       <h1>Laravel</h1>
   </div>
   <a href="{{ url('/')}}" class="btn btn-warning" >Home</a>
   <a href="{{ url('/about')}}" class="btn btn-warning">About</a>
   <a href="{{ url('/service')}}" class="btn btn-warning">service</a>
   <a href="{{ url('/contact/create')}}" class="btn btn-warning">Contact</a>
</div>

    @yield('content')
</br>
<div class="card bg-light text-dark">
    <div class="card-body">Copyright 2022 IsuruRaveen.com</div>
</div>
</body>
</html>
