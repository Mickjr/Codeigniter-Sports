

<div class="login-box">
  <div class="login-logo">
    <a href="#"><b>Fantasy Application</a>
  </div>
  <!-- /.login-logo -->
  <div class="login-box-body">
    <p class="login-box-msg">Sign in to start your session</p>

    <form action="#" method="post">

      <div class="form-group has-feedback">

      <?php echo $this->session->flashdata('message');?>

      <?php echo form_open('',array('class'=>'form-horizontal'));?>

        <!-- <input type="email" class="form-control" placeholder="Email"> -->

        <?php echo form_label('Email','identity');?>
        <?php echo form_error('identity');?>
        <?php echo form_input('identity','','class="form-control"');?>

        <span class="glyphicon glyphicon-envelope form-control-feedback"></span>

      </div>

      <div class="form-group has-feedback">

        <!-- <input type="password" class="form-control" placeholder="Password"> -->

        <?php echo form_label('Password','password');?>
        <?php echo form_error('password');?>
        <?php echo form_password('password','','class="form-control"');?>

        <span class="glyphicon glyphicon-lock form-control-feedback"></span>

      </div>

      <div class="row">

        <div class="col-xs-8">

        <label>

        <a href="<?php echo site_url('admin/user/register');?>" class="text-center">Register a new membership</a>

        </label>

          <div class="checkbox icheck">

            <label style="margin-left:10%;">

              <?php echo form_checkbox('remember','1',FALSE);?> Remember me

            </label>

          </div>

        </div>
        <!-- /.col -->
        <div class="col-xs-4">

          <?php echo form_submit('submit', 'Log in', 'class="btn btn-primary btn-lg btn-block"');?>

        </div>

        <!-- /.col -->

      </div>

    </form>
    <!-- /.social-auth-links -->

    <!-- <a href="#">I forgot my password</a><br> -->
   <!--  <a href="<?php echo site_url('admin/user/register');?>" class="text-center">Register a new membership</a> -->

  </div>
  <!-- /.login-box-body -->
</div>
</b>
</a>
</div>
</div>


