<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MyPosts</title>
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
</head>

<body class="bg-gray-100">
    <nav class="p-6 mb-3 bg-white flex justify-between">
        <ul class="flex items-center">

            <li><a href="" class="p-3">Home</a></li>
            <li><a href="{{route('dashboard')}}" class="p-3">Dashboard</a></li>
            <li><a href="" class="p-3">Post</a></li>
        </ul>

        <ul class="flex items-center">


            @auth
            <li><a href="" class="p-3">Wajiha Abid</a></li>
            <li><a href="{{route('logout')}}" class="p-3">Logout</a></li>
            @endauth
            @guest

            <li><a href="{{route('login')}}" class="p-3">Login</a></li>
            <li><a href="{{route('register')}}" class="p-3">Register</a></li>
            @endguest

        </ul>


    </nav>
    @yield('content')
</body>

</html>