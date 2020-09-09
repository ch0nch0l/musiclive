<span id="main_site">
    <div id="page-wrapper">
        <div class="inner-content">

            <div class="music-left">
                <!--banner-section-->
                <div class="banner-section">
                    <div class="banner">
                        <div class="callbacks_container">
                            <ul class="rslides callbacks callbacks1" id="slider4">

                                @foreach ($music_list['slider'] as $items)
                                <li>
                                    <div class="banner-img">
                                        <img style="width: 100%"
                                            src="{{asset('../storage/app/public/album_banner/'.$items->id.'.jpeg')}}"
                                            class="img-responsive" alt="">
                                    </div>
                                    <div class="banner-info">
                                        <a class="trend" href="single.html">{{$items->genre}}</a>
                                        <h3>{{$items->album_name}}</h3>
                                        <p>Album by <span>{{$items->artist_name}}</span></p>
                                    </div>

                                </li>
                                @endforeach


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
                                    pager: true,
                                    nav: true,
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
                    $(document).ready(function () {
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
                        <h3 class="tittle">Beats <span class="new">New</span></h3>
                        <a href="index.html">
                            <h4 class="tittle">See all</h4>
                        </a>
                        <div class="clearfix"> </div>
                    </div>
                    @foreach ($music_list['new_release'] as $nr)
                    
                    <div class="col-md-3 artist-grid">
                        <a  href="javascript:void(0)" onclick="playMusic('{{$nr->id}}')"><img src="{{asset('../storage/app/public/album_art/'.$nr->id.'.jpeg')}}" title="allbum-name"></a>
                         <a href="javascript:void(0)" onclick="playMusic('{{$nr->id}}')"><i class="glyphicon glyphicon-play-circle" id="music_id_{{$nr->id}}"></i></a>
                                <a class="art"  href="javascript:void(0)">{{$nr->album_name}}</a>
                        </div>
                    @endforeach
                </div>
                <!--//End-albums-->
                <!--//discover-view-->

            </div>
            <div class="clearfix"></div>
            <!--body wrapper end-->
            <!-- /w3l-agile -->
        </div>
        <script>
            function playMusic(that_data){
                var media_src = '../storage/app/public/mp3/'+that_data+'.mp3';
                document.getElementById("audio-player").src = media_src;
                if($("#audio-player")[0].currentTime > 0){
                $("#audio-player").each(function(){this.player.pause()})
                }else{
                $("#audio-player").each(function(){this.player.play()})
                }
                var play_button = $("#music_id_"+that_data).attr('class', 'glyphicon glyphicon-play-circlce');
                console.log(play_button);
                $("#music_id_"+that_data).removeClass().addClass("glyphicon glyphicon-pause")
                
                
                
            }
        function nextSong(){

        }
        function preSong(){

        }
        </script>