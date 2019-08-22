@extends('frontend.include.main') 

@section('content')  
    
    <div class="site-blocks-cover overlay" style="background-image: url({{asset($room->image)}});" data-aos="fade" data-stellar-background-ratio="0.5">
        <div class="container">
          <div class="row align-items-center justify-content-center">
            <div class="col-md-7 text-center" data-aos="fade">
              <span class="caption mb-3">{{$roompage->room_subtitle}}</span>
              <h1 class="mb-4">{{$room->name}}</h1>
            </div>
          </div>
        </div>
      </div>  

      <div class="site-section">
          <div class="container">
            <div class="row align-items-center">
                <div class="col-md-12  text-center">
                
    
                    {{-- <div class="section-heading text-left">
                      <h2 class="mb-5">{{$room->name}}</h2>
                    </div> --}}
                  <p class="mb-4" style="padding-left:70px;padding-right:70px;">{{$room->description}}</p>
                  </div>
              {{-- <div class="col-md-6 mb-5 mb-md-0">
                
                  <div class="img-border">
                      <img src="{{asset($room->image)}}" alt="" class="img-fluid">
                  </div>
    
                  <img src="{{asset($about->image)}}" alt="Image" class="img-fluid image-absolute">
                
              </div> --}}
              
            </div>
          </div>
        </div>

        <div class="site-section bg-light">
            <div class="container">
              <div class="row">
                <div class="col-md-6 mx-auto text-center mb-5 section-heading">
                  <h2 class="mb-5">Room Images</h2>
                </div>
              </div>
              <div class="row">
                @foreach($room_image as $hs)
                <div class="col-md-6 col-lg-4 mb-5">
                  <div class="hotel-room text-center">
                      <a href="{{asset($hs->image)}}" class="image-popup img-opacity"><img src="{{asset($hs->image)}}" alt="Image" class="img-fluid"></a>
                  </div>
                </div>
                @endforeach
                
              </div>
            </div>
          </div>
        

        {{-- <div class="site-section">
            <div class="container">
              <div class="row">
                <div class="col-md-6 mx-auto text-center mb-5 section-heading">
                  <h2 class="mb-5">Room Features</h2>
                </div>
              </div>
              <div class="row">
                <div class="col-sm-6 col-md-4 col-lg-3">
                  <div class="text-center p-4 item">
                    <span class="flaticon-pool display-3 mb-3 d-block text-primary"></span>
                    <h2 class="h5">Swimming Pool</h2>
                  </div>
                </div>
                <div class="col-sm-6 col-md-4 col-lg-3">
                  <div class="text-center p-4 item">
                    <span class="flaticon-desk display-3 mb-3 d-block text-primary"></span>
                    <h2 class="h5">Hotel Teller</h2>
                  </div>
                </div>
                <div class="col-sm-6 col-md-4 col-lg-3">
                  <div class="text-center p-4 item">
                    <span class="flaticon-exit display-3 mb-3 d-block text-primary"></span>
                    <h2 class="h5">Fire Exit</h2>
                  </div>
                </div>
                <div class="col-sm-6 col-md-4 col-lg-3">
                  <div class="text-center p-4 item">
                    <span class="flaticon-parking display-3 mb-3 d-block text-primary"></span>
                    <h2 class="h5">Car Parking</h2>
                  </div>
                </div>
      
                <div class="col-sm-6 col-md-4 col-lg-3">
                  <div class="text-center p-4 item">
                    <span class="flaticon-hair-dryer display-3 mb-3 d-block text-primary"></span>
                    <h2 class="h5">Hair Dryer</h2>
                  </div>
                </div>
      
                <div class="col-sm-6 col-md-4 col-lg-3">
                  <div class="text-center p-4 item">
                    <span class="flaticon-minibar display-3 mb-3 d-block text-primary"></span>
                    <h2 class="h5">Minibar</h2>
                  </div>
                </div>
                <div class="col-sm-6 col-md-4 col-lg-3">
                  <div class="text-center p-4 item">
                    <span class="flaticon-drink display-3 mb-3 d-block text-primary"></span>
                    <h2 class="h5">Drinks</h2>
                  </div>
                </div>
                <div class="col-sm-6 col-md-4 col-lg-3">
                  <div class="text-center p-4 item">
                    <span class="flaticon-cab display-3 mb-3 d-block text-primary"></span>
                    <h2 class="h5">Car Airport</h2>
                  </div>
                </div>
    
                
      
              </div>
            </div>
          </div> --}}
      
    
    
    @endsection