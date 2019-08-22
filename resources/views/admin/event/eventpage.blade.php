
@extends('admin.include.main')
@section('content')

<div class="pcoded-content">
    <!-- Page-header start -->
    <div class="page-header">
        <div class="page-block">
            <div class="row align-items-center">
                <div class="col-md-8">
                    <div class="page-header-title">
                        <h5 class="m-b-10">About Event</h5>
                        <p class="m-b-0">Insert the Events of the hotel</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <ul class="breadcrumb">
                        <li class="breadcrumb-item">
                            <a href="{{route('dashboard')}}"> <i class="fa fa-home"></i> </a>
                        </li>
                        <li class="breadcrumb-item">About Hotel
                        </li>
                        
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!-- Page-header end -->
    <div class="pcoded-inner-content">
        <!-- Main-body start -->
        <div class="main-body">
            <div class="page-wrapper">

                <!-- Page body start -->
                <div class="page-body">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="card">
                                <div class="card-header">
                                    <h5>Detail About Hotel</h5>
                                    <!--<span>Add class of <code>.form-control</code> with <code>&lt;input&gt;</code> tag</span>-->
                                </div>
                                <div class="card-block">
                                <form class="form-material" action="{{route('eventpage.update',$eventpage->id)}}" method="POST" enctype="multipart/form-data" autocomplete="off">
                                      @csrf
                                    <div class="form-group form-default">
                                        <input type="text" name="page_title" value="{{$eventpage->page_title}}" class="form-control" required="">
                                            <span class="form-bar"></span>
                                            <label class="float-label">Page Title</label>
                                        </div>
                                        <div class="form-group form-default">
                                            <input type="text" name="page_subtitle" value="{{$eventpage->page_subtitle}}" class="form-control">
                                            <span class="form-bar"></span>
                                            <label class="float-label">Page Subtitle</label>
                                        </div>

                                            <div class="form-group row">
                                                <label class="col-sm-3 col-form-label">Upload Page Cover</label>
                                                <div class="col-sm-9">
                                                    @if(isset($eventpage->cover_image))
                                                    <img src="{{asset($eventpage->cover_image)}}" id="current_image" alt="{{$eventpage->page_title}}" height="100px" width="100px"><br><br>
                                                    @endif  
                                                    <input type="file" name="cover_image" id="image" value="{{$eventpage->cover_image}}" class="form-control">
                                                </div>
                                            </div>    
                                              
                                                <div class="card-header">
                                                        <h5>SEO Contents</h5>
                                                </div>  
                                                <div class="card-block">
                                                    <div class="form-group form-default">
                                                        <input type="text" name="seo_title" value="{{$eventpage->seo_title}}" max="60" placeholder=" Enter SEO Title" class="form-control">
                                                            <span class="form-bar"></span>
                                                            <label class="float-label">SEO Title</label>
                                                    </div>
                                                    <div class="form-group form-default">
                                                        <input type="text" name="seo_slug" value="{{$eventpage->seo_slug}}" max="60" placeholder="Enter SEO slug" class="form-control">
                                                        <span class="form-bar"></span>
                                                        <label class="float-label">SEO slug</label>
                                                    </div>
                                                    <div class="form-group form-default">
                                                            <input type="text" name="focus_keyphrase" value="{{$eventpage->focus_keyphrase}}" max="4" placeholder="Enter Focus Keyphrase" class="form-control">
                                                                <span class="form-bar"></span>
                                                                <label class="float-label">Focus Keyphrase</label>
                                                    </div>
                                                    <div class="form-group form-default">
                                                        <input type="text" name="meta_description" placeholder="Enter Meta Description" max="160" value="{{$eventpage->meta_description}}" class="form-control">
                                                        <span class="form-bar"></span>
                                                        <label class="float-label">Meta Description</label>
                                                    </div>  
                                                </div>
                                                <button type="submit" class="btn btn-success">Submit</button>
                                        
                                    </form>
                                </div>
                            </div>
                        </div>
                        
                    </div>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

    <script type="text/javascript">
        function readURL(input) {
                if (input.files && input.files[0]) {
                    var reader = new FileReader();

                    reader.onload = function (e) {
                        $('#current_image').attr('src', e.target.result);
                    }
                    reader.readAsDataURL(input.files[0]);
                }
            }
            $("#image").change(function(){
                readURL(this);
            });
    </script>      
                   
@endsection