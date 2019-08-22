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
                            <p class="m-b-0">All Hotel Staff Lists</p>
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

        <div class="pcoded-inner-content">
                <!-- Main-body start -->
                <div class="main-body">
                    <div class="page-wrapper">
        
                        <!-- Page body start -->
                        <div class="page-body">
                                <div class="card">
                                        <div class="card-header">
                                            <h5>All Hotel Staffs </h5>
                                
                                           </div>
                                           <div class="card-block">
                                            <div class="table-responsive dt-responsive">
                                                <table id="dom-jqry" class="table table-striped table-bordered nowrap">
                                                    <thead>
                                                        <tr>
                                                            <th>Name</th>
                                                            <th>Designation</th>
                                                            <th>Sort Order</th>
                                                            <th>Address</th>
                                                            <th>Phone no.</th>
                                                            <th>Mobile no.</th>
                                                            <th>Status</th>
                                                            <th>Action</th>
                                                            
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        @foreach($hotelstaff as $hs)
                                                        <tr>
                                                             <td>{{$hs->name}}</td>
                                                            <td>{{$hs->designation}}</td>
                                                            <td>{{$hs->sort_order}}</td>
                                                            <td>{{$hs->address}}</td>
                                                            <td>{{$hs->phone_no}}</td>
                                                            <td>{{$hs->mobile_no}}</td>
                                                            <td><a href="{{ route('hotelstaff.status', $hs->id) }}"> 
                                                                    @if ($hs->status)
                                                                        <button type="button" class="btn btn-sm btn-primary">Active</button>
                                                                    @else
                                                                        <button type="button" class="btn btn-sm btn-warning">Inactive</button>
                                                                    @endif
                                                                </a></td>
                                                        <td>
                                                            
                                                            <button type="button" class="btn btn-sm btn-success waves-effect" title="View" data-toggle="modal" data-target="#default-Modal{{$hs->id}}"><i class="fa fa-eye"></i></button>
                                                            <div class="modal fade" id="default-Modal{{$hs->id}}" tabindex="-1" role="dialog">
                                                                <div class="modal-dialog" role="document">
                                                                    <div class="modal-content" style="width:600px;">
                                                                        <div class="modal-header">
                                                                            <h4 class="modal-title">Staff Info</h4>
                                                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                                <span aria-hidden="true">&times;</span>
                                                                            </button>
                                                                        </div>

                                                                        <div class="modal-body">
                                                                                <div class="text-center">
                                                                                      <img src="{{asset($hs->image)}}" height="100px" width="100px">
                                                                                </div><br>
                                                                                <div class="table-responsive dt-responsive">
                                                                                <table class="table table-striped table-bordered nowrap">
                                                                                    <tr>
                                                                                        <td>Name:</td>
                                                                                        <td colspan="3">{{$hs->name}}</td>
                                                                                    </tr>
                                                                                    <tr>
                                                                                        <td>Email:</td>
                                                                                        <td>{{$hs->email}}</td>
                                                                                        <td>Address:</td>
                                                                                        <td>{{$hs->address}}</td>
                                                                                    </tr>
                                                                                    <tr>
                                                                                        
                                                                                        <td>Designation:</td>
                                                                                        <td>{{$hs->designation}}</td>
                                                                                        <td>Role:</td>
                                                                                        <td>{{$hs->role['name']}}</td>
                                                                                    </tr>
                                                                                    <tr>
                                                                                        <td>Phone:</td>
                                                                                        <td>{{$hs->phone}}</td>
                                                                                        <td>Mobile:</td>
                                                                                        <td>{{$hs->mobile_no}}</td>
                                                                                    </tr>
                                                                                    <tr>
                                                                                            <td>Facebook:</td>
                                                                                            <td>{{$hs->facebook}}</td>
                                                                                            <td>Twitter:</td>
                                                                                            <td>{{$hs->twitter}}</td>
                                                                                    </tr>
                                                                                    <tr>      
                                                                                            <td>Instagram:</td>
                                                                                            <td>{{$hs->instagram}}</td>
                                                                                            <td>Linkedin:</td>
                                                                                            <td>{{$hs->linkedin}}</td>
                                                                                    </tr>
                                                                                </table>
                                                                                </div>
                                                                                 
                                                                        </div>
                                                                        <div class="modal-footer">
                                                                            <button type="button" class="btn btn-default waves-effect"  data-dismiss="modal">Close</button>
                                                                        </div>
                                                                    </form>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                      
                                                      
                                                            @can('update-hotel-staffs')
                                                            <a href="{{route('hotelstaff.edit',$hs->id)}}"  class="btn btn-sm btn-info waves-effect"><i class="fa fa-edit"></i></a>
                                                            @endcan
                                                            @can('delete-hotel-staffs')
                                                            <a href="{{route('hotelstaff.delete',$hs->id)}}"  class="btn btn-sm btn-danger waves-effect"><i class="fa fa-trash"></i></a></td>
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
                </div>
        </div>
</div>


@endsection