@extends('admin.include.main')
@section('content')

<div class="pcoded-content">
        <!-- Page-header start -->
        <div class="page-header">
            <div class="page-block">
                <div class="row align-items-center">
                    <div class="col-md-8">
                        <div class="page-header-title">
                            <h5 class="m-b-10">Hotel Events</h5>
                            <p class="m-b-0">Events that are organized in the hotel</p>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <ul class="breadcrumb">
                            <li class="breadcrumb-item">
                                <a href="{{route('dashboard')}}"> <i class="fa fa-home"></i> </a>
                            </li>
                            <li class="breadcrumb-item">Hotel Events
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
                                            <h5>All Events</h5>
                                
                                           </div>
                                           <div class="card-block">
                                            <div class="table-responsive dt-responsive">
                                                <table id="dom-jqry" class="table table-striped table-bordered nowrap">
                                                    <thead>
                                                        <tr>
                                                            <th>Title</th>
                                                            <th>Event Date</th>
                                                            <th>Author</th>
                                                            <th>Description</th>
                                                            <th>Status</th>
                                                            <th>Action</th>
                                                            
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        @foreach($event as $rm)
                                                        <tr>
                                                             <td>{{$rm->title}}</td>
                                                             <td>{{$rm->event_date}}</td>
                                                            <td>{{$rm->author}}</td>
                                                            <td>{{str_limit($rm->description,20)}}</td>
                                                            <td><a href="{{ route('event.updateStatus', $rm->id) }}"> 
                                                                    @if ($rm->status)
                                                                        <button type="button" class="btn btn-sm btn-primary">Active</button>
                                                                    @else
                                                                        <button type="button" class="btn btn-sm btn-warning">Inactive</button>
                                                                    @endif
                                                                </a></td>
                                                        <td>
                                                            {{-- <a href="{{route('event.view',$rm->id)}}"><i class="fa fa-eye"></i></a> --}}
                                                            @can('update-events')
                                                            <a href="{{route('event.edit',$rm->id)}}"><i class="fa fa-edit"></i></a>
                                                            @endcan
                                                            @can('delete-events')
                                                                 <a href="{{route('event.delete',$rm->id)}}"><i class="fa fa-trash"></i></a></td>
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