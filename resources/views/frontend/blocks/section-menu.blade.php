 <section id="menu">
    <div class="container">
      <div class="menu-area">
        <!-- Navbar -->
        <div class="navbar navbar-default" role="navigation">
          <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
              <span class="sr-only">Toggle navigation</span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
            </button>          
          </div>
          <div class="navbar-collapse collapse">
            <!-- Left nav -->
            <ul class="nav navbar-nav">
              <li><a href="index.html">Home</a></li>
               @foreach( $categories as $cat)
              <li><a href="#">{{$cat->cate_name}} <span class="caret"></span></a>
              
                <ul class="dropdown-menu">
                @foreach( $cat->child as $child)
                  <li><a href="#">{{$child->cate_name}}</a></li>
                 @endforeach
                </ul>
               
              </li>
              @endforeach
             
              <li><a href="blog-archive.html">Blog <span class="caret"></span></a>
              </li>
              <li><a href="contact.html">Contact</a></li>
             
            </ul>
          </div><!--/.nav-collapse -->
        </div>
      </div>       
    </div>
  </section>