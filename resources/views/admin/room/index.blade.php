@extends('admin.include.main')
@section('content')

<div class="pcoded-content">
        <!-- Page-header start -->
        <div class="page-header">
            <div class="page-block">
                <div class="row align-items-center">
                    <div class="col-md-8">
                        <div class="page-header-title">
                            <h5 class="m-b-10">Hotel Rooms</h5>
                            <p class="m-b-0">All Hotel room Types</p>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <ul class="breadcrumb">
                            <li class="breadcrumb-item">
                                <a href="{{route('dashboard')}}"> <i class="fa fa-home"></i> </a>
                            </li>
                            <li class="breadcrumb-item">Hotel Room
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
                                            <h5>All Hotel Rooms </h5>
                                
                                           </div>
                                           <div class="card-block">
                                            <div class="table-responsive dt-responsive">
                                                <table id="dom-jqry" class="table table-striped table-bordered nowrap">
                                                    <thead>
                                                        <tr>
                                                            <th>Sort Order</th>
                                                            <th>Room Type</th>
                                                            <th>Price</th>
                                                            <th>Number of Rooms</th>
                                                            <th>Description</th>
                                                            <th>Status</th>
                                                            <th>Action</th>
                                                            
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        @foreach($room as $rm)
                                                        <tr>
                                                             <td>{{$rm->sort_order}}</td>
                                                             <td>{{$rm->name}}</td>
                                                            <td>{{$rm->price}}</td>
                                                            <td>{{$rm->no_of_rooms}}</td>
                                                            <td>{{str_limit($rm->description,20)}}</td>
                                                            <td><a href="{{ route('room.updateStatus', $rm->id) }}"> 
                                                                    @if ($rm->status)
                                                                        <button type="button" class="btn btn-sm btn-primary">Active</button>
                                                                    @else
                                                                        <button type="button" class="btn btn-sm btn-warning">Inactive</button>
                                                                    @endif
                                                                </a></td>
                                                        <td>
                                                            <a href="#" title="View Room Detail" data-toggle="modal" data-target="#default-Modal{{$rm->id}}"><i class="fa fa-eye"></i></a>
                                                            <div class="modal fade" id="default-Modal{{$rm->id}}" tabindex="-1" role="dialog">
                                                                <div class="modal-dialog" role="document">
                                                                    <div class="modal-content" style="width:600px;">
                                                                        <div class="modal-header">
                                                                            <h4 class="modal-title">Room Information</h4>
                                                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                                <span aria-hidden="true">&times;</span>
                                                                            </button>
                                                                        </div>

                                                                        <div class="modal-body">
                                                                                <div class="text-center">
                                                                                      <img src="{{asset($rm->image)}}" height="100px" width="100px">
                                                                                </div><br>
                                                                                <div class="table-responsive dt-responsive">
                                                                                <table class="table table-striped table-bordered nowrap">
                                                                                    <tr>
                                                                                        <td>Room Type:</td>
                                                                                        <td colspan="3">{{$rm->name}}</td>
                                                                                    </tr>
                                                                                    <tr>
                                                                                        <td>Price:</td>
                                                                                        <td>{{$rm->price}}</td>
                                                                                        <td>Number of Rooms:</td>
                                                                                        <td>{{$rm->no_of_rooms}}</td>
                                                                                    </tr>
                                                                                    <tr>
                                                                                        
                                                                                        <td>Description:</td>
                                                                                        <td colspan="3">{{$rm->description}}</td>
                                                                    
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
                                                          
                                                            <a href="{{route('room.addImages',$rm->id)}}" title="Add room images"><i class="fa fa-image"></i></a>
                                                         
                                                            @can('update-hotel-rooms')
                                                                 <a href="{{route('room.edit',$rm->id)}}" title="edit"><i class="fa fa-edit"></i></a>
                                                            @endcan
                                                            @can('delete-hotel-rooms')
                                                                 <a href="{{route('room.delete',$rm->id)}}" title="Delete"><i class="fa fa-trash"></i></a></td>
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