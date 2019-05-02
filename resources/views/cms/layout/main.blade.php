<!DOCTYPE html>
<html>
    <head>
        @include('cms/layout/header')

        @yield('header')
    </head>

    <body class="hold-transition skin-blue sidebar-mini">
        <div class="wrapper">
            @include('cms/layout/mainheader')
            <!-- Left side column. contains the logo and sidebar -->
            @include('cms/layout/sidebar')

            <!-- Content Wrapper. Contains page content -->
            <div class="content-wrapper">
            <!-- Content Header (Page header) -->
        
            <div class="content-header">
                <h1> Welcome
                <small>Dashboard</small>
                </h1>
                <ol class="breadcrumb">
                <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
                <li class="active">Dashboard</li>
                </ol>
            </div>
        

            <!-- Main content -->
            <section class="content">
                @yield('content')
            </section>
            <!-- /.content -->
            </div>
            @yield('footer')
            @include('cms/layout/footer')
        </div>
    </body>
</html>