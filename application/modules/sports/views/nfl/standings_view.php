<?php
/**
* @author : Manton Horton Jr.
* Email : mantonhorton@gmail.com
* Website : www.mantonhortonjr.com
* Subject : NFL Standings
*/


// copy file content into a string var
$json_file = file_get_contents('https://api.sportradar.us/nfl-ot1/seasontd/2016/standings.json?api_key=794xyx4vedg34tvcjdsshke5');


// convert the string to a json object
$jfo = json_decode($json_file);


// exit(print_r($afc_east_teams = $jfo->conferences[0]->divisions[0]->teams));


// AFC East Conference 
$afc_east = $jfo->conferences[0]->divisions[0]->name;

// AFC East Conference Teams
$afc_east_teams = $jfo->conferences[0]->divisions[0]->teams;


// AFC North Conference 
$afc_north = $jfo->conferences[0]->divisions[1]->name;

// AFC North Conference Teams
$afc_north_teams = $jfo->conferences[0]->divisions[1]->teams;


// AFC South Conference 
$afc_south = $jfo->conferences[0]->divisions[2]->name;

// AFC South Conference Teams
$afc_south_teams = $jfo->conferences[0]->divisions[2]->teams;


// AFC West Conference 
$afc_west = $jfo->conferences[0]->divisions[3]->name;

// AFC West Conference Teams
$afc_west_teams = $jfo->conferences[0]->divisions[3]->teams;



// NFC East Conference 
$nfc_east = $jfo->conferences[1]->divisions[0]->name;

// NFC East Conference Teams
$nfc_east_teams = $jfo->conferences[1]->divisions[0]->teams;


// NFC North Conference 
$nfc_north = $jfo->conferences[1]->divisions[1]->name;

// NFC North Conference Teams
$nfc_north_teams = $jfo->conferences[1]->divisions[1]->teams;


// NFC South Conference 
$nfc_south = $jfo->conferences[1]->divisions[2]->name;

// NFC South Conference Teams
$nfc_south_teams = $jfo->conferences[1]->divisions[2]->teams;


// NFC West Conference 
$nfc_west = $jfo->conferences[1]->divisions[3]->name;

// NFC West Conference Teams
$nfc_west_teams = $jfo->conferences[1]->divisions[3]->teams;


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
        <li class="treeview active">
          <a href="#">
            <i class="fa fa-dashboard"></i> <span>NFL</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="<?php echo site_url('sports/nfl_depthchart'); ?>"><i class="fa fa-circle-o"></i>Depth Chart</a></li>
            <li><a href="<?php echo site_url('sports/nfl_injuries'); ?>"><i class="fa fa-circle-o"></i>Injuries</a></li>
            <li class="active"><a href="<?php echo site_url('sports/nfl_standings'); ?>"><i class="fa fa-circle-o"></i>Standings</a></li>
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
        NFL - Standings
        <!-- <small>preview of simple tables</small> -->
      </h1>
      <ol class="breadcrumb">
        <li><a href="<?php echo site_url('admin/dashboard');?>"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="#">NFL</a></li>
        <li class="active">Standings</li>
      </ol>
    </section>

    <!-- Main content -->

    <section class="content">
          <div class="row">
            <div class="col-md-6">
              <div class="box">
                <div class="box-header with-border">
                  <h3 class="box-title"><?php echo $afc_east; ?></h3>
                </div>
                <!-- /.box-header -->
                <div class="box-body">
                  <table class="table table-bordered table-striped">

            <?php
            foreach ($afc_east_teams as $post) {
            ?>
                <thead>

                    <tr>
                        <th><?php echo $post->market; ?> <?php echo $post->name; ?></th>
                        <th>Wins</th>
                        <th>losses</th>
                    </tr>

                </thead>

                <tbody>

                    <tr>
                        <td><?php echo "<img src = http://www.rotoworld.com/img/NFL/teams/logos/".$post->alias.".png alt='".$post->alias."' style='width:60px;height:50px;'> ";?></td>
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


            <div class="col-md-6">
              <div class="box">
                <div class="box-header with-border">
                  <h3 class="box-title"><?php echo $afc_west; ?></h3>
                </div>
                <!-- /.box-header -->
                <div class="box-body">
                  <table class="table table-bordered table-striped">

            <?php
            foreach ($afc_west_teams as $post) {
            ?>
                <thead>

                    <tr>
                        <th><?php echo $post->market; ?> <?php echo $post->name; ?></th>
                        <th>Wins</th>
                        <th>losses</th>
                    </tr>

                </thead>

                <tbody>

                    <tr>
                        <td><?php echo "<img src = http://www.rotoworld.com/img/NFL/teams/logos/".$post->alias.".png alt='".$post->alias."' style='width:60px;height:50px;'> ";?></td>
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



    <div class="col-md-6">
              <div class="box">
                <div class="box-header with-border">
                  <h3 class="box-title"><?php echo $afc_north; ?></h3>
                </div>
                <!-- /.box-header -->
                <div class="box-body">
                  <table class="table table-bordered table-striped">

            <?php
            foreach ($afc_north_teams as $post) {
            ?>
                <thead>

                    <tr>
                        <th><?php echo $post->market; ?> <?php echo $post->name; ?></th>
                        <th>Wins</th>
                        <th>losses</th>
                    </tr>

                </thead>

                <tbody>

                    <tr>
                        <td><?php echo "<img src = http://www.rotoworld.com/img/NFL/teams/logos/".$post->alias.".png alt='".$post->alias."' style='width:60px;height:50px;'> ";?></td>
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


    <div class="col-md-6">
              <div class="box">
                <div class="box-header with-border">
                  <h3 class="box-title"><?php echo $afc_south; ?></h3>
                </div>
                <!-- /.box-header -->
                <div class="box-body">
                  <table class="table table-bordered table-striped">

            <?php
            foreach ($afc_south_teams as $post) {
            ?>
                <thead>

                    <tr>
                        <th><?php echo $post->market; ?> <?php echo $post->name; ?></th>
                        <th>Wins</th>
                        <th>losses</th>
                    </tr>

                </thead>

                <tbody>

                    <tr>
                        <td><?php echo "<img src = http://www.rotoworld.com/img/NFL/teams/logos/".$post->alias.".png alt='".$post->alias."' style='width:60px;height:50px;'> ";?></td>
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


    <div class="col-md-6">
              <div class="box">
                <div class="box-header with-border">
                  <h3 class="box-title"><?php echo $nfc_east; ?></h3>
                </div>
                <!-- /.box-header -->
                <div class="box-body">
                  <table class="table table-bordered table-striped">

            <?php
            foreach ($nfc_east_teams as $post) {
            ?>
                <thead>

                    <tr>
                        <th><?php echo $post->market; ?> <?php echo $post->name; ?></th>
                        <th>Wins</th>
                        <th>losses</th>
                    </tr>

                </thead>

                <tbody>

                    <tr>
                        <td><?php echo "<img src = http://www.rotoworld.com/img/NFL/teams/logos/".$post->alias.".png alt='".$post->alias."' style='width:60px;height:50px;'> ";?></td>
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


    <div class="col-md-6">
              <div class="box">
                <div class="box-header with-border">
                  <h3 class="box-title"><?php echo $nfc_west; ?></h3>
                </div>
                <!-- /.box-header -->
                <div class="box-body">
                  <table class="table table-bordered table-striped">

            <?php
            
            foreach ($nfc_west_teams as $post) {


                if ($post->alias == 'ARI') {
                    
                    $post->alias = 'ARZ';

                }elseif ($post->alias == 'LA') {
                    
                    $post->alias = 'LAR';
                }

            ?>
                <thead>

                    <tr>
                        <th><?php echo $post->market; ?> <?php echo $post->name; ?></th>
                        <th>Wins</th>
                        <th>losses</th>
                    </tr>

                </thead>

                <tbody>

                    <tr>
                        <td><?php echo "<img src = http://www.rotoworld.com/img/NFL/teams/logos/".$post->alias.".png alt='".$post->alias."' style='width:60px;height:50px;'> ";?></td>
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

    <div class="col-md-6">
              <div class="box">
                <div class="box-header with-border">
                  <h3 class="box-title"><?php echo $nfc_north; ?></h3>
                </div>
                <!-- /.box-header -->
                <div class="box-body">
                  <table class="table table-bordered table-striped">

            <?php
            foreach ($nfc_north_teams as $post) {
            ?>
                <thead>

                    <tr>
                        <th><?php echo $post->market; ?> <?php echo $post->name; ?></th>
                        <th>Wins</th>
                        <th>losses</th>
                    </tr>

                </thead>

                <tbody>

                    <tr>
                        <td><?php echo "<img src = http://www.rotoworld.com/img/NFL/teams/logos/".$post->alias.".png alt='".$post->alias."' style='width:60px;height:50px;'> ";?></td>
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

    <div class="col-md-6">
              <div class="box">
                <div class="box-header with-border">
                  <h3 class="box-title"><?php echo $nfc_south; ?></h3>
                </div>
                <!-- /.box-header -->
                <div class="box-body">
                  <table class="table table-bordered table-striped">

            <?php
            foreach ($nfc_south_teams as $post) {
            ?>
                <thead>

                    <tr>
                        <th><?php echo $post->market; ?> <?php echo $post->name; ?></th>
                        <th>Wins</th>
                        <th>losses</th>
                    </tr>

                </thead>

                <tbody>

                    <tr>
                        <td><?php echo "<img src = http://www.rotoworld.com/img/NFL/teams/logos/".$post->alias.".png alt='".$post->alias."' style='width:60px;height:50px;'> ";?></td>
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