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
          </a>
        </li>

        <li>
          <a href="{{ url('cms/user') }}">
            <i class="fa fa-group"></i> <span>User</span></a>
        </li>

        <li>
          <a href="{{ url('cms/akumulasi') }}">
            <i class="fa fa-list-alt"></i> <span>Akumulasi</span>
          </a>
        </li>

        <li>
          <a href="{{ url('cms/market') }}">
            <i class="fa fa-shopping-bag"></i> <span>Market</span>
          </a>
        </li>

        <li class="treeview">
          <a href="#">
            <i class="fa fa-shopping-basket"></i> <span>Panen</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu" style="display: none;">
            <li><a href="{{ url('cms/tahap_panen') }}"><i class="fa fa-circle-o"></i> Tahap </a></li>
            <li><a href="{{ url('cms/laporan_panen') }}"><i class="fa fa-circle-o"></i> Laporan </a></li>
          </ul>
        </li>

      </ul>
    </section>
    <!-- /.sidebar -->
  </aside>