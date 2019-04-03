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
    <div class="box-header with-border">
        <!-- <h3>Bordered Table</h3>  -->
            <!-- <form target="_self" class="form-inline">
                <div class="form-group" style="background-color:rgba(255,255,255,0);"><label for="search-field" class="control-label" style="background-color:rgba(46,231,209,0.28);"></label><input type="search" name="search" placeholder="Search name"
                class="form-control search-field " id="search-field" /><button class="btn btn-primary pull-right" type="submit" style="background-color:rgb(41,97,146);"><i class="glyphicon glyphicon-search"></i></button></div>
            </form> -->

            <form target="/akumulasi/edit" class="form-inline">                
                <div class="form-group" style="background-color:rgba(255,255,255,0);"><label for="search-field" class="control-label" style="background-color:rgba(46,231,209,0.28);"></label><input type="search" name="search" placeholder="Search name"
                class="form-control search-field " id="search-field" /><button class="btn btn-primary pull-right" type="submit" style="background-color:rgb(41,97,146);">Search</button></div>
                <button class="btn btn-primary" type="submit"><i class="fa fa-plus"></i></button>
                </form>                
    </div>
    <!-- /.box-header -->    
    <div class="box-body">
        <table class="table table-striped table-bordered">
        <tbody><tr>
            <th style="width: 10px">ID</th>
            <th style="width:250px">Nama</th>
            <th style="width:250px">Jumlah Pengiriman</th>
            <th style="width:200px">Tanggal Pengiriman</th>
            <th style="width:200px">Last Update</th>
            <th><i class="fa fa-cog">Action</i></th>
        </tr>
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
            <div class="row">
                    <div class="col-xs-6 col-sm-6 col-md-7 col-lg-6"style="padding-top:3px"><div class="dataTables_info" id="example1_info" role="status" aria-live="polite">Showing 1 to 10 of 57 entries</div></div>
                    {{-- <div class="col"> --}}
                        <nav class="col-md-3" style="float:right">
                            <ul class="pagination no-margin pagination-sm pull-right">
                                <li class="page-item"><a class="page-link" aria-label="Previous"><span aria-hidden="true">«</span></a></li>
                                <li class="page-item"><a class="page-link">1</a></li>
                                <li class="page-item"><a class="page-link">2</a></li>
                                <li class="page-item"><a class="page-link">3</a></li>                                
                                <li class="page-item"><a class="page-link" aria-label="Next"><span aria-hidden="true">»</span></a></li>
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>
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