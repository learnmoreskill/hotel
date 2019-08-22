
@extends('admin.include.main')
@section('content')

<div class="pcoded-content">
    <!-- Page-header start -->
    <div class="page-header">
        <div class="page-block">
            <div class="row align-items-center">
                <div class="col-md-8">
                    <div class="page-header-title">
                        <h5 class="m-b-10">About Hotel</h5>
                        <p class="m-b-0">Insert the introduction of the hotel</p>
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
                                <form class="form-material" action="{{route('about.update',$about->id)}}" method="POST" enctype="multipart/form-data" autocomplete="off">
                                      @csrf
                                    <div class="form-group form-default">
                                        <input type="text" name="page_title" value="{{$about->page_title}}" class="form-control" required="">
                                            <span class="form-bar"></span>
                                            <label class="float-label">Page Title</label>
                                        </div>
                                        <div class="form-group form-default">
                                            <input type="text" name="page_subtitle" value="{{$about->page_subtitle}}" class="form-control">
                                            <span class="form-bar"></span>
                                            <label class="float-label">Page Subtitle</label>
                                        </div>
                                        
                                        <div class="form-group form-default">
                                            <input type="text" name="content_title" value="{{$about->content_title}}" class="form-control" required="">
                                            <span class="form-bar"></span>
                                            <label class="float-label">Content Title</label>
                                        </div>
                                    
                                        <div class="form-group form-default">
                                            <input type="text" name="video_link" value="{{$about->video_link}}" class="form-control">
                                            <span class="form-bar"></span>
                                            <label class="float-label">Video Link</label>
                                        </div>

                                        <div class="form-group form-default">
                                                <textarea name="content" id="editor" class="form-control">
                                                    {{$about->content}}
                                                </textarea>
                                                <span class="form-bar"></span>
                                                <label class="float-label">Content</label>
                                            </div>
                                    
                                        
                                            <div class="form-group row">
                                                <label class="col-sm-4 col-form-label">Upload Page Cover (Size limit < 2MB)</label>
                                                <div class="col-sm-8">
                                                    @if(isset($about->cover_image))
                                                    <img src="{{asset($about->cover_image)}}" id="display_image" alt="{{$about->page_title}}" height="100px" width="100px"><br><br>
                                                    @endif  
                                                <input type="file" name="cover_image" id="cover_image" value="{{$about->cover_image}}" class="form-control">
                                                </div>
                                                
                                            </div>

                                                <div class="form-group row">
                                                    <label class="col-sm-4 col-form-label">Upload Image (Size limit < 2MB)</label>
                                                    <div class="col-sm-8">
                                                            @if(isset($about->image))
                                                            <img src="{{asset($about->image)}}" id="current_image2" alt="{{$about->page_title}}" height="100px" width="100px"><br><br>
                                                            @endif
                                                        <input type="file" name="image" id="image2" value="{{$about->image}}" class="form-control">
                                                    </div>
                                              </div>          
                                                <div class="card-header">
                                                        <h5>SEO Contents</h5>
                                                </div>  
                                                <div class="card-block">
                                                    <div class="form-group form-default">
                                                        <input type="text" name="seo_title" value="{{$about->seo_title}}" max="60" placeholder=" Enter SEO Title" class="form-control">
                                                            <span class="form-bar"></span>
                                                            <label class="float-label">SEO Title</label>
                                                    </div>
                                                    <div class="form-group form-default">
                                                        <input type="text" name="seo_slug" value="{{$about->seo_slug}}" max="60" placeholder="Enter SEO slug" class="form-control">
                                                        <span class="form-bar"></span>
                                                        <label class="float-label">SEO slug</label>
                                                    </div>
                                                    <div class="form-group form-default">
                                                            <input type="text" name="focus_keyphrase" value="{{$about->focus_keyphrase}}" max="4" placeholder="Enter Focus Keyphrase" class="form-control">
                                                                <span class="form-bar"></span>
                                                                <label class="float-label">Focus Keyphrase</label>
                                                    </div>
                                                    <div class="form-group form-default">
                                                        <input type="text" name="meta_description" placeholder="Enter Meta Description" max="160" value="{{$about->meta_description}}" class="form-control">
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
            
            <script src="https://cdn.ckeditor.com/ckeditor5/12.3.1/classic/ckeditor.js"></script>
            <script>
                    ClassicEditor
                        .create( document.querySelector( '#editor' ) )
                        .catch( error => {
                            console.error( error );
                        } );
                </script>
                    <script type="text/javascript">
                        function readURL(input) {
                                if (input.files && input.files[0]) {
                                    var reader = new FileReader();
                
                                    reader.onload = function (e) {
                                        $('#display_image').attr('src', e.target.result);
                                    }
                                    reader.readAsDataURL(input.files[0]);
                                }
                            }
                            $("#cover_image").change(function(){
                                readURL(this);
                            });

                function readURL_next(input) {
                        if (input.files && input.files[0]) {
                            var reader = new FileReader();

                            reader.onload = function (e) {
                                $('#current_image2').attr('src', e.target.result);
                            }
                            reader.readAsDataURL(input.files[0]);
                        }
                    }
                    $("#image2").change(function(){
                        readURL_next(this);
                    });
            </script>
                   
@endsection