<span id="main_site">
          <div id="page-wrapper">
              <div class="inner-content">
              
                    <div class="music-left">
                        <!--banner-section-->
                          <div class="banner-section">
                              <div class="banner">
                                   <div class="callbacks_container">
                                      <ul class="rslides callbacks callbacks1" id="slider4">
                                                 <li>
                                                      <div class="banner-img">
                                                           <img src="website/images/11.jpg" class="img-responsive" alt="">
                                                       </div>
                                                      <div class="banner-info">
                                                                    <a class="trend" href="single.html">TRENDING</a>
                                                                    <h3>Let Your Home</h3>
                                                                    <p>Album by <span>Rock star</span></p>
                                                       </div>

                                              </li>
                                              <li>
                                                  <div class="banner-img">
                                                           <img src="website/images/22.jpg" class="img-responsive" alt="">
                                                       </div>
                                                      <div class="banner-info">
                                                                    <a class="trend" href="single.html">TRENDING</a>
                                                                    <h3>Charis Brown feet</h3>
                                                                    <p>Album by <span>Rock star</span></p>
                                                       </div>


                                              </li>
                                              <li>
                                               <div class="banner-img">
                                                           <img src="website/images/33.jpg" class="img-responsive" alt="">
                                                       </div>
                                                      <div class="banner-info"> 
                                                                   <a class="trend" href="single.html">TRENDING</a>
                                                                    <h3>Let Your Home</h3>
                                                                    <p>Album by <span>Rock star</span></p>
                                                       </div>

                                                    <!-- /w3layouts-agileits -->
                                              </li>
                                          </ul>
                                      </div>
                                      <!--banner-->
                                  <script src="{{asset('website/js/responsiveslides.min.js')}}"></script>
                               <script>
                                  // You can also use "$(window).load(function() {"
                                  $(function () {
                                    // Slideshow 4
                                    $("#slider4").responsiveSlides({
                                      auto: true,
                                      pager:true,
                                      nav:true,
                                      speed: 500,
                                      namespace: "callbacks",
                                      before: function () {
                                        $('.events').append("<li>before event fired.</li>");
                                      },
                                      after: function () {
                                        $('.events').append("<li>after event fired.</li>");
                                      }
                                    });
                              
                                  });
                                </script>
                              <div class="clearfix"> </div>
                          </div>
                      </div>	
              <!--//End-banner-->
                  <!--albums-->
                  <!-- pop-up-box --> 
                          <link href="{{asset('website/css/popuo-box.css')}}" rel="stylesheet" type="text/css" media="all">
                          <script src="{{asset('website/js/jquery.magnific-popup.js')}}" type="text/javascript"></script>
                           <script>
                                  $(document).ready(function() {
                                  $('.popup-with-zoom-anim').magnificPopup({
                                      type: 'inline',
                                      fixedContentPos: false,
                                      fixedBgPos: true,
                                      overflowY: 'auto',
                                      closeBtnInside: true,
                                      preloader: false,
                                      midClick: true,
                                      removalDelay: 300,
                                      mainClass: 'my-mfp-zoom-in'
                                  });
                                  });
                          </script>		
                  <!--//pop-up-box -->
                      <div class="albums">
                              <div class="tittle-head">
                                  <h3 class="tittle">New Releases <span class="new">New</span></h3>
                                  <a href="index.html"><h4 class="tittle">See all</h4></a>
                                  <div class="clearfix"> </div>
                              </div>
                              <div class="col-md-3 content-grid">
                              <a class="play-icon popup-with-zoom-anim" href="#small-dialog"><img src="website/images/v1.jpg" title="allbum-name"></a>
                              <a class="button play-icon popup-with-zoom-anim" href="#small-dialog">Listen now</a>
                          </div>
                          <div id="small-dialog" class="mfp-hide">
                              <iframe src="https://player.vimeo.com/video/12985622"></iframe>
                              
                          </div>
                          <div class="col-md-3 content-grid">
                              <a class="play-icon popup-with-zoom-anim" href="#small-dialog"><img src="website/images/v2.jpg" title="allbum-name"></a>

                              <a class="button play-icon popup-with-zoom-anim" href="#small-dialog">Listen now</a>
                          </div>
                          <div class="col-md-3 content-grid">
                              <a class="play-icon popup-with-zoom-anim" href="#small-dialog"><img src="website/images/v3.jpg" title="allbum-name"></a>

                              <a class="button play-icon popup-with-zoom-anim" href="#small-dialog">Listen now</a>
                          </div>
                          <div class="col-md-3 content-grid last-grid">
                              <a class="play-icon popup-with-zoom-anim" href="#small-dialog"><img src="website/images/v4.jpg" title="allbum-name"></a>
  
                              <a class="button play-icon popup-with-zoom-anim" href="#small-dialog">Listen now</a>
                          </div>
                          <div class="col-md-3 content-grid">
                              <a class="play-icon popup-with-zoom-anim" href="#small-dialog"><img src="website/images/v5.jpg" title="allbum-name"></a>

                              <a class="button play-icon popup-with-zoom-anim" href="#small-dialog">Listen now</a>
                          </div>
                          <div id="small-dialog" class="mfp-hide">
                              <iframe src="https://player.vimeo.com/video/12985622"></iframe>
                              
                          </div>
                          <div class="col-md-3 content-grid">
                              <a class="play-icon popup-with-zoom-anim" href="#small-dialog"><img src="website/images/v6.jpg" title="allbum-name"></a>
      
                              <a class="button play-icon popup-with-zoom-anim" href="#small-dialog">Listen now</a>
                          </div>
                          <div class="col-md-3 content-grid">
                              <a class="play-icon popup-with-zoom-anim" href="#small-dialog"><img src="website/images/v7.jpg" title="allbum-name"></a>

                              <a class="button play-icon popup-with-zoom-anim" href="#small-dialog">Listen now</a>
                          </div>
                          <div class="col-md-3 content-grid last-grid">
                              <a class="play-icon popup-with-zoom-anim" href="#small-dialog"><img src="website/images/v8.jpg" title="allbum-name"></a>
                                              <a class="button play-icon popup-with-zoom-anim" href="#small-dialog">Listen now</a>
                                          </div>
                                          <div class="clearfix"> </div>
                                      </div>
                  <!--//End-albums-->
                      <!--//discover-view-->
                      
                      <div class="albums second">
                                      <div class="tittle-head">
                                          <h3 class="tittle">Discover <span class="new">View</span></h3>
                                          <a href="index.html"><h4 class="tittle two">See all</h4></a>
                                          <div class="clearfix"> </div>
                                      </div>
                                          <div class="col-md-3 content-grid">
                                              <a href="single.html"><img src="website/images/v11.jpg" title="allbum-name"></a>
                                              <div class="inner-info"><a href="single.html"><h5>Pop</h5></a></div>
                                          </div>
                                          <div class="col-md-3 content-grid">
                                                  <a href="single.html"><img src="website/images/v22.jpg" title="allbum-name"></a>
                                                  <div class="inner-info"><a href="single.html"><h5>Pop</h5></a></div>
                                              </div>
                                          <div class="col-md-3 content-grid">
                                                  <a href="single.html"><img src="website/images/v33.jpg" title="allbum-name"></a>
                                                  <div class="inner-info"><a href="single.html"><h5>Pop</h5></a></div>
                                              </div>
                                          <div class="col-md-3 content-grid last-grid">
                                                  <a href="single.html"><img src="website/images/v44.jpg" title="allbum-name"></a>
                                                  <div class="inner-info"><a href="single.html"><h5>Pop</h5></a></div>
                                          </div>
                                          <div class="col-md-3 content-grid">
                                                  <a href="single.html"><img src="website/images/v55.jpg" title="allbum-name"></a>
                                                  <div class="inner-info"><a href="single.html"><h5>Pop</h5></a></div>
                                          </div>
                                          <div class="col-md-3 content-grid">
                                              <a href="single.html"><img src="website/images/v66.jpg" title="allbum-name"></a>
                                              <div class="inner-info"><a href="single.html"><h5>Pop</h5></a></div>
                                          </div>
                                          <div class="col-md-3 content-grid">
                                                  <a href="single.html"><img src="website/images/v11.jpg" title="allbum-name"></a>
                                                  <div class="inner-info"><a href="single.html"><h5>Pop</h5></a></div>
                                          </div>
                                          <div class="col-md-3 content-grid last-grid">
                                                  <a href="single.html"><img src="website/images/v22.jpg" title="allbum-name"></a>
                                                  <div class="inner-info"><a href="single.html"><h5>Pop</h5></a></div>
                                          </div>
                                          <div class="clearfix"> </div>
                                  </div>
                              <!--//discover-view-->
                          </div>
                          <!--//music-left-->
                          
                                          <div class="clearfix"></div>
                <!-- /w3l-agile-its -->
                                      </div>
                      <!--body wrapper start-->
                      
                      <div class="review-slider">
                              <div class="tittle-head">
                                  <h3 class="tittle">Featured Albums <span class="new"> New</span></h3>
                                  <div class="clearfix"> </div>
                              </div>
                               <ul id="flexiselDemo1">
                              <li>
                                  <a href="single.html"><img src="website/images/v1.jpg" alt=""/></a>
                                  <div class="slide-title"><h4>Adele21 </div>
                                  <div class="date-city">
                                      <h5>Jan-02-16</h5>
                                      <div class="buy-tickets">
                                          <a href="single.html">READ MORE</a>
                                      </div>
                                  </div>
                              </li>
                              <li>
                                  <a href="single.html"><img src="website/images/v2.jpg" alt=""/></a>
                                  <div class="slide-title"><h4>Adele21</h4></div>
                                  <div class="date-city">
                                      <h5>Jan-02-16</h5>
                                      <div class="buy-tickets">
                                          <a href="single.html">READ MORE</a>
                                      </div>
                                  </div>
                              </li>
                              <li>
                                  <a href="single.html"><img src="website/images/v3.jpg" alt=""/></a>
                                  <div class="slide-title"><h4>Shomlock</h4></div>
                                  <div class="date-city">
                                      <h5>Jan-02-16</h5>
                                      <div class="buy-tickets">
                                          <a href="single.html">READ MORE</a>
                                      </div>
                                  </div>
                              </li>
                              <li>
                                  <a href="single.html"><img src="website/images/v4.jpg" alt=""/></a>
                                  <div class="slide-title"><h4>Stuck on a feeling</h4></div>
                                  <div class="date-city">
                                      <h5>Jan-02-16</h5>
                                      <div class="buy-tickets">
                                          <a href="single.html">READ MORE</a>
                                      </div>
                                  </div>
                              </li>
                              <li>
                                  <a href="single.html"><img src="website/images/v5.jpg" alt=""/></a>
                                  <div class="slide-title"><h4>Ricky Martine </h4></div>
                                  <div class="date-city">
                                      <h5>Jan-02-16</h5>
                                      <div class="buy-tickets">
                                          <a href="single.html">READ MORE</a>
                                      </div>
                                  </div>
                              </li>
                              <li>
                                  <a href="single.html"><img src="website/images/v6.jpg" alt=""/></a>
                                  <div class="slide-title"><h4>Ellie Goluding </h4></div>
                                  <div class="date-city">
                                      <h5>Jan-02-16</h5>
                                      <div class="buy-tickets">
                                          <a href="single.html">READ MORE</a>
                                      </div>
                                  </div>
                              </li>
                              <li>
                                  <a href="single.html"><img src="website/images/v6.jpeg" alt=""/></a>
                                  <div class="slide-title"><h4>Fifty Shades </h4></div>
                                  <div class="date-city">
                                      <h5>Jan-02-16</h5>
                                      <div class="buy-tickets">
                                          <a href="single.html">READ MORE</a>
                                      </div>
                                  </div>
                              </li>
                          </ul>
                          <script type="text/javascript">
                      $(window).load(function() {
                          
                        $("#flexiselDemo1").flexisel({
                              visibleItems: 5,
                              animationSpeed: 1000,
                              autoPlay: true,
                              autoPlaySpeed: 3000,    		
                              pauseOnHover: false,
                              enableResponsiveBreakpoints: true,
                              responsiveBreakpoints: { 
                                  portrait: { 
                                      changePoint:480,
                                      visibleItems: 2
                                  }, 
                                  landscape: { 
                                      changePoint:640,
                                      visibleItems: 3
                                  },
                                  tablet: { 
                                      changePoint:800,
                                      visibleItems: 4
                                  }
                              }
                          });
                          });
                      </script>
                      <script type="text/javascript" src="{{asset('website/js/jquery.flexisel.js')}}"></script>	
                      </div>
                              </div>
                          <div class="clearfix"></div>
                      <!--body wrapper end-->
    <!-- /w3l-agile -->
                  </div>
