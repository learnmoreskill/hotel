
@extends('admin.include.main')
@section('content')

<div class="pcoded-content">
    <!-- Page-header start -->
    <div class="page-header">
        <div class="page-block">
            <div class="row align-items-center">
                <div class="col-md-8">
                    <div class="page-header-title">
                        <h5 class="m-b-10">Site Settings</h5>
                        <p class="m-b-0">Insert the detail of hotel</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <ul class="breadcrumb">
                        <li class="breadcrumb-item">
                            <a href="{{route('dashboard')}}"> <i class="fa fa-home"></i> </a>
                        </li>
                        <li class="breadcrumb-item">Site Settings
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
                                    <h5>Site Setting Input</h5>
                                    <!--<span>Add class of <code>.form-control</code> with <code>&lt;input&gt;</code> tag</span>-->
                                </div>
                                <div class="card-block">
                                <form class="form-material" action="{{route('sitesetting.update',$site->id)}}" method="POST" enctype="multipart/form-data" autocomplete="off">
                                      @csrf
                                    <div class="form-group form-default">
                                        <input type="text" name="name" value="{{$site->name}}" class="form-control" required="">
                                            <span class="form-bar"></span>
                                            <label class="float-label">Name</label>
                                        </div>
                                        <div class="form-group form-default">
                                            <input type="text" name="address" value="{{$site->address}}" class="form-control" required="">
                                            <span class="form-bar"></span>
                                            <label class="float-label">Address</label>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group form-default">
                                                    <input type="email" name="email" value="{{$site->email}}" class="form-control" required="">
                                                    <span class="form-bar"></span>
                                                    <label class="float-label">Email</label>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group form-default">
                                                    <input type="email" name="email2" value="{{$site->email2}}" class="form-control">
                                                    <span class="form-bar"></span>
                                                    <label class="float-label">Email(Optional)</label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group form-default">
                                                    <input type="text" name="phone" value="{{$site->phone}}" class="form-control" required="">
                                                    <span class="form-bar"></span>
                                                    <label class="float-label">Phone</label>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group form-default">
                                                    <input type="text" name="phone2" value="{{$site->phone2}}" class="form-control">
                                                    <span class="form-bar"></span>
                                                    <label class="float-label">Phone(Optional)</label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group form-default">
                                                    <input type="text" name="mobile" value="{{$site->mobile}}" class="form-control" required="">
                                                    <span class="form-bar"></span>
                                                    <label class="float-label">Mobile</label>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group form-default">
                                                    <input type="text" name="mobile2" value="{{$site->mobile2}}" class="form-control">
                                                    <span class="form-bar"></span>
                                                    <label class="float-label">Mobile(Optional)</label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group form-default">
                                                <input type="text" name="map_url" placeholder="Insert Embedded Link of Your location" value="{{$site->map_url}}" class="form-control">
                                                <span class="form-bar"></span>
                                                <label class="float-label">Map Link</label>
                                        </div>

                                        <div class="row">
                                                <div class="col-md-6">
                                                    <div class="form-group form-default">
                                                        <input type="text" name="facebook" value="{{$site->facebook}}" class="form-control">
                                                        <span class="form-bar"></span>
                                                        <label class="float-label">Facebook</label>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group form-default">
                                                        <input type="text" name="twitter" value="{{$site->twitter}}" class="form-control">
                                                        <span class="form-bar"></span>
                                                        <label class="float-label">Twitter</label>
                                                    </div>
                                                </div>
                                                     <div class="col-md-6">
                                                        <div class="form-group form-default">
                                                            <input type="text" name="instagram" value="{{$site->instagram}}" class="form-control">
                                                            <span class="form-bar"></span>
                                                            <label class="float-label">Instagram</label>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="form-group form-default">
                                                            <input type="text" name="youtube" value="{{$site->youtube}}" class="form-control">
                                                            <span class="form-bar"></span>
                                                            <label class="float-label">Youtube</label>
                                                        </div>
                                                    </div>
                                            </div>
                                            <div class="form-group row">
                                                <label class="col-sm-3 col-form-label">Upload Logo</label>
                                                <div class="col-sm-9">
                                                    @if(isset($site->logo1))
                                                    <img src="{{asset($site->logo1)}}" alt="{{$site->name}}" height="100px" width="100px"><br><br>
                                                    @endif  
                                                <input type="file" name="logo1" value="{{$site->logo1}}" class="form-control">
                                                </div>
                                                
                                            </div>

                                            <div class="form-group row">
                                                    <label class="col-sm-3 col-form-label">Upload Logo</label>
                                                    <div class="col-sm-9">
                                                            @if(isset($site->logo2))
                                                            <img src="{{asset($site->logo2)}}" alt="{{$site->name}}" height="100px" width="100px"><br><br>
                                                            @endif
                                                        <input type="file" name="logo2" value="{{$site->logo2}}" class="form-control">
                                                    </div>
                                              </div>          
                                                <div class="card-header">
                                                        <h5>SEO Contents</h5>
                                                </div>

                                                <div class="form-group form-default">
                                                    <input type="text" name="seo_title" value="{{$site->seo_title}}" max="60" placeholder=" Enter SEO Title" class="form-control">
                                                        <span class="form-bar"></span>
                                                        <label class="float-label">SEO Title</label>
                                                </div>
                                                <div class="form-group form-default">
                                                    <input type="text" name="seo_slug" value="{{$site->seo_slug}}" max="60" placeholder="Enter SEO slug" class="form-control">
                                                    <span class="form-bar"></span>
                                                    <label class="float-label">SEO slug</label>
                                                </div>
                                                <div class="form-group form-default">
                                                        <input type="text" name="focus_keyphrase" value="{{$site->focus_keyphrase}}" max="4" placeholder="Enter Focus Keyphrase" class="form-control">
                                                            <span class="form-bar"></span>
                                                            <label class="float-label">Focus Keyphrase</label>
                                                </div>
                                                <div class="form-group form-default">
                                                    <input type="text" name="meta_description" placeholder="Enter Meta Description" max="160" value="{{$site->meta_description}}" class="form-control">
                                                    <span class="form-bar"></span>
                                                    <label class="float-label">Meta Description</label>
                                                </div>
                                                <button type="submit" class="btn btn-success">Submit</button>
                                        
                                    </form>
                                </div>
                            </div>
                        </div>
                        
                    </div>
                   
                   
@endsection