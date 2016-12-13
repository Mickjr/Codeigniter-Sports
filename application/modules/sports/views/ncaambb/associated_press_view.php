<?php
/**
* @author : Manton Horton Jr.
* Email : mantonhorton@gmail.com
* Website : www.mantonhortonjr.com
* Subject : NCAAMBB Associated Press Top 25
* http://www.usatoday.com/sports/ncaaf/teams/
*/


// copy file content into a string var
$json_file = file_get_contents('http://api.sportradar.us/ncaamb-t3/polls/AP/2016/rankings.json?api_key=gg3yj88mhd5ea7g5theszkf8');


// convert the string to a json object
$jfo = json_decode($json_file);

// exit(print_r($jfo));


// Associated Press Top 25 
$ap25 = $jfo->rankings;



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
        <li class="treeview active">
          <a href="#">
            <i class="fa fa-edit"></i> 
            <span>NCAAMBB</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li class="active"><a href="<?php echo site_url('sports/ncaambb_associated_press'); ?>"><i class="fa fa-circle-o"></i>Associated Press Top 25</a></li>
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
        NCAAMBB - Associated Press Top 25 
        <small></small>
      </h1>

      <ol class="breadcrumb">

        <li><a href="<?php echo site_url('admin/dashboard');?>"><i class="fa fa-dashboard"></i> Home</a></li>

        <li><a href="#">NCAAMBB</a></li>

        <li class="active">Associated Press Top 25</li>

      </ol>

    </section>
  
        <section class="content">
          <div class="row">
            <div class="col-md-12">
              <div class="box">
           <div class="box-header with-border">
                  <h3 class="box-title">Associated Press Top 25</h3>
                </div>
            <!-- /.box-header -->
                <div class="box-body">
                  <table class="table table-bordered table-striped">

            <?php
            foreach ($ap25 as $post) {

            	if ($post->id == 'faeb1160-5d15-4f26-99fc-c441cf21fc7f') {
                    
                    $post->id = 'DUKE';

                  }elseif($post->id == '2267a1f4-68f6-418b-aaf6-2aa0c4b291f1') {
                    
                    $post->id = 'UK'; 

                  }elseif($post->id == 'fae4855b-1b64-4b40-a632-9ed345e1e952') {
                    
                    $post->id = 'KU'; 

                  }elseif($post->id == '4383eb6a-7fd8-4ff2-94c5-43c933121e88') {
                    
                    $post->id = 'VILL'; 

                  }elseif($post->id == 'e9ca48b2-00ba-41c0-a02b-6885a2da1ff1') {
                    
                    $post->id = 'UNC'; 

                  }elseif($post->id == '56913910-87f7-4ad7-ae3b-5cd9fb218fd9') {
                    
                    $post->id = 'UVA'; 

                  }elseif($post->id == '1da70895-f77f-44ef-b216-d63c02e696eb') {
                    
                    $post->id = 'ORE'; 

                  }elseif($post->id == 'a41d5a05-4c11-4171-a57e-e7a1ea325a6d') {
                    
                    $post->id = 'MSU'; 

                  }elseif($post->id == 'c3f0a8ce-af67-497f-a750-3b859376b20a') {
                    
                    $post->id = 'IU'; 

                  }elseif($post->id == '8cd24de1-2be8-4b77-bcfa-47be0495a5f4') {
                    
                    $post->id = 'SYR'; 

                  }elseif($post->id == '0d8a328f-20ce-410b-bed1-15fc01308aaf') {
                    
                    $post->id = 'XAV'; 

                  }elseif($post->id == '2778d005-cc14-4e58-9bf2-3fc37bffb62f') {
                    
                    $post->id = 'MD'; 

                  }elseif($post->id == 'f770d3a2-221c-49ce-9c7a-680f7417fe9e') {
                    
                    $post->id = 'WVU'; 

                  }elseif($post->id == '12d7f888-675b-459f-9099-a38f771d8a95') {
                    
                    $post->id = 'PUR'; 

                  }elseif($post->id == '2f4d21f8-6d5f-48a5-abca-52a30583871a') {
                    
                    $post->id = 'GONZ'; 

                  }elseif($post->id == '9b166a3f-e64b-4825-bb6b-92c6f0418263') {
                    
                    $post->id = 'ARIZ'; 

                  }elseif($post->id == 'c7569eae-5b93-4197-b204-6f3a62146b25') {
                    
                    $post->id = 'WIS'; 

                  }elseif($post->id == '0e4258fa-3154-4c16-b693-adecab184c6c') {
                    
                    $post->id = 'ISU'; 

                  }elseif($post->id == 'db6e1cab-3fa3-4a93-a673-8b2a358ff4bf') {
                    
                    $post->id = 'BAY'; 

                  }elseif($post->id == '80962f09-8821-48b6-8cf0-0cf0eea56aa8') {
                    
                    $post->id = 'ND'; 

                  }elseif($post->id == '0d037a5d-827a-44dd-8b70-57603d671d5d') {
                    
                    $post->id = 'UTAH'; 

                  }elseif($post->id == 'b2fda957-e15c-4fb2-8a13-6e58496f561e') {
                    
                    $post->id = 'OU'; 

                  }elseif($post->id == 'b795ddbc-baab-4499-8803-52e8608520ab') {
                    
                    $post->id = 'LOU'; 

                  }elseif($post->id == 'efba5350-79bc-47aa-a189-db177b95b491') {
                    
                    $post->id = 'UCON'; 

                  }elseif($post->id == '6ed15092-2670-450a-99c2-61d861e87644') {
                    
                    $post->id = 'TEX'; 

                  }elseif($post->id == 'ef184799-d79b-49d9-a662-991eaf4044cd') {
                    
                    $post->id = 'TAM'; 

                  }elseif($post->id == 'c10544de-e3bd-4776-ba2e-83df8c017fd1') {
                    
                    $post->id = 'IOWA'; 

                  }elseif($post->id == '7e42bca2-3cd7-4aca-aa46-f190fe5d8eb4') {
                    
                    $post->id = 'URI'; 

                  }elseif($post->id == '7d797407-623e-476d-b299-46de4275414d') {
                    
                    $post->id = 'CREI'; 

                  }elseif($post->id == 'b18f34af-a7f1-4659-a2e5-fc11a31cd316') {
                    
                    $post->id = 'SMCC'; 

                  }elseif($post->id == '7aec5187-cb1b-45e5-8f7d-406d766cdc73') {
                    
                    $post->id = 'MIA'; 

                  }elseif($post->id == 'ec0d6b67-4b16-4b50-92b2-1a651dae6b0f') {
                    
                    $post->id = 'UCLA'; 

                  }   

            ?>
                <thead>
                    <tr>
                    	<th><?php echo $post->rank; ?></th> 
                        <th><?php echo $post->market; ?> <?php echo $post->name; ?></th>
                        <th>Wins</th>
                        <th>losses</th>
                        <th>Points</th>
                    </tr>

                </thead>

                <tbody>

                    <tr>
                    	<td></td>
                        <td><?php echo "<img src = http://www.gannett-cdn.com/media/SMG/sports_logos/ncaa-whitebg/80/".$post->id.".png alt='".$post->market."' style='width:30px;height:25px;'> ";?></td>
                        <td><?php echo $post->wins; ?></td>
                        <td><?php echo $post->losses; ?></td>
                        <td><?php echo $post->points; ?></td>
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