
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
                                <form class="form-material" action="{{route('staffpage.update',$staffpage->id)}}" method="POST" enctype="multipart/form-data" autocomplete="off">
                                      @csrf
                                    <div class="form-group form-default">
                                        <input type="text" name="content_title" value="{{$staffpage->content_title}}" class="form-control" required="">
                                            <span class="form-bar"></span>
                                            <label class="float-label">Content Title</label>
                                        </div>
                                        <div class="form-group form-default">
                                            <input type="text" name="content_subtitle" value="{{$staffpage->content_subtitle}}" class="form-control">
                                            <span class="form-bar"></span>
                                            <label class="float-label">Content Subtitle</label>
                                        </div>
                                              
                                                <div class="card-header">
                                                        <h5>SEO Contents</h5>
                                                </div>  
                                                <div class="card-block">
                                                    <div class="form-group form-default">
                                                        <input type="text" name="seo_title" value="{{$staffpage->seo_title}}" max="60" placeholder=" Enter SEO Title" class="form-control">
                                                            <span class="form-bar"></span>
                                                            <label class="float-label">SEO Title</label>
                                                    </div>
                                                    <div class="form-group form-default">
                                                        <input type="text" name="seo_slug" value="{{$staffpage->seo_slug}}" max="60" placeholder="Enter SEO slug" class="form-control">
                                                        <span class="form-bar"></span>
                                                        <label class="float-label">SEO slug</label>
                                                    </div>
                                                    <div class="form-group form-default">
                                                            <input type="text" name="focus_keyphrase" value="{{$staffpage->focus_keyphrase}}" max="4" placeholder="Enter Focus Keyphrase" class="form-control">
                                                                <span class="form-bar"></span>
                                                                <label class="float-label">Focus Keyphrase</label>
                                                    </div>
                                                    <div class="form-group form-default">
                                                        <input type="text" name="meta_description" placeholder="Enter Meta Description" max="160" value="{{$staffpage->meta_description}}" class="form-control">
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
                   
                   
@endsection