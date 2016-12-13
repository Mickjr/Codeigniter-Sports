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

<div class="content-wrapper">

<!-- Content Header (Page header) -->
    <section class="content-header">

      <h1>
        Profile page
        <small>it all starts here</small>
      </h1>

      <ol class="breadcrumb">

        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>

        <li><a href="#">Examples</a></li>

        <li class="active">Blank page</li>

      </ol>

    </section>

     <section class="content">
      <div class="row">
        <!-- left column -->
        <div class="col-md-8">
          <!-- general form elements -->
          <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">Profile Page</h3>
            </div>
        <!-- Main content -->
          <!-- form start -->
            <form role="form">
              <div class="box-body">
                <?php echo form_open('',array('class'=>'form-horizontal'));?>
                <div class="form-group">
                  <?php
                  echo form_label('First name','first_name');
                  echo form_error('first_name');
                  echo form_input('first_name',set_value('first_name',$user->first_name),'class="form-control"');
                  ?>
                </div>
                <div class="form-group">
                  <?php
                  echo form_label('Last name','last_name');
                  echo form_error('last_name');
                  echo form_input('last_name',set_value('last_name',$user->last_name),'class="form-control"');
                  ?>
                </div>
                <div class="form-group">
                  <?php
                  echo form_label('Company','company');
                  echo form_error('company');
                  echo form_input('company',set_value('company',$user->company),'class="form-control"');
                  ?>
                </div>
                <div class="form-group">
                  <?php
                  echo form_label('Phone','phone');
                  echo form_error('phone');
                  echo form_input('phone',set_value('phone',$user->phone),'class="form-control"');
                  ?>
                </div>
                <div class="form-group">
                  <?php
                  echo form_label('Username','username');
                  echo form_error('username');
                  echo form_input('username',set_value('username',$user->username),'class="form-control"');
                  ?>
                </div>
                <div class="form-group">
                  <?php
                  echo form_label('Email','email');
                  echo form_error('email');
                  echo form_input('email',set_value('email',$user->email),'class="form-control"');
                  ?>
                </div>
                <div class="form-group">
                  <?php
                  echo form_label('Change password','password');
                  echo form_error('password');
                  echo form_password('password','','class="form-control"');
                  ?>
                </div>
                <div class="form-group">
                  <?php
                  echo form_label('Confirm changed password','password_confirm');
                  echo form_error('password_confirm');
                  echo form_password('password_confirm','','class="form-control"');
                  ?>
                </div>
                <div class="form-group">
                  <?php
                  if(isset($groups))
                  {
                    echo form_label('Groups','groups[]');
                    foreach($groups as $group)
                    {
                      echo '<div class="checkbox">';
                      echo '<label>';
                      echo form_checkbox('groups[]', $group->id, set_checkbox('groups[]', $group->id, in_array($group->id,$usergroups)));
                      echo ' '.$group->name;
                      echo '</label>';
                      echo '</div>';
                    }
                  }
                  ?>
                </div>
                <div class="box-footer">
                <?php echo form_hidden('user_id',$user->id);?>
                <?php echo form_submit('submit', 'Edit user', 'class="btn btn-primary btn-lg btn-block"');?>
              <?php echo form_close();?>
           </div>
          </form>
        </div>
            <!-- /.box -->



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
</div>