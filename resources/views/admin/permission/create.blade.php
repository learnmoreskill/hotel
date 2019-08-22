
@extends('admin.include.main')
@section('content')

<div class="pcoded-content">
    <!-- Page-header start -->
    <div class="page-header">
        <div class="page-block">
            <div class="row align-items-center">
                <div class="col-md-8">
                    <div class="page-header-title">
                        <h5 class="m-b-10">Permissions</h5>
                        <p class="m-b-0">Add permissions for specific modules<span style="color:burlywood;">(Scroll down to see permissions)</span></p>
                    </div>
                </div>
                <div class="col-md-4">
                    <ul class="breadcrumb">
                        <li class="breadcrumb-item">
                            <a href="{{route('dashboard')}}"> <i class="fa fa-home"></i> </a>
                        </li>
                        <li class="breadcrumb-item">Permission
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
                                    <h5>Add Module to set permission</h5>
                                    <!--<span>Add class of <code>.form-control</code> with <code>&lt;input&gt;</code> tag</span>-->
                                </div>
                                <div class="card-block">
                                <form class="form-material" action="{{route('permission.store')}}" method="POST" enctype="multipart/form-data" autocomplete="off">
                                      @csrf
                                        
                                        
                                    
                                        <div class="form-group form-default">
                                            <input type="text" name="module" class="form-control">
                                            <span class="form-bar"></span>
                                            <label class="float-label">Module name</label>
                                        </div>
                                     <button type="submit" class="btn btn-success">Submit</button>
                                        
                                    </form>
                                </div>
                            </div>
                            <div class="card">
                                    <div class="card-header">
                                       <h5>Gallery</h5>
                           
                                      </div>
                                      <div class="card-block">
                                       <div class="table-responsive dt-responsive">
                                           <table id="dom-jqry" class="table table-striped table-bordered nowrap">
                                                <thead>
                                                        <tr>
                                                            <th>S.No</th>
                                                            <th>Module</th>
                                                            <th>Add</th>
                                                            <th>View</th>
                                                            <th>Update</th>
                                                            <th>Delete</th>
                                                            <th>Status</th>
                                                            <th>Action</th>
                                    
                                                        </tr>
                                                        </thead>
                                                        <tbody>
                                                            @foreach($permission as $per)
                                                        <tr class="gradeA">
                                                            <td>{{$loop->index+1}}</td>
                                                            <td>{{$per->module}}</td>
                                                            <td>{{$per->add}}</td>
                                                            <td>{{$per->view}}</td>
                                                            <td>{{$per->update}}</td>
                                                            <td>{{$per->delete}}</td>
                                                            
                                    
                                                            <td class="center">
                                                            <a href="{{ route('permission.status', $per->id) }}">
                                                                @if ($per->status)
                                                                    <button type="button" class="btn btn-sm btn-success">Active</button>
                                                                @else
                                                                    <button type="button" class="btn btn-sm btn-warning">Inactive</button>
                                                                @endif
                                                            </a>
                                    
                                    
                                    
                                                            </td>
                                                            <td class="center">
                                    
                                                                    <button type="button" class="btn btn-sm btn-default waves-effect" title="edit" data-toggle="modal" data-target="#default-Modal{{$per->id}}"><i class="fa fa-edit"></i></button>
                                                                    <div class="modal fade" id="default-Modal{{$per->id}}" tabindex="-1" role="dialog">
                                                                        <div class="modal-dialog" role="document">
                                                                            <div class="modal-content">
                                                                                <div class="modal-header">
                                                                                    <h4 class="modal-title">Update Permission</h4>
                                                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                                        <span aria-hidden="true">&times;</span>
                                                                                    </button>
                                                                                </div>
                                                                                <form class="form-material" action="{{route('permission.update',$per->id)}}" method="POST" enctype="multipart/form-data" autocomplete="off">
                                                                                    @csrf
                                                                                <div class="modal-body">
                                                                                       
                                                                                          
                                                                                              <div class="col-md-6">
                                                                                                  <div class="form-group form-default">
                                                                                                  <input type="text" name="module" value="{{$per->module}}" class="form-control" required>
                                                                                                      <span class="form-bar"></span>
                                                                                                      <label class="float-label">Module name</label>
                                                                                                  </div>
                                                                                              </div>
                                                                                   
                                                                                </div>
                                                                                <div class="modal-footer">
                                                                                    <button type="button" class="btn btn-default waves-effect " data-dismiss="modal">Close</button>
                                                                                    <button type="submit" class="btn btn-primary waves-effect waves-light ">Save changes</button>
                                                                                </div>
                                                                            </form>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                    
                                                            </td>
                                                        </tr>
                                                        @endforeach
                                                        </tbody>
                                    
                                           </table>
                                       </div>
                                   </div>
                               </div>
                        </div>
                        
                </div>


                    
@endsection


