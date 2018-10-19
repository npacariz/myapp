@extends('layout.master')
@section('content')
    <h1>Register: </h1>

    <form action="/register" method="POST">
        {{csrf_field()}}
        <div class="form-group">
            <label for="FirstName">First Name:</label>
            <input type="text" class="form-control" name="firstName" id="FirstName">
        </div>
        <div class="form-group">
            <label for="LastName">First Name:</label>
            <input type="text" class="form-control" name="lastName" id="LastName">
        </div>
        <div class="form-group">
            <label for="email">Email address:</label>
            <input type="email" class="form-control"  name="email"  id="email">
        </div>
        <div class="form-group">
            <label for="company">Company</label>
            <input type="text" class="form-control"  name="company"  id="company">
        </div>
        <div class="form-group">
            <label for="country">Country</label>
            <select name="country" id="country">
                    @foreach($countries as $country)
                        <option value={{$country}}>{{$country}}</option>
                    @endforeach
                </select>
        </div>
        <div class="form-group">
            <label for="password">Password:</label>
            <input type="password" class="form-control" name='password' id="password">
        </div>
        <div class="form-group">
            <label for="password_confirmation">Password Confirm:</label>
            <input type="password" class="form-control" name='password_confirmation' id="password_confirmation">
        </div>
        <button type="submit" class="btn btn-default">Submit</button>
    </form>
@endsection

