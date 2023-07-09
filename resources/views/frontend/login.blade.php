@extends('master.master')
@section('title')
<title>Login</title>
@endsection

@section('content')



<!-- class=" bg-light position-relative w-50 p-3 border border-dark" -->
<div class=" mx-auto bg-dark text-dark">.</div>
<div class="mx-auto my-3 bg-light  w-50 p-3 border border-dark">
    <h2>LOG IN</h2>
    <form class="row m-0" method="post" action="{{ route('postlogin') }}">
        @csrf
        <div class="form-group">
            <label class="control-label">Email :</label>
            <input type="text" name="email" class="form-control">
        </div>
        <div class="form-group">
            <label class="control-label">Password :</label>
            <input type="password" name="password" class="form-control">
        </div>
        <div>
            <input type="checkbox" id="remember" name="remember">
            <label for="remember">Remember Me</label>
        </div>
        <div class="mybutton">
            <button type="submit">login</button>
            
            <a href="/signup">Registration</a>
        </div>
    </form>
</div>



@endsection