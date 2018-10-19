@include('partial/header')
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
       <a href="/register" class="btn btn-default" role="button">Sing up</a>
   </form>
@include('partial/footer')

