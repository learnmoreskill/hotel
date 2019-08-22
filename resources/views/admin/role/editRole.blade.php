
@extends('admin.include.main')
@section('content')

<div class="pcoded-content">
    <!-- Page-header start -->
    <div class="page-header">
        <div class="page-block">
            <div class="row align-items-center">
                <div class="col-md-8">
                    <div class="page-header-title">
                        <h5 class="m-b-10">Edit Role</h5>
                        <p class="m-b-0">Edit role and permission</span></p>
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
                                    <h5>Edit Role and Set Permission to them <span style="color:cadetblue;">(For Pages just use update permission only)</span></h5>
                                    <!--<span>Add class of <code>.form-control</code> with <code>&lt;input&gt;</code> tag</span>-->
                                </div>
                                <div class="card-block">
                                <form class="form-material" action="{{route('roles.update',$role->id)}}" method="POST" enctype="multipart/form-data" autocomplete="off">
                                      @csrf
                                        
                                        <div class="form-group form-default">
                                            <input type="text" name="name"  value="{{$role->name}}" class="form-control" required>
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
                                                            <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                                            @foreach($permission as $per)
                                                            
                                                            
                                                            <!-- {
                                                                if($pr == "create-notice"){
                                                                    dd('true');
                                                                
                                                                }else{
                                                                    dd('tr');
                                                                }
                                                                    } -->
                                                            <tr class="gradeA text-center">
                                                                
                                                                <td>{{$per->module}}
                                                                
                                                                </td>
                                                                <td>      
                                                                    <label class="contain">
                                                                    
                                        
                                                                        <input type="checkbox" @if(in_array("{$per->add}",json_decode($role->permissions))) checked @endif name="permission[]" value="{{$per->add}}" class="checkBoxClass" id="checkbox1">
                                                                      
                                                                        <span class="checkmark"></span>
                                                                    </label>
                                                                </td>
                                                                <td>      
                                                                     <label class="contain">
                                                    
                                                                        <input type="checkbox"  @if(in_array("{$per->view}",json_decode($role->permissions))) checked @endif name="permission[]" value="{{$per->view}}" class="checkBoxClass" id="checkbox2">
                                                                     
                                                                        <span class="checkmark"></span>
                                                                    </label>
                                                                </td>
                                                                <td>      
                                                                    <label class="contain">
                                                                
                                                                        <input type="checkbox" @if(in_array("{$per->update}",json_decode($role->permissions))) checked @endif name="permission[]" value="{{$per->update}}" class="checkBoxClass" id="checkbox3">
                                                                       
                                                                        <span class="checkmark"></span>
                                                                    </label>
                                                                </td>
                                                                <td>      
                                                                    <label class="contain">
                                                                   
                                                                        <input type="checkbox" @if(in_array("{$per->delete}",json_decode($role->permissions))) checked @endif name="permission[]" value="{{$per->delete}}" class="checkBoxClass" id="checkbox4">
                                                                       
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
   
    
   $('#ckbCheckAll').change(function() {
    if($(this).is(':checked')) {
        $("input[type='checkbox']").attr('checked', 'checked');
    } else {
        $("input[type='checkbox']").removeAttr('checked');
    }
});
$("input[type='checkbox']").not('#ckbCheckAll').change( function() {
    $('#ckbCheckAll').removeAttr('checked');
});
</script>
@endsection




