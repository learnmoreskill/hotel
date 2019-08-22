@extends('frontend.include.main') 

@section('content')  
    
    <div class="site-blocks-cover overlay" style="background-image: url({{asset($eventpage->cover_image)}});" data-aos="fade" data-stellar-background-ratio="0.5">
        <div class="container">
          <div class="row align-items-center justify-content-center">
            <div class="col-md-7 text-center" data-aos="fade">
              <span class="caption mb-3">{{$eventpage->page_subtitle}}</span>
              <h1 class="mb-4">{{$eventpage->page_title}}</h1>
            </div>
          </div>
        </div>
      </div>  

      <div class="site-section">
          <div class="container">
            <div class="row align-items-center">
                <div class="col-md-5 ml-auto">
                
    
                    <div class="section-heading text-left">
                      <h2 style="margin-bottom:2rem!important;">{{$event->title}}</h2>
                      <h6>On {{date('d M Y',strtotime($event->event_date))}} &bullet; By <span style="color:black;"> {{$event->author}} </span></h6> 
                      

                    </div>
                  <p class="mb-4">{{$event->description}}</p>
                  </div>
              <div class="col-md-6 mb-5 mb-md-0">
                
                  <div class="img-border">
                   
                      
                      <img src="{{asset($event->image)}}" alt="" class="img-fluid">
                   
                  </div>
  
                
              </div>
             
            </div>
          </div>
        </div>

        
    
    
    @endsection