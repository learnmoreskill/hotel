
@extends('admin.include.main')
@section('content')

<div class="pcoded-content">
    <!-- Page-header start -->
    <div class="page-header">
        <div class="page-block">
            <div class="row align-items-center">
                <div class="col-md-8">
                    <div class="page-header-title">
                        <h5 class="m-b-10">Hotel Staffs</h5>
                        <p class="m-b-0">Add hotel staff information</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <ul class="breadcrumb">
                        <li class="breadcrumb-item">
                            <a href="{{route('dashboard')}}"> <i class="fa fa-home"></i> </a>
                        </li>
                        <li class="breadcrumb-item">Hotel Staff
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
                                    <h5>Detail On Hotel Staff</h5>
                                    <!--<span>Add class of <code>.form-control</code> with <code>&lt;input&gt;</code> tag</span>-->
                                </div>
                                <div class="card-block">
                                <form class="form-material" action="{{route('hotelstaff.store')}}" method="POST" enctype="multipart/form-data" autocomplete="off">
                                      @csrf
                                         <div class="form-group form-default">
                                            <input type="text" name="name" class="form-control" required="">
                                            <span class="form-bar"></span>
                                            <label class="float-label">Name of the Staff</label>
                                        </div>
                                       
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group form-default">
                                                    <input type="email" name="email" class="form-control" required="">
                                                    <span class="form-bar"></span>
                                                    <label class="float-label">Email Id (This id will be used for user login)</label>
                                                </div>
                                            </div>
                                             <div class="col-md-6">
                                                    <div class="form-group form-default">
                                                            <select class="form-control form-control-inverse" name="role_id">
                                                                    <option selected disabled>Select Staff Role</option>
                                                                    @foreach($role as $r)
                                                                    <option value="{{$r->id}}">{{$r->name}}</option>
                                                                    @endforeach
                                                                </select>
                                                    <span class="form-bar"></span>
                                                </div>
                                                
                                            </div>
                                        </div>
                                        <div class="form-group form-default">
                                                <input type="text" name="address" class="form-control" required="">
                                                <span class="form-bar"></span>
                                                <label class="float-label">Address</label>
                                            </div>

                                            
                                            <div class="row">
                                                    <div class="col-md-6">
                                                            <div class="form-group form-default">
                                                                    <input type="text" name="phone_no" class="form-control">
                                                                    <span class="form-bar"></span>
                                                                    <label class="float-label">Phone no.</label>
                                                            </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                            <div class="form-group form-default">
                                                                    <input type="text" name="mobile_no" class="form-control" required="">
                                                                    <span class="form-bar"></span>
                                                                    <label class="float-label">Mobile no.</label>
                                                             </div>
                                                    </div>
                                             </div>
                                        
                                        <div class="row">
                                            <div class="col-md-6">
                                                    <div class="form-group form-default">
                                                            <input type="text" name="designation" class="form-control" required="">
                                                            <span class="form-bar"></span>
                                                            <label class="float-label">Designation</label>
                                                    </div>
                                            </div>
                                            <div class="col-md-6">
                                                    <div class="form-group form-default">
                                                            <input type="number" name="sort_order" class="form-control" required="">
                                                            <span class="form-bar"></span>
                                                            <label class="float-label">Sort Order Accoding to Designation</label>
                                                     </div>
                                            </div>
                                        </div>
                                    
                                        <div class="form-group form-default">
                                            <input type="text" name="short_description" class="form-control" required="">
                                            <span class="form-bar"></span>
                                            <label class="float-label">Short Description</label>
                                        </div>

                                        
                                            <div class="form-group row">
                                                <label class="col-sm-4 col-form-label">Upload Profile Image (Size limit < 2MB)</label>
                                                <div class="col-sm-8">
                                                    
                                                    <img src="" id="current_image" alt="" height="100px" width="100px"><br><br>
                                                    
                                                <input type="file" name="image" id="image" class="form-control">
                                                </div>
                                                
                                            </div>

                                    
                                                <div class="card-header">
                                                        <h5>Social Link</h5>
                                                </div>  
                                                <div class="card-block">
                                                    <div class="row">
                                                        <div class="col-md-6">
                                                                <div class="form-group form-default">
                                                                        <input type="text" name="facebook"  placeholder="Enter Facebook id Link" class="form-control">
                                                                        <span class="form-bar"></span>
                                                                        <label class="float-label">Facebook</label>
                                                                </div>
                                                        </div>
                                                        <div class="col-md-6">
                                                                <div class="form-group form-default">
                                                                        <input type="text" name="twitter" placeholder="Enter Twitter id Link" class="form-control">
                                                                        <span class="form-bar"></span>
                                                                        <label class="float-label">Twitter</label>
                                                                 </div>
                                                            </div>
                                                    </div>
                                                    <div class="row">
                                                            <div class="col-md-6">
                                                                    <div class="form-group form-default">
                                                                            <input type="text" name="instagram" placeholder="Enter Instagram id Link" class="form-control">
                                                                            <span class="form-bar"></span>
                                                                            <label class="float-label">Instagram</label>
                                                                    </div>
                                                            </div>
                                                            <div class="col-md-6">
                                                                    <div class="form-group form-default">
                                                                            <input type="text" name="linkedin" placeholder="Enter Linkedin id Link" class="form-control">
                                                                            <span class="form-bar"></span>
                                                                            <label class="float-label">Linked In</label>
                                                                    </div>
                                                            </div>
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