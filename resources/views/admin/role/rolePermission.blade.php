
@extends('admin.include.main')
@section('content')

<div class="pcoded-content">
    <!-- Page-header start -->
    <div class="page-header">
        <div class="page-block">
            <div class="row align-items-center">
                <div class="col-md-8">
                    <div class="page-header-title">
                        <h5 class="m-b-10">Add Role</h5>
                        <p class="m-b-0">Add role and provide specific permission to them</span></p>
                    </div>
                </div>
                <div class="col-md-4">
                    <ul class="breadcrumb">
                        <li class="breadcrumb-item">
                            <a href="{{route('dashboard')}}"> <i class="fa fa-home"></i> </a>
                        </li>
                        <li class="breadcrumb-item">Role
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
                                    <h5>Add Role and Set Permission to them <span style="color:cadetblue;">(For Pages just use update permission only)</span></h5>
                                    <!--<span>Add class of <code>.form-control</code> with <code>&lt;input&gt;</code> tag</span>-->
                                </div>
                                <div class="card-block">
                                <form class="form-material" action="{{route('roles.store')}}" method="POST" enctype="multipart/form-data" autocomplete="off">
                                      @csrf
                                        
                                        <div class="form-group form-default">
                                            <input type="text" name="name" class="form-control" required>
                                            <span class="form-bar"></span>
                                            <label class="float-label">Role Name</label>
                                        </div>

                                        <div class="table-responsive dt-responsive">
                                                <table id="dom-jqry" class="table table-striped table-bordered nowrap">
                                                        <thead class="text-center">     
                                                                <tr>
                                                                   
                                                                    <th>
                                                                    <div class="float-left">
                                                                    <label class="contain">
                                                                            <input type="checkbox" id="ckbCheckAll">
                                                                            <span class="checkmark"></span>
                                                                        </label>
                                                                    </div>
                                                                    Module Name</th>
                                                                    <th>Create</th>
                                                                    <th>View</th>
                                                                    <th>Update</th>
                                                                    <th>Delete</th>
                                
                                                                </tr>
                                                                </thead>
                                                                <tbody class="text-center">                                   
                                                                    @foreach($permission as $per)
                                                                    <tr class="gradeA text-center">
                                                                        <!-- <td>      
                                                                            <label class="contain">
                                                                                <input type="checkbox" class="checkBoxClass" name="notice" id="checkBoxes">
                                                                                <span class="checkmark"></span>
                                                                            </label>
                                                                        </td> -->
                                                                        <td>{{$per->module}}
                                                                         <input type="hidden" name="mod[]" value="{{$per->module}}">
                                                                        
                                                                        </td>
                                                                        <td>      
                                                                            <label class="contain">
                                                                                <input type="checkbox" name="permission[]" value="{{$per->add}}" class="checkBoxClass" id="checkbox1">
                                                                                <span class="checkmark"></span>
                                                                            </label>
                                                                        </td>
                                                                        <td>      
                                                                             <label class="contain">
                                                                                <input type="checkbox" name="permission[]" value="{{$per->view}}" class="checkBoxClass" id="checkbox2">
                                                                                <span class="checkmark"></span>
                                                                            </label>
                                                                        </td>
                                                                        <td>      
                                                                            <label class="contain">
                                                                                <input type="checkbox" name="permission[]" value="{{$per->update}}" class="checkBoxClass" id="checkbox3">
                                                                                <span class="checkmark"></span>
                                                                            </label>
                                                                        </td>
                                                                        <td>      
                                                                            <label class="contain">
                                                                                <input type="checkbox" name="permission[]" value="{{$per->delete}}" class="checkBoxClass" id="checkbox4">
                                                                                <span class="checkmark"></span>
                                                                            </label>
                                                                        </td>
                                                                       
                                                                    </tr>
                                                                    @endforeach
                                                                    
                                                                </tbody>
                                         
                                                </table>
                                            </div>
     
                                     <button type="submit" class="btn btn-success">Submit</button>
                                        
                                    </form>
                                </div>
                            </div>
                            
                        </div>
                        
                </div>


 <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

<script>
   
    
$(document).ready(function () {
    
    $("#ckbCheckAll").click(function () {
        $(".checkBoxClass").prop('checked', $(this).prop('checked'));
    });

    $("#checkBoxes").click(function () {
        $(".checkBoxClass").prop('checked', $(this).prop('checked'));
    });
    $(".checkBoxClass").change(function(){
        if (!$(this).prop("checked")){
            $("#checkBoxes").propa("checked",false);
        }
    }); 
    $(".checkBoxClass").change(function(){
        if (!$(this).prop("checked")){
            $("#ckbCheckAll").prop("checked",false);
        }
    });
});
</script>
@endsection
