@extends('frontend.include.main') 

@section('content')

    <div class="site-blocks-cover overlay" style="background-image: url({{$about->cover_image}});" data-aos="fade" data-stellar-background-ratio="0.5">
        <div class="container">
          <div class="row align-items-center justify-content-center">
            <div class="col-md-7 text-center" data-aos="fade">
            <span class="caption mb-3">{{$about->page_subtitle}}</span>
              <h1 class="mb-4">{{$about->page_title}}</h1>
            </div>
          </div>
        </div>
      </div>  

    
      <div class="site-section">
        <div class="container">
          <div class="row align-items-center">
            <div class="col-md-6 mb-5 mb-md-0">
              
                <div class="img-border">
                    <img src="{{asset($about->image)}}" alt="" class="img-fluid">
                
                </div>
  
                <img src="{{asset($about->image)}}" alt="Image" class="img-fluid image-absolute">
              
            </div>
            <div class="col-md-5 ml-auto">
              
  
              <div class="section-heading text-left">
                <h2 class="mb-5">{{$about->content_title}}</h2>
              </div>
            <p class="mb-4">{!! $about->content !!}</p>
            </div>
          </div>
        </div>
      </div>


    <div class="site-section bg-light">
      <div class="container">
        <div class="row">
          <div class="col-md-6 mx-auto text-center mb-5 section-heading">
            <h2 class="mb-5">{{$hotelstaffpage->content_title}}</h2>
          </div>
        </div>
        <div class="row">
          @foreach($hotelstaff as $hs)
          <div class="col-md-6 col-lg-4 mb-5">
            <div class="hotel-room text-center" style="height:560px;">
              <img src="{{asset($hs->image)}}" style="height:306px"  alt="Image" class="img-fluid">
              <div class="p-4">
                <h3 class="heading mb-3">{{$hs->name}}</h3>
    
                  <p><a href="{{$hs->facebook}}" class="btn btn-sm btn-info"><span class="icon-facebook"></span></a>
                    <a href="{{$hs->twitter}}" class="btn btn-sm btn-success"><span class="icon-twitter"></span></a>
                    <a href="{{$hs->instagram}}" class="btn btn-sm btn-primary"><span class="icon-instagram"></span></a>
                  </p>
              <p>{{$hs->short_description}}</p>
                
              </div>
              
            </div>
          </div>
          @endforeach
          
        </div>
        <div class="row mt-5">
          <div class="col-md-12 text-center">
            
              {!! $hotelstaff->render() !!} 
           
          </div>
        </div>
      </div>
    </div>


    

    <div class="site-section">
      <div class="container">
        <div class="row">
          <div class="col-md-6 mx-auto text-center mb-5 section-heading">
            <h2 class="mb-5">Hotel Features</h2>
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
    </div>


 

    
  @endsection