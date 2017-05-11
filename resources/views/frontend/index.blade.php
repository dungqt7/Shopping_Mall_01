<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">    
  <title>Daily Shop | Home</title>

  <!-- Font awesome -->
  <link href="{!!url('public/frontend/css/font-awesome.css')!!}" rel="stylesheet">
  <!-- Bootstrap -->
  <link href="{!!url('public/frontend/css/bootstrap.css')!!}" rel="stylesheet">   
  <!-- SmartMenus jQuery Bootstrap Addon CSS -->
  <link href="{!!url('public/frontend/css/jquery.smartmenus.bootstrap.css')!!}" rel="stylesheet">
  <!-- Product view slider -->
  <link rel="stylesheet" type="text/css" href="{!!url('public/frontend/css/jquery.simpleLens.css')!!}">    
  <!-- slick slider -->
  <link rel="stylesheet" type="text/css" href="{!!url('public/frontend/css/slick.css')!!}">
  <!-- price picker slider -->
  <link rel="stylesheet" type="text/css" href="{!!url('public/frontend/css/nouislider.css')!!}">
  <!-- Theme color -->
  <link id="switcher" href="{!!url('public/frontend/css/theme-color/default-theme.css')!!}" rel="stylesheet">
  <!-- <link id="switcher" href="css/theme-color/bridge-theme.css" rel="stylesheet"> -->

  <!-- Main style sheet -->
  <link href="{!!url('public/frontend/css/style.css')!!}" rel="stylesheet">    


</head>
<body> 
  <a class="scrollToTop" href="#"><i class="fa fa-chevron-up"></i></a>
  <!-- END SCROLL TOP BUTTON -->


  <!-- Start header section -->
  @include('frontend.blocks.header')
  <!-- / header section -->
  <!-- menu -->
  @include('frontend.blocks.section-menu')
  <!-- / menu -->
  <!-- Start slider -->
  @include('frontend.blocks.slider')
  <!-- / slider -->
  <!-- Start Promo section -->
  <!-- Products section -->
  @include('frontend.pages.section-product')
  <!-- / Products section -->
  <!-- banner section -->
  <!-- popular section -->
  @include('frontend.pages.section-category')
  <!-- / popular section -->
  <!-- Support section -->
  @include('frontend.blocks.section-support')
  <!-- / Support section -->
  <!-- Testimonial -->
  @include('frontend.blocks.section-testminion')
  <!-- / Testimonial -->

  <!-- Latest Blog -->
  <!-- / Latest Blog -->

  <!-- Client Brand -->
  @include('frontend.blocks.section-brand')
  <!-- / Client Brand -->

  <!-- Subscribe section -->
  @include('frontend.blocks.section-subscribe')
  <!-- / Subscribe section -->
  <!-- footer -->  
  @include('frontend.blocks.footer')
  <!-- / footer -->

  <!-- Login Modal -->  
  <div class="modal fade" id="login-modal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">                      
        <div class="modal-body">
          <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
          <h4>Login or Register</h4>
          <form class="aa-login-form" action="">
            <label for="">Username or Email address<span>*</span></label>
            <input type="text" placeholder="Username or email">
            <label for="">Password<span>*</span></label>
            <input type="password" placeholder="Password">
            <button class="aa-browse-btn" type="submit">Login</button>
            <label for="rememberme" class="rememberme"><input type="checkbox" id="rememberme"> Remember me </label>
            <p class="aa-lost-password"><a href="#">Lost your password?</a></p>
            <div class="aa-register-now">
              Don't have an account?<a href="account.html">Register now!</a>
            </div>
          </form>
        </div>                        
      </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
  </div>    

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
  <!-- Include all compiled plugins (below), or include individual files as needed -->
  <script src="{!!url('public/frontend/js/bootstrap.js')!!}"></script>  
  <!-- SmartMenus jQuery plugin -->
  <script type="text/javascript" src="{!!url('public/frontend/js/jquery.smartmenus.js')!!}"></script>
  <!-- SmartMenus jQuery Bootstrap Addon -->
  <script type="text/javascript" src="{!!url('public/frontend/js/jquery.smartmenus.bootstrap.js')!!}"></script>  
  <!-- Product view slider -->
  <script type="text/javascript" src="{!!url('public/frontend/js/jquery.simpleGallery.js')!!}"></script>
  <script type="text/javascript" src="{!!url('public/frontend/js/jquery.simpleLens.js')!!}"></script>
  <!-- slick slider -->
  <script type="text/javascript" src="{!!url('public/frontend/js/slick.js')!!}"></script>
  <!-- Price picker slider -->
  <script type="text/javascript" src="{!!url('public/frontend/js/nouislider.js')!!}"></script>
  <!-- Custom js -->
  <script src="{!!url('public/frontend/js/custom.js')!!}"></script> 
  <script src="{!!url('public/frontend/js/mai.js')!!}"></script>  

</body>
</html>