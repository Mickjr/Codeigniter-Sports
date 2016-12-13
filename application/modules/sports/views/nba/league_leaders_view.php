<?php
/**
* @author : Manton Horton Jr.
* Email : mantonhorton@gmail.com
* Website : www.mantonhortonjr.com
* Subject : Standings
*/


// copy file content into a string var
$json_file = file_get_contents('https://api.sportradar.us/nba-t3/seasontd/2016/reg/leaders.json?api_key=s2n89799m8hfjkapcvb7qsxk');


// convert the string to a json object
$jfo = json_decode($json_file);

// exit(print_r($minutes = $jfo->categories[0]->ranks));


// Minutes 
$minutes = $jfo->categories[24]->ranks;

// Points 
$points = $jfo->categories[25]->ranks;

// Offensive Rebounds
$off_rebounds = $jfo->categories[26]->ranks;

// Defensive Rebounds
$def_rebounds = $jfo->categories[27]->ranks;

// Total Rebounds
$tot_rebounds = $jfo->categories[28]->ranks;

// Assists
$assists = $jfo->categories[29]->ranks;

// Steals
$steals = $jfo->categories[30]->ranks;

// Blocks
$blocks = $jfo->categories[31]->ranks;

// Three Points Made
$three_points_made = $jfo->categories[37]->ranks;


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
            <li class="active"><a href="<?php echo site_url('sports/nba_league_leaders'); ?>"><i class="fa fa-circle-o"></i>League Leaders</a></li>
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


<div class="content-wrapper">

    <!-- Content Header (Page header) -->
    <section class="content-header">

      <h1>NBA - League Leaders
        <small></small>
      </h1>

      <ol class="breadcrumb">

        <li><a href="<?php echo site_url('admin/dashboard');?>"><i class="fa fa-dashboard"></i> Home</a></li>

        <li><a href="#">NBA</a></li>

        <li class="active">League Leaders</li>

      </ol>

    </section>
  
        

      
<section class="content">
          <div class="row">

            <div class="col-md-12">

              <div class="box">
                <div class="box-header with-border">
                  <h1 class="box-title">Points</h1>
                </div>
                <!-- /.box-header -->
                <div class="box-body">
                  <table class="table table-bordered table-striped">

            <?php

            foreach ($points as $post) {

                if ($post->teams[0]->name == 'Clippers') {
                    
                    $post->teams[0]->name = 'lac';

                }elseif ($post->teams[0]->name == 'Grizzlies') {
                    
                    $post->teams[0]->name = 'mem';

                }elseif ($post->teams[0]->name == 'Trail Blazers') {
                    
                    $post->teams[0]->name = 'por';

                }elseif ($post->teams[0]->name == 'Raptors') {
                    
                    $post->teams[0]->name = 'tor';
                    
                }elseif ($post->teams[0]->name == '76ers') {
                    
                    $post->teams[0]->name = 'phi';
                    
                }elseif ($post->teams[0]->name == 'Mavericks') {
                    
                    $post->teams[0]->name = 'dal';
                    
                }elseif ($post->teams[0]->name == 'Heat') {
                    
                    $post->teams[0]->name = 'mia';
                    
                }elseif ($post->teams[0]->name == 'Nuggets') {
                    
                    $post->teams[0]->name = 'den';
                    
                }elseif ($post->teams[0]->name == 'Nets') {
                    
                    $post->teams[0]->name = 'bkn';
                    
                }elseif ($post->teams[0]->name == 'Pistons') {
                    
                    $post->teams[0]->name = 'det';
                    
                }elseif ($post->teams[0]->name == 'Hawks') {
                    
                    $post->teams[0]->name = 'atl';
                    
                }elseif ($post->teams[0]->name == 'Cavaliers') {
                    
                    $post->teams[0]->name = 'cle';
                    
                }elseif ($post->teams[0]->name == 'Rockets') {
                    
                    $post->teams[0]->name = 'hou';
                    
                }elseif ($post->teams[0]->name == 'Jazz') {
                    
                    $post->teams[0]->name = 'uta';
                    
                }elseif ($post->teams[0]->name == 'Celtics') {
                    
                    $post->teams[0]->name = 'bos';
                    
                }elseif ($post->teams[0]->name == 'Hornets') {
                    
                    $post->teams[0]->name = 'cha';
                    
                }elseif ($post->teams[0]->name == 'Timberwolves') {
                    
                    $post->teams[0]->name = 'min';
                    
                }elseif ($post->teams[0]->name == 'Wizards') {
                    
                    $post->teams[0]->name = 'was';
                    
                }elseif ($post->teams[0]->name == 'Magic') {
                    
                    $post->teams[0]->name = 'orl';
                    
                }elseif ($post->teams[0]->name == 'Thunder') {
                    
                    $post->teams[0]->name = 'okc';
                    
                }elseif ($post->teams[0]->name == 'Bulls') {
                    
                    $post->teams[0]->name = 'chi';
                    
                }elseif ($post->teams[0]->name == 'Kings') {
                    
                    $post->teams[0]->name = 'sac';
                    
                }elseif ($post->teams[0]->name == 'Pacers') {
                    
                    $post->teams[0]->name = 'ind';
                    
                }elseif ($post->teams[0]->name == 'Spurs') {
                    
                    $post->teams[0]->name = 'sa';
                    
                }elseif ($post->teams[0]->name == 'Warriors') {
                    
                    $post->teams[0]->name = 'gs';
                    
                }elseif ($post->teams[0]->name == 'Knicks') {
                    
                    $post->teams[0]->name = 'ny';
                    
                }elseif ($post->teams[0]->name == 'Pelicans') {
                    
                    $post->teams[0]->name = 'no';
                    
                }elseif ($post->teams[0]->name == 'Bucks') {
                    
                    $post->teams[0]->name = 'mlw';
                    
                }elseif ($post->teams[0]->name == 'Lakers') {
                    
                    $post->teams[0]->name = 'lak';
                    
                }elseif ($post->teams[0]->name == 'Suns') {
                    
                    $post->teams[0]->name = 'pho';
                    
                }

            ?>
                <thead>

                    <tr>
                        <th>Ranked</th>
                        <th>Team</th>
                        <th>Player Name</th>
                        <th>Position</th>
                        <th>Avg. Points per Game</th>
                    </tr>

                </thead>

                <tbody>

                    <tr>
                        <td><?php echo $post->rank ?></td>
                        <td><?php echo "<img src = http://www.rotoworld.com/img/NBA/teams/logos/".$post->teams[0]->name.".png alt='".$post->teams[0]->name."' style='width:60px;height:50px;'> ";?><?php echo $post->teams[0]->market; ?> </td>
                        <td><?php echo $post->player->full_name ?></td>
                        <td><?php echo $post->player->primary_position ?></td>
                        <td><?php echo $post->score; ?></td>
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
                  <h1 class="box-title">Assists</h1>
                </div>
                <!-- /.box-header -->
                <div class="box-body">
                  <table class="table table-bordered table-striped">


            <?php

            foreach ($assists as $post) {

                if ($post->teams[0]->name == 'Clippers') {
                    
                    $post->teams[0]->name = 'lac';

                }elseif ($post->teams[0]->name == 'Grizzlies') {
                    
                    $post->teams[0]->name = 'mem';

                }elseif ($post->teams[0]->name == 'Trail Blazers') {
                    
                    $post->teams[0]->name = 'por';

                }elseif ($post->teams[0]->name == 'Raptors') {
                    
                    $post->teams[0]->name = 'tor';
                    
                }elseif ($post->teams[0]->name == '76ers') {
                    
                    $post->teams[0]->name = 'phi';
                    
                }elseif ($post->teams[0]->name == 'Mavericks') {
                    
                    $post->teams[0]->name = 'dal';
                    
                }elseif ($post->teams[0]->name == 'Heat') {
                    
                    $post->teams[0]->name = 'mia';
                    
                }elseif ($post->teams[0]->name == 'Nuggets') {
                    
                    $post->teams[0]->name = 'den';
                    
                }elseif ($post->teams[0]->name == 'Nets') {
                    
                    $post->teams[0]->name = 'bkn';
                    
                }elseif ($post->teams[0]->name == 'Pistons') {
                    
                    $post->teams[0]->name = 'det';
                    
                }elseif ($post->teams[0]->name == 'Hawks') {
                    
                    $post->teams[0]->name = 'atl';
                    
                }elseif ($post->teams[0]->name == 'Cavaliers') {
                    
                    $post->teams[0]->name = 'cle';
                    
                }elseif ($post->teams[0]->name == 'Rockets') {
                    
                    $post->teams[0]->name = 'hou';
                    
                }elseif ($post->teams[0]->name == 'Jazz') {
                    
                    $post->teams[0]->name = 'uta';
                    
                }elseif ($post->teams[0]->name == 'Celtics') {
                    
                    $post->teams[0]->name = 'bos';
                    
                }elseif ($post->teams[0]->name == 'Hornets') {
                    
                    $post->teams[0]->name = 'cha';
                    
                }elseif ($post->teams[0]->name == 'Timberwolves') {
                    
                    $post->teams[0]->name = 'min';
                    
                }elseif ($post->teams[0]->name == 'Wizards') {
                    
                    $post->teams[0]->name = 'was';
                    
                }elseif ($post->teams[0]->name == 'Magic') {
                    
                    $post->teams[0]->name = 'orl';
                    
                }elseif ($post->teams[0]->name == 'Thunder') {
                    
                    $post->teams[0]->name = 'okc';
                    
                }elseif ($post->teams[0]->name == 'Bulls') {
                    
                    $post->teams[0]->name = 'chi';
                    
                }elseif ($post->teams[0]->name == 'Kings') {
                    
                    $post->teams[0]->name = 'sac';
                    
                }elseif ($post->teams[0]->name == 'Pacers') {
                    
                    $post->teams[0]->name = 'ind';
                    
                }elseif ($post->teams[0]->name == 'Spurs') {
                    
                    $post->teams[0]->name = 'sa';
                    
                }elseif ($post->teams[0]->name == 'Warriors') {
                    
                    $post->teams[0]->name = 'gs';
                    
                }elseif ($post->teams[0]->name == 'Knicks') {
                    
                    $post->teams[0]->name = 'ny';
                    
                }elseif ($post->teams[0]->name == 'Pelicans') {
                    
                    $post->teams[0]->name = 'no';
                    
                }elseif ($post->teams[0]->name == 'Bucks') {
                    
                    $post->teams[0]->name = 'mlw';
                    
                }elseif ($post->teams[0]->name == 'Lakers') {
                    
                    $post->teams[0]->name = 'lak';
                    
                }elseif ($post->teams[0]->name == 'Suns') {
                    
                    $post->teams[0]->name = 'pho';
                    
                }

            ?>
                <thead>

                    <tr>
                        <th>Ranked</th>
                        <th>Team</th>
                        <th>Player Name</th>
                        <th>Position</th>
                        <th>Avg. Assists per Game</th>
                    </tr>

                </thead>

                <tbody>

                    <tr>
                        <td><?php echo $post->rank ?></td>
                        <td><?php echo "<img src = http://www.rotoworld.com/img/NBA/teams/logos/".$post->teams[0]->name.".png alt='".$post->teams[0]->name."' style='width:60px;height:50px;'> ";?><?php echo $post->teams[0]->market; ?> </td>
                        <td><?php echo $post->player->full_name ?></td>
                        <td><?php echo $post->player->primary_position ?></td>
                        <td><?php echo $post->score; ?></td>
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
                  <h1 class="box-title">Offensive Rebounds</h1>
                </div>
                <!-- /.box-header -->
                <div class="box-body">
                  <table class="table table-bordered table-striped">


            <?php

            foreach ($off_rebounds as $post) {

                if ($post->teams[0]->name == 'Clippers') {
                    
                    $post->teams[0]->name = 'lac';

                }elseif ($post->teams[0]->name == 'Grizzlies') {
                    
                    $post->teams[0]->name = 'mem';

                }elseif ($post->teams[0]->name == 'Trail Blazers') {
                    
                    $post->teams[0]->name = 'por';

                }elseif ($post->teams[0]->name == 'Raptors') {
                    
                    $post->teams[0]->name = 'tor';
                    
                }elseif ($post->teams[0]->name == '76ers') {
                    
                    $post->teams[0]->name = 'phi';
                    
                }elseif ($post->teams[0]->name == 'Mavericks') {
                    
                    $post->teams[0]->name = 'dal';
                    
                }elseif ($post->teams[0]->name == 'Heat') {
                    
                    $post->teams[0]->name = 'mia';
                    
                }elseif ($post->teams[0]->name == 'Nuggets') {
                    
                    $post->teams[0]->name = 'den';
                    
                }elseif ($post->teams[0]->name == 'Nets') {
                    
                    $post->teams[0]->name = 'bkn';
                    
                }elseif ($post->teams[0]->name == 'Pistons') {
                    
                    $post->teams[0]->name = 'det';
                    
                }elseif ($post->teams[0]->name == 'Hawks') {
                    
                    $post->teams[0]->name = 'atl';
                    
                }elseif ($post->teams[0]->name == 'Cavaliers') {
                    
                    $post->teams[0]->name = 'cle';
                    
                }elseif ($post->teams[0]->name == 'Rockets') {
                    
                    $post->teams[0]->name = 'hou';
                    
                }elseif ($post->teams[0]->name == 'Jazz') {
                    
                    $post->teams[0]->name = 'uta';
                    
                }elseif ($post->teams[0]->name == 'Celtics') {
                    
                    $post->teams[0]->name = 'bos';
                    
                }elseif ($post->teams[0]->name == 'Hornets') {
                    
                    $post->teams[0]->name = 'cha';
                    
                }elseif ($post->teams[0]->name == 'Timberwolves') {
                    
                    $post->teams[0]->name = 'min';
                    
                }elseif ($post->teams[0]->name == 'Wizards') {
                    
                    $post->teams[0]->name = 'was';
                    
                }elseif ($post->teams[0]->name == 'Magic') {
                    
                    $post->teams[0]->name = 'orl';
                    
                }elseif ($post->teams[0]->name == 'Thunder') {
                    
                    $post->teams[0]->name = 'okc';
                    
                }elseif ($post->teams[0]->name == 'Bulls') {
                    
                    $post->teams[0]->name = 'chi';
                    
                }elseif ($post->teams[0]->name == 'Kings') {
                    
                    $post->teams[0]->name = 'sac';
                    
                }elseif ($post->teams[0]->name == 'Pacers') {
                    
                    $post->teams[0]->name = 'ind';
                    
                }elseif ($post->teams[0]->name == 'Spurs') {
                    
                    $post->teams[0]->name = 'sa';
                    
                }elseif ($post->teams[0]->name == 'Warriors') {
                    
                    $post->teams[0]->name = 'gs';
                    
                }elseif ($post->teams[0]->name == 'Knicks') {
                    
                    $post->teams[0]->name = 'ny';
                    
                }elseif ($post->teams[0]->name == 'Pelicans') {
                    
                    $post->teams[0]->name = 'no';
                    
                }elseif ($post->teams[0]->name == 'Bucks') {
                    
                    $post->teams[0]->name = 'mlw';
                    
                }elseif ($post->teams[0]->name == 'Lakers') {
                    
                    $post->teams[0]->name = 'lak';
                    
                }elseif ($post->teams[0]->name == 'Suns') {
                    
                    $post->teams[0]->name = 'pho';
                    
                }

            ?>
                <thead>

                    <tr>
                        <th>Ranked</th>
                        <th>Team</th>
                        <th>Player Name</th>
                        <th>Position</th>
                        <th>Avg. Offensive Rebounds per Game</th>
                    </tr>

                </thead>

                <tbody>

                    <tr>
                        <td><?php echo $post->rank ?></td>
                        <td><?php echo "<img src = http://www.rotoworld.com/img/NBA/teams/logos/".$post->teams[0]->name.".png alt='".$post->teams[0]->name."' style='width:60px;height:50px;'> ";?><?php echo $post->teams[0]->market; ?> </td>
                        <td><?php echo $post->player->full_name ?></td>
                        <td><?php echo $post->player->primary_position ?></td>
                        <td><?php echo $post->score; ?></td>
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
                  <h1 class="box-title">Defensive Rebounds</h1>
                </div>
                <!-- /.box-header -->
                <div class="box-body">
                  <table class="table table-bordered table-striped">


            <?php

            foreach ($def_rebounds as $post) {

                if ($post->teams[0]->name == 'Clippers') {
                    
                    $post->teams[0]->name = 'lac';

                }elseif ($post->teams[0]->name == 'Grizzlies') {
                    
                    $post->teams[0]->name = 'mem';

                }elseif ($post->teams[0]->name == 'Trail Blazers') {
                    
                    $post->teams[0]->name = 'por';

                }elseif ($post->teams[0]->name == 'Raptors') {
                    
                    $post->teams[0]->name = 'tor';
                    
                }elseif ($post->teams[0]->name == '76ers') {
                    
                    $post->teams[0]->name = 'phi';
                    
                }elseif ($post->teams[0]->name == 'Mavericks') {
                    
                    $post->teams[0]->name = 'dal';
                    
                }elseif ($post->teams[0]->name == 'Heat') {
                    
                    $post->teams[0]->name = 'mia';
                    
                }elseif ($post->teams[0]->name == 'Nuggets') {
                    
                    $post->teams[0]->name = 'den';
                    
                }elseif ($post->teams[0]->name == 'Nets') {
                    
                    $post->teams[0]->name = 'bkn';
                    
                }elseif ($post->teams[0]->name == 'Pistons') {
                    
                    $post->teams[0]->name = 'det';
                    
                }elseif ($post->teams[0]->name == 'Hawks') {
                    
                    $post->teams[0]->name = 'atl';
                    
                }elseif ($post->teams[0]->name == 'Cavaliers') {
                    
                    $post->teams[0]->name = 'cle';
                    
                }elseif ($post->teams[0]->name == 'Rockets') {
                    
                    $post->teams[0]->name = 'hou';
                    
                }elseif ($post->teams[0]->name == 'Jazz') {
                    
                    $post->teams[0]->name = 'uta';
                    
                }elseif ($post->teams[0]->name == 'Celtics') {
                    
                    $post->teams[0]->name = 'bos';
                    
                }elseif ($post->teams[0]->name == 'Hornets') {
                    
                    $post->teams[0]->name = 'cha';
                    
                }elseif ($post->teams[0]->name == 'Timberwolves') {
                    
                    $post->teams[0]->name = 'min';
                    
                }elseif ($post->teams[0]->name == 'Wizards') {
                    
                    $post->teams[0]->name = 'was';
                    
                }elseif ($post->teams[0]->name == 'Magic') {
                    
                    $post->teams[0]->name = 'orl';
                    
                }elseif ($post->teams[0]->name == 'Thunder') {
                    
                    $post->teams[0]->name = 'okc';
                    
                }elseif ($post->teams[0]->name == 'Bulls') {
                    
                    $post->teams[0]->name = 'chi';
                    
                }elseif ($post->teams[0]->name == 'Kings') {
                    
                    $post->teams[0]->name = 'sac';
                    
                }elseif ($post->teams[0]->name == 'Pacers') {
                    
                    $post->teams[0]->name = 'ind';
                    
                }elseif ($post->teams[0]->name == 'Spurs') {
                    
                    $post->teams[0]->name = 'sa';
                    
                }elseif ($post->teams[0]->name == 'Warriors') {
                    
                    $post->teams[0]->name = 'gs';
                    
                }elseif ($post->teams[0]->name == 'Knicks') {
                    
                    $post->teams[0]->name = 'ny';
                    
                }elseif ($post->teams[0]->name == 'Pelicans') {
                    
                    $post->teams[0]->name = 'no';
                    
                }elseif ($post->teams[0]->name == 'Bucks') {
                    
                    $post->teams[0]->name = 'mlw';
                    
                }elseif ($post->teams[0]->name == 'Lakers') {
                    
                    $post->teams[0]->name = 'lak';
                    
                }elseif ($post->teams[0]->name == 'Suns') {
                    
                    $post->teams[0]->name = 'pho';
                    
                }

            ?>
                <thead>

                    <tr>
                        <th>Ranked</th>
                        <th>Team</th>
                        <th>Player Name</th>
                        <th>Position</th>
                        <th>Avg. Defensive Rebounds per Game</th>
                    </tr>

                </thead>

                <tbody>

                    <tr>
                        <td><?php echo $post->rank ?></td>
                        <td><?php echo "<img src = http://www.rotoworld.com/img/NBA/teams/logos/".$post->teams[0]->name.".png alt='".$post->teams[0]->name."' style='width:60px;height:50px;'> ";?><?php echo $post->teams[0]->market; ?> </td>
                        <td><?php echo $post->player->full_name ?></td>
                        <td><?php echo $post->player->primary_position ?></td>
                        <td><?php echo $post->score; ?></td>
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
                  <h1 class="box-title">Total Rebounds</h1>
                </div>
                <!-- /.box-header -->
                <div class="box-body">
                  <table class="table table-bordered table-striped">


            <?php

            foreach ($tot_rebounds as $post) {

                if ($post->teams[0]->name == 'Clippers') {
                    
                    $post->teams[0]->name = 'lac';

                }elseif ($post->teams[0]->name == 'Grizzlies') {
                    
                    $post->teams[0]->name = 'mem';

                }elseif ($post->teams[0]->name == 'Trail Blazers') {
                    
                    $post->teams[0]->name = 'por';

                }elseif ($post->teams[0]->name == 'Raptors') {
                    
                    $post->teams[0]->name = 'tor';
                    
                }elseif ($post->teams[0]->name == '76ers') {
                    
                    $post->teams[0]->name = 'phi';
                    
                }elseif ($post->teams[0]->name == 'Mavericks') {
                    
                    $post->teams[0]->name = 'dal';
                    
                }elseif ($post->teams[0]->name == 'Heat') {
                    
                    $post->teams[0]->name = 'mia';
                    
                }elseif ($post->teams[0]->name == 'Nuggets') {
                    
                    $post->teams[0]->name = 'den';
                    
                }elseif ($post->teams[0]->name == 'Nets') {
                    
                    $post->teams[0]->name = 'bkn';
                    
                }elseif ($post->teams[0]->name == 'Pistons') {
                    
                    $post->teams[0]->name = 'det';
                    
                }elseif ($post->teams[0]->name == 'Hawks') {
                    
                    $post->teams[0]->name = 'atl';
                    
                }elseif ($post->teams[0]->name == 'Cavaliers') {
                    
                    $post->teams[0]->name = 'cle';
                    
                }elseif ($post->teams[0]->name == 'Rockets') {
                    
                    $post->teams[0]->name = 'hou';
                    
                }elseif ($post->teams[0]->name == 'Jazz') {
                    
                    $post->teams[0]->name = 'uta';
                    
                }elseif ($post->teams[0]->name == 'Celtics') {
                    
                    $post->teams[0]->name = 'bos';
                    
                }elseif ($post->teams[0]->name == 'Hornets') {
                    
                    $post->teams[0]->name = 'cha';
                    
                }elseif ($post->teams[0]->name == 'Timberwolves') {
                    
                    $post->teams[0]->name = 'min';
                    
                }elseif ($post->teams[0]->name == 'Wizards') {
                    
                    $post->teams[0]->name = 'was';
                    
                }elseif ($post->teams[0]->name == 'Magic') {
                    
                    $post->teams[0]->name = 'orl';
                    
                }elseif ($post->teams[0]->name == 'Thunder') {
                    
                    $post->teams[0]->name = 'okc';
                    
                }elseif ($post->teams[0]->name == 'Bulls') {
                    
                    $post->teams[0]->name = 'chi';
                    
                }elseif ($post->teams[0]->name == 'Kings') {
                    
                    $post->teams[0]->name = 'sac';
                    
                }elseif ($post->teams[0]->name == 'Pacers') {
                    
                    $post->teams[0]->name = 'ind';
                    
                }elseif ($post->teams[0]->name == 'Spurs') {
                    
                    $post->teams[0]->name = 'sa';
                    
                }elseif ($post->teams[0]->name == 'Warriors') {
                    
                    $post->teams[0]->name = 'gs';
                    
                }elseif ($post->teams[0]->name == 'Knicks') {
                    
                    $post->teams[0]->name = 'ny';
                    
                }elseif ($post->teams[0]->name == 'Pelicans') {
                    
                    $post->teams[0]->name = 'no';
                    
                }elseif ($post->teams[0]->name == 'Bucks') {
                    
                    $post->teams[0]->name = 'mlw';
                    
                }elseif ($post->teams[0]->name == 'Lakers') {
                    
                    $post->teams[0]->name = 'lak';
                    
                }elseif ($post->teams[0]->name == 'Suns') {
                    
                    $post->teams[0]->name = 'pho';
                    
                }

            ?>
                <thead>

                    <tr>
                        <th>Ranked</th>
                        <th>Team</th>
                        <th>Player Name</th>
                        <th>Position</th>
                        <th>Total Rebounds per Game</th>
                    </tr>

                </thead>

                <tbody>

                    <tr>
                        <td><?php echo $post->rank ?></td>
                        <td><?php echo "<img src = http://www.rotoworld.com/img/NBA/teams/logos/".$post->teams[0]->name.".png alt='".$post->teams[0]->name."' style='width:60px;height:50px;'> ";?><?php echo $post->teams[0]->market; ?> </td>
                        <td><?php echo $post->player->full_name ?></td>
                        <td><?php echo $post->player->primary_position ?></td>
                        <td><?php echo $post->score; ?></td>
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
                  <h1 class="box-title">Blocks</h1>
                </div>
                <!-- /.box-header -->
                <div class="box-body">
                  <table class="table table-bordered table-striped">


            <?php

            foreach ($blocks as $post) {

                if ($post->teams[0]->name == 'Clippers') {
                    
                    $post->teams[0]->name = 'lac';

                }elseif ($post->teams[0]->name == 'Grizzlies') {
                    
                    $post->teams[0]->name = 'mem';

                }elseif ($post->teams[0]->name == 'Trail Blazers') {
                    
                    $post->teams[0]->name = 'por';

                }elseif ($post->teams[0]->name == 'Raptors') {
                    
                    $post->teams[0]->name = 'tor';
                    
                }elseif ($post->teams[0]->name == '76ers') {
                    
                    $post->teams[0]->name = 'phi';
                    
                }elseif ($post->teams[0]->name == 'Mavericks') {
                    
                    $post->teams[0]->name = 'dal';
                    
                }elseif ($post->teams[0]->name == 'Heat') {
                    
                    $post->teams[0]->name = 'mia';
                    
                }elseif ($post->teams[0]->name == 'Nuggets') {
                    
                    $post->teams[0]->name = 'den';
                    
                }elseif ($post->teams[0]->name == 'Nets') {
                    
                    $post->teams[0]->name = 'bkn';
                    
                }elseif ($post->teams[0]->name == 'Pistons') {
                    
                    $post->teams[0]->name = 'det';
                    
                }elseif ($post->teams[0]->name == 'Hawks') {
                    
                    $post->teams[0]->name = 'atl';
                    
                }elseif ($post->teams[0]->name == 'Cavaliers') {
                    
                    $post->teams[0]->name = 'cle';
                    
                }elseif ($post->teams[0]->name == 'Rockets') {
                    
                    $post->teams[0]->name = 'hou';
                    
                }elseif ($post->teams[0]->name == 'Jazz') {
                    
                    $post->teams[0]->name = 'uta';
                    
                }elseif ($post->teams[0]->name == 'Celtics') {
                    
                    $post->teams[0]->name = 'bos';
                    
                }elseif ($post->teams[0]->name == 'Hornets') {
                    
                    $post->teams[0]->name = 'cha';
                    
                }elseif ($post->teams[0]->name == 'Timberwolves') {
                    
                    $post->teams[0]->name = 'min';
                    
                }elseif ($post->teams[0]->name == 'Wizards') {
                    
                    $post->teams[0]->name = 'was';
                    
                }elseif ($post->teams[0]->name == 'Magic') {
                    
                    $post->teams[0]->name = 'orl';
                    
                }elseif ($post->teams[0]->name == 'Thunder') {
                    
                    $post->teams[0]->name = 'okc';
                    
                }elseif ($post->teams[0]->name == 'Bulls') {
                    
                    $post->teams[0]->name = 'chi';
                    
                }elseif ($post->teams[0]->name == 'Kings') {
                    
                    $post->teams[0]->name = 'sac';
                    
                }elseif ($post->teams[0]->name == 'Pacers') {
                    
                    $post->teams[0]->name = 'ind';
                    
                }elseif ($post->teams[0]->name == 'Spurs') {
                    
                    $post->teams[0]->name = 'sa';
                    
                }elseif ($post->teams[0]->name == 'Warriors') {
                    
                    $post->teams[0]->name = 'gs';
                    
                }elseif ($post->teams[0]->name == 'Knicks') {
                    
                    $post->teams[0]->name = 'ny';
                    
                }elseif ($post->teams[0]->name == 'Pelicans') {
                    
                    $post->teams[0]->name = 'no';
                    
                }elseif ($post->teams[0]->name == 'Bucks') {
                    
                    $post->teams[0]->name = 'mlw';
                    
                }elseif ($post->teams[0]->name == 'Lakers') {
                    
                    $post->teams[0]->name = 'lak';
                    
                }elseif ($post->teams[0]->name == 'Suns') {
                    
                    $post->teams[0]->name = 'pho';
                    
                }

            ?>
                <thead>

                    <tr>
                        <th>Ranked</th>
                        <th>Team</th>
                        <th>Player Name</th>
                        <th>Position</th>
                        <th>Avg. Blocks per Game</th>
                    </tr>

                </thead>

                <tbody>

                    <tr>
                        <td><?php echo $post->rank ?></td>
                        <td><?php echo "<img src = http://www.rotoworld.com/img/NBA/teams/logos/".$post->teams[0]->name.".png alt='".$post->teams[0]->name."' style='width:60px;height:50px;'> ";?><?php echo $post->teams[0]->market; ?> </td>
                        <td><?php echo $post->player->full_name ?></td>
                        <td><?php echo $post->player->primary_position ?></td>
                        <td><?php echo $post->score; ?></td>
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
                  <h1 class="box-title">Steals</h1>
                </div>
                <!-- /.box-header -->
                <div class="box-body">
                  <table class="table table-bordered table-striped">


            <?php

            foreach ($steals as $post) {

                if ($post->teams[0]->name == 'Clippers') {
                    
                    $post->teams[0]->name = 'lac';

                }elseif ($post->teams[0]->name == 'Grizzlies') {
                    
                    $post->teams[0]->name = 'mem';

                }elseif ($post->teams[0]->name == 'Trail Blazers') {
                    
                    $post->teams[0]->name = 'por';

                }elseif ($post->teams[0]->name == 'Raptors') {
                    
                    $post->teams[0]->name = 'tor';
                    
                }elseif ($post->teams[0]->name == '76ers') {
                    
                    $post->teams[0]->name = 'phi';
                    
                }elseif ($post->teams[0]->name == 'Mavericks') {
                    
                    $post->teams[0]->name = 'dal';
                    
                }elseif ($post->teams[0]->name == 'Heat') {
                    
                    $post->teams[0]->name = 'mia';
                    
                }elseif ($post->teams[0]->name == 'Nuggets') {
                    
                    $post->teams[0]->name = 'den';
                    
                }elseif ($post->teams[0]->name == 'Nets') {
                    
                    $post->teams[0]->name = 'bkn';
                    
                }elseif ($post->teams[0]->name == 'Pistons') {
                    
                    $post->teams[0]->name = 'det';
                    
                }elseif ($post->teams[0]->name == 'Hawks') {
                    
                    $post->teams[0]->name = 'atl';
                    
                }elseif ($post->teams[0]->name == 'Cavaliers') {
                    
                    $post->teams[0]->name = 'cle';
                    
                }elseif ($post->teams[0]->name == 'Rockets') {
                    
                    $post->teams[0]->name = 'hou';
                    
                }elseif ($post->teams[0]->name == 'Jazz') {
                    
                    $post->teams[0]->name = 'uta';
                    
                }elseif ($post->teams[0]->name == 'Celtics') {
                    
                    $post->teams[0]->name = 'bos';
                    
                }elseif ($post->teams[0]->name == 'Hornets') {
                    
                    $post->teams[0]->name = 'cha';
                    
                }elseif ($post->teams[0]->name == 'Timberwolves') {
                    
                    $post->teams[0]->name = 'min';
                    
                }elseif ($post->teams[0]->name == 'Wizards') {
                    
                    $post->teams[0]->name = 'was';
                    
                }elseif ($post->teams[0]->name == 'Magic') {
                    
                    $post->teams[0]->name = 'orl';
                    
                }elseif ($post->teams[0]->name == 'Thunder') {
                    
                    $post->teams[0]->name = 'okc';
                    
                }elseif ($post->teams[0]->name == 'Bulls') {
                    
                    $post->teams[0]->name = 'chi';
                    
                }elseif ($post->teams[0]->name == 'Kings') {
                    
                    $post->teams[0]->name = 'sac';
                    
                }elseif ($post->teams[0]->name == 'Pacers') {
                    
                    $post->teams[0]->name = 'ind';
                    
                }elseif ($post->teams[0]->name == 'Spurs') {
                    
                    $post->teams[0]->name = 'sa';
                    
                }elseif ($post->teams[0]->name == 'Warriors') {
                    
                    $post->teams[0]->name = 'gs';
                    
                }elseif ($post->teams[0]->name == 'Knicks') {
                    
                    $post->teams[0]->name = 'ny';
                    
                }elseif ($post->teams[0]->name == 'Pelicans') {
                    
                    $post->teams[0]->name = 'no';
                    
                }elseif ($post->teams[0]->name == 'Bucks') {
                    
                    $post->teams[0]->name = 'mlw';
                    
                }elseif ($post->teams[0]->name == 'Lakers') {
                    
                    $post->teams[0]->name = 'lak';
                    
                }elseif ($post->teams[0]->name == 'Suns') {
                    
                    $post->teams[0]->name = 'pho';
                    
                }

            ?>
                <thead>

                    <tr>
                        <th>Ranked</th>
                        <th>Team</th>
                        <th>Player Name</th>
                        <th>Position</th>
                        <th>Avg. Steals per Game</th>
                    </tr>

                </thead>

                <tbody>

                    <tr>
                        <td><?php echo $post->rank ?></td>
                        <td><?php echo "<img src = http://www.rotoworld.com/img/NBA/teams/logos/".$post->teams[0]->name.".png alt='".$post->teams[0]->name."' style='width:60px;height:50px;'> ";?><?php echo $post->teams[0]->market; ?> </td>
                        <td><?php echo $post->player->full_name ?></td>
                        <td><?php echo $post->player->primary_position ?></td>
                        <td><?php echo $post->score; ?></td>
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
                  <h1 class="box-title">Three Points</h1>
                </div>
                <!-- /.box-header -->
                <div class="box-body">
                  <table class="table table-bordered table-striped">


            <?php

            foreach ($three_points_made as $post) {

                if ($post->teams[0]->name == 'Clippers') {
                    
                    $post->teams[0]->name = 'lac';

                }elseif ($post->teams[0]->name == 'Grizzlies') {
                    
                    $post->teams[0]->name = 'mem';

                }elseif ($post->teams[0]->name == 'Trail Blazers') {
                    
                    $post->teams[0]->name = 'por';

                }elseif ($post->teams[0]->name == 'Raptors') {
                    
                    $post->teams[0]->name = 'tor';
                    
                }elseif ($post->teams[0]->name == '76ers') {
                    
                    $post->teams[0]->name = 'phi';
                    
                }elseif ($post->teams[0]->name == 'Mavericks') {
                    
                    $post->teams[0]->name = 'dal';
                    
                }elseif ($post->teams[0]->name == 'Heat') {
                    
                    $post->teams[0]->name = 'mia';
                    
                }elseif ($post->teams[0]->name == 'Nuggets') {
                    
                    $post->teams[0]->name = 'den';
                    
                }elseif ($post->teams[0]->name == 'Nets') {
                    
                    $post->teams[0]->name = 'bkn';
                    
                }elseif ($post->teams[0]->name == 'Pistons') {
                    
                    $post->teams[0]->name = 'det';
                    
                }elseif ($post->teams[0]->name == 'Hawks') {
                    
                    $post->teams[0]->name = 'atl';
                    
                }elseif ($post->teams[0]->name == 'Cavaliers') {
                    
                    $post->teams[0]->name = 'cle';
                    
                }elseif ($post->teams[0]->name == 'Rockets') {
                    
                    $post->teams[0]->name = 'hou';
                    
                }elseif ($post->teams[0]->name == 'Jazz') {
                    
                    $post->teams[0]->name = 'uta';
                    
                }elseif ($post->teams[0]->name == 'Celtics') {
                    
                    $post->teams[0]->name = 'bos';
                    
                }elseif ($post->teams[0]->name == 'Hornets') {
                    
                    $post->teams[0]->name = 'cha';
                    
                }elseif ($post->teams[0]->name == 'Timberwolves') {
                    
                    $post->teams[0]->name = 'min';
                    
                }elseif ($post->teams[0]->name == 'Wizards') {
                    
                    $post->teams[0]->name = 'was';
                    
                }elseif ($post->teams[0]->name == 'Magic') {
                    
                    $post->teams[0]->name = 'orl';
                    
                }elseif ($post->teams[0]->name == 'Thunder') {
                    
                    $post->teams[0]->name = 'okc';
                    
                }elseif ($post->teams[0]->name == 'Bulls') {
                    
                    $post->teams[0]->name = 'chi';
                    
                }elseif ($post->teams[0]->name == 'Kings') {
                    
                    $post->teams[0]->name = 'sac';
                    
                }elseif ($post->teams[0]->name == 'Pacers') {
                    
                    $post->teams[0]->name = 'ind';
                    
                }elseif ($post->teams[0]->name == 'Spurs') {
                    
                    $post->teams[0]->name = 'sa';
                    
                }elseif ($post->teams[0]->name == 'Warriors') {
                    
                    $post->teams[0]->name = 'gs';
                    
                }elseif ($post->teams[0]->name == 'Knicks') {
                    
                    $post->teams[0]->name = 'ny';
                    
                }elseif ($post->teams[0]->name == 'Pelicans') {
                    
                    $post->teams[0]->name = 'no';
                    
                }elseif ($post->teams[0]->name == 'Bucks') {
                    
                    $post->teams[0]->name = 'mlw';
                    
                }elseif ($post->teams[0]->name == 'Lakers') {
                    
                    $post->teams[0]->name = 'lak';
                    
                }elseif ($post->teams[0]->name == 'Suns') {
                    
                    $post->teams[0]->name = 'pho';
                    
                }

            ?>
                <thead>

                    <tr>
                        <th>Ranked</th>
                        <th>Team</th>
                        <th>Player Name</th>
                        <th>Position</th>
                        <th>Avg. Three Points Made per Game</th>
                    </tr>

                </thead>

                <tbody>

                    <tr>
                        <td><?php echo $post->rank ?></td>
                        <td><?php echo "<img src = http://www.rotoworld.com/img/NBA/teams/logos/".$post->teams[0]->name.".png alt='".$post->teams[0]->name."' style='width:60px;height:50px;'> ";?><?php echo $post->teams[0]->market; ?> </td>
                        <td><?php echo $post->player->full_name ?></td>
                        <td><?php echo $post->player->primary_position ?></td>
                        <td><?php echo $post->score; ?></td>
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
                  <h1 class="box-title">Minutes</h1>
                </div>
                <!-- /.box-header -->
                <div class="box-body">
                  <table class="table table-bordered table-striped">


            <?php

            foreach ($minutes as $post) {

                if ($post->teams[0]->name == 'Clippers') {
                    
                    $post->teams[0]->name = 'lac';

                }elseif ($post->teams[0]->name == 'Grizzlies') {
                    
                    $post->teams[0]->name = 'mem';

                }elseif ($post->teams[0]->name == 'Trail Blazers') {
                    
                    $post->teams[0]->name = 'por';

                }elseif ($post->teams[0]->name == 'Raptors') {
                    
                    $post->teams[0]->name = 'tor';
                    
                }elseif ($post->teams[0]->name == '76ers') {
                    
                    $post->teams[0]->name = 'phi';
                    
                }elseif ($post->teams[0]->name == 'Mavericks') {
                    
                    $post->teams[0]->name = 'dal';
                    
                }elseif ($post->teams[0]->name == 'Heat') {
                    
                    $post->teams[0]->name = 'mia';
                    
                }elseif ($post->teams[0]->name == 'Nuggets') {
                    
                    $post->teams[0]->name = 'den';
                    
                }elseif ($post->teams[0]->name == 'Nets') {
                    
                    $post->teams[0]->name = 'bkn';
                    
                }elseif ($post->teams[0]->name == 'Pistons') {
                    
                    $post->teams[0]->name = 'det';
                    
                }elseif ($post->teams[0]->name == 'Hawks') {
                    
                    $post->teams[0]->name = 'atl';
                    
                }elseif ($post->teams[0]->name == 'Cavaliers') {
                    
                    $post->teams[0]->name = 'cle';
                    
                }elseif ($post->teams[0]->name == 'Rockets') {
                    
                    $post->teams[0]->name = 'hou';
                    
                }elseif ($post->teams[0]->name == 'Jazz') {
                    
                    $post->teams[0]->name = 'uta';
                    
                }elseif ($post->teams[0]->name == 'Celtics') {
                    
                    $post->teams[0]->name = 'bos';
                    
                }elseif ($post->teams[0]->name == 'Hornets') {
                    
                    $post->teams[0]->name = 'cha';
                    
                }elseif ($post->teams[0]->name == 'Timberwolves') {
                    
                    $post->teams[0]->name = 'min';
                    
                }elseif ($post->teams[0]->name == 'Wizards') {
                    
                    $post->teams[0]->name = 'was';
                    
                }elseif ($post->teams[0]->name == 'Magic') {
                    
                    $post->teams[0]->name = 'orl';
                    
                }elseif ($post->teams[0]->name == 'Thunder') {
                    
                    $post->teams[0]->name = 'okc';
                    
                }elseif ($post->teams[0]->name == 'Bulls') {
                    
                    $post->teams[0]->name = 'chi';
                    
                }elseif ($post->teams[0]->name == 'Kings') {
                    
                    $post->teams[0]->name = 'sac';
                    
                }elseif ($post->teams[0]->name == 'Pacers') {
                    
                    $post->teams[0]->name = 'ind';
                    
                }elseif ($post->teams[0]->name == 'Spurs') {
                    
                    $post->teams[0]->name = 'sa';
                    
                }elseif ($post->teams[0]->name == 'Warriors') {
                    
                    $post->teams[0]->name = 'gs';
                    
                }elseif ($post->teams[0]->name == 'Knicks') {
                    
                    $post->teams[0]->name = 'ny';
                    
                }elseif ($post->teams[0]->name == 'Pelicans') {
                    
                    $post->teams[0]->name = 'no';
                    
                }elseif ($post->teams[0]->name == 'Bucks') {
                    
                    $post->teams[0]->name = 'mlw';
                    
                }elseif ($post->teams[0]->name == 'Lakers') {
                    
                    $post->teams[0]->name = 'lak';
                    
                }elseif ($post->teams[0]->name == 'Suns') {
                    
                    $post->teams[0]->name = 'pho';
                    
                }

            ?>
                <thead>

                    <tr>
                        <th>Ranked</th>
                        <th>Team</th>
                        <th>Player Name</th>
                        <th>Position</th>
                        <th>Avg. Minutes per Game</th>
                    </tr>

                </thead>

                <tbody>

                    <tr>
                        <td><?php echo $post->rank ?></td>
                        <td><?php echo "<img src = http://www.rotoworld.com/img/NBA/teams/logos/".$post->teams[0]->name.".png alt='".$post->teams[0]->name."' style='width:60px;height:50px;'> ";?><?php echo $post->teams[0]->market; ?> </td>
                        <td><?php echo $post->player->full_name ?></td>
                        <td><?php echo $post->player->primary_position ?></td>
                        <td><?php echo $post->score; ?></td>
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
