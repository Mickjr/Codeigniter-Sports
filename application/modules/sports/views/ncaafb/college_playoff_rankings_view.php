<?php
/**
* @author : Manton Horton Jr.
* Email : mantonhorton@gmail.com
* Website : www.mantonhortonjr.com
* Subject : NCAAFB College Football Playoff Rankings
* http://www.ourlads.com/ncaa-football-depth-charts/
*/


// copy file content into a string var
$json_file = file_get_contents('http://api.sportradar.us/ncaafb-t1/polls/CFP25/2016/10/rankings.json?api_key=vdmmregqeetyd9cry962fvq9');


// convert the string to a json object
$jfo = json_decode($json_file);


// Associated Press Top 25 
$cfp25 = $jfo->rankings;



?>



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
        <li class="treeview active">
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
            <li class="active"><a href="<?php echo site_url('sports/ncaafb_college_playoff_rankings'); ?>"><i class="fa fa-circle-o"></i>College Playoff Rankings</a></li>
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
        NCAAFB - College Football Playoff Rankings
        <small></small>
      </h1>

      <ol class="breadcrumb">

        <li><a href="<?php echo site_url('admin/dashboard');?>"><i class="fa fa-dashboard"></i> Home</a></li>

        <li><a href="#">NCAAFB</a></li>

        <li class="active">College Playoff Rankings</li>

      </ol>

    </section>
  
        <section class="content">
          <div class="row">
            <div class="col-md-12">
              <div class="box">
           <div class="box-header with-border">
                  <h3 class="box-title">College Football Playoff Rankings</h3>
                </div>
            <!-- /.box-header -->
                <div class="box-body">
                  <table class="table table-bordered table-striped">

            <?php
            foreach ($cfp25 as $post) {

            	if ($post->id == 'BAMA') {
                    
                    $post->id = 'AL';

                }elseif ($post->id == 'MICH') {
                    
                    $post->id = 'MI';

                }elseif ($post->id == 'CLE') {
                    
                    $post->id = 'CLEM';

                }elseif ($post->id == 'WAS') {
                    
                    $post->id = 'WA';

                }elseif ($post->id == 'OSU') {
                    
                    $post->id = 'OHST';

                }elseif ($post->id == 'WIS') {
                    
                    $post->id = 'WI';

                }elseif ($post->id == 'OKL') {
                    
                    $post->id = 'OK';

                }elseif ($post->id == 'WVU') {
                    
                    $post->id = 'WV';

                }elseif ($post->id == 'UTH') {
                    
                    $post->id = 'UTST';

                }elseif ($post->id == 'WMC') {
                    
                    $post->id = 'WM';

                }elseif ($post->id == 'NEB') {
                    
                    $post->id = 'NB';

                }elseif ($post->id == 'PSU') {
                    
                    $post->id = 'PAST';

                }elseif ($post->id == 'COL') {
                    
                    $post->id = 'COS';

                }elseif ($post->id == 'OKS') {
                    
                    $post->id = 'OKST';

                }elseif ($post->id == 'VT') {
                    
                    $post->id = 'VAT';

                }elseif ($post->id == 'BOISE') {
                    
                    $post->id = 'BOIST';

                }elseif ($post->id == 'WST') {
                    
                    $post->id = 'WA';

                }elseif ($post->id == 'STA') {
                    
                    $post->id = 'STAN';

                }elseif ($post->id == 'MSU') {
                    
                    $post->id = 'MIST';

                }elseif ($post->id == 'UGA') {
                    
                    $post->id = 'GA';

                }elseif ($post->id == 'IOW') {
                    
                    $post->id = 'IA';

                }elseif ($post->id == 'MIS') {
                    
                    $post->id = 'OLEMS';

                }elseif ($post->id == 'TEX') {
                    
                    $post->id = 'TX';

                }elseif ($post->id == 'ORE') {
                    
                    $post->id = 'OR';

                }


            ?>
                <thead>

                    <tr>
                    	<th><?php echo $post->rank; ?></th> 
                        <th><?php echo $post->market; ?> <?php echo $post->name; ?></th>
                        <th>Wins</th>
                        <th>losses</th>
                    </tr>

                </thead>

                <tbody>

                    <tr>
                    	<td></td>
                        <td><?php echo "<img src = http://www.ourlads.com/images/colleges/FBS_".$post->id.".gif alt='".$post->id."' style='width:30px;height:25px;'> ";?></td>
                        <td><?php echo $post->wins; ?></td>
                        <td><?php echo $post->losses; ?></td>
                    </tr>
                <?php
                } // end foreach
                ?>
                </tbody>
            </table>
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