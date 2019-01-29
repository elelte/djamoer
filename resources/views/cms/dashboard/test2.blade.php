@extends('cms.layout.main')

@section('header')
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>AdminLTE 2 | Dashboard</title>
  <!-- Tell the browser to be responsive to screen width -->
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
@endsection

<!-- <style>
/* button.btn.btn-default.btn-lg{
  background-color:black;
}

thead#promo{
  font-size:17px;
  margin:auto;
}

#Act1{
  font-size:17px;
} */


</style> -->

<!-- <style>
   h1{
  text-align:center;
  background-color:yellow;
}
    th{
        background-color:yellow;
    }
    tr:hover{
        background-color:black; 
    }
    }
    
</style> -->

@section('content')
<div class="table-responsive">
                <table class="table">
                <!-- id="promo" -->
                    <thead>
                        <tr>
                            <th class="info" width="50px">Id </th>
                            <th class="info">Nama </th>
                            <th class="info">Email </th>
                            <th>Action </th>                        
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>Cell 1</td>
                            <td>Cell 2</td>
                            <td>Cell 2</td>
                            <td>
                            <div class="btn-group btn-group-sm" role="group">
                                <button class="btn btn-primary btn-lg" type="button">Primary </button>
                                <button class="btn btn-info btn-lg" type="button">Secondary </button>
                            </div></td>
                        </tr>
                        <tr>
                            <td>Cell 3</td>
                            <td>Cell 4</td>
                            <td>Cell 4</td>
                        </tr>
                        <tr>
                            <td>Cell 1</td>
                            <td>Cell 2</td>
                            <td>Cell 2</td>
                        </tr>
                        <tr>
                            <td>Cell 1</td>
                            <td>Cell 2</td>
                            <td>Cell 2</td>
                        </tr>
                        <tr>
                            <td>Cell 1</td>
                            <td>Cell 2</td>
                            <td>Cell 2</td>
                        </tr>
                        <tr>
                            <td>Cell 1</td>
                            <td>Cell 2</td>
                            <td>Cell 2</td>
                        </tr>
                        <tr>
                            <td>Cell 1</td>
                            <td>Cell 2</td>
                            <td>Cell 2</td>
                        </tr>
                        <tr>
                            <td>Cell 1</td>
                            <td>Cell 2</td>
                            <td>Cell 2</td>
                        </tr>
                        <tr>
                            <td>Cell 1</td>
                            <td>Cell 2</td>
                            <td>Cell 2</td>
                        </tr>
                        <tr>
                            <td>Cell 1</td>
                            <td>Cell 2</td>
                            <td>Cell 2</td>
                        </tr>
                        <tr>
                            <td>Cell 1</td>
                            <td>Cell 2</td>
                            <td>Cell 2</td>
                        </tr>
                        <tr>
                            <td>Cell 1</td>
                            <td>Cell 2</td>
                            <td>Cell 2</td>
                        </tr>
                        <tr>
                            <td>Cell 1</td>
                            <td>Cell 2</td>
                            <td>Cell 2</td>
                        </tr>
                        <tr>
                            <td>Cell 1</td>
                            <td>Cell 2</td>
                            <td>Cell 2</td>
                        </tr>
                    </tbody>
                </table>    
        </div>        
    @endsection