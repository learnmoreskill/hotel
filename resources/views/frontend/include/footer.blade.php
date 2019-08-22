<footer class="site-footer">
    <div class="container">
      

      <div class="row">
        <div class="col-md-3">
          <h3 class="footer-heading mb-4 text-white">About</h3>
          <p>{!! str_limit($about->content, 150) !!}</p>
          <p><a href="{{route('about')}}" class="btn btn-primary pill text-white px-4">See More</a></p>
        </div>
        <div class="col-md-6">
          <div class="row">
            <div class="col-md-6">
              <h3 class="footer-heading mb-4 text-white text-center">Quick Menu</h3>
                <ul class="list-unstyled text-center" >
                    @foreach($menu_bar as $m)
                   <li><a href="{{route($m->title)}}">{{ucwords($m->title)}}</a></li>
                     @endforeach
                </ul>
            </div>
            <div class="col-md-6">
              <?php $room_list = \App\Room::take(6)->get();?>
              <h3 class="footer-heading mb-4 text-white text-center">Rooms</h3>
                <ul class="list-unstyled text-center">
                  @foreach($room_list as $rms)
                  <li><a href="{{route('roomSingle.view',$rms->slug)}}">{{$rms->name}}</a></li>
                  @endforeach
                </ul>
            </div>
          </div>
        </div>

        
        <div class="col-md-3 text-center">
          <div class="col-md-12"><h3 class="footer-heading mb-4 text-white">Contact Us</h3></div>
                <div class="mb-3">
                    <p class="mb-0 font-weight-bold">Address</p>
                    <p class="mb-4">{!! $site_setting->address !!}</p>
      
                    <p class="mb-0 font-weight-bold">Phone</p>
                    <p class="mb-4"><a href="tel:{{$site_setting->phone}}">{{$site_setting->phone}}</a>, &nbsp;<a href="tel:{{$site_setting->mobile}}">{{$site_setting->mobile}}</a></p>

      
                    <p class="mb-0 font-weight-bold">Email Address</p>
                    <p class="mb-4"><a href="email:{{$site_setting->email}}">{{$site_setting->email}}</a></p>

                    <p class="mb-0 font-weight-bold">Social Link</p>
                    <p class="mb-0">
                        <a href="{{$site_setting->facebook}}" class="pb-2 pr-2 pl-0"><span class="icon-facebook"></span></a>
                        <a href="{{$site_setting->twitter}}" class="p-2"><span class="icon-twitter"></span></a>
                        <a href="{{$site_setting->instagram}}" class="p-2"><span class="icon-instagram"></span></a>
                        <a href="{{$site_setting->youtube}}" class="p-2"><span class="icon-youtube"></span></a>
        
                      </p>
                  </div>

            
        </div>
      </div>
      <div class="row pt-5 mt-5 text-center">
        <div class="col-md-12">
          <p>
          <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
          Copyright &copy; <script data-cfasync="false" src="/cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script><script>document.write(new Date().getFullYear());</script> All Rights Reserved | This template is made with <i class="icon-heart text-primary" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank" >Colorlib</a>
          <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
          </p>
        </div>
        
      </div>
    </div>
  </footer>
</div>

<script src="{{asset('frontend/js/jquery-3.3.1.min.js')}}"></script>
<script src="{{asset('frontend/js/jquery-migrate-3.0.1.min.js')}}"></script>
<script src="{{asset('frontend/js/jquery-ui.js')}}"></script>
<script src="{{asset('frontend/js/popper.min.js')}}"></script>
<script src="{{asset('frontend/js/bootstrap.min.js')}}"></script>
<script src="{{asset('frontend/js/owl.carousel.min.js')}}"></script>
<script src="{{asset('frontend/js/jquery.stellar.min.js')}}"></script>
<script src="{{asset('frontend/js/jquery.countdown.min.js')}}"></script>
<script src="{{asset('frontend/js/jquery.magnific-popup.min.js')}}"></script>
<script src="{{asset('frontend/js/bootstrap-datepicker.min.js')}}"></script>
<script src="{{asset('frontend/js/aos.js')}}"></script>

<script  src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js" ></script>
    <script >
        @if(Session::has('success'))
       toastr.success('{{ Session::get('success') }}')
       @elseif(Session::has('error'))
       toastr.error('{{ Session::get('error') }}')
       @endif
       </script>

<script src="{{asset('frontend/js/mediaelement-and-player.min.js')}}"></script>

<script src="{{asset('frontend/js/main.js')}}"></script>
  

<script>
    document.addEventListener('DOMContentLoaded', function() {
              var mediaElements = document.querySelectorAll('video, audio'), total = mediaElements.length;

              for (var i = 0; i < total; i++) {
                  new MediaElementPlayer(mediaElements[i], {
                      pluginPath: 'https://cdn.jsdelivr.net/npm/mediaelement@4.2.7/build/',
                      shimScriptAccess: 'always',
                      success: function () {
                          var target = document.body.querySelectorAll('.player'), targetTotal = target.length;
                          for (var j = 0; j < targetTotal; j++) {
                              target[j].style.visibility = 'visible';
                          }
                }
              });
              }
          });
  </script>

</body>
</html>