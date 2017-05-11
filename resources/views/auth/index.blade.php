<!DOCTYPE html>
<html >
<head>
  <meta charset="UTF-8">
  <title>Login Form</title>
  
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/meyer-reset/2.0/reset.min.css">

  
      <link rel="stylesheet" href="css/style.css">

  
</head>

<body>
  <div class="contain">
   <div id="close" class="close">Close</div>
</div>
<div class="containmain">
  <div class="center">
  @if(count($errors)>0) 
  <div class="profile">
   @foreach($errors->all() as $error )
    <p>
      {!!$error!!}
    </p>
    @endforeach
  </div>
  @endif()
  <form class="form" action="" method="post">
  <input type="hidden" name="_token"  value="{!!csrf_token()!!}">
  <input type="text" class="topform" placeholder="Username" name="fname"><br>
  <input type="password" class="bottomform" placeholder="Password" name="lname"><br>
  <input type="submit">
</form>
    </div>
</div>
  <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>

    <script src="js/index.js"></script>

</body>
</html>
