@extends('frontend.include.main') 

@section('content')
  
    
    <div class="site-blocks-cover overlay" style="background-image: url({{$eventpage->cover_image}});" data-aos="fade" data-stellar-background-ratio="0.5">
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
        <div class="row">
          @foreach($event as $ev)
          <div class="col-md-6 col-lg-4 mb-5">
              <div class="media-with-text p-md-4">
                  <div class="img-border-sm mb-4">
                    <a href="{{route('eventSingle',$ev->slug)}}" class="popup-vimeo image-play">
                      <img src="{{asset($ev->image)}}" alt="" class="img-fluid">
                    </a>
                  </div>
                <h2 class="heading mb-0"><a href="{{route('eventSingle',$ev->slug)}}">{{$ev->title}}</a></h2>
                  <span class="mb-3 d-block post-date">{{date('d M Y',strtotime($ev->event_date))}} &bullet; By {{$ev->author}}</span>
                <p>{{str_limit($ev->description,150)}}</p>
                </div>
          </div>
          @endforeach
        </div>

        <div class="row mt-5">
          <div class="col-md-12 text-center">
            
              {!! $event->render() !!} 
           
          </div>
        </div>
      </div>
    </div>
    


@endsection