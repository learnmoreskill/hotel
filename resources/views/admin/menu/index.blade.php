
@extends('admin.include.main')
@section('content')

<div class="pcoded-content">
    <!-- Page-header start -->
    <div class="page-header">
        <div class="page-block">
            <div class="row align-items-center">
                <div class="col-md-8">
                    <div class="page-header-title">
                        <h5 class="m-b-10">Menu</h5>
                        <p class="m-b-0">Add Menu title</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <ul class="breadcrumb">
                        <li class="breadcrumb-item">
                            <a href="{{route('dashboard')}}"> <i class="fa fa-home"></i> </a>
                        </li>
                        <li class="breadcrumb-item">Menu
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
                                    <h5>Add Menu Title</h5>
                                    <!--<span>Add class of <code>.form-control</code> with <code>&lt;input&gt;</code> tag</span>-->
                                </div>
                                <div class="card-block">
                                <form class="form-material" action="{{route('menu.store')}}" method="POST" enctype="multipart/form-data" autocomplete="off">
                                      @csrf
                                        
                                        
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group form-default">
                                                <input type="text" name="title" class="form-control" required>
                                                <span class="form-bar"></span>
                                                <label class="float-label">Title</label>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group form-default">
                                                <input type="number" name="order_no" class="form-control" required>
                                                <span class="form-bar"></span>
                                                <label class="float-label">Order number</label>
                                            </div>
                                        </div>
                                    </div>

                                     <button type="submit" class="btn btn-success">Submit</button>
                                        
                                    </form>
                                </div>
                            </div>
                            <div class="card">
                                    <div class="card-header">
                                       <h5>Menu Title</h5>
                           
                                      </div>
                                      <div class="card-block">
                                       <div class="table-responsive dt-responsive">
                                           <table id="dom-jqry" class="table table-striped table-bordered nowrap">
                                               <thead>
                                                   <tr>
                                                       <th>Title</th>                             
                                                       <th>Order no</th> 
                                                       <th>Status</th>
                                                       <th>Action</th>
                                                       
                                                   </tr>
                                               </thead>
                                               <tbody>
                                                   @foreach($menu as $rm)
                                                   <tr>
                                                   <td>{{$rm->title}}</td>
                                                   <td>{{$rm->order_no}}</td>
                                                   <td><a href="{{ route('menu.status', $rm->id) }}"> 
                                                    @if ($rm->status)
                                                        <button type="button" class="btn btn-sm btn-primary">Active</button>
                                                    @else
                                                        <button type="button" class="btn btn-sm btn-warning">Inactive</button>
                                                    @endif
                                                </a></td>
                                                   <td>
                                                    @can('update-menu')
                                                   <button type="button" class="btn btn-sm btn-default waves-effect" title="edit" data-toggle="modal" data-target="#default-Modal{{$rm->id}}"><i class="fa fa-edit"></i></button>
                                                        <div class="modal fade" id="default-Modal{{$rm->id}}" tabindex="-1" role="dialog">
                                                            <div class="modal-dialog" role="document">
                                                                <div class="modal-content">
                                                                    <div class="modal-header">
                                                                        <h4 class="modal-title">Update Menu</h4>
                                                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                            <span aria-hidden="true">&times;</span>
                                                                        </button>
                                                                    </div>
                                                                    <form class="form-material" action="{{route('menu.update',$rm->id)}}" method="POST" enctype="multipart/form-data" autocomplete="off">
                                                                        @csrf
                                                                    <div class="modal-body">
                                                                           
                                                                              <div class="row">
                                                                                  <div class="col-md-6">
                                                                                      <div class="form-group form-default">
                                                                                      <input type="text" name="title" value="{{$rm->title}}" class="form-control" required>
                                                                                          <span class="form-bar"></span>
                                                                                          <label class="float-label">Title</label>
                                                                                      </div>
                                                                                  </div>
                                                                                  <div class="col-md-6">
                                                                                      <div class="form-group form-default">
                                                                                          <input type="number" name="order_no" value="{{$rm->order_no}}" class="form-control" required>
                                                                                          <span class="form-bar"></span>
                                                                                          <label class="float-label">Order number</label>
                                                                                      </div>
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
                                                        @endcan
                                                        @can('delete-menu')
                                                             <a href="{{route('menu.delete',$rm->id)}}" class="btn btn-sm btn-danger"  title="delete"><i class="fa fa-trash"></i></a></td>     
                                                        @endcan
                                                </tr>
                                                   @endforeach
                                                  
                                               </tbody>
                                           </table>
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