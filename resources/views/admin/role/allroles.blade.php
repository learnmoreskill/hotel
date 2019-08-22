@extends('admin.include.main')
@section('content')

<div class="pcoded-content">
        <!-- Page-header start -->
        <div class="page-header">
            <div class="page-block">
                <div class="row align-items-center">
                    <div class="col-md-8">
                        <div class="page-header-title">
                            <h5 class="m-b-10">Roles</h5>
                            <p class="m-b-0">Roles that are given to specific user</p>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <ul class="breadcrumb">
                            <li class="breadcrumb-item">
                                <a href="{{route('dashboard')}}"> <i class="fa fa-home"></i> </a>
                            </li>
                            <li class="breadcrumb-item">Roles
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
                                            <h5>All Roles</h5>
                                
                                           </div>
                                           <div class="card-block">
                                            <div class="table-responsive dt-responsive">
                                                <table id="dom-jqry" class="table table-striped table-bordered nowrap">
                                                    <thead>
                                                        <tr class="text-center">
                                                            <th>S.No</th>
                                                            <th>Role</th>
                                                            <th>Created Date</th>
                                                            <th>Action</th>
                                                        </tr>
                                                        </thead>
                                                        <tbody>
                                                        <?php  $count = 1; ?>
                                                            @foreach($roles as $not)
                                                        <tr class="gradeA text-center">
                                                            <td>{{$count++}}</td>
                                                            <td>{{$not->name}}</td>
                                                            <td>{{ date('Y M d',strtotime($not->created_at))}}</td>
                                                            
                                                            <td class="center">
                                                           
                                                                <a href="{{route('roles.edit',$not->id)}}" class="btn btn-success"><i class="fa fa-edit"></i>  Edit</a>
                                                                
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
                </div>
        </div>
</div>


@endsection


