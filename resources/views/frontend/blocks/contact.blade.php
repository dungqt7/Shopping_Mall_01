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
 @include('frontend.blocks.header')
 @include('frontend.blocks.section-menu')
 <section id="aa-catg-head-banner">
   <img src="{!!url('public/frontend/img/fashion/fashion-header-bg-8.jpg')!!}" alt="fashion img" style="height: 80%">
   <div class="aa-catg-head-banner-area">
     <div class="container">
      <div class="aa-catg-head-banner-content">
        <h2>Contact</h2>
        <ol class="breadcrumb">
          <li><a href="index.html">Home</a></li>         
          <li class="active">Contact</li>
        </ol>
      </div>
     </div>
   </div>
  </section>
  <!-- / catg header banner section -->
<!-- start contact section -->
 <section id="aa-contact">
   <div class="container">
     <div class="row">
       <div class="col-md-12">
         <div class="aa-contact-area">
           <div class="aa-contact-top">
             <h2>We are wating to assist you..</h2>
             <p>Simply, call, email or use the form below to get in touch.</p>
           </div>
           <!-- contact map -->
           <div class="aa-contact-map">
              <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3724.579938611264!2d105.85363031450439!3d21.009468986008844!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3135abf5aeab3489%3A0x9f30c5a7fd036e19!2zNDM0IFRy4bqnbiBLaMOhdCBDaMOibiwgUGjhu5EgSHXhur8sIEhhaSBCw6AgVHLGsG5nLCBIw6AgTuG7mWksIFZp4buHdCBOYW0!5e0!3m2!1svi!2s!4v1492566904888" width="100%" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
           </div>
           <!-- Contact address -->
           <div class="aa-contact-address">
             <div class="row">
               <div class="col-md-8">
                 <div class="aa-contact-address-left">
                   <form class="comments-form contact-form" action="">
                    <div class="row">
                      <div class="col-md-6">
                        <div class="form-group">                        
                          <input type="text" placeholder="Your Name" class="form-control">
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="form-group">                        
                          <input type="email" placeholder="Email" class="form-control">
                        </div>
                      </div>
                    </div>
                     <div class="row">
                      <div class="col-md-6">
                        <div class="form-group">                        
                          <input type="text" placeholder="Subject" class="form-control">
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="form-group">                        
                          <input type="text" placeholder="Company" class="form-control">
                        </div>
                      </div>
                    </div>                  
                     
                    <div class="form-group">                        
                      <textarea class="form-control" rows="3" placeholder="Message"></textarea>
                    </div>
                    <button class="aa-secondary-btn">Send</button>
                  </form>
                 </div>
               </div>
               <div class="col-md-4">
                 <div class="aa-contact-address-right">
                   <address>
                     <h4>DailyShop</h4>
                     <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Rerum modi dolor facilis! Nihil error, eius.</p>
                     <p><span class="fa fa-home"></span>Huntsville, AL 35813, USA</p>
                     <p><span class="fa fa-phone"></span>+ 021.343.7575</p>
                     <p><span class="fa fa-envelope"></span>Email: support@dailyshop.com</p>
                   </address>
                 </div>
               </div>
             </div>
           </div>
         </div>
       </div>
     </div>
   </div>
 </section>

  <!-- Subscribe section -->
  <section id="aa-subscribe">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="aa-subscribe-area">
            <h3>Subscribe our newsletter </h3>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ex, velit!</p>
            <form action="" class="aa-subscribe-form">
              <input type="email" name="" id="" placeholder="Enter your Email">
              <input type="submit" value="Subscribe">
            </form>
          </div>
        </div>
      </div>
    </div>
  </section>
  @include('frontend.blocks.footer')

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
