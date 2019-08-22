@extends('admin.include.main')
@section('content')

<div class="pcoded-content">
   <!-- Page-header start -->
   
   <!-- Page-header end -->
   <div class="pcoded-inner-content">
      <!-- Main-body start -->
      <div class="main-body">
         <div class="page-wrapper">
            <!-- Page-body start -->
            <div class="page-body">
               <div class="row">
                  <!-- task, page, download counter  start -->
                  <div class="col-xl-3 col-md-6">
                     <div class="card">
                        <div class="card-block">
                           <div class="row align-items-center">
                              <div class="col-8">
                                 <h4 class="text-c-purple">{{count($room)}}</h4>
                                 <h6 class="text-muted m-b-0">Total Room Types</h6>
                              </div>
                              <div class="col-4 text-right">
                                 <i class="fa fa-bar-chart f-28"></i>
                              </div>
                           </div>
                        </div>
                        {{-- <div class="card-footer bg-c-purple">
                           <div class="row align-items-center">
                              <div class="col-9">
                                 <p class="text-white m-b-0">% change</p>
                              </div>
                              <div class="col-3 text-right">
                                 <i class="fa fa-line-chart text-white f-16"></i>
                              </div>
                           </div>
                        </div> --}}
                     </div>
                  </div>
                  <div class="col-xl-3 col-md-6">
                     <div class="card">
                        <div class="card-block">
                           <div class="row align-items-center">
                              <div class="col-8">
                              <h4 class="text-c-green">{{count($hotelstaff)}}</h4>
                                 <h6 class="text-muted m-b-0">Total Staffs</h6>
                              </div>
                              <div class="col-4 text-right">
                                 <i class="fa fa-user  f-28"></i>
                              </div>
                           </div>
                        </div>
                        {{-- <div class="card-footer bg-c-green">
                           <div class="row align-items-center">
                              <div class="col-9">
                                 <p class="text-white m-b-0">% change</p>
                              </div>
                              <div class="col-3 text-right">
                                 <i class="fa fa-line-chart text-white f-16"></i>
                              </div>
                           </div>
                        </div> --}}
                     </div>
                  </div>
                  <div class="col-xl-3 col-md-6">
                     <div class="card">
                        <div class="card-block">
                           <div class="row align-items-center">
                              <div class="col-8">
                                 <h4 class="text-c-red">{{count($contact)}}</h4>
                                 <h6 class="text-muted m-b-0">Total Contacts</h6>
                              </div>
                              <div class="col-4 text-right">
                                 <i class="fa fa-calendar-check-o f-28"></i>
                              </div>
                           </div>
                        </div>
                        {{-- <div class="card-footer bg-c-red">
                           <div class="row align-items-center">
                              <div class="col-9">
                                 <p class="text-white m-b-0">% change</p>
                              </div>
                              <div class="col-3 text-right">
                                 <i class="fa fa-line-chart text-white f-16"></i>
                              </div>
                           </div>
                        </div> --}}
                     </div>
                  </div>
                  <div class="col-xl-3 col-md-6">
                     <div class="card">
                        <div class="card-block">
                           <div class="row align-items-center">
                              <div class="col-8">
                                 <h4 class="text-c-blue">{{$page_visit->page_count}}</h4>
                                 <h6 class="text-muted m-b-0">Page Views</h6>
                              </div>
                              <div class="col-4 text-right">
                                 <i class="fa fa-hand-o-down f-28"></i>
                              </div>
                           </div>
                        </div>
                        {{-- <div class="card-footer bg-c-blue">
                           <div class="row align-items-center">
                              <div class="col-9">
                                 <p class="text-white m-b-0">% change</p>
                              </div>
                              <div class="col-3 text-right">
                                 <i class="fa fa-line-chart text-white f-16"></i>
                              </div>
                           </div>
                        </div> --}}
                     </div>
                  </div>
                  <!-- task, page, download counter  end -->
                  <!--  sale analytics start -->
                 

                  <div class="col-sm-12">
                        <!-- Bootstrap slider card start -->
                        <div class="card">
                            <div class="card-block">
                                <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                                    <ol class="carousel-indicators">
                                        <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                                        <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                                        <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                                        <li data-target="#carouselExampleIndicators" data-slide-to="3"></li>
                                    </ol>
                                    <div class="carousel-inner" role="listbox">

                                        <div class="carousel-item active">
                                            <img class="d-block img-fluid w-100" src="{{asset($slider[0]->image)}}" alt="First slide" style="height: 300px!important;">
                                        </div>
                                        @for($i=1; $i<count($slider); $i++)
                                        <div class="carousel-item">
                                            <img class="d-block img-fluid w-100" src="{{asset($slider[$i]->image)}}" alt="Second slide" style="height: 300px!important;">
                                        </div>
                                        @endfor
                                       
                                    </div>
                                    <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                        <span class="sr-only">Previous</span>
                                    </a>
                                    <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                        <span class="sr-only">Next</span>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <!-- Bootstrap slider card end -->
                    </div>
                  
                  <!--  sale analytics end -->
                  <!--  project and team member start -->
                  <div class="col-xl-8 col-md-12">
                        <div class="card">
                              <div class="card-header">
                                  <h5>Room Gallery</h5>
                              </div>
                              <div class="card-block">
                                  <div class="owl-carousel carousel-dot owl-theme">
                                     @foreach($room as $r)
                                      <div class="item">
                                          <img class="d-block img-fluid" src="{{asset($r->image)}}" alt="Third slide">
                                      </div>
                                      @endforeach
                                      
                                  </div>
                              </div>
                          </div>
                     <div class="card table-card">
                        <div class="card-header">
                           <h5>Recently Contacted Lists</h5>
                           <div class="card-header-right">
                              <ul class="list-unstyled card-option">
                                 <li><i class="fa fa fa-wrench open-card-option"></i></li>
                                 <li><i class="fa fa-window-maximize full-card"></i></li>
                                 <li><i class="fa fa-minus minimize-card"></i></li>
                                 <li><i class="fa fa-trash close-card"></i></li>
                              </ul>
                           </div>
                        </div>
                        <div class="card-block">
                           <div class="table-responsive">
                              <table class="table table-hover">
                                 <thead>
                                    <tr>
                                       <th>
                                         Received Date
                                       </th>
                                       <th>Name</th>
                                       <th>Email</th>
                                       <th>Phone</th>
                                       <th>Action</th>
                                    </tr>
                                 </thead>
                                 <tbody>
                                 @foreach($contact as $rm)
                                 <tr>
                                 <td>{{$rm->created_at->diffForHumans()}}</td>
                                      <td>{{$rm->name}}</td>
                                      <td>{{$rm->email}}</td>
                                     <td>{{$rm->phone}}</td>
                                 <td>
                                     <a href="#" title="View" data-toggle="modal" data-target="#default-Modal{{$rm->id}}"><i class="fa fa-eye"></i></a>
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
                                <a href="{{route('contact.delete',$rm->id)}}" title="Delete"><i class="fa fa-trash text-danger"></i></a></td>
                                         @endcan
                                
                             </tr>
                                 @endforeach
                                
                             </tbody>
                              </table>
                              <div class="text-right m-r-20">
                                 <a href="{{route('contact.index')}}" class=" b-b-primary text-primary">View all Contacts</a>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="col-xl-4 col-md-12">
                     <div class="card ">
                        <div class="card-header">
                           <h5>Hotel Staffs</h5>
                           <div class="card-header-right">
                              <ul class="list-unstyled card-option">
                                 <li><i class="fa fa fa-wrench open-card-option"></i></li>
                                 <li><i class="fa fa-window-maximize full-card"></i></li>
                                 <li><i class="fa fa-minus minimize-card"></i></li>
                                 <li><i class="fa fa-trash close-card"></i></li>
                              </ul>
                           </div>
                        </div>
                        <div class="card-block">
                           @foreach($hotelstaff as $hs)
                           <div class="align-middle m-b-30">
                           <img src="{{asset($hs->image)}}" alt="user image" class="img-radius img-40 align-top m-r-15">
                              <div class="d-inline-block">
                              <h6>{{$hs->name}}</h6>
                                 <p class="text-muted m-b-0">{{$hs->role['name']}}</p>
                              </div>
                           </div>
                           @endforeach
                          
                           <div class="text-center">
                              <a href="{{route('hotelstaff.index')}}" class="b-b-primary text-primary">View all Staffs</a>
                           </div>
                        </div>
                     </div>

                     <div class="card feed-card">
                           <div class="card-header">
                               <h5>Recent Events</h5>
                               <div class="card-header-right">
                                   <ul class="list-unstyled card-option">
                                       <li><i class="fa fa fa-wrench open-card-option"></i></li>
                                       <li><i class="fa fa-window-maximize full-card"></i></li>
                                       <li><i class="fa fa-minus minimize-card"></i></li>
                                       <li><i class="fa fa-trash close-card"></i></li>
                                   </ul>
                               </div>
                           </div>
                           <div class="card-block">
                              @foreach($event as $e)
                              <?php $date = \Carbon\Carbon::parse($e->event_date); 
                                    ?>
                              
                               <div class="row m-b-25">
                                   <div class="col-auto p-r-0">
                                       <img src="{{asset($e->image)}}" alt="" class="img-fluid img-50">
                                   </div>
                                   <div class="col">
                                   <h6 class="m-b-5">{{$e->title}}</h6>
                                       <p class="text-c-red m-b-0">{{$date->diffForHumans()}}</p>
                                   </div>
                               </div>
                               @endforeach
                               

                               <div class="text-center">
                                   <a href="{{route('event.index')}}" class="b-b-primary text-primary">View all events</a>
                               </div>
                           </div>
                       </div>
                  </div> 


                  
               </div>
            </div>
            <!-- Page-body end -->
         </div>
         {{-- <div id="styleSelector"> </div> --}}
      </div>
   </div>
</div>
</div>
</div>
</div>
</div>
<!-- Warning Section Starts -->
<!-- Older IE warning message -->
<!--[if lt IE 10]>
<div class="ie-warning">
   <h1>Warning!!</h1>
   <p>You are using an outdated version of Internet Explorer, please upgrade <br/>to any of the following web browsers to access this website.</p>
   <div class="iew-container">
      <ul class="iew-download">
         <li>
            <a href="http://www.google.com/chrome/">
               <img src="../files/assets/images/browser/chrome.png" alt="Chrome">
               <div>Chrome</div>
            </a>
         </li>
         <li>
            <a href="https://www.mozilla.org/en-US/firefox/new/">
               <img src="../files/assets/images/browser/firefox.png" alt="Firefox">
               <div>Firefox</div>
            </a>
         </li>
         <li>
            <a href="http://www.opera.com">
               <img src="../files/assets/images/browser/opera.png" alt="Opera">
               <div>Opera</div>
            </a>
         </li>
         <li>
            <a href="https://www.apple.com/safari/">
               <img src="../files/assets/images/browser/safari.png" alt="Safari">
               <div>Safari</div>
            </a>
         </li>
         <li>
            <a href="http://windows.microsoft.com/en-us/internet-explorer/download-ie">
               <img src="../files/assets/images/browser/ie.png" alt="">
               <div>IE (9 & above)</div>
            </a>
         </li>
      </ul>
   </div>
   <p>Sorry for the inconvenience!</p>
</div>
<![endif]-->
<!-- Warning Section Ends -->

@endsection