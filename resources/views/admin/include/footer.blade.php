 <!-- Required Jquery -->
 <script type="text/javascript" src="{{asset('admin/files/bower_components/jquery/js/jquery.min.js')}} "></script>
 <script type="text/javascript" src="{{asset('admin/files/bower_components/jquery-ui/js/jquery-ui.min.js')}} "></script>
 <script type="text/javascript" src="{{asset('admin/files/bower_components/popper.js/js/popper.min.js')}}"></script>
 <script type="text/javascript" src="{{asset('admin/files/bower_components/bootstrap/js/bootstrap.min.js')}} "></script>
 <script type="text/javascript" src="{{asset('admin/files/assets/pages/widget/excanvas.js')}} "></script>
 <!-- waves js -->
 <script src="{{asset('admin/files/assets/pages/waves/js/waves.min.js')}}"></script>

 <!-- google jquery -->

 <!-- data-table js -->
<script src="{{asset('admin/files/bower_components/datatables.net/js/jquery.dataTables.min.js')}}"></script>
<script src="{{asset('admin/files/bower_components/datatables.net-buttons/js/dataTables.buttons.min.js')}}"></script>
<script src="{{asset('admin/files/assets/pages/data-table/js/jszip.min.js')}}"></script>
<script src="{{asset('admin/files/assets/pages/data-table/js/pdfmake.min.js')}}"></script>
<script src="{{asset('admin/files/assets/pages/data-table/js/vfs_fonts.js')}}"></script>
<script src="{{asset('admin/files/bower_components/datatables.net-buttons/js/buttons.print.min.js')}}"></script>
<script src="{{asset('admin/files/bower_components/datatables.net-buttons/js/buttons.html5.min.js')}}"></script>
<script src="{{asset('admin/files/bower_components/datatables.net-bs4/js/dataTables.bootstrap4.min.js')}}"></script>
<script src="{{asset('admin/files/bower_components/datatables.net-responsive/js/dataTables.responsive.min.js')}}"></script>
<script src="{{asset('admin/files/bower_components/datatables.net-responsive-bs4/js/responsive.bootstrap4.min.js')}}"></script>
 <!-- jquery slimscroll js -->
 <script type="text/javascript" src="{{asset('admin/files/bower_components/jquery-slimscroll/js/jquery.slimscroll.js')}}"></script>
 <!-- modernizr js -->
 <script type="text/javascript" src="{{asset('admin/files/bower_components/modernizr/js/modernizr.js')}}"></script>
 <!-- owl carousel 2 js -->
 <script type="text/javascript" src="{{asset('admin/files/bower_components/owl.carousel/js/owl.carousel.min.js')}}"></script>
 <script type="text/javascript" src="{{asset('admin/files/assets/js/owl-custom.js')}}"></script>
 
 <!-- slimscroll js -->
 <script type="text/javascript" src="{{asset('admin/files/assets/js/SmoothScroll.js')}}"></script>
 <script src="{{asset('admin/files/assets/js/jquery.mCustomScrollbar.concat.min.js')}} "></script>
 <!-- Chart js -->
 <script type="text/javascript" src="{{asset('admin/files/bower_components/chart.js/js/Chart.js')}}"></script>
 <!-- amchart js -->
 <script src="https://www.amcharts.com/lib/3/amcharts.js"></script>
 <script src="{{asset('admin/files/assets/pages/widget/amchart/gauge.min.js')}}"></script>
 <script src="{{asset('admin/files/assets/pages/widget/amchart/serial.min.js')}}"></script>
 <script src="{{asset('admin/files/assets/pages/widget/amchart/light.min.js')}}"></script>
 <script src="{{asset('admin/files/assets/pages/widget/amchart/pie.min.js')}}"></script>
 <script src="https://www.amcharts.com/lib/3/plugins/export/export.min.js"></script>
 <!-- Google map js -->
 <script src="https://developers.google.com/maps/documentation/javascript/examples/markerclusterer/markerclusterer.js">
 </script>
 <script type="text/javascript" src="http://maps.google.com/maps/api/js?sensor=true"></script>
 <script type="text/javascript" src="{{asset('admin/files/assets/pages/google-maps/gmaps.js')}}"></script>


 <!-- menu js -->
 <script src="{{asset('admin/files/assets/js/pcoded.min.js')}}"></script>
 <script src="{{asset('admin/files/assets/js/vertical/vertical-layout.min.js')}} "></script>
 <!-- custom js -->
 <script src="{{asset('admin/files/assets/pages/data-table/js/data-table-custom.js')}}"></script>
<script src="{{asset('admin/files/assets/js/pcoded.min.js')}}"></script>
{{-- <script src="{{asset('admin/files/assets/js/vertical/vertical-layout.min.js')}}"></script> --}}
<script src="{{asset('admin/files/assets/js/jquery.mCustomScrollbar.concat.min.js')}}"></script>
 <script type="text/javascript" src="{{asset('admin/files/assets/pages/dashboard/custom-dashboard.js')}}"></script>
 <script type="text/javascript" src="{{asset('admin/files/assets/js/script.js')}} "></script>
 <script  src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js" ></script>
    <script >
        @if(Session::has('success'))
       toastr.success('{{ Session::get('success') }}')
       @elseif(Session::has('error'))
       toastr.error('{{ Session::get('error') }}')
       @endif
       </script>


 </body>

 </html>
