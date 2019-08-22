@extends('frontend.include.main') 

@section('content')
  
    
    <div class="site-blocks-cover overlay" style="background-image: url({{$contactpage->cover_image}});" data-aos="fade" data-stellar-background-ratio="0.5">
        <div class="container">
          <div class="row align-items-center justify-content-center">
            <div class="col-md-7 text-center" data-aos="fade">
              <span class="caption mb-3">{{$contactpage->page_subtitle}}</span>
            <h1 class="mb-4">{{$contactpage->page_title}}</h1>
            </div>
          </div>
        </div>
      </div>  

    
    <div class="site-section site-section-sm">
      <div class="container">
        <div class="row">
       
          <div class="col-md-12 col-lg-8 mb-5">
          
            
          
            <form action="{{route('contact.store')}}" method="POST" class="p-5 bg-white">
              @csrf

              <div class="row form-group">
                <div class="col-md-12 mb-3 mb-md-0">
                  <label class="font-weight-bold" for="fullname">Full Name</label>
                  <input type="text" name="name" id="fullname" class="form-control" placeholder="Full Name">
                </div>
              </div>
              <div class="row form-group">
                <div class="col-md-12">
                  <label class="font-weight-bold" for="email">Email</label>
                  <input type="email" name="email" id="email" class="form-control" placeholder="Email Address">
                </div>
              </div>


              <div class="row form-group">
                <div class="col-md-12 mb-3 mb-md-0">
                  <label class="font-weight-bold" for="phone">Phone</label>
                  <input type="text" name="phone" id="phone" class="form-control" placeholder="Phone #">
                </div>
              </div>

              <div class="row form-group">
                <div class="col-md-12">
                  <label class="font-weight-bold" for="message">Message</label> 
                  <textarea name="message" name="message" id="message" cols="30" rows="5" class="form-control" placeholder="Write your message here "></textarea>
                </div>
              </div>

              <div class="row form-group">
                <div class="col-md-12">
                  <input type="submit" value="Send Message" class="btn btn-primary pill px-4 py-2">
                </div>
              </div>

  
            </form>
          </div>

          <div class="col-lg-4">
            <div class="p-4 mb-3 bg-white">
              <h3 class="h5 text-black mb-3">Contact Info</h3>
              <p class="mb-0 font-weight-bold">Address</p>
              <p class="mb-4">{!! $site_setting->address !!}</p>

              <p class="mb-0 font-weight-bold">Phone</p>
              <p class="mb-4"><a href="tel:{{$site_setting->phone}}">{{$site_setting->phone}}</a>, &nbsp;<a href="tel:{{$site_setting->phone2}}">{{$site_setting->phone2}}</a></p>

              <p class="mb-0 font-weight-bold">Mobile</p>
              <p class="mb-4"><a href="tel:{{$site_setting->mobile}}">{{$site_setting->mobile}}</a>,&nbsp;<a href="tel:{{$site_setting->mobile2}}">{{$site_setting->mobile2}}</a></p>

              <p class="mb-0 font-weight-bold">Email Address</p>
              <p class="mb-4"><a href="#">{{$site_setting->email}}</a></p>

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
      </div>
    </div>
    


    
@endsection