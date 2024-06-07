<!DOCTYPE html>
<html lang="en">

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Home</title>
    <link rel="stylesheet" href=" <?= $_ENV['BASE_URL'] ?>assets/css/style1.css ">
    {{-- <link rel="stylesheet" href=" {{asset('assets/css/style1.css')}} ">; --}}
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Latest compiled JavaScript -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</head>

<body>
 
        <h1 class=" mt-5 ">Welcome {{ $name }} to my website!</h1>
        @if (isset($_SESSION['user']))
        <a class="btn btn-primary" href="{{ url('logout') }}">logout</a>
        @endif
        @if (!isset($_SESSION['user']))
        <a class="btn btn-primary" href="{{ url('login') }}">login</a>
        @endif
      
        
    
</body>

</html>
