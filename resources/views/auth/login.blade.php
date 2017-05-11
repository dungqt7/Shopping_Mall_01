@extends('layouts.app')

@section('content')
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title></title>

    <!-- Google Fonts -->
    <link rel="stylesheet" href="{!!url('login/css/animate.css')!!}">
    <!-- Custom Stylesheet -->
    <link rel="stylesheet" href="{!!url('login/css/style.css')!!}">

</head>

<body>
@if(count($errors)>0)
<ul>
   @foreach($errors->all() as $error )
    
    <li> {!!$error!!}</li>
    @endforeach
</ul>
@endif
 <form id="demo-form2" data-parsley-validate class="form-horizontal form-label-left" method="POST" action="{!!route('postlogin')!!}">
  <input type="hidden" name="_token" value="{{ csrf_token() }}">
    <div class="container">
        <div class="top">
            <h1 id="title" class="hidden"><span id="logo">Daily <span>UI</span></span></h1>
        </div>

        <div class="login-box animated fadeInUp">
            <div class="box-header">
                <h2>Log In</h2>
            </div>
            <label for="email">Email</label>

            <br/>
            <input type="text" name="email" >
            
            <br/>
            {!!$errors->first('email')!!}<br/>
            <label for="password">Password</label>
            <br/>
            <input type="password"  name="password">
              
            <br/>
            {!!$errors->first('password')!!}<br/>

            <button type="submit">Sign In</button>
            <br/>
            <a href="#"><p class="small">Forgot your password?</p></a>
        </div>
    </div>
    </form>
</body>
</html>
@endsection
    