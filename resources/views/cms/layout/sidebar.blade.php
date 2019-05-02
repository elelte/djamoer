<aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
      <!-- /.search form -->
      <!-- sidebar menu: : style can be found in sidebar.less -->
      <ul class="sidebar-menu" data-widget="tree">
        <li class="header">MAIN NAVIGATION</li>
        <li class="active treeview">
          <a href="#">
            <i class="fa fa-dashboard"></i> <span>Dashboard</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          
          <ul class="treeview-menu">
            <li class="active"><a href="{{ url('cms/user') }}"><i class="fa fa-circle-o"></i> Dashboard v1</a></li>
            <li><a href="#"><i class="fa fa-circle-o"></i> Dashboard v2</a></li>
          </ul>
        </li>
        <li><a href="{{ url('cms/user') }}"><i class="fa fa-group"></i> User</a></li>
        <li><a href="{{ url('cms/akumulasi') }}"><i class="fa fa-list-alt"></i> Akumulasi</a></li>
        <li><a href="{{ url('cms/market') }}"><i class="fa fa-shopping-bag"></i>Market</a></li>
        <li><a href="{{ url('cms/panen') }}"><i class="fa fa-shopping-basket"></i>Panen</a></li>
      </ul>
    </section>
    <!-- /.sidebar -->
  </aside>