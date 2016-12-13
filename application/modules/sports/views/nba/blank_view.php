
  <!-- Left side column. contains the sidebar -->
  <aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
      <!-- Sidebar user panel -->
      <div class="user-panel">
        <div class="pull-left image">
          <img src="<?php echo base_url();?>assets/dist/img/user2-160x160.jpg" class="img-circle" alt="User Image">
        </div>
        <div class="pull-left info">
          <p>Manton Horton</p>
          <!-- <a href="#"><i class="fa fa-circle text-success"></i> Online</a> -->
        </div>
      </div>
      <!-- search form -->
      <!-- <form action="#" method="get" class="sidebar-form">
        <div class="input-group">
          <input type="text" name="q" class="form-control" placeholder="Search...">
              <span class="input-group-btn">
                <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i>
                </button>
              </span>
        </div>
      </form> -->
      <!-- /.search form -->
      <!-- sidebar menu: : style can be found in sidebar.less -->
      <ul class="sidebar-menu">
        <li class="header">MAIN NAVIGATION</li>
        <li class="treeview">
          <a href="#">
            <i class="fa fa-dashboard"></i> <span>NFL</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="<?php echo site_url('sports/email'); ?>"><i class="fa fa-circle-o"></i>Email</a></li>
            <li><a href="<?php echo site_url('sports/pagination/table'); ?>"><i class="fa fa-circle-o"></i>Pagination</a></li>
            <li><a href="<?php echo site_url('sports/nfl_depthchart'); ?>"><i class="fa fa-circle-o"></i>Depth Chart</a></li>
            <li><a href="<?php echo site_url('sports/nfl_injuries'); ?>"><i class="fa fa-circle-o"></i>Injuries</a></li>
            <li><a href="<?php echo site_url('sports/nfl_standings'); ?>"><i class="fa fa-circle-o"></i>Standings</a></li>
            <li><a href="<?php echo site_url('sports/nfl_weekly_schedule'); ?>"><i class="fa fa-circle-o"></i>Weekly Schedule</a></li>
          </ul>
        </li>
        <li class="treeview">
          <a href="#">
            <i class="fa fa-pie-chart"></i>
            <span>NBA</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="<?php echo site_url('sports/nba_daily_schedule'); ?>"><i class="fa fa-circle-o"></i>Daily Schedule</a></li>
            <li><a href="<?php echo site_url('sports/nba_daily_transfers'); ?>"><i class="fa fa-circle-o"></i>Daily Transfers</a></li>
            <li><a href="<?php echo site_url('sports/nba_injuries'); ?>"><i class="fa fa-circle-o"></i>Injuries</a></li>
            <li><a href="<?php echo site_url('sports/nba_league_leaders'); ?>"><i class="fa fa-circle-o"></i>League Leaders</a></li>
            <li><a href="<?php echo site_url('sports/nba_standings'); ?>"><i class="fa fa-circle-o"></i>Standings</a></li>
          </ul>
        </li>
        <li class="treeview">
          <a href="#">
            <i class="fa fa-laptop"></i>
            <span>NCAAFB</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="<?php echo site_url('sports/ncaafb_associated_press'); ?>"><i class="fa fa-circle-o"></i>Associated Press Top 25</a></li>
            <li><a href="<?php echo site_url('sports/ncaafb_amway_coaches_poll'); ?>"><i class="fa fa-circle-o"></i>Amway Coaches Poll</a></li>
            <li><a href="<?php echo site_url('sports/ncaafb_college_playoff_rankings'); ?>"><i class="fa fa-circle-o"></i>College Playoff Rankings</a></li>
          </ul>
        </li>
        <li class="treeview">
          <a href="#">
            <i class="fa fa-edit"></i> 
            <span>NCAAMBB</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="<?php echo site_url('sports/ncaambb_associated_press'); ?>"><i class="fa fa-circle-o"></i>Associated Press Top 25</a></li>
            <li><a href="<?php echo site_url('sports/ncaambb_coaches_poll'); ?>"><i class="fa fa-circle-o"></i>Coaches poll</a></li>
          </ul>
        </li>
        
        <!-- <li><a href="../../documentation/index.html"><i class="fa fa-book"></i> <span>Documentation</span></a></li> -->
      </ul>
    </section>
    <!-- /.sidebar -->
  </aside>




        <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Blank page
        <small>it all starts here</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="<?php echo site_url('admin/dashboard');?>"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="#">Examples</a></li>
        <li class="active">Blank page</li>
      </ol>
    </section>


        <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-md-12">
      <!-- Default box -->
      <div class="box">
        <div class="box-header with-border">
          <h3 class="box-title">Title</h3>

          <div class="box-tools pull-right">
            <button type="button" class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip" title="Collapse">
              <i class="fa fa-minus"></i></button>
            <button type="button" class="btn btn-box-tool" data-widget="remove" data-toggle="tooltip" title="Remove">
              <i class="fa fa-times"></i></button>
          </div>
        </div>
        <div class="box-body">

                   <div class="col-md-12">
          <div class="box box-solid">
            <div class="box-header with-border">
              <h3 class="box-title">Carousel</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
                <ol class="carousel-indicators">
                  <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
                  <li data-target="#carousel-example-generic" data-slide-to="1" class=""></li>
                  <li data-target="#carousel-example-generic" data-slide-to="2" class=""></li>
                </ol>
                <div class="carousel-inner">
                  <div class="item active">
                    <img src="http://placehold.it/900x500/39CCCC/ffffff&text=I+Love+Bootstrap" alt="First slide">

                    <div class="carousel-caption">
                      First Slide
                    </div>
                  </div>
                  <div class="item">
                    <img src="http://placehold.it/900x500/3c8dbc/ffffff&text=I+Love+Bootstrap" alt="Second slide">

                    <div class="carousel-caption">
                      Second Slide
                    </div>
                  </div>
                  <div class="item">
                    <img src="http://placehold.it/900x500/f39c12/ffffff&text=I+Love+Bootstrap" alt="Third slide">

                    <div class="carousel-caption">
                      Third Slide
                    </div>
                  </div>
                </div>
                <a class="left carousel-control" href="#carousel-example-generic" data-slide="prev">
                  <span class="fa fa-angle-left"></span>
                </a>
                <a class="right carousel-control" href="#carousel-example-generic" data-slide="next">
                  <span class="fa fa-angle-right"></span>
                </a>
              </div>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>
        <!-- /.col -->

       
                    <div class="col-md-6">
                      <div class="thumbnail">
                        <img src="http://placehold.it/320x200" alt="ALT NAME">
                        <div class="caption">
                          <h3>NBA 7</h3>
                          <p>Daily Schedule</p>
                          <p align="center"><a href="<?php echo site_url('sports/nba_daily_schedule'); ?>" class="btn btn-primary btn-block">Open</a></p>
                        </div>
                      </div>
                    </div>
                      <div class="col-md-6">
                      <div class="thumbnail">
                        <img src="http://placehold.it/320x200" alt="ALT NAME">
                        <div class="caption">
                          <h3>NBA</h3>
                          <p>Injuries</p>
                          <p align="center"><a href="<?php echo site_url('sports/nba_injuries'); ?>" class="btn btn-primary btn-block">Open</a></p>
                        </div>
                      </div>
                    </div>
                      <div class="col-md-6">
                      <div class="thumbnail">
                        <img src="http://placehold.it/320x200" alt="ALT NAME">
                        <div class="caption">
                          <h3>NBA</h3>
                          <p>League Leaders</p>
                          <p align="center"><a href="<?php echo site_url('sports/nba_league_leaders'); ?>" class="btn btn-primary btn-block">Open</a></p>
                        </div>
                      </div>
                    </div>
                    <div class="col-md-6">
                      <div class="thumbnail">
                        <img src="http://placehold.it/320x200" alt="ALT NAME">
                        <div class="caption">
                          <h3>NBA</h3>
                          <p>Standings</p>
                          <p align="center"><a href="<?php echo site_url('sports/nba_standings'); ?>" class="btn btn-primary btn-block">Open</a></p>
                        </div>
                      </div>
                    </div>
                      <div class="col-md-6">
                        <div class="thumbnail">
                          <img src="http://placehold.it/320x200" alt="ALT NAME">
                          <div class="caption">
                            <h3>NCAA</h3>
                            <p>NCAA Mens Basketball AP Top 25</p>
                            <p align="center"><a href="<?php echo site_url('sports/ncaambb_associated_press'); ?>" class="btn btn-primary btn-block">Open</a></p>
                          </div>
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="thumbnail">
                          <img src="http://placehold.it/320x200" alt="ALT NAME">
                          <div class="caption">
                            <h3>NCAA</h3>
                            <p>NCAA Mens Basketball Coaches Poll</p>
                            <p align="center"><a href="<?php echo site_url('sports/ncaambb_coaches_poll'); ?>" class="btn btn-primary btn-block">Open</a></p>
                          </div>
                        </div>
                      </div>
                
                    <div class="col-md-6">
                      <div class="thumbnail">
                        <img src="http://placehold.it/320x200" alt="ALT NAME">
                        <div class="caption">
                          <h3>NFL</h3>
                          <p>Weekly Schedule</p>
                          <p align="center"><a href="<?php echo site_url('sports/nfl_weekly_schedule'); ?>" class="btn btn-primary btn-block">Open</a></p>
                        </div>
                      </div>
                    </div>
                      <div class="col-md-6">
                      <div class="thumbnail">
                        <img src="http://placehold.it/320x200" alt="ALT NAME">
                        <div class="caption">
                          <h3>NFL</h3>
                          <p>Injury Report</p>
                          <p align="center"><a href="<?php echo site_url('sports/nfl_injuries'); ?>" class="btn btn-primary btn-block">Open</a></p>
                        </div>
                      </div>
                    </div>
                      <div class="col-md-6">
                      <div class="thumbnail">
                        <img src="http://placehold.it/320x200" alt="ALT NAME">
                        <div class="caption">
                          <h3>NFL</h3>
                          <p>Standings</p>
                          <p align="center"><a href="<?php echo site_url('sports/nfl_standings'); ?>" class="btn btn-primary btn-block">Open</a></p>
                        </div>
                      </div>
                    </div>
                    <div class="col-md-6">
                      <div class="thumbnail">
                        <img src="http://placehold.it/320x200" alt="ALT NAME">
                        <div class="caption">
                          <h3>NFL</h3>
                          <p>Depth Chart</p>
                          <p align="center"><a href="<?php echo site_url('sports/nfl_depthchart'); ?>" class="btn btn-primary btn-block">Open</a></p>
                        </div>
                      </div>
                    </div>
                      <div class="col-md-6">
                        <div class="thumbnail">
                          <img src="http://placehold.it/320x200" alt="ALT NAME">
                          <div class="caption">
                            <h3>NCAA</h3>
                            <p>NCAA Mens Basketball AP Top 25</p>
                            <p align="center"><a href="<?php echo site_url('sports/ncaambb_associated_press'); ?>" class="btn btn-primary btn-block">Open</a></p>
                          </div>
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="thumbnail">
                          <img src="http://placehold.it/320x200" alt="ALT NAME">
                          <div class="caption">
                            <h3>NCAA</h3>
                            <p>NCAA Mens Basketball Coaches Poll</p>
                            <p align="center"><a href="<?php echo site_url('sports/ncaambb_coaches_poll'); ?>" class="btn btn-primary btn-block">Open</a></p>
                          </div>
                        </div>
                      </div>





                </section>
        <!-- /.content -->
      </div>
      <!-- /.content-wrapper -->
      <footer class="main-footer">
        <div class="pull-right hidden-xs">
          <b>Version</b> 2.3.8
        </div>
        <strong>Copyright &copy; 2017 <a href="#">Fantasy Application</a>.</strong> All rights
        reserved.
      </footer>
