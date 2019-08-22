
@extends('admin.include.main')
@section('content')

<div class="pcoded-content">
    <!-- Page-header start -->
    <div class="page-header">
        <div class="page-block">
            <div class="row align-items-center">
                <div class="col-md-8">
                    <div class="page-header-title">
                        <h5 class="m-b-10">Security</h5>
                        {{-- <p class="m-b-0">Insert Contact Page Information</p> --}}
                    </div>
                </div>
                <div class="col-md-4">
                    <ul class="breadcrumb">
                        <li class="breadcrumb-item">
                            <a href="{{route('dashboard')}}"> <i class="fa fa-home"></i> </a>
                        </li>
                        <li class="breadcrumb-item">Setting
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
                                    <h5>Change Password</h5>
                                    <!--<span>Add class of <code>.form-control</code> with <code>&lt;input&gt;</code> tag</span>-->
                                </div>
                                <div class="card-block">
                                <form action="{{route('check_password')}}" method="POST" class="form-material">
                                    @csrf
                                    <div class="form-group form-default form-static-label">
                                            <input type="password" name="old_password" class="form-control" placeholder="Enter Old Password" required="">
                                            <span class="form-bar"></span>
                                            <label class="float-label">Old Password</label>
                                        </div>
                                        <div class="form-group form-default form-static-label">
                                            <input type="password" name="password" id="password" class="form-control" onkeyup="check()" placeholder="Enter New Password" required="">
                                            <span class="form-bar"></span>
                                            <label class="float-label">New Password</label>
                                        </div>
                                        <div class="form-group form-default form-static-label">
                                            <input type="password"  class="form-control" id="cpassword" onkeyup="check()" placeholder="Confirm Password" required="">
                                            <span class="form-bar"></span>
                                            <label class="float-label">Confirm Password</label>
                                        </div>
                                        <span id="message" ></span>
                                        <div>
                                        <button type="submit" id="btn-pass-submit" class="btn btn-success" disabled>Submit</button>
                                          </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                        
                    </div>

     
                    <script>

    var check = function() {
        
        if(document.getElementById('cpassword').value != ""){
        debugger;
            if (document.getElementById('password').value ==
                document.getElementById('cpassword').value) {
                document.getElementById('message').style.color = 'green';
                document.getElementById('message').innerHTML = 'Password Matched';
                document.getElementById('btn-pass-submit').disabled = false;
            
            } else {
                document.getElementById('message').style.color = 'red';
                document.getElementById('message').innerHTML = 'Not Matched';
                document.getElementById('btn-pass-submit').disabled = true;

            }
        }
    }

        

       </script>

                   
@endsection

