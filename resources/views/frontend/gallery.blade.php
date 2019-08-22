@extends('frontend.include.main') 

@section('content')  
    
    <div class="site-blocks-cover overlay" style="background-image: url({{$gallerypage->cover_image}});" data-aos="fade" data-stellar-background-ratio="0.5">
        <div class="container">
          <div class="row align-items-center justify-content-center">
            <div class="col-md-7 text-center" data-aos="fade">
              <span class="caption mb-3">{{$gallerypage->page_subtitle}}</span>
              <h1 class="mb-4">{{$gallerypage->page_title}}</h1>
            </div>
          </div>
        </div>
      </div>  

    
      <div class="site-section">
        <div class="container">
          <div class="row">
            <div class="col-md-6 mx-auto text-center mb-5 section-heading">
              <h2 class="mb-5">Our Gallery</h2>
            </div>
          </div>
          <div class="row no-gutters">
            @foreach($gallery as $g)
            <div class="col-md-6 col-lg-3">
              <a href="{{asset($g->image)}}" class="image-popup img-opacity"><img src="{{asset($g->image)}}" alt="Image" class="img-fluid"></a>
            </div>
            @endforeach
            
  
          </div>
          <div class="row mt-5">
            <div class="col-md-12 text-center">
              
                {!! $gallery->render() !!} 
             
            </div>
          </div>
        </div>
      </div>

      
    
    
    @endsection