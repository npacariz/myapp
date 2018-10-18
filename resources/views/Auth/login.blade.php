<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <meta http-equiv="X-UA-Compatible" content="ie=edge">
   <title>Document</title>
</head>
<body>
<h1>Login: </h1>
   <form action="/login" method="POST">
       {{csrf_field()}}   
       <div class="form-group">
           <label for="email">Email address:</label>
           <input type="email" class="form-control"  name="email"  id="email">
       </div>
       <div class="form-group">
           <label for="pwd">Password:</label>
           <input type="password" class="form-control" name='password' id="password">
       </div>
       <button type="submit" class="btn btn-default">Submit</button>
       <a href="/register" role="button">Sing up</a>
   </form>
</body>
</html>

