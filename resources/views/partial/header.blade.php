<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <meta http-equiv="X-UA-Compatible" content="ie=edge">
   <title>Document</title>
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="topnav">
        <a class="active" href="/home"><h4>myAPP</h4></a>
        @if(auth()->check())
            <a href="/logout">Logout</a>
            <a href="">{{auth()->user()->firstName }} {{auth()->user()->lastName}}</a>
        @else
            <a href="/login">Login</a>
            <a href="/register">Register</a>
        @endif
        </ul>
    </div>
</nav>