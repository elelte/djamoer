@extends('cms.layout.main')

<!-- @section('header')
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>AdminLTE 2 | Dashboard</title>
  <-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.7 -->
  <link rel="stylesheet" href="{{asset('AdminLTE/bower_components/bootstrap/dist/css/bootstrap.min.css')}}">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="{{asset('AdminLTE/bower_components/font-awesome/css/font-awesome.min.css')}}">
  <!-- Ionicons -->
  <link rel="stylesheet" href="{{asset('AdminLTE/bower_components/Ionicons/css/ionicons.min.css')}}">
  <!-- Theme style -->
  <link rel="stylesheet" href="{{asset('AdminLTE/dist/css/AdminLTE.min.css')}}">
  <!-- AdminLTE Skins. Choose a skin from the css/skins
       folder instead of downloading all of them to reduce the load. -->
  <link rel="stylesheet" href="{{asset('AdminLTE/dist/css/skins/_all-skins.min.css')}}">
  <!-- Morris chart -->
  <link rel="stylesheet" href="{{asset('AdminLTE/bower_components/morris.js/morris.css')}}">
  <!-- jvectormap -->
  <link rel="stylesheet" href="{{asset('AdminLTE/bower_components/jvectormap/jquery-jvectormap.css')}}">
  <!-- Date Picker -->
  <link rel="stylesheet" href="{{asset('AdminLTE/bower_components/bootstrap-datepicker/dist/css/bootstrap-datepicker.min.css')}}">
  <!-- Daterange picker -->
  <link rel="stylesheet" href="{{asset('AdminLTE/bower_components/bootstrap-daterangepicker/daterangepicker.css')}}">
  <!-- bootstrap wysihtml5 - text editor -->
  <link rel="stylesheet" href="{{asset('AdminLTE/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css')}}">
@endsection -->


@section('content')
<div class="box">
        <div class="box-body">
            {{-- <table class="table table-striped table-bordered"> --}}
                <div class="container">
                    {{-- <div class="row">     --}}
                        <div class="col-sm-11 col-md-offset-0">
                            <div class="panel panel-default panel-table">
                            <div class="panel-heading">
                                <div class="row">
                                <div class="col col-xs-6">
                                    <h3 class="panel-title">Akumulasi</h3>
                                </div>
                                <div class="col col-xs-6 text-right">
                                    <button type="button" class="btn btn-sm btn-primary btn-create">Create New</button>
                                </div>
                                </div>
                            </div>
                            <div class="panel-body">
                                <table class="table table-striped table-bordered table-list">
                                <thead>
                                    <tr>
                                        <th><em class="fa fa-cog"></em></th>
                                        <th class="hidden-xs">ID</th>
                                        <th>Name</th>
                                        <th>Email</th>
                                    </tr> 
                                </thead>
                                <tbody>
                                        <tr>
                                            <td align="center">
                                            <a class="btn btn-default"><em class="fa fa-pencil"></em></a>
                                            <a class="btn btn-danger"><em class="fa fa-trash"></em></a>
                                            </td>
                                            <td class="hidden-xs">1</td>
                                            <td>John Doe</td>
                                            <td>johndoe@example.com</td>
                                        </tr>
                                        </tbody>
                                </table>
                            
                            </div>
                            <div class="panel-footer">
                                <div class="row">
                                <div class="col col-xs-4">Page 1 of 5
                                </div>
                                <div class="col col-xs-8">
                                    <ul class="pagination hidden-xs pull-right">
                                    <li><a href="#">1</a></li>
                                    <li><a href="#">2</a></li>
                                    <li><a href="#">3</a></li>
                                    <li><a href="#">4</a></li>
                                    <li><a href="#">5</a></li>
                                    </ul>
                                    <ul class="pagination visible-xs pull-right">
                                        <li><a href="#">«</a></li>
                                        <li><a href="#">»</a></li>
                                    </ul>
                                </div>
                                </div>
                            </div>
                    </div>

</div></div></div>
        <tr>
            <td>1.</td>
            <td>Update software</td>
            <td>test2</td>
            <td>nomor</td>
            <td>Update software</td>                     
            <td>
            <div class="btn-toolbar">
                <div class="btn-group" role="group">
                <a href ="/akumulasi/edit"> <button class="btn btn-success" type="button"><i class="glyphicon glyphicon-pencil"></i></button>
                </a></div>
            <div class="btn-group" role="group">
                <button class="btn btn-danger" type="button"><i class="glyphicon glyphicon-trash"></i></button>
                </div>
            </div>
            </td>
        </tr>
        <tr>
            <td>2.</td>
            <td>Clean database</td>
            <td>test</td>
            <td>nomor</td>
            <td>Update software</td>  
            <td> 
            <div class="btn-toolbar">
                <div class="btn-group" role="group">
                <a href ="/akumulasi/edit"> <button class="btn btn-success" type="button"><i class="glyphicon glyphicon-pencil"></i></button>
                </a></div>
            <div class="btn-group" role="group">
                <button class="btn btn-danger" type="button"><i class="glyphicon glyphicon-trash"></i></button>
                </div>
            </div>
            </td>
        </tr>
        <tr>
            <td>3.</td>
            <td>Cron job running</td>
            <td>test3</td>
            <td>nomor</td>
            <td>Update software</td>  
            <td>
            <div class="btn-toolbar">
                <div class="btn-group" role="group">
                <a href ="/akumulasi/edit"> <button class="btn btn-success" type="button"><i class="glyphicon glyphicon-pencil"></i></button>
                </a></div>
            <div class="btn-group" role="group">
                <button class="btn btn-danger" type="button"><i class="glyphicon glyphicon-trash"></i></button>
                </div>
            </div>
            </td>            
        </tr>
        <tr>
            <td>4.</td>
            <td>Fix and squish bugs</td>
            <td>test4</td>
            <td>nomor</td>  
            <td>Update software</td>
            <td>
            <div class="btn-toolbar">
                <div class="btn-group" role="group">
                <a href ="/akumulasi/edit"> <button class="btn btn-success" type="button"><i class="glyphicon glyphicon-pencil"></i></button>
                </a></div>
            <div class="btn-group" role="group">
                <button class="btn btn-danger" type="button"><i class="glyphicon glyphicon-trash"></i></button>
                </div>
            </div>
            </td>            
        </tr>
        <tr>
            <td>5.</td>
            <td>Fix and squish bugs</td>
            <td>test4</td>
            <td>nomor</td>  
            <td>Update software</td>
            <td>
            <div class="btn-toolbar">
                <div class="btn-group" role="group">
                <a href ="/akumulasi/edit"> <button class="btn btn-success" type="button"><i class="glyphicon glyphicon-pencil"></i></button>
                </a></div>
            <div class="btn-group" role="group">
                <button class="btn btn-danger" type="button"><i class="glyphicon glyphicon-trash"></i></button>
                </div>
            </div>
            </td>            
        </tr>
        <tr>
            <td>6.</td>
            <td>Fix and squish bugs</td>
            <td>test4</td>
            <td>nomor</td>  
            <td>Update software</td>
            <td>
            <div class="btn-toolbar">
                <div class="btn-group" role="group">
                <a href ="/akumulasi/edit"> <button class="btn btn-success" type="button"><i class="glyphicon glyphicon-pencil"></i></button>
                </a></div>
            <div class="btn-group" role="group">
                <button class="btn btn-danger" type="button"><i class="glyphicon glyphicon-trash"></i></button>
                </div>
            </div>
            </td>            
        </tr>
        <tr>
            <td>7.</td>
            <td>Fix and squish bugs</td>
            <td>test4</td>
            <td>nomor</td>  
            <td>Update software</td>
            <td>
            <div class="btn-toolbar">
                <div class="btn-group" role="group">
                <a href ="/akumulasi/edit"> <button class="btn btn-success" type="button"><i class="glyphicon glyphicon-pencil"></i></button>
                </a></div>                
            <div class="btn-group" role="group">
                <button class="btn btn-danger" type="button"><i class="glyphicon glyphicon-trash"></i></button>
                </div>
            </div>
            </td>            
        </tr>
        <tr>
            <td>8.</td>
            <td>Fix and squish bugs</td>
            <td>test4</td>
            <td>nomor</td>  
            <td>Update software</td>
            <td>
            <div class="btn-toolbar">
                <div class="btn-group" role="group">
                <a href ="/akumulasi/edit"> <button class="btn btn-success" type="button"><i class="glyphicon glyphicon-pencil"></i></button>
                </a></div>
            <div class="btn-group" role="group">
                <button class="btn btn-danger" type="button"><i class="glyphicon glyphicon-trash"></i></button>
                </div>
            </div>
            </td>            
        </tr>
        <tr>
            <td>9.</td>
            <td>Fix and squish bugs</td>
            <td>test4</td>
            <td>nomor</td>  
            <td>Update software</td>
            <td>
            <div class="btn-toolbar">
                <div class="btn-group" role="group">
                <a href ="/akumulasi/edit"> <button class="btn btn-success" type="button"><i class="glyphicon glyphicon-pencil"></i></button>
                </a></div>
            <div class="btn-group" role="group">
                <button class="btn btn-danger" type="button"><i class="glyphicon glyphicon-trash"></i></button>
                </div>
            </div>
            </td>            
        </tr>
        <tr>
            <td>10.</td>
            <td>Fix and squish bugs</td>
            <td>test4</td>
            <td>nomor</td>  
            <td>Update software</td>
            <td>
            <div class="btn-toolbar">
                <div class="btn-group" role="group">
                <a href ="/akumulasi/edit"> <button class="btn btn-success" type="button"><i class="glyphicon glyphicon-pencil"></i></button>
                </a></div>
            <div class="btn-group" role="group">
                <button class="btn btn-danger" type="button"><i class="glyphicon glyphicon-trash"></i></button>
                </div>
            </div>
            </td>            
        </tr>
        </tbody>
     </table>
    </div>
    <!-- /.box-body -->
    <div class="box-footer"> 
                <div class="col-sm-12 col-md-12">
                    <div class="dataTables_info" id="example1_info" role="status" aria-live="polite">Showing 1 to 10 of 57 entries</div>
                        
                    <ul class="pagination pagination-sm no-margin pull-right no-padding">
                        <li class="paginate_button page-item previous disabled" id="example1_previous">
                                    <a href="#" aria-controls="example1" data-dt-idx="0" tabindex="0" class="page-link"><</a></li>
                                    <li class="paginate_button page-item active"><a href="#" aria-controls="example1" data-dt-idx="1" tabindex="0" class="page-link">1</a></li>
                                    <li class="paginate_button page-item "><a href="#" aria-controls="example1" data-dt-idx="2" tabindex="0" class="page-link">2</a></li>
                                    <li class="paginate_button page-item "><a href="#" aria-controls="example1" data-dt-idx="3" tabindex="0" class="page-link">3</a></li>
                                    <li class="paginate_button page-item "><a href="#" aria-controls="example1" data-dt-idx="4" tabindex="0" class="page-link">4</a></li>
                                    <li class="paginate_button page-item "><a href="#" aria-controls="example1" data-dt-idx="5" tabindex="0" class="page-link">5</a></li>
                                    <li class="paginate_button page-item next" id="example1_next"><a href="#" aria-controls="example1" data-dt-idx="7" tabindex="0" class="page-link">></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
                    {{-- <div class="col-sm-12 col-md-7"> --}}
                        
        </div>
        {{-- <ul class="pagination pagination-sm no-margin pull-right" style="margin-right:20px">
        <li><a href="/akumulasi/edit">«</a></li>
        <li><a href="/akumulasi/edit">1</a></li>
        <li><a href="/akumulasi/edit">2</a></li>
        <li><a href="/akumulasi/edit">3</a></li>
        <li><a href="/akumulasi/edit">»</a></li>
        </ul> --}}
    </div>
@endsection


@section("footer")
  <!-- jQuery 3 -->
  <script src="{{asset('AdminLTE/bower_components/jquery/dist/jquery.min.js')}}"></script>
  <!-- jQuery UI 1.11.4 -->
  <script src="{{asset('AdminLTE/bower_components/jquery-ui/jquery-ui.min.js')}}"></script>
  <!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
  <script>
    $.widget.bridge('uibutton', $.ui.button);
  </script>
  <!-- Bootstrap 3.3.7 -->
  <script src="{{asset('AdminLTE/bower_components/bootstrap/dist/js/bootstrap.min.js')}}"></script>
  <!-- Morris.js charts -->
  <script src="{{asset('AdminLTE/bower_components/raphael/raphael.min.js')}}"></script>
  <script src="{{asset('AdminLTE/bower_components/morris.js/morris.min.js')}}"></script>
  <!-- Sparkline -->
  <script src="{{asset('AdminLTE/bower_components/jquery-sparkline/dist/jquery.sparkline.min.js')}}"></script>
  <!-- jvectormap -->
  <script src="{{asset('AdminLTE/plugins/jvectormap/jquery-jvectormap-1.2.2.min.js')}}"></script>
  <script src="{{asset('AdminLTE/plugins/jvectormap/jquery-jvectormap-world-mill-en.js')}}"></script>
  <!-- jQuery Knob Chart -->
  <script src="{{asset('AdminLTE/bower_components/jquery-knob/dist/jquery.knob.min.js')}}"></script>
  <!-- daterangepicker -->
  <script src="{{asset('AdminLTE/bower_components/moment/min/moment.min.js')}}"></script>
  <script src="{{asset('AdminLTE/bower_components/bootstrap-daterangepicker/daterangepicker.js')}}"></script>
  <!-- datepicker -->
  <script src="{{asset('AdminLTE/bower_components/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js')}}"></script>
  <!-- Bootstrap WYSIHTML5 -->
  <script src="{{asset('AdminLTE/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js')}}"></script>
  <!-- Slimscroll -->
  <script src="{{asset('AdminLTE/bower_components/jquery-slimscroll/jquery.slimscroll.min.js')}}"></script>
  <!-- FastClick -->
  <script src="{{asset('AdminLTE/bower_components/fastclick/lib/fastclick.js')}}"></script>
  <!-- AdminLTE App -->
  <script src="{{asset('AdminLTE/dist/js/adminlte.min.js')}}"></script>
  <!-- AdminLTE dashboard demo (This is only for demo purposes) -->
  <script src="{{asset('AdminLTE/dist/js/pages/dashboard.js')}}"></script>
  <!-- AdminLTE for demo purposes -->
  <script src="{{asset('AdminLTE/dist/js/demo.js')}}"></script>
@endsection