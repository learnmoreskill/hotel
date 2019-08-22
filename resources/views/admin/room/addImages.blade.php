
@extends('admin.include.main')
@section('content')

<div class="pcoded-content">
    <!-- Page-header start -->
    <div class="page-header">
        <div class="page-block">
            <div class="row align-items-center">
                <div class="col-md-8">
                    <div class="page-header-title">
                        <h5 class="m-b-10">Room Images</h5>
                        <p class="m-b-0">Add Images of the Room </span></p>
                    </div>
                </div>
                <div class="col-md-4">
                    <ul class="breadcrumb">
                        <li class="breadcrumb-item">
                            <a href="{{route('dashboard')}}"> <i class="fa fa-home"></i> </a>
                        </li>
                        <li class="breadcrumb-item">Room Images
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
                                <h5>Add Images for {{$rooms->name}}</h5>
                                    <!--<span>Add class of <code>.form-control</code> with <code>&lt;input&gt;</code> tag</span>-->
                                </div>
                                <div class="card-block">
                                <form class="form-material" action="{{route('room.addImagesStore')}}" method="POST" enctype="multipart/form-data" autocomplete="off">
                                      @csrf
                 
                                <input type="hidden" value="{{$rooms->id}}" name="room_id" class="form-control">
                          
                                            <div class="form-group row">
                                                <label class="col-sm-3 col-form-label">Upload Images (Size limit < 2MB)</label>
                                                <div class="col-sm-9">
                                                    
                                                    <img src="" id="current_image" alt="" height="100px" width="100px"><br><br>
                                                    
                                                <input type="file" name="image[]" id="image" class="form-control" multiple>
                                                </div>
                                                
                                            </div>

                                                <button type="submit" class="btn btn-success">Submit</button>
                                        
                                    </form>
                                </div>
                            </div>
                            
                           
                            <div class="card">
                                    <div class="card-header">
                                    <h5>Room Images For {{$rooms->name}}</h5>
                           
                                      </div>
                                      <div class="card-block">
                                        <div class="row">
                                            @foreach($room_image as $gal)
                                            <div class="col-lg-4 col-sm-6">
                                                   
                                                <div class="thumbnail">
                                                    <div class="thumb">
                                                    <a href="{{route('addImages.delete',$gal->id)}}" class="float-right" >X</a>
                                                    <a href="{{asset($gal->image)}}" data-lightbox="1" data-title="My caption {{$gal->id}}">
                                                            <img src="{{asset($gal->image)}}" alt="" class="img-fluid img-thumbnail">
                                                        </a>
                                                    </div>
                                                </div>
                                               
                                            </div>
                                            @endforeach
                                            
                                        </div>
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