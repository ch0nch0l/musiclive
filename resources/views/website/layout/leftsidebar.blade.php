<section>
    <!-- left side start-->
      <div class="left-side sticky-left-side">

          <!--logo and iconic logo start-->
          <div class="logo">
              <h1><a href="javascript:void(0)" onclick="load_page('body')">L<span>AA</span></a></h1>
          </div>
          <div class="logo-icon text-center">
              <a href="javascript:void(0)" onclick="load_page('body')">L</a>
          </div>
    <!-- /w3l-agile -->
          <!--logo and iconic logo end-->
          <div class="left-side-inner">

              <!--sidebar nav start-->
                  <ul class="nav nav-pills nav-stacked custom-nav">
                      <li class="active"><a href="javascript:void(0)"><i class="lnr lnr-home" onclick="load_page('body')"></i><span>Home</span></a></li>
                      {{--  <li><a href="radio.html"><i class="camera"></i> <span>Radio</span></a></li>
                      <li><a href="#" data-toggle="modal" data-target="#myModal1"><i class="fa fa-th"></i><span>Apps</span></a></li>
                      <li><a href="radio.html"><i class="lnr lnr-users"></i> <span>Artists</span></a></li>   --}}
                      <li><a href="javascript:void(0)" onclick="load_page('beats')"><i class="lnr lnr-music-note"></i> <span>Beats</span></a></li>						
                      @if (session('loggedin')==true)
                      <li><a href="javascript:void(0)" onclick="load_page('wishlist')"><i class="lnr lnr-heart"></i> <span>Wishlist</span></a></li>						    
                      @endif
                      
                      {{--  <li class="menu-list"><a href="browse.html"><i class="lnr lnr-indent-increase"></i> <span>Browser</span></a>  
                          <ul class="sub-menu-list">
                              <li><a href="browse.html">Artists</a> </li>
                              <li><a href="404.html">Services</a> </li>
                          </ul>
                      </li>
                      <li><a href="blog.html"><i class="lnr lnr-book"></i><span>Blog</span></a></li>
                      <li><a href="typography.html"><i class="lnr lnr-pencil"></i> <span>Typography</span></a></li>
                      <li class="menu-list"><a href="#"><i class="lnr lnr-heart"></i>  <span>My Favourities</span></a> 
                          <ul class="sub-menu-list">
                              <li><a href="radio.html">All Songs</a></li>
                          </ul>
                      </li>  --}}
                      {{--  <li class="menu-list"><a href="contact.html"><i class="fa fa-thumb-tack"></i><span>Contact</span></a>
                          <ul class="sub-menu-list">
                              <li><a href="contact.html">Location</a> </li>
                          </ul>
                      </li>       --}}
                  </ul>
              <!--sidebar nav end-->
          </div>
      </div>
            <!-- /w3layouts-agile -->
                  <!-- app-->
          <div class="modal fade" id="myModal1" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
              <div class="modal-dialog facebook" role="document">
                  <div class="modal-content">
                      <div class="modal-header">
                          <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>						
                      </div>
                      <div class="modal-body">
                          <div class="app-grids">
                              <div class="app">
                      <div class="col-md-5 app-left mpl">
                          <h3>Mosaic mobile app on your smartphone!</h3>
                          <p>Download and Avail Special Songs Videos and Audios.</p>
                          <div class="app-devices">
                              <h5>Gets the app from</h5>
                              <a href="#"><img src="website/images/1.png" alt=""></a>
                              <a href="#"><img src="website/images/2.png" alt=""></a>
                              <div class="clearfix"> </div>
                          </div>
                      </div>
                      <div class="col-md-7 app-image">
                          <img src="website/images/apps.png" alt="">
                      </div>
                      <div class="clearfix"></div>
                  </div>
                          </div>
                      </div>
                  </div>
              </div>
          </div>
          <!-- //app-->
    <!--w3l-agile -->
    <!-- /w3l-agile -->
      <!-- left side end-->