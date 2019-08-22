@extends('frontend.include.main') 

@section('content')  
    
    <div class="site-blocks-cover overlay" style="background-image: url({{$roompage->cover_image}});" data-aos="fade" data-stellar-background-ratio="0.5">
        <div class="container">
          <div class="row align-items-center justify-content-center">
            <div class="col-md-7 text-center" data-aos="fade">
              <span class="caption mb-3">{{$roompage->room_subtitle}}</span>
              <h1 class="mb-4">{{$roompage->room_title}}</h1>
            </div>
          </div>
        </div>
      </div>  

    
      <div class="site-section bg-light">
          <div class="container">
            <div class="row">
              <div class="col-md-6 mx-auto text-center mb-5 section-heading">
                <h2 class="mb-5">Our Rooms</h2>
              </div>
            </div>
            <div class="row">
              @foreach ($room as $item)
              <div class="col-md-6 col-lg-4 mb-5">
                <div class="hotel-room text-center">
                <a href="{{route('roomSingle.view',$item->slug)}}" class="d-block mb-0 thumbnail"><img src="{{asset($item->image)}}" alt="Image" class="img-fluid"></a>
                  <div class="hotel-room-body">
                    <h3 class="heading mb-0"><a href="{{route('roomSingle.view',$item->slug)}}">{{$item->name}}</a></h3>
                  <strong class="price">{{$item->price}}</strong>
                  </div>
                </div>
              </div>
              @endforeach
             
            </div>

            <div class="row mt-5">
                <div class="col-md-12 text-center">
                  
                    {!! $room->render() !!} 
                 
                </div>
              </div>
          </div>
        </div>
    
    
    @endsection