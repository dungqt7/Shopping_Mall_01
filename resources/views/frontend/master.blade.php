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

    <!-- Google Font -->
    <link href='https://fonts.googleapis.com/css?family=Lato' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Raleway' rel='stylesheet' type='text/css'>
    

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  

  </head>
  <body> 
   <!-- wpf loader Two -->
    <!-- / wpf loader Two -->       
  <!-- SCROLL TOP BUTTON -->
    <a class="scrollToTop" href="#"><i class="fa fa-chevron-up"></i></a>
  <!-- END SCROLL TOP BUTTON -->

   @include('frontend.blocks.header')
   @include('frontend.blocks.section-menu')
   @include('frontend.blocks.slider')

  <!-- / slider -->
  <!-- Start Promo section -->

  <section id="aa-promo">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="aa-promo-area">
            <div class="row">
              <!-- promo left -->
              <div class="col-md-5 no-padding">                
                <div class="aa-promo-left">
                  <div class="aa-promo-banner">                    
                    <img src="{!!url('public/frontend/img/promo-banner-1.jpg')!!}" alt="img">                    
                    <div class="aa-prom-content">
                      <span>75% Off</span>
                      <h4><a href="#">For Women</a></h4>                      
                    </div>
                  </div>
                </div>
              </div>
              <!-- promo right -->
              <div class="col-md-7 no-padding">
                <div class="aa-promo-right">
                  <div class="aa-single-promo-right">
                    <div class="aa-promo-banner">                      
                      <img src="{!!url('public/frontend/img/promo-banner-3.jpg')!!}" alt="img">                      
                      <div class="aa-prom-content">
                        <span>Exclusive Item</span>
                        <h4><a href="#">For Men</a></h4>                        
                      </div>
                    </div>
                  </div>
                  <div class="aa-single-promo-right">
                    <div class="aa-promo-banner">                      
                      <img src="{!!url('public/frontend/img/promo-banner-2.jpg')!!}" alt="img">                      
                      <div class="aa-prom-content">
                        <span>Sale Off</span>
                        <h4><a href="#">On Shoes</a></h4>                        
                      </div>
                    </div>
                  </div>
                  <div class="aa-single-promo-right">
                    <div class="aa-promo-banner">                      
                      <img src="{!!url('public/frontend/img/promo-banner-4.jpg')!!}" alt="img">                      
                      <div class="aa-prom-content">
                        <span>New Arrivals</span>
                        <h4><a href="#">For Kids</a></h4>                        
                      </div>
                    </div>
                  </div>
                  <div class="aa-single-promo-right">
                    <div class="aa-promo-banner">                      
                      <img src="{!!url('public/frontend/img/promo-banner-5.jpg')!!}" alt="img">                      
                      <div class="aa-prom-content">
                        <span>25% Off</span>
                        <h4><a href="#">For Bags</a></h4>                        
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
       
    </div>

  </section>
   @include('frontend.pages.section-product')
   @include('frontend.pages.section-category')
   @include('frontend.blocks.section-support')
   @include('frontend.blocks.section-testminion')
   @include('frontend.pages.section-blog')
   @include('frontend.blocks.section-subscribe')
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
  <!-- jQuery library -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
  <!-- Include all compiled plugins (below), or include individual files as needed -->
  <script src="{!!url('frontend/js/bootstrap.js')!!}"></script>  
  <!-- SmartMenus jQuery plugin -->
  <script type="text/javascript" src="{!!url('frontend/js/jquery.smartmenus.js')!!}"></script>
  <!-- SmartMenus jQuery Bootstrap Addon -->
  <script type="text/javascript" src="{!!url('frontend/js/jquery.smartmenus.bootstrap.js')!!}"></script>  
  <!-- Product view slider -->
  <script type="text/javascript" src="{!!url('frontend/js/jquery.simpleGallery.js')!!}"></script>
  <script type="text/javascript" src="{!!url('frontend/js/jquery.simpleLens.js')!!}"></script>
  <!-- slick slider -->
  <script type="text/javascript" src="{!!url('frontend/js/slick.js')!!}"></script>
  <!-- Price picker slider -->
  <script type="text/javascript" src="{!!url('frontend/js/nouislider.js')!!}"></script>
  <!-- Custom js -->
  <script src="{!!url('frontend/js/custom.js')!!}"></script> 
  <script src="{!!url('frontend/js/mai.js')!!}"></script> 

  </body>
</html>
