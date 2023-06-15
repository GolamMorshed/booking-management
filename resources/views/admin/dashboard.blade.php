<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>
   
    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    
    <title>Dashboard</title>
</head>
<body>
    <h1>This is admin Dashboard</h1>
    <p>Hello admin</p>
    {{-- @foreach($homes as $home)
        <h1>{{$home->home_name}}</h1>
    @endforeach --}}
    <!-- Include the navbar -->
    {{-- @include('navbar.nav-side') --}}

    

</body>
</html>