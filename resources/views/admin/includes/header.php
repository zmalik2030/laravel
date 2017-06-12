	<header class="main-header">
    <!-- Logo -->
    <a href="" class="logo">
      <!-- mini logo for sidebar mini 50x50 pixels -->
      <span class="logo-mini"><b>A</b>P</span>
      <!-- logo for regular state and mobile devices -->
      <span class="logo-lg"><b>Admin</b>Panel</span>
    </a>
    <!-- Header Navbar: style can be found in header.less -->
    <nav class="navbar navbar-static-top" role="navigation">
      <!-- Sidebar toggle button-->
      <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
        <span class="sr-only">Toggle navigation</span>
      </a>
      <div class="navbar-custom-menu">
        <ul class="nav navbar-nav">
          <!-- User Account: style can be found in dropdown.less -->
          <li class="dropdown user user-menu">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <i class="glyphicon glyphicon-user"></i>
              <span class="">Profile</span>
            </a>
            <ul class="dropdown-menu">
              <!-- Menu Footer-->
              <li>
                  <a href="logout" class="btn btn-default btn-flat" style="font-weight:bold;font-size:18px;padding:10px;color:#000 !important;">Sign out</a>
              </li>
            </ul>
          </li>
        </ul>
      </div>
    </nav>
  </header>
      
      <aside class="main-sidebar">
        <!-- sidebar: style can be found in sidebar.less -->
        <section class="sidebar">
          <!-- Sidebar user panel -->
          <div class="user-panel" style="height:65px !important;">
            <div class="pull-left image">
              <i class="glyphicon glyphicon-user" style="color:#FFF !important;"></i>
            </div>
            <div class="pull-left info">
              <p>Administrator<br><br><i class="fa fa-circle text-success"></i> Online</p>
              <br><br>
            </div>
          </div>
          <!-- sidebar menu: : style can be found in sidebar.less -->
          <ul class="sidebar-menu">
            <li class="header">MAIN NAVIGATION</li>
            <li class="<?php if ($tab=='dashboard') {echo "active";}?> treeview">
              <a href="#">
                <i class="fa fa-dashboard"></i> <span>Dashboard</span> <i class="fa fa-angle-left pull-right"></i>
              </a>
              <ul class="treeview-menu">
                <li><a href="<?php //echo ADMIN_URL;?>dashboard.php"><i class="fa fa-circle-o"></i>Dashboard</a></li>
              </ul>
            </li>
            <li class="<?php if ($tab=='info') {echo "active";}?> treeview">
              <a href="#">
                <i class="fa fa-files-o"></i>
                <span>Manage Masajid</span>
                <i class="fa fa-angle-left pull-right"></i>
              </a>
              <ul class="treeview-menu">
                <li><a href="<?php //echo ADMIN_URL;?>mosque.php"><i class="fa fa-circle-o"></i> Browse Masajid</a></li>
                <li><a href="<?php//echo ADMIN_URL;?>add-mosque.php"><i class="fa fa-circle-o"></i> New Masajid</a></li>
              </ul>
            </li>
            <li class="<?php if ($tab=='report') {echo "active";}?> treeview">
              <a href="#">
                <i class="fa fa-files-o"></i>
                <span>Reports</span>
                <i class="fa fa-angle-left pull-right"></i>
              </a>
              <ul class="treeview-menu">
                <li><a href="<?php //echo ADMIN_URL;?>donation-report.php"><i class="fa fa-circle-o"></i>Donation Summary</a></li>
                <li><a href="<?php //echo ADMIN_URL;?>overall-report.php"><i class="fa fa-circle-o"></i>Donation Report By Date</a></li>
                 <li><a href="<?php //echo ADMIN_URL;?>event-cal.php"><i class="fa fa-circle-o"></i>Calendar</a></li>
                 <li><a href="<?php //echo ADMIN_URL;?>masjid_report.php"><i class="fa fa-circle-o"></i>Masjid Report</a></li>
              </ul>
             
            </li>
            <li class="<?php if ($tab=='settings') {echo "active";}?> treeview">
              <a href="#">
                <i class="fa fa-pie-chart"></i>
                <span>Settings</span>
                <i class="fa fa-angle-left pull-right"></i>
              </a>
              <ul class="treeview-menu">
                <li><a href="logout"><i class="fa fa-circle-o"></i> Change Password</a></li>
              </ul>
            </li>
          </ul>
        </section>
        <!-- /.sidebar -->
      </aside>