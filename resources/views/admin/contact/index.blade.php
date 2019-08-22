@extends('admin.include.main')
@section('content')

<div class="pcoded-content">
        <!-- Page-header start -->
        <div class="page-header">
            <div class="page-block">
                <div class="row align-items-center">
                    <div class="col-md-8">
                        <div class="page-header-title">
                            <h5 class="m-b-10">Contact Lists</h5>
                            <p class="m-b-0">Contact information are listed below</p>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <ul class="breadcrumb">
                            <li class="breadcrumb-item">
                                <a href="{{route('dashboard')}}"> <i class="fa fa-home"></i> </a>
                            </li>
                            <li class="breadcrumb-item">Contact
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
                                            <h5>All Contacted Lists</h5>
                                
                                           </div>
                                           <div class="card-block">
                                            <div class="table-responsive dt-responsive">
                                                <table id="dom-jqry" class="table table-striped table-bordered nowrap">
                                                    <thead>
                                                        <tr>
                                                            <th>Name</th>
                                                            <th>Email</th>
                                                            <th>Phone</th>
                                                            <th>Message</th>
                                                            <th>Status</th>
                                                            <th>Action</th>
                                                            
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        @foreach($contact as $rm)
                                                        <tr>
                                                             <td>{{$rm->name}}</td>
                                                             <td>{{$rm->email}}</td>
                                                            <td>{{$rm->phone}}</td>
                                                            <td>{{str_limit($rm->message,20)}}</td>
                                                            <td><a href="{{ route('contact.updateStatus', $rm->id) }}"> 
                                                                    @if ($rm->status)
                                                                        <button type="button" class="btn btn-sm btn-primary">Not Read</button>
                                                                    @else
                                                                        <button type="button" class="btn btn-sm btn-warning">Read</button>
                                                                    @endif
                                                                </a></td>
                                                        <td>
                                                            <button type="button" class="btn btn-sm btn-default waves-effect" title="View" data-toggle="modal" data-target="#default-Modal{{$rm->id}}"><i class="fa fa-eye"></i></button>
                                                            <div class="modal fade" id="default-Modal{{$rm->id}}" tabindex="-1" role="dialog">
                                                                <div class="modal-dialog" role="document">
                                                                    <div class="modal-content">
                                                                        <div class="modal-header">
                                                                            <h4 class="modal-title">Contact Info</h4>
                                                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                                <span aria-hidden="true">&times;</span>
                                                                            </button>
                                                                        </div>

                                                                        <div class="modal-body">
                                                                                <table class="table table-striped table-bordered nowrap">
                                                                                    <tr>
                                                                                        <td>Name:</td>
                                                                                        <td>{{$rm->name}}</td>
                                                                                    </tr>
                                                                                    <tr>
                                                                                        <td>Email:</td>
                                                                                        <td>{{$rm->email}}</td>
                                                                                    </tr>
                                                                                    <tr>
                                                                                        <td>Phone:</td>
                                                                                        <td>{{$rm->phone}}</td>
                                                                                    </tr>
                                                                                    <tr>
                                                                                        <td>Message:</td>
                                                                                        <td>{{$rm->message}}</td>
                                                                                    </tr>
                                                                                </table>
                                              
                                                                                 
                                                                        </div>
                                                                        <div class="modal-footer">
                                                                            <button type="button" class="btn btn-default waves-effect"  data-dismiss="modal">Close</button>
                                                                        </div>
                                                                    </form>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            @can('delete-contact')
                                                       <a href="{{route('contact.delete',$rm->id)}}" class="btn btn-sm btn-danger"><i class="fa fa-trash"></i></a></td>
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