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


@section('content')
<div id="ttable">
        <div class="table-responsive">
            <table class="table">
                <thead>
                    <tr id="th">
                        <th width="50px">No </th>
                        <th width="150px">Data1 </th>
                        <th width="150px">Data2 </th>
                        <th width="150px">Data3 </th>
                    </tr>
                </thead>
                <tbody id="tb">
                    <tr:hover {background-color: white;}></tr>
                    <!-- coloumn pertama -->
                    <tr:hover {background-color: white;}>
                        <td>Cell 1</td>
                        <td>Cell 2</td>
                        <td>Text</td>
                        <td>Text</td>
                    </tr>
                    <!-- coloumn Kedua -->
                    <tr:hover {background-color: white;}>
                        <td>Cell 3</td>
                        <td>Cell 2</td>
                        <td>Text </td>
                        <td>Text</td>
                    </tr>
                    <!-- coloumn ketiga -->
                    <tr:hover {background-color: white;}>
                        <td>Cell 3</td>
                        <td>Cell 2</td>
                        <td>Text </td>
                        <td>Text</td>
                    </tr>
                    <!-- coloumn keempat -->
                    <tr:hover {background-color: white;}>
                        <td>Cell 3</td>
                        <td>Cell 2</td>
                        <td>Text </td>
                        <td>Text</td>
                    </tr>
                    <!-- coloumn ke5 -->
                    <tr:hover {background-color: white;}>
                        <td>Cell 3</td>
                        <td>Cell 2</td>
                        <td>Text </td>
                        <td>Text</td>
                    </tr>
                    <!-- coloumn pertama -->
                    <tr:hover {background-color: white;}>
                        <td>Cell 3</td>
                        <td>Cell 2</td>
                        <td>Text </td>
                        <td>Text</td>
                    </tr>
                </tbody>
            </table>
        </div>
    @endsection