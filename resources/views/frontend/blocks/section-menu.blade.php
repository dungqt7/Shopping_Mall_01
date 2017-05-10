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
              <li><a href="{!!url('/')!!}"  style="font-size:22px">Home</a></li>

              <?php 
                $data=DB::table('category')->where('parent_id',0)->get();
               ?>
              @foreach($data as $value)
              <li><a href="" style="font-size:22px">{!!$value->cat_name!!}<span class="caret"></span></a>
                <ul class="dropdown-menu">
                <?php
                 $data1=DB::table('category')->where('parent_id',$value->id)->get();
                ?>
                  @foreach($data1 as $value1)
                 <li><a href="{!!url('loai-san-pham', [$value1->id,$value1->cat_name])!!}">{!!$value1->cat_name!!}</a>
                  </li> 
                  @endforeach
                </ul>
              </li>
              @endforeach
              <li><a href="{!!url('contact')!!}" style="font-size:22px" >Contact</a></li>
              <li><a href="" style="font-size:22px">Blog</a></li>
              <li><a href="" style="font-size:22px">About</a></li>
            </ul>

          </div><!--/.nav-collapse -->
        </div>
      </div>       
    </div>
  </section>
  