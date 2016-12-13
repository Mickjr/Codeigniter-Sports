<?php
/**
* @author : Manton Horton Jr.
* Email : mantonhorton@gmail.com
* Website : www.mantonhortonjr.com
* Subject : NFL Injuries
*/


// copy file content into a string var
$json_file = file_get_contents('https://api.sportradar.us/nfl-ot1/seasontd/2016/reg/7/injuries.json?api_key=794xyx4vedg34tvcjdsshke5');


// convert the string to a json object
$jfo = json_decode($json_file);



//Filter Cardinals and Rams Logo
// $filter = $jfo->teams;


// Team zero alias 
$zero_a = $jfo->teams[0]->alias;
// Team zero market 
$zero_m = $jfo->teams[0]->market;
// players zero
$zero_p = $jfo->teams[0]->players;


// Team one alias 
$one_a = $jfo->teams[1]->alias;
// Team one market 
$one_m = $jfo->teams[1]->market;
// players one
$one_p = $jfo->teams[1]->players;


// Team two alias
$two_a = $jfo->teams[2]->alias;
// Team two market 
$two_m = $jfo->teams[2]->market;
// players two
$two_p = $jfo->teams[2]->players;


// Team three alias
$three_a = $jfo->teams[3]->alias;
// Team three market 
$three_m = $jfo->teams[3]->market;
// players three
$three_p = $jfo->teams[3]->players;


// Team four alias
$four_a = $jfo->teams[4]->alias;
// Team four market 
$four_m = $jfo->teams[4]->market;
// players four
$four_p = $jfo->teams[4]->players;


// Team five alias
$five_a = $jfo->teams[5]->alias;
// Team five market 
$five_m = $jfo->teams[5]->market;
// players five
$five_p = $jfo->teams[5]->players;


// Team six alias
$six_a = $jfo->teams[6]->alias;
// Team six market 
$six_m = $jfo->teams[6]->market;
// players six
$six_p = $jfo->teams[6]->players;


// Team seven alias
$seven_a = $jfo->teams[7]->alias;
// Team seven market 
$seven_m = $jfo->teams[7]->market;
// players seven
$seven_p = $jfo->teams[7]->players;


// Team eight alias
$eight_a = $jfo->teams[8]->alias;
// Team eight market 
$eight_m = $jfo->teams[8]->market;
// players eight
$eight_p = $jfo->teams[8]->players;


// Team nine alias
$nine_a = $jfo->teams[9]->alias;
// Team nine market 
$nine_m = $jfo->teams[9]->market;
// players nine
$nine_p = $jfo->teams[9]->players;


// Team ten alias
$ten_a = $jfo->teams[10]->alias;
// Team ten market 
$ten_m = $jfo->teams[10]->market;
// players ten
$ten_p = $jfo->teams[10]->players;


// Team eleven alias
$eleven_a = $jfo->teams[11]->alias;
// Team eleven market 
$eleven_m = $jfo->teams[11]->market;
// players eleven
$eleven_p = $jfo->teams[11]->players;


// Team twelve alias
$twelve_a = $jfo->teams[12]->alias;
// Team twelve market 
$twelve_m = $jfo->teams[12]->market;
// players twelve
$twelve_p = $jfo->teams[12]->players;


// Team thirteen alias
$thirteen_a = $jfo->teams[13]->alias;
// Team thirteen market 
$thirteen_m = $jfo->teams[13]->market;
// players thirteen
$thirteen_p = $jfo->teams[13]->players;


// Team fourteen alias
$fourteen_a = $jfo->teams[14]->alias;
// Team fourteen market 
$fourteen_m = $jfo->teams[14]->market;
// players fourteen
$fourteen_p = $jfo->teams[14]->players;


// Team fifteen alias
$fifteen_a = $jfo->teams[15]->alias;
// Team fifteen market 
$fifteen_m = $jfo->teams[15]->market;
// players fifteen
$fifteen_p = $jfo->teams[15]->players;


// Team sixteen alias
$sixteen_a = $jfo->teams[16]->alias;
// Team sixteen market 
$sixteen_m = $jfo->teams[16]->market;
// players sixteen
$sixteen_p = $jfo->teams[16]->players;


// Team seventeen alias
$seventeen_a = $jfo->teams[17]->alias;
// Team seventeen market 
$seventeen_m = $jfo->teams[17]->market;
// players seventeen
$seventeen_p = $jfo->teams[17]->players;


// Team eighteen alias
$eighteen_a = $jfo->teams[18]->alias;
// Team eighteen market 
$eighteen_m = $jfo->teams[18]->market;
// players eighteen
$eighteen_p = $jfo->teams[18]->players;


// Team nineteen alias
$nineteen_a = $jfo->teams[19]->alias;
// Team nineteen market 
$nineteen_m = $jfo->teams[19]->market;
// players nineteen
$nineteen_p = $jfo->teams[19]->players;


// Team twenty alias
$twenty_a = $jfo->teams[20]->alias;
// Team twenty market 
$twenty_m = $jfo->teams[20]->market;
// players twenty
$twenty_p = $jfo->teams[20]->players;


// Team twenty_one alias
$twenty_one_a = $jfo->teams[21]->alias;
// Team twenty_one market 
$twenty_one_m = $jfo->teams[21]->market;
// players twenty_one
$twenty_one_p = $jfo->teams[21]->players;


// Team twenty_two alias
$twenty_two_a = $jfo->teams[22]->alias;
// Team twenty_two market 
$twenty_two_m = $jfo->teams[22]->market;
// players twenty_two
$twenty_two_p = $jfo->teams[22]->players;


// Team twenty_three alias
$twenty_three_a = $jfo->teams[23]->alias;
// Team twenty_three market 
$twenty_three_m = $jfo->teams[23]->market;
// players twenty_three
$twenty_three_p = $jfo->teams[23]->players;


// Team twenty_four alias
$twenty_four_a = $jfo->teams[24]->alias;
// Team twenty_four market 
$twenty_four_m = $jfo->teams[24]->market;
// players twenty_four
$twenty_four_p = $jfo->teams[24]->players;



// Team twenty_five alias
$twenty_five_a = $jfo->teams[25]->alias;
// Team twenty_five market 
$twenty_five_m = $jfo->teams[25]->market;
// players twenty_five
$twenty_five_p = $jfo->teams[25]->players;



// Team twenty_six alias
$twenty_six_a = $jfo->teams[26]->alias;
// Team twenty_six market 
$twenty_six_m = $jfo->teams[26]->market;
// players twenty_six
$twenty_six_p = $jfo->teams[26]->players;


// Team twenty_seven alias
$twenty_seven_a = $jfo->teams[27]->alias;
// Team twenty_seven market 
$twenty_seven_m = $jfo->teams[27]->market;
// players twenty_seven
$twenty_seven_p = $jfo->teams[27]->players;



// Team twenty_eight alias
$twenty_eight_a = $jfo->teams[28]->alias;
// Team twenty_eight market 
$twenty_eight_m = $jfo->teams[28]->market;
// players twenty_eight
$twenty_eight_p = $jfo->teams[28]->players;



// Team twenty_nine alias
$twenty_nine_a = $jfo->teams[29]->alias;
// Team twenty_nine market 
$twenty_nine_m = $jfo->teams[29]->market;
// players twenty_nine
$twenty_nine_p = $jfo->teams[29]->players;


// // Team thirty alias
// $thirty_a = $jfo->teams[30]->alias;
// // Team thirty market 
// $thirty_m = $jfo->teams[30]->market;
// // players thirty
// $thirty_p = $jfo->teams[30]->players;


// // Team thirty_one alias
// $thirty_one_a = $jfo->teams[31]->alias;
// // Team thirty_one market 
// $thirty_one_m = $jfo->teams[31]->market;
// // players thirty_one
// $thirty_one_p = $jfo->teams[31]->players;


if ($zero_a == 'ARI') {

    $zero_a = 'ARZ';

}elseif($zero_a == 'LA') {

    $zero_a = 'LAR';

}


if($one_a == 'ARI') {

    $one_a = 'ARZ';
    
}elseif($one_a == 'LA') {

    $one_a = 'LAR';

}

if($two_a == 'ARI') {

    $two_a = 'ARZ';
    
}elseif($two_a == 'LA') {

    $two_a = 'LAR';

}

if($three_a == 'ARI') {

    $three_a = 'ARZ';
    
}elseif($three_a == 'LA') {

    $three_a = 'LAR';

}

if($four_a == 'ARI') {

    $four_a = 'ARZ';
    
}elseif($four_a == 'LA') {

    $four_a = 'LAR';

}

if($five_a == 'ARI') {

    $five_a = 'ARZ';
    
}elseif($five_a == 'LA') {

    $five_a = 'LAR';

}

if($six_a == 'ARI') {

    $six_a = 'ARZ';
    
}elseif($six_a == 'LA') {

    $six_a = 'LAR';

}

if($seven_a == 'ARI') {

    $seven_a = 'ARZ';
    
}elseif($seven_a == 'LA') {

    $seven_a = 'LAR';

}

if($eight_a == 'ARI') {

    $eight_a = 'ARZ';
    
}elseif($eight_a == 'LA') {

    $eight_a = 'LAR';

}

if($nine_a == 'ARI') {

    $nine_a = 'ARZ';
    
}elseif($nine_a == 'LA') {

    $nine_a = 'LAR';

}

if($ten_a == 'ARI') {

    $ten_a = 'ARZ';
    
}elseif($ten_a == 'LA') {

    $ten_a = 'LAR';

}

if($eleven_a == 'ARI') {

    $eleven_a = 'ARZ';
    
}elseif($eleven_a == 'LA') {

    $eleven_a = 'LAR';

}

if($twelve_a == 'ARI') {

    $twelve_a = 'ARZ';
    
}elseif($twelve_a == 'LA') {

    $twelve_a = 'LAR';

}

if($thirteen_a == 'ARI') {

    $thirteen_a = 'ARZ';
    
}elseif($thirteen_a == 'LA') {

    $thirteen_a = 'LAR';

}

if($fourteen_a == 'ARI') {

    $fourteen_a = 'ARZ';
    
}elseif($fourteen_a == 'LA') {

    $fourteen_a = 'LAR';

}

if($fifteen_a == 'ARI') {

    $fifteen_a = 'ARZ';
    
}elseif($fifteen_a == 'LA') {

    $fifteen_a = 'LAR';

}

if($sixteen_a == 'ARI') {

    $sixteen_a = 'ARZ';
    
}elseif($sixteen_a == 'LA') {

    $sixteen_a = 'LAR';

}

if($seventeen_a == 'ARI') {

    $seventeen_a = 'ARZ';
    
}elseif($seventeen_a == 'LA') {

    $seventeen_a = 'LAR';

}

if($eighteen_a == 'ARI') {

    $eighteen_a = 'ARZ';
    
}elseif($eighteen_a == 'LA') {

    $eighteen_a = 'LAR';

}

if($nineteen_a == 'ARI') {

    $nineteen_a = 'ARZ';
    
}elseif($nineteen_a == 'LA') {

    $nineteen_a = 'LAR';

}

if($twenty_a == 'ARI') {

    $twenty_a = 'ARZ';
    
}elseif($twenty_a == 'LA') {

    $twenty_a = 'LAR';

}

if($twenty_one_a == 'ARI') {

    $twenty_one_a = 'ARZ';
    
}elseif($twenty_one_a == 'LA') {

    $twenty_one_a = 'LAR';

}

if($twenty_two_a == 'ARI') {

    $twenty_two_a = 'ARZ';
    
}elseif($twenty_two_a == 'LA') {

    $twenty_two_a = 'LAR';

}

if($twenty_three_a == 'ARI') {

    $twenty_three_a = 'ARZ';
    
}elseif($twenty_three_a == 'LA') {

    $twenty_three_a = 'LAR';

}

if($twenty_four_a == 'ARI') {

    $twenty_four_a = 'ARZ';
    
}elseif($twenty_four_a == 'LA') {

    $twenty_four_a = 'LAR';

}

if($twenty_five_a == 'ARI') {

    $twenty_five_a = 'ARZ';
    
}elseif($twenty_five_a == 'LA') {

    $twenty_five_a = 'LAR';

}

if($twenty_six_a == 'ARI') {

    $twenty_six_a = 'ARZ';
    
}elseif($twenty_six_a == 'LA') {

    $twenty_six_a = 'LAR';

}

if($twenty_seven_a == 'ARI') {

    $twenty_seven_a = 'ARZ';
    
}elseif($twenty_seven_a == 'LA') {

    $twenty_seven_a = 'LAR';

}

if($twenty_eight_a == 'ARI') {

    $twenty_eight_a = 'ARZ';
    
}elseif($twenty_eight_a == 'LA') {

    $twenty_eight_a = 'LAR';

}

if($twenty_nine_a == 'ARI') {

    $twenty_nine_a = 'ARZ';
    
}elseif($twenty_nine_a == 'LA') {

    $twenty_nine_a = 'LAR';

}



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
            <li class="active"><a href="<?php echo site_url('sports/nfl_injuries'); ?>"><i class="fa fa-circle-o"></i>Injuries</a></li>
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
        NFL - Injuries
        <small></small>
      </h1>

      <ol class="breadcrumb">

        <li><a href="<?php echo site_url('admin/dashboard');?>"><i class="fa fa-dashboard"></i> Home</a></li>

        <li><a href="#">NFL</a></li>

        <li class="active">Injuries</li>

      </ol>

    </section>

        <section class="content">
                  <div class="row">
                    <div class="col-md-12">
                      <div class="box">
                        <div class="box-header with-border">
                          <h3 class="box-title"><?php echo "<img src = http://www.rotoworld.com/img/NFL/teams/logos/".$zero_a.".png alt='".$zero_m."' style='width:90px;height:75px;'> ";?><?php echo $zero_m; ?></h3>
                        </div>
                    <div class="box-body">
                     <table class="table table-bordered table-striped">
                    <?php
                    foreach ($zero_p as $post) {
                    ?>
                        <thead>
                            <tr>
                                <th>Player</th>
                                <th>Jersey#</th>
                                <th>Position</th>
                                <th>Injury Report</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td><?php echo $post->name; ?></td>
                                <td><?php echo $post->jersey; ?></td>
                                <td><?php echo $post->position; ?></td>
                                <td><?php echo $post->injuries[0]->practice->status; ?></td>
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
                          <h3 class="box-title"><?php echo "<img src = http://www.rotoworld.com/img/NFL/teams/logos/".$one_a.".png alt='".$one_m."' style='width:90px;height:75px;'> ";?><?php echo $one_m; ?></h3>
                        </div>
                    <div class="box-body">
                     <table class="table table-bordered table-striped">
                    <?php
                    foreach ($one_p as $post) {
                    ?>
                        <thead>
                            <tr>
                                <th>Player</th>
                                <th>Jersey#</th>
                                <th>Position</th>
                                <th>Injury Report</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td><?php echo $post->name; ?></td>
                                <td><?php echo $post->jersey; ?></td>
                                <td><?php echo $post->position; ?></td>
                                <td><?php echo $post->injuries[0]->practice->status; ?></td>
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
                          <h3 class="box-title"><?php echo "<img src = http://www.rotoworld.com/img/NFL/teams/logos/".$two_a.".png alt='".$two_m."' style='width:90px;height:75px;'> ";?><?php echo $two_m; ?></h3>
                        </div>
                    <div class="box-body">
                     <table class="table table-bordered table-striped">
                    <?php
                    foreach ($two_p as $post) {
                    ?>
                        <thead>
                            <tr>
                                <th>Player</th>
                                <th>Jersey#</th>
                                <th>Position</th>
                                <th>Injury Report</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td><?php echo $post->name; ?></td>
                                <td><?php echo $post->jersey; ?></td>
                                <td><?php echo $post->position; ?></td>
                                <td><?php echo $post->injuries[0]->practice->status; ?></td>
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
                          <h3 class="box-title"><?php echo "<img src = http://www.rotoworld.com/img/NFL/teams/logos/".$three_a.".png alt='".$three_m."' style='width:90px;height:75px;'> ";?><?php echo $three_m; ?></h3>
                        </div>
                    <div class="box-body">
                     <table class="table table-bordered table-striped">
                    <?php
                    foreach ($three_p as $post) {
                    ?>
                        <thead>
                            <tr>
                                <th>Player</th>
                                <th>Jersey#</th>
                                <th>Position</th>
                                <th>Injury Report</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td><?php echo $post->name; ?></td>
                                <td><?php echo $post->jersey; ?></td>
                                <td><?php echo $post->position; ?></td>
                                <td><?php echo $post->injuries[0]->practice->status; ?></td>
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
                          <h3 class="box-title"><?php echo "<img src = http://www.rotoworld.com/img/NFL/teams/logos/".$four_a.".png alt='".$four_m."' style='width:90px;height:75px;'> ";?><?php echo $four_m; ?></h3>
                        </div>
                    <div class="box-body">
                     <table class="table table-bordered table-striped">
                    <?php
                    foreach ($four_p as $post) {
                    ?>
                        <thead>
                            <tr>
                                <th>Player</th>
                                <th>Jersey#</th>
                                <th>Position</th>
                                <th>Injury Report</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td><?php echo $post->name; ?></td>
                                <td><?php echo $post->jersey; ?></td>
                                <td><?php echo $post->position; ?></td>
                                <td><?php echo $post->injuries[0]->practice->status; ?></td>
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
                          <h3 class="box-title"><?php echo "<img src = http://www.rotoworld.com/img/NFL/teams/logos/".$five_a.".png alt='".$five_m."' style='width:90px;height:75px;'> ";?><?php echo $five_m; ?></h3>
                        </div>
                    <div class="box-body">
                     <table class="table table-bordered table-striped">
                    <?php
                    foreach ($five_p as $post) {
                    ?>
                        <thead>
                            <tr>
                                <th>Player</th>
                                <th>Jersey#</th>
                                <th>Position</th>
                                <th>Injury Report</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td><?php echo $post->name; ?></td>
                                <td><?php echo $post->jersey; ?></td>
                                <td><?php echo $post->position; ?></td>
                                <td><?php echo $post->injuries[0]->practice->status; ?></td>
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
                          <h3 class="box-title"><?php echo "<img src = http://www.rotoworld.com/img/NFL/teams/logos/".$six_a.".png alt='".$six_m."' style='width:90px;height:75px;'> ";?><?php echo $six_m; ?></h3>
                        </div>
                    <div class="box-body">
                     <table class="table table-bordered table-striped">
                    <?php
                    foreach ($six_p as $post) {
                    ?>
                        <thead>
                            <tr>
                                <th>Player</th>
                                <th>Jersey#</th>
                                <th>Position</th>
                                <th>Injury Report</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td><?php echo $post->name; ?></td>
                                <td><?php echo $post->jersey; ?></td>
                                <td><?php echo $post->position; ?></td>
                                <td><?php echo $post->injuries[0]->practice->status; ?></td>
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
                          <h3 class="box-title"><?php echo "<img src = http://www.rotoworld.com/img/NFL/teams/logos/".$seven_a.".png alt='".$seven_m."' style='width:90px;height:75px;'> ";?><?php echo $seven_m; ?></h3>
                        </div>
                    <div class="box-body">
                     <table class="table table-bordered table-striped">
                    <?php
                    foreach ($seven_p as $post) {
                    ?>
                        <thead>
                            <tr>
                                <th>Player</th>
                                <th>Jersey#</th>
                                <th>Position</th>
                                <th>Injury Report</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td><?php echo $post->name; ?></td>
                                <td><?php echo $post->jersey; ?></td>
                                <td><?php echo $post->position; ?></td>
                                <td><?php echo $post->injuries[0]->practice->status; ?></td>
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
                          <h3 class="box-title"><?php echo "<img src = http://www.rotoworld.com/img/NFL/teams/logos/".$eight_a.".png alt='".$eight_m."' style='width:90px;height:75px;'> ";?><?php echo $eight_m; ?></h3>
                        </div>
                    <div class="box-body">
                     <table class="table table-bordered table-striped">
                    <?php
                    foreach ($eight_p as $post) {
                    ?>
                        <thead>
                            <tr>
                                <th>Player</th>
                                <th>Jersey#</th>
                                <th>Position</th>
                                <th>Injury Report</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td><?php echo $post->name; ?></td>
                                <td><?php echo $post->jersey; ?></td>
                                <td><?php echo $post->position; ?></td>
                                <td><?php echo $post->injuries[0]->practice->status; ?></td>
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
                          <h3 class="box-title"><?php echo "<img src = http://www.rotoworld.com/img/NFL/teams/logos/".$nine_a.".png alt='".$nine_m."' style='width:90px;hnine:75px;'> ";?><?php echo $nine_m; ?></h3>
                        </div>
                    <div class="box-body">
                     <table class="table table-bordered table-striped">
                    <?php
                    foreach ($nine_p as $post) {
                    ?>
                        <thead>
                            <tr>
                                <th>Player</th>
                                <th>Jersey#</th>
                                <th>Position</th>
                                <th>Injury Report</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td><?php echo $post->name; ?></td>
                                <td><?php echo $post->jersey; ?></td>
                                <td><?php echo $post->position; ?></td>
                                <td><?php echo $post->injuries[0]->practice->status; ?></td>
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
                          <h3 class="box-title"><?php echo "<img src = http://www.rotoworld.com/img/NFL/teams/logos/".$ten_a.".png alt='".$ten_m."' style='width:90px;hten:75px;'> ";?><?php echo $ten_m; ?></h3>
                        </div>
                    <div class="box-body">
                     <table class="table table-bordered table-striped">
                    <?php
                    foreach ($ten_p as $post) {
                    ?>
                        <thead>
                            <tr>
                                <th>Player</th>
                                <th>Jersey#</th>
                                <th>Position</th>
                                <th>Injury Report</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td><?php echo $post->name; ?></td>
                                <td><?php echo $post->jersey; ?></td>
                                <td><?php echo $post->position; ?></td>
                                <td><?php echo $post->injuries[0]->practice->status; ?></td>
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
                          <h3 class="box-title"><?php echo "<img src = http://www.rotoworld.com/img/NFL/teams/logos/".$eleven_a.".png alt='".$eleven_m."' style='width:90px;heleven:75px;'> ";?><?php echo $eleven_m; ?></h3>
                        </div>
                    <div class="box-body">
                     <table class="table table-bordered table-striped">
                    <?php
                    foreach ($eleven_p as $post) {
                    ?>
                        <thead>
                            <tr>
                                <th>Player</th>
                                <th>Jersey#</th>
                                <th>Position</th>
                                <th>Injury Report</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td><?php echo $post->name; ?></td>
                                <td><?php echo $post->jersey; ?></td>
                                <td><?php echo $post->position; ?></td>
                                <td><?php echo $post->injuries[0]->practice->status; ?></td>
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
                          <h3 class="box-title"><?php echo "<img src = http://www.rotoworld.com/img/NFL/teams/logos/".$twelve_a.".png alt='".$twelve_m."' style='width:90px;htwelve:75px;'> ";?><?php echo $twelve_m; ?></h3>
                        </div>
                    <div class="box-body">
                     <table class="table table-bordered table-striped">
                    <?php
                    foreach ($twelve_p as $post) {
                    ?>
                        <thead>
                            <tr>
                                <th>Player</th>
                                <th>Jersey#</th>
                                <th>Position</th>
                                <th>Injury Report</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td><?php echo $post->name; ?></td>
                                <td><?php echo $post->jersey; ?></td>
                                <td><?php echo $post->position; ?></td>
                                <td><?php echo $post->injuries[0]->practice->status; ?></td>
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
                          <h3 class="box-title"><?php echo "<img src = http://www.rotoworld.com/img/NFL/teams/logos/".$thirteen_a.".png alt='".$thirteen_m."' style='width:90px;hthirteen:75px;'> ";?><?php echo $thirteen_m; ?></h3>
                        </div>
                    <div class="box-body">
                     <table class="table table-bordered table-striped">
                    <?php
                    foreach ($thirteen_p as $post) {
                    ?>
                        <thead>
                            <tr>
                                <th>Player</th>
                                <th>Jersey#</th>
                                <th>Position</th>
                                <th>Injury Report</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td><?php echo $post->name; ?></td>
                                <td><?php echo $post->jersey; ?></td>
                                <td><?php echo $post->position; ?></td>
                                <td><?php echo $post->injuries[0]->practice->status; ?></td>
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
                          <h3 class="box-title"><?php echo "<img src = http://www.rotoworld.com/img/NFL/teams/logos/".$fourteen_a.".png alt='".$fourteen_m."' style='width:90px;hfourteen:75px;'> ";?><?php echo $fourteen_m; ?></h3>
                        </div>
                    <div class="box-body">
                     <table class="table table-bordered table-striped">
                    <?php
                    foreach ($fourteen_p as $post) {
                    ?>
                        <thead>
                            <tr>
                                <th>Player</th>
                                <th>Jersey#</th>
                                <th>Position</th>
                                <th>Injury Report</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td><?php echo $post->name; ?></td>
                                <td><?php echo $post->jersey; ?></td>
                                <td><?php echo $post->position; ?></td>
                                <td><?php echo $post->injuries[0]->practice->status; ?></td>
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
                          <h3 class="box-title"><?php echo "<img src = http://www.rotoworld.com/img/NFL/teams/logos/".$fifteen_a.".png alt='".$fifteen_m."' style='width:90px;hfifteen:75px;'> ";?><?php echo $fifteen_m; ?></h3>
                        </div>
                    <div class="box-body">
                     <table class="table table-bordered table-striped">
                    <?php
                    foreach ($fifteen_p as $post) {
                    ?>
                        <thead>
                            <tr>
                                <th>Player</th>
                                <th>Jersey#</th>
                                <th>Position</th>
                                <th>Injury Report</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td><?php echo $post->name; ?></td>
                                <td><?php echo $post->jersey; ?></td>
                                <td><?php echo $post->position; ?></td>
                                <td><?php echo $post->injuries[0]->practice->status; ?></td>
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
                          <h3 class="box-title"><?php echo "<img src = http://www.rotoworld.com/img/NFL/teams/logos/".$sixteen_a.".png alt='".$sixteen_m."' style='width:90px;hsixteen:75px;'> ";?><?php echo $sixteen_m; ?></h3>
                        </div>
                    <div class="box-body">
                     <table class="table table-bordered table-striped">
                    <?php
                    foreach ($sixteen_p as $post) {
                    ?>
                        <thead>
                            <tr>
                                <th>Player</th>
                                <th>Jersey#</th>
                                <th>Position</th>
                                <th>Injury Report</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td><?php echo $post->name; ?></td>
                                <td><?php echo $post->jersey; ?></td>
                                <td><?php echo $post->position; ?></td>
                                <td><?php echo $post->injuries[0]->practice->status; ?></td>
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
                          <h3 class="box-title"><?php echo "<img src = http://www.rotoworld.com/img/NFL/teams/logos/".$seventeen_a.".png alt='".$seventeen_m."' style='width:90px;hseventeen:75px;'> ";?><?php echo $seventeen_m; ?></h3>
                        </div>
                    <div class="box-body">
                     <table class="table table-bordered table-striped">
                    <?php
                    foreach ($seventeen_p as $post) {
                    ?>
                        <thead>
                            <tr>
                                <th>Player</th>
                                <th>Jersey#</th>
                                <th>Position</th>
                                <th>Injury Report</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td><?php echo $post->name; ?></td>
                                <td><?php echo $post->jersey; ?></td>
                                <td><?php echo $post->position; ?></td>
                                <td><?php echo $post->injuries[0]->practice->status; ?></td>
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
                          <h3 class="box-title"><?php echo "<img src = http://www.rotoworld.com/img/NFL/teams/logos/".$eighteen_a.".png alt='".$eighteen_m."' style='width:90px;heighteen:75px;'> ";?><?php echo $eighteen_m; ?></h3>
                        </div>
                    <div class="box-body">
                     <table class="table table-bordered table-striped">
                    <?php
                    foreach ($eighteen_p as $post) {
                    ?>
                        <thead>
                            <tr>
                                <th>Player</th>
                                <th>Jersey#</th>
                                <th>Position</th>
                                <th>Injury Report</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td><?php echo $post->name; ?></td>
                                <td><?php echo $post->jersey; ?></td>
                                <td><?php echo $post->position; ?></td>
                                <td><?php echo $post->injuries[0]->practice->status; ?></td>
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
                          <h3 class="box-title"><?php echo "<img src = http://www.rotoworld.com/img/NFL/teams/logos/".$nineteen_a.".png alt='".$nineteen_m."' style='width:90px;hnineteen:75px;'> ";?><?php echo $nineteen_m; ?></h3>
                        </div>
                    <div class="box-body">
                     <table class="table table-bordered table-striped">
                    <?php
                    foreach ($nineteen_p as $post) {
                    ?>
                        <thead>
                            <tr>
                                <th>Player</th>
                                <th>Jersey#</th>
                                <th>Position</th>
                                <th>Injury Report</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td><?php echo $post->name; ?></td>
                                <td><?php echo $post->jersey; ?></td>
                                <td><?php echo $post->position; ?></td>
                                <td><?php echo $post->injuries[0]->practice->status; ?></td>
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
                          <h3 class="box-title"><?php echo "<img src = http://www.rotoworld.com/img/NFL/teams/logos/".$twenty_a.".png alt='".$twenty_m."' style='width:90px;htwenty:75px;'> ";?><?php echo $twenty_m; ?></h3>
                        </div>
                    <div class="box-body">
                     <table class="table table-bordered table-striped">
                    <?php
                    foreach ($twenty_p as $post) {
                    ?>
                        <thead>
                            <tr>
                                <th>Player</th>
                                <th>Jersey#</th>
                                <th>Position</th>
                                <th>Injury Report</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td><?php echo $post->name; ?></td>
                                <td><?php echo $post->jersey; ?></td>
                                <td><?php echo $post->position; ?></td>
                                <td><?php echo $post->injuries[0]->practice->status; ?></td>
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
                          <h3 class="box-title"><?php echo "<img src = http://www.rotoworld.com/img/NFL/teams/logos/".$twenty_one_a.".png alt='".$twenty_one_m."' style='width:90px;htwenty_one:75px;'> ";?><?php echo $twenty_one_m; ?></h3>
                        </div>
                    <div class="box-body">
                     <table class="table table-bordered table-striped">
                    <?php
                    foreach ($twenty_one_p as $post) {
                    ?>
                        <thead>
                            <tr>
                                <th>Player</th>
                                <th>Jersey#</th>
                                <th>Position</th>
                                <th>Injury Report</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td><?php echo $post->name; ?></td>
                                <td><?php echo $post->jersey; ?></td>
                                <td><?php echo $post->position; ?></td>
                                <td><?php echo $post->injuries[0]->practice->status; ?></td>
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
                          <h3 class="box-title"><?php echo "<img src = http://www.rotoworld.com/img/NFL/teams/logos/".$twenty_two_a.".png alt='".$twenty_two_m."' style='width:90px;htwenty_two:75px;'> ";?><?php echo $twenty_two_m; ?></h3>
                        </div>
                    <div class="box-body">
                     <table class="table table-bordered table-striped">
                    <?php
                    foreach ($twenty_two_p as $post) {
                    ?>
                        <thead>
                            <tr>
                                <th>Player</th>
                                <th>Jersey#</th>
                                <th>Position</th>
                                <th>Injury Report</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td><?php echo $post->name; ?></td>
                                <td><?php echo $post->jersey; ?></td>
                                <td><?php echo $post->position; ?></td>
                                <td><?php echo $post->injuries[0]->practice->status; ?></td>
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
                          <h3 class="box-title"><?php echo "<img src = http://www.rotoworld.com/img/NFL/teams/logos/".$twenty_three_a.".png alt='".$twenty_three_m."' style='width:90px;htwenty_three:75px;'> ";?><?php echo $twenty_three_m; ?></h3>
                        </div>
                    <div class="box-body">
                     <table class="table table-bordered table-striped">
                    <?php
                    foreach ($twenty_three_p as $post) {
                    ?>
                        <thead>
                            <tr>
                                <th>Player</th>
                                <th>Jersey#</th>
                                <th>Position</th>
                                <th>Injury Report</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td><?php echo $post->name; ?></td>
                                <td><?php echo $post->jersey; ?></td>
                                <td><?php echo $post->position; ?></td>
                                <td><?php echo $post->injuries[0]->practice->status; ?></td>
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
                          <h3 class="box-title"><?php echo "<img src = http://www.rotoworld.com/img/NFL/teams/logos/".$twenty_four_a.".png alt='".$twenty_four_m."' style='width:90px;htwenty_four:75px;'> ";?><?php echo $twenty_four_m; ?></h3>
                        </div>
                    <div class="box-body">
                     <table class="table table-bordered table-striped">
                    <?php
                    foreach ($twenty_four_p as $post) {
                    ?>
                        <thead>
                            <tr>
                                <th>Player</th>
                                <th>Jersey#</th>
                                <th>Position</th>
                                <th>Injury Report</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td><?php echo $post->name; ?></td>
                                <td><?php echo $post->jersey; ?></td>
                                <td><?php echo $post->position; ?></td>
                                <td><?php echo $post->injuries[0]->practice->status; ?></td>
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
                          <h3 class="box-title"><?php echo "<img src = http://www.rotoworld.com/img/NFL/teams/logos/".$twenty_five_a.".png alt='".$twenty_five_m."' style='width:90px;htwenty_five:75px;'> ";?><?php echo $twenty_five_m; ?></h3>
                        </div>
                    <div class="box-body">
                     <table class="table table-bordered table-striped">
                    <?php
                    foreach ($twenty_five_p as $post) {
                    ?>
                        <thead>
                            <tr>
                                <th>Player</th>
                                <th>Jersey#</th>
                                <th>Position</th>
                                <th>Injury Report</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td><?php echo $post->name; ?></td>
                                <td><?php echo $post->jersey; ?></td>
                                <td><?php echo $post->position; ?></td>
                                <td><?php echo $post->injuries[0]->practice->status; ?></td>
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
                          <h3 class="box-title"><?php echo "<img src = http://www.rotoworld.com/img/NFL/teams/logos/".$twenty_six_a.".png alt='".$twenty_six_m."' style='width:90px;htwenty_six:75px;'> ";?><?php echo $twenty_six_m; ?></h3>
                        </div>
                    <div class="box-body">
                     <table class="table table-bordered table-striped">
                    <?php
                    foreach ($twenty_six_p as $post) {
                    ?>
                        <thead>
                            <tr>
                                <th>Player</th>
                                <th>Jersey#</th>
                                <th>Position</th>
                                <th>Injury Report</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td><?php echo $post->name; ?></td>
                                <td><?php echo $post->jersey; ?></td>
                                <td><?php echo $post->position; ?></td>
                                <td><?php echo $post->injuries[0]->practice->status; ?></td>
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
                          <h3 class="box-title"><?php echo "<img src = http://www.rotoworld.com/img/NFL/teams/logos/".$twenty_seven_a.".png alt='".$twenty_seven_m."' style='width:90px;htwenty_seven:75px;'> ";?><?php echo $twenty_seven_m; ?></h3>
                        </div>
                    <div class="box-body">
                     <table class="table table-bordered table-striped">
                    <?php
                    foreach ($twenty_seven_p as $post) {
                    ?>
                        <thead>
                            <tr>
                                <th>Player</th>
                                <th>Jersey#</th>
                                <th>Position</th>
                                <th>Injury Report</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td><?php echo $post->name; ?></td>
                                <td><?php echo $post->jersey; ?></td>
                                <td><?php echo $post->position; ?></td>
                                <td><?php echo $post->injuries[0]->practice->status; ?></td>
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
                          <h3 class="box-title"><?php echo "<img src = http://www.rotoworld.com/img/NFL/teams/logos/".$twenty_eight_a.".png alt='".$twenty_eight_m."' style='width:90px;htwenty_eight:75px;'> ";?><?php echo $twenty_eight_m; ?></h3>
                        </div>
                    <div class="box-body">
                     <table class="table table-bordered table-striped">
                    <?php
                    foreach ($twenty_eight_p as $post) {
                    ?>
                        <thead>
                            <tr>
                                <th>Player</th>
                                <th>Jersey#</th>
                                <th>Position</th>
                                <th>Injury Report</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td><?php echo $post->name; ?></td>
                                <td><?php echo $post->jersey; ?></td>
                                <td><?php echo $post->position; ?></td>
                                <td><?php echo $post->injuries[0]->practice->status; ?></td>
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
                          <h3 class="box-title"><?php echo "<img src = http://www.rotoworld.com/img/NFL/teams/logos/".$twenty_nine_a.".png alt='".$twenty_nine_m."' style='width:90px;htwenty_nine:75px;'> ";?><?php echo $twenty_nine_m; ?></h3>
                        </div>
                    <div class="box-body">
                     <table class="table table-bordered table-striped">
                    <?php
                    foreach ($twenty_nine_p as $post) {
                    ?>
                        <thead>
                            <tr>
                                <th>Player</th>
                                <th>Jersey#</th>
                                <th>Position</th>
                                <th>Injury Report</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td><?php echo $post->name; ?></td>
                                <td><?php echo $post->jersey; ?></td>
                                <td><?php echo $post->position; ?></td>
                                <td><?php echo $post->injuries[0]->practice->status; ?></td>
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

    