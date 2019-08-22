@extends('admin.include.main')
@section('content')

<div class="pcoded-content">
        <!-- Page-header start -->
        <div class="page-header">
            <div class="page-block">
                <div class="row align-items-center">
                    <div class="col-md-8">
                        <div class="page-header-title">
                            <h5 class="m-b-10">Sliders</h5>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <ul class="breadcrumb">
                            <li class="breadcrumb-item">
                                <a href="{{route('dashboard')}}"> <i class="fa fa-home"></i> </a>
                            </li>
                            <li class="breadcrumb-item">Sliders
                            </li>
                            
                        </ul>
                    </div>
                </div>
            </div>
        </div>

        <div class="pcoded-inner-content">
                <!-- Main-body start -->
                <div class="main-body">
                    <div class="page-wrapper">
        
                        <!-- Page body start -->
                        <div class="page-body">
                            <div class="card">
                                <div class="card-header">
                                    <h5>Slider</h5>
                                </div>
                                <div class="card-block">
                                    <div class="row">
                                        @foreach($slider as $gal)
                                        <div class="col-lg-4 col-sm-6">
                                            <div class="thumbnail">
                                                <div class="thumb">
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
                </div>
        </div>
</div>


@endsection