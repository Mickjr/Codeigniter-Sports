<?php
/**
* @author : Manton Horton Jr.
* Email : mantonhorton@gmail.com
* Website : www.mantonhortonjr.com
* Subject : Standings
*/


// copy file content into a string var
$json_file = file_get_contents('https://api.sportradar.us/nba-t3/seasontd/2016/reg/standings.json?api_key=s2n89799m8hfjkapcvb7qsxk');


// convert the string to a json object
$jfo = json_decode($json_file);

// exit (print_r($south_east_teams = $jfo->conferences[0]->divisions[0]->teams));



// exit(print_r($afc_east_teams = $jfo->conferences[0]->divisions[0]->teams));


/* -------------- EASTERN CONFERENCE ---------------------*/

// Southeast Division - Eastern Conference 
$south_east = $jfo->conferences[0]->divisions[0]->name;

// Southeast Division Teams
$south_east_teams = $jfo->conferences[0]->divisions[0]->teams;


// Central Division - Eastern Conference 
$central = $jfo->conferences[0]->divisions[1]->name;

// Central Division Teams
$central_teams = $jfo->conferences[0]->divisions[1]->teams;


// Atlantic Division - Eastern Conference 
$atlantic = $jfo->conferences[0]->divisions[2]->name;

// Atlantic Division Teams
$atlantic_teams = $jfo->conferences[0]->divisions[2]->teams;


/* -------------- WESTERN CONFERENCE ---------------------*/


// Pacific Division - Western Conference 
$pacific = $jfo->conferences[1]->divisions[0]->name;

// Pacific Division Teams
$pacific_teams = $jfo->conferences[1]->divisions[0]->teams;


// Southwest Division - Western Conference 
$south_west = $jfo->conferences[1]->divisions[1]->name;

// Southwest Division Teams
$south_west_teams = $jfo->conferences[1]->divisions[1]->teams;


// Northwest Division - Western Conference 
$north_west = $jfo->conferences[1]->divisions[2]->name;

// Northwest Division Teams
$north_west_teams = $jfo->conferences[1]->divisions[2]->teams;



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
        <li class="treeview active">
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
            <li class="active"><a href="<?php echo site_url('sports/nba_standings'); ?>"><i class="fa fa-circle-o"></i>Standings</a></li>
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
      <h1>NBA - Standings
        <small></small>
      </h1>

      <ol class="breadcrumb">

        <li><a href="<?php echo site_url('admin/dashboard');?>"><i class="fa fa-dashboard"></i> Home</a></li>

        <li><a href="#">NBA</a></li>

        <li class="active">Standings</li>

      </ol>

    </section>
  
        <section class="content">
        
            <div class="row">
              <div class="col-md-12">
              <div class="box">
                <div class="box-header with-border">
                  <h1 class="box-title">Eastern Conference - <?php echo $south_east; ?> Division</h1>
                </div>
                <!-- /.box-header -->
                <div class="box-body">
                  <table class="table table-bordered table-striped">


            <?php

            foreach ($south_east_teams as $post) {

                if ($post->name == 'Clippers') {
                    
                    $post->name = 'lac';

                }elseif ($post->name == 'Grizzlies') {
                    
                    $post->name = 'mem';

                }elseif ($post->name == 'Trail Blazers') {
                    
                    $post->name = 'por';

                }elseif ($post->name == 'Raptors') {
                    
                    $post->name = 'tor';
                    
                }elseif ($post->name == '76ers') {
                    
                    $post->name = 'phi';
                    
                }elseif ($post->name == 'Mavericks') {
                    
                    $post->name = 'dal';
                    
                }elseif ($post->name == 'Heat') {
                    
                    $post->name = 'mia';
                    
                }elseif ($post->name == 'Nuggets') {
                    
                    $post->name = 'den';
                    
                }elseif ($post->name == 'Nets') {
                    
                    $post->name = 'bkn';
                    
                }elseif ($post->name == 'Pistons') {
                    
                    $post->name = 'det';
                    
                }elseif ($post->name == 'Hawks') {
                    
                    $post->name = 'atl';
                    
                }elseif ($post->name == 'Cavaliers') {
                    
                    $post->name = 'cle';
                    
                }elseif ($post->name == 'Rockets') {
                    
                    $post->name = 'hou';
                    
                }elseif ($post->name == 'Jazz') {
                    
                    $post->name = 'uta';
                    
                }elseif ($post->name == 'Celtics') {
                    
                    $post->name = 'bos';
                    
                }elseif ($post->name == 'Hornets') {
                    
                    $post->name = 'cha';
                    
                }elseif ($post->name == 'Timberwolves') {
                    
                    $post->name = 'min';
                    
                }elseif ($post->name == 'Wizards') {
                    
                    $post->name = 'was';
                    
                }elseif ($post->name == 'Magic') {
                    
                    $post->name = 'orl';
                    
                }elseif ($post->name == 'Thunder') {
                    
                    $post->name = 'okc';
                    
                }elseif ($post->name == 'Bulls') {
                    
                    $post->name = 'chi';
                    
                }elseif ($post->name == 'Kings') {
                    
                    $post->name = 'sac';
                    
                }elseif ($post->name == 'Pacers') {
                    
                    $post->name = 'ind';
                    
                }elseif ($post->name == 'Spurs') {
                    
                    $post->name = 'sa';
                    
                }elseif ($post->name == 'Warriors') {
                    
                    $post->name = 'gs';
                    
                }elseif ($post->name == 'Knicks') {
                    
                    $post->name = 'ny';
                    
                }elseif ($post->name == 'Pelicans') {
                    
                    $post->name = 'no';

                }elseif ($post->name == 'Bucks') {
                    
                    $post->name = 'mlw';
                }elseif ($post->name == 'Lakers') {
                    
                    $post->name = 'lak';

                }elseif ($post->name == 'Suns') {
                    
                    $post->name = 'pho';
                }
                
            ?>
                <thead>

                    <tr>
                        <th><?php echo $post->market; ?></th>
                        <th>Wins</th>
                        <th>losses</th>
                        <th>Games Behind</th>
                    </tr>

                </thead>

                <tbody>

                    <tr>
                        <td><?php echo "<img src = http://www.rotoworld.com/img/NBA/teams/logos/".$post->name.".png alt='".$post->name."' style='width:60px;height:50px;'> ";?></td>
                        <td><?php echo $post->wins; ?></td>
                        <td><?php echo $post->losses; ?></td>
                        <td>League - <?php echo $post->games_behind->league; ?><br/>Conference - <?php echo $post->games_behind->conference; ?><br/>Division - <?php echo $post->games_behind->division; ?></td>
                    </tr>
                <?php
                } // end foreach
                ?>
                  </tbody>
                    </table>
                </div>
              </div>
            </div>
           
               <div class="col-md-12">
              <div class="box">
                <div class="box-header with-border">
                  <h3 class="box-title">Eastern Conference - <?php echo $central; ?> Division</h3>
                </div>
                <!-- /.box-header -->
                <div class="box-body">
                  <table class="table table-bordered table-striped">


            <?php

            foreach ($central_teams as $post) {

                if ($post->name == 'Clippers') {
                    
                    $post->name = 'lac';

                }elseif ($post->name == 'Grizzlies') {
                    
                    $post->name = 'mem';

                }elseif ($post->name == 'Trail Blazers') {
                    
                    $post->name = 'por';

                }elseif ($post->name == 'Raptors') {
                    
                    $post->name = 'tor';
                    
                }elseif ($post->name == '76ers') {
                    
                    $post->name = 'phi';
                    
                }elseif ($post->name == 'Mavericks') {
                    
                    $post->name = 'dal';
                    
                }elseif ($post->name == 'Heat') {
                    
                    $post->name = 'mia';
                    
                }elseif ($post->name == 'Nuggets') {
                    
                    $post->name = 'den';
                    
                }elseif ($post->name == 'Nets') {
                    
                    $post->name = 'bkn';
                    
                }elseif ($post->name == 'Pistons') {
                    
                    $post->name = 'det';
                    
                }elseif ($post->name == 'Hawks') {
                    
                    $post->name = 'atl';
                    
                }elseif ($post->name == 'Cavaliers') {
                    
                    $post->name = 'cle';
                    
                }elseif ($post->name == 'Rockets') {
                    
                    $post->name = 'hou';
                    
                }elseif ($post->name == 'Jazz') {
                    
                    $post->name = 'uta';
                    
                }elseif ($post->name == 'Celtics') {
                    
                    $post->name = 'bos';
                    
                }elseif ($post->name == 'Hornets') {
                    
                    $post->name = 'cha';
                    
                }elseif ($post->name == 'Timberwolves') {
                    
                    $post->name = 'min';
                    
                }elseif ($post->name == 'Wizards') {
                    
                    $post->name = 'was';
                    
                }elseif ($post->name == 'Magic') {
                    
                    $post->name = 'orl';
                    
                }elseif ($post->name == 'Thunder') {
                    
                    $post->name = 'okc';
                    
                }elseif ($post->name == 'Bulls') {
                    
                    $post->name = 'chi';
                    
                }elseif ($post->name == 'Kings') {
                    
                    $post->name = 'sac';
                    
                }elseif ($post->name == 'Pacers') {
                    
                    $post->name = 'ind';
                    
                }elseif ($post->name == 'Spurs') {
                    
                    $post->name = 'sa';
                    
                }elseif ($post->name == 'Warriors') {
                    
                    $post->name = 'gs';
                    
                }elseif ($post->name == 'Knicks') {
                    
                    $post->name = 'ny';
                    
                }elseif ($post->name == 'Pelicans') {
                    
                    $post->name = 'no';

                }elseif ($post->name == 'Bucks') {
                    
                    $post->name = 'mlw';

                }elseif ($post->name == 'Lakers') {
                    
                    $post->name = 'lak';

                }elseif ($post->name == 'Suns') {
                    
                    $post->name = 'pho';
                }
                
            ?>
                <thead>

                    <tr>
                        <th><?php echo $post->market; ?></th>
                        <th>Wins</th>
                        <th>losses</th>
                        <th>Games Behind</th>
                    </tr>

                </thead>

                <tbody>

                    <tr>
                        <td><?php echo "<img src = http://www.rotoworld.com/img/NBA/teams/logos/".$post->name.".png alt='".$post->name."' style='width:60px;height:50px;'> ";?></td>
                        <td><?php echo $post->wins; ?></td>
                        <td><?php echo $post->losses; ?></td>
                        <td>League - <?php echo $post->games_behind->league; ?><br/>Conference - <?php echo $post->games_behind->conference; ?><br/>Division - <?php echo $post->games_behind->division; ?></td>
                    </tr>
                <?php
                } // end foreach
                ?>
                  </tbody>
                    </table>
                </div>
              </div>
            </div>


             <div class="col-md-12">
              <div class="box">
                <div class="box-header with-border">
                  <h3 class="box-title">Eastern Conference - <?php echo $atlantic; ?> Division</h3>
                </div>
                <!-- /.box-header -->
                <div class="box-body">
                  <table class="table table-bordered table-striped">


            <?php

            foreach ($atlantic_teams as $post) {

                if ($post->name == 'Clippers') {
                    
                    $post->name = 'lac';

                }elseif ($post->name == 'Grizzlies') {
                    
                    $post->name = 'mem';

                }elseif ($post->name == 'Trail Blazers') {
                    
                    $post->name = 'por';

                }elseif ($post->name == 'Raptors') {
                    
                    $post->name = 'tor';
                    
                }elseif ($post->name == '76ers') {
                    
                    $post->name = 'phi';
                    
                }elseif ($post->name == 'Mavericks') {
                    
                    $post->name = 'dal';
                    
                }elseif ($post->name == 'Heat') {
                    
                    $post->name = 'mia';
                    
                }elseif ($post->name == 'Nuggets') {
                    
                    $post->name = 'den';
                    
                }elseif ($post->name == 'Nets') {
                    
                    $post->name = 'bkn';
                    
                }elseif ($post->name == 'Pistons') {
                    
                    $post->name = 'det';
                    
                }elseif ($post->name == 'Hawks') {
                    
                    $post->name = 'atl';
                    
                }elseif ($post->name == 'Cavaliers') {
                    
                    $post->name = 'cle';
                    
                }elseif ($post->name == 'Rockets') {
                    
                    $post->name = 'hou';
                    
                }elseif ($post->name == 'Jazz') {
                    
                    $post->name = 'uta';
                    
                }elseif ($post->name == 'Celtics') {
                    
                    $post->name = 'bos';
                    
                }elseif ($post->name == 'Hornets') {
                    
                    $post->name = 'cha';
                    
                }elseif ($post->name == 'Timberwolves') {
                    
                    $post->name = 'min';
                    
                }elseif ($post->name == 'Wizards') {
                    
                    $post->name = 'was';
                    
                }elseif ($post->name == 'Magic') {
                    
                    $post->name = 'orl';
                    
                }elseif ($post->name == 'Thunder') {
                    
                    $post->name = 'okc';
                    
                }elseif ($post->name == 'Bulls') {
                    
                    $post->name = 'chi';
                    
                }elseif ($post->name == 'Kings') {
                    
                    $post->name = 'sac';
                    
                }elseif ($post->name == 'Pacers') {
                    
                    $post->name = 'ind';
                    
                }elseif ($post->name == 'Spurs') {
                    
                    $post->name = 'sa';
                    
                }elseif ($post->name == 'Warriors') {
                    
                    $post->name = 'gs';
                    
                }elseif ($post->name == 'Knicks') {
                    
                    $post->name = 'ny';
                    
                }elseif ($post->name == 'Pelicans') {
                    
                    $post->name = 'no';

                }elseif ($post->name == 'Bucks') {
                    
                    $post->name = 'mlw';

                }elseif ($post->name == 'Lakers') {
                    
                    $post->name = 'lak';

                }elseif ($post->name == 'Suns') {
                    
                    $post->name = 'pho';
                }
                
            ?>
                <thead>

                    <tr>
                        <th><?php echo $post->market; ?></th>
                        <th>Wins</th>
                        <th>losses</th>
                        <th>Games Behind</th>
                    </tr>

                </thead>

                <tbody>

                    <tr>
                        <td><?php echo "<img src = http://www.rotoworld.com/img/NBA/teams/logos/".$post->name.".png alt='".$post->name."' style='width:60px;height:50px;'> ";?></td>
                        <td><?php echo $post->wins; ?></td>
                        <td><?php echo $post->losses; ?></td>
                        <td>League - <?php echo $post->games_behind->league; ?><br/>Conference - <?php echo $post->games_behind->conference; ?><br/>Division - <?php echo $post->games_behind->division; ?></td>
                    </tr>
                <?php
                } // end foreach
                ?>
                  </tbody>
                    </table>
                </div>
              </div>
            </div>
           
              <div class="col-md-12">
              <div class="box">
                <div class="box-header with-border">
                  <h3 class="box-title">Western Conference - <?php echo $pacific; ?> Division</h3>
                </div>
                <!-- /.box-header -->
                <div class="box-body">
                  <table class="table table-bordered table-striped">


            <?php

            foreach ($pacific_teams as $post) {

                if ($post->name == 'Clippers') {
                    
                    $post->name = 'lac';

                }elseif ($post->name == 'Grizzlies') {
                    
                    $post->name = 'mem';

                }elseif ($post->name == 'Trail Blazers') {
                    
                    $post->name = 'por';

                }elseif ($post->name == 'Raptors') {
                    
                    $post->name = 'tor';
                    
                }elseif ($post->name == '76ers') {
                    
                    $post->name = 'phi';
                    
                }elseif ($post->name == 'Mavericks') {
                    
                    $post->name = 'dal';
                    
                }elseif ($post->name == 'Heat') {
                    
                    $post->name = 'mia';
                    
                }elseif ($post->name == 'Nuggets') {
                    
                    $post->name = 'den';
                    
                }elseif ($post->name == 'Nets') {
                    
                    $post->name = 'bkn';
                    
                }elseif ($post->name == 'Pistons') {
                    
                    $post->name = 'det';
                    
                }elseif ($post->name == 'Hawks') {
                    
                    $post->name = 'atl';
                    
                }elseif ($post->name == 'Cavaliers') {
                    
                    $post->name = 'cle';
                    
                }elseif ($post->name == 'Rockets') {
                    
                    $post->name = 'hou';
                    
                }elseif ($post->name == 'Jazz') {
                    
                    $post->name = 'uta';
                    
                }elseif ($post->name == 'Celtics') {
                    
                    $post->name = 'bos';
                    
                }elseif ($post->name == 'Hornets') {
                    
                    $post->name = 'cha';
                    
                }elseif ($post->name == 'Timberwolves') {
                    
                    $post->name = 'min';
                    
                }elseif ($post->name == 'Wizards') {
                    
                    $post->name = 'was';
                    
                }elseif ($post->name == 'Magic') {
                    
                    $post->name = 'orl';
                    
                }elseif ($post->name == 'Thunder') {
                    
                    $post->name = 'okc';
                    
                }elseif ($post->name == 'Bulls') {
                    
                    $post->name = 'chi';
                    
                }elseif ($post->name == 'Kings') {
                    
                    $post->name = 'sac';
                    
                }elseif ($post->name == 'Pacers') {
                    
                    $post->name = 'ind';
                    
                }elseif ($post->name == 'Spurs') {
                    
                    $post->name = 'sa';
                    
                }elseif ($post->name == 'Warriors') {
                    
                    $post->name = 'gs';
                    
                }elseif ($post->name == 'Knicks') {
                    
                    $post->name = 'ny';
                    
                }elseif ($post->name == 'Pelicans') {
                    
                    $post->name = 'no';

                }elseif ($post->name == 'Bucks') {
                    
                    $post->name = 'mlw';

                }elseif ($post->name == 'Lakers') {
                    
                    $post->name = 'lak';

                }elseif ($post->name == 'Suns') {
                    
                    $post->name = 'pho';
                }
                
            ?>
                <thead>

                    <tr>
                        <th><?php echo $post->market; ?></th>
                        <th>Wins</th>
                        <th>losses</th>
                        <th>Games Behind</th>
                    </tr>

                </thead>

                <tbody>

                    <tr>
                        <td><?php echo "<img src = http://www.rotoworld.com/img/NBA/teams/logos/".$post->name.".png alt='".$post->name."' style='width:60px;height:50px;'> ";?></td>
                        <td><?php echo $post->wins; ?></td>
                        <td><?php echo $post->losses; ?></td>
                        <td>League - <?php echo $post->games_behind->league; ?><br/>Conference - <?php echo $post->games_behind->conference; ?><br/>Division - <?php echo $post->games_behind->division; ?></td>
                    </tr>
                <?php
                } // end foreach
                ?>
                  </tbody>
                    </table>
                </div>
              </div>
            </div>

           
           <h2 class="main_title"></h2>

              <div class="col-md-12">
              <div class="box">
                <div class="box-header with-border">
                  <h3 class="box-title">Western Conference - <?php echo $south_west; ?> Division</h3>
                </div>
                <!-- /.box-header -->
                <div class="box-body">
                  <table class="table table-bordered table-striped">


            <?php

            foreach ($south_west_teams as $post) {

                if ($post->name == 'Clippers') {
                    
                    $post->name = 'lac';

                }elseif ($post->name == 'Grizzlies') {
                    
                    $post->name = 'mem';

                }elseif ($post->name == 'Trail Blazers') {
                    
                    $post->name = 'por';

                }elseif ($post->name == 'Raptors') {
                    
                    $post->name = 'tor';
                    
                }elseif ($post->name == '76ers') {
                    
                    $post->name = 'phi';
                    
                }elseif ($post->name == 'Mavericks') {
                    
                    $post->name = 'dal';
                    
                }elseif ($post->name == 'Heat') {
                    
                    $post->name = 'mia';
                    
                }elseif ($post->name == 'Nuggets') {
                    
                    $post->name = 'den';
                    
                }elseif ($post->name == 'Nets') {
                    
                    $post->name = 'bkn';
                    
                }elseif ($post->name == 'Pistons') {
                    
                    $post->name = 'det';
                    
                }elseif ($post->name == 'Hawks') {
                    
                    $post->name = 'atl';
                    
                }elseif ($post->name == 'Cavaliers') {
                    
                    $post->name = 'cle';
                    
                }elseif ($post->name == 'Rockets') {
                    
                    $post->name = 'hou';
                    
                }elseif ($post->name == 'Jazz') {
                    
                    $post->name = 'uta';
                    
                }elseif ($post->name == 'Celtics') {
                    
                    $post->name = 'bos';
                    
                }elseif ($post->name == 'Hornets') {
                    
                    $post->name = 'cha';
                    
                }elseif ($post->name == 'Timberwolves') {
                    
                    $post->name = 'min';
                    
                }elseif ($post->name == 'Wizards') {
                    
                    $post->name = 'was';
                    
                }elseif ($post->name == 'Magic') {
                    
                    $post->name = 'orl';
                    
                }elseif ($post->name == 'Thunder') {
                    
                    $post->name = 'okc';
                    
                }elseif ($post->name == 'Bulls') {
                    
                    $post->name = 'chi';
                    
                }elseif ($post->name == 'Kings') {
                    
                    $post->name = 'sac';
                    
                }elseif ($post->name == 'Pacers') {
                    
                    $post->name = 'ind';
                    
                }elseif ($post->name == 'Spurs') {
                    
                    $post->name = 'sa';
                    
                }elseif ($post->name == 'Warriors') {
                    
                    $post->name = 'gs';
                    
                }elseif ($post->name == 'Knicks') {
                    
                    $post->name = 'ny';
                    
                }elseif ($post->name == 'Pelicans') {
                    
                    $post->name = 'no';

                }elseif ($post->name == 'Bucks') {
                    
                    $post->name = 'mlw';

                }elseif ($post->name == 'Lakers') {
                    
                    $post->name = 'lak';
                    
                }elseif ($post->name == 'Suns') {
                    
                    $post->name = 'pho';
                }
                
            ?>
                <thead>

                    <tr>
                        <th><?php echo $post->market; ?></th>
                        <th>Wins</th>
                        <th>losses</th>
                        <th>Games Behind</th>
                    </tr>

                </thead>

                <tbody>

                    <tr>
                        <td><?php echo "<img src = http://www.rotoworld.com/img/NBA/teams/logos/".$post->name.".png alt='".$post->name."' style='width:60px;height:50px;'> ";?></td>
                        <td><?php echo $post->wins; ?></td>
                        <td><?php echo $post->losses; ?></td>
                        <td>League - <?php echo $post->games_behind->league; ?><br/>Conference - <?php echo $post->games_behind->conference; ?><br/>Division - <?php echo $post->games_behind->division; ?></td>
                    </tr>
                <?php
                } // end foreach
                ?>
                  </tbody>
                    </table>
                </div>
              </div>
            </div>

           

              <div class="col-md-12">
              <div class="box">
                <div class="box-header with-border">
                  <h3 class="box-title">Western Conference - <?php echo $north_west; ?> Division</h3>
                </div>
                <!-- /.box-header -->
                <div class="box-body">
                  <table class="table table-bordered table-striped">


            <?php

            foreach ($north_west_teams as $post) {

                if ($post->name == 'Clippers') {
                    
                    $post->name = 'lac';

                }elseif ($post->name == 'Grizzlies') {
                    
                    $post->name = 'mem';

                }elseif ($post->name == 'Trail Blazers') {
                    
                    $post->name = 'por';

                }elseif ($post->name == 'Raptors') {
                    
                    $post->name = 'tor';
                    
                }elseif ($post->name == '76ers') {
                    
                    $post->name = 'phi';
                    
                }elseif ($post->name == 'Mavericks') {
                    
                    $post->name = 'dal';
                    
                }elseif ($post->name == 'Heat') {
                    
                    $post->name = 'mia';
                    
                }elseif ($post->name == 'Nuggets') {
                    
                    $post->name = 'den';
                    
                }elseif ($post->name == 'Nets') {
                    
                    $post->name = 'bkn';
                    
                }elseif ($post->name == 'Pistons') {
                    
                    $post->name = 'det';
                    
                }elseif ($post->name == 'Hawks') {
                    
                    $post->name = 'atl';
                    
                }elseif ($post->name == 'Cavaliers') {
                    
                    $post->name = 'cle';
                    
                }elseif ($post->name == 'Rockets') {
                    
                    $post->name = 'hou';
                    
                }elseif ($post->name == 'Jazz') {
                    
                    $post->name = 'uta';
                    
                }elseif ($post->name == 'Celtics') {
                    
                    $post->name = 'bos';
                    
                }elseif ($post->name == 'Hornets') {
                    
                    $post->name = 'cha';
                    
                }elseif ($post->name == 'Timberwolves') {
                    
                    $post->name = 'min';
                    
                }elseif ($post->name == 'Wizards') {
                    
                    $post->name = 'was';
                    
                }elseif ($post->name == 'Magic') {
                    
                    $post->name = 'orl';
                    
                }elseif ($post->name == 'Thunder') {
                    
                    $post->name = 'okc';
                    
                }elseif ($post->name == 'Bulls') {
                    
                    $post->name = 'chi';
                    
                }elseif ($post->name == 'Kings') {
                    
                    $post->name = 'sac';
                    
                }elseif ($post->name == 'Pacers') {
                    
                    $post->name = 'ind';
                    
                }elseif ($post->name == 'Spurs') {
                    
                    $post->name = 'sa';
                    
                }elseif ($post->name == 'Warriors') {
                    
                    $post->name = 'gs';
                    
                }elseif ($post->name == 'Knicks') {
                    
                    $post->name = 'ny';
                    
                }elseif ($post->name == 'Pelicans') {
                    
                    $post->name = 'no';

                }elseif ($post->name == 'Bucks') {
                    
                    $post->name = 'mlw';

                }elseif ($post->name == 'Lakers') {
                    
                    $post->name = 'lak';
                    
                }elseif ($post->name == 'Suns') {
                    
                    $post->name = 'pho';
                }
                
            ?>
                <thead>

                    <tr>
                        <th><?php echo $post->market; ?></th>
                        <th>Wins</th>
                        <th>losses</th>
                        <th>Games Behind</th>
                    </tr>

                </thead>

                <tbody>

                    <tr>
                        <td><?php echo "<img src = http://www.rotoworld.com/img/NBA/teams/logos/".$post->name.".png alt='".$post->name."' style='width:60px;height:50px;'> ";?></td>
                        <td><?php echo $post->wins; ?></td>
                        <td><?php echo $post->losses; ?></td>
                        <td>League - <?php echo $post->games_behind->league; ?><br/>Conference - <?php echo $post->games_behind->conference; ?><br/>Division - <?php echo $post->games_behind->division; ?></td>
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
