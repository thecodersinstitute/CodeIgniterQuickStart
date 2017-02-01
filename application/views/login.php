<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8" />
  <title>Arifin</title>
  <meta name="description" content="Education management" />
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
  <link rel="stylesheet" href="<?php echo base_url();?>/assets/css/bootstrap.css" type="text/css" />
  <link rel="stylesheet" href="<?php echo base_url();?>/assets/css/animate.css" type="text/css" />
  <link rel="stylesheet" href="<?php echo base_url();?>/assets/css/font-awesome.min.css" type="text/css" />
  <link rel="stylesheet" href="<?php echo base_url();?>/assets/css/font.css" type="text/css" cache="false" />
  <link rel="stylesheet" href="<?php echo base_url();?>/assets/css/plugin.css" type="text/css" />
  <link rel="stylesheet" href="<?php echo base_url();?>/assets/css/app.css" type="text/css" />
  <!--[if lt IE 9]>
    <script src="js/ie/respond.min.js" cache="false"></script>
    <script src="js/ie/html5.js" cache="false"></script>
    <script src="js/ie/fix.js" cache="false"></script>
  <![endif]-->
</head>
<body>
  <section id="content" class="m-t-lg wrapper-md animated fadeInUp">
    <a class="nav-brand" href="index.html">Arifin</a>
    <div class="row m-n">
	<?php if($this->session->flashdata('success')){ ?>
        <div class="alert alert-success">
            <a href="#" class="close" data-dismiss="alert">&times;</a>
            <strong>Success!</strong> <?php echo $this->session->flashdata('success'); ?>
        </div>
    <?php }else if($this->session->flashdata('error')){  ?>
        <div class="alert alert-danger">
            <a href="#" class="close" data-dismiss="alert">&times;</a>
            <strong>Error!</strong> <?php echo $this->session->flashdata('error'); ?>
        </div>
    <?php }else if($this->session->flashdata('warning')){  ?>
        <div class="alert alert-warning">
            <a href="#" class="close" data-dismiss="alert">&times;</a>
            <strong>Warning!</strong> <?php echo $this->session->flashdata('warning'); ?>
        </div>
    <?php }else if($this->session->flashdata('info')){  ?>
        <div class="alert alert-info">
            <a href="#" class="close" data-dismiss="alert">&times;</a>
            <strong>Info!</strong> <?php echo $this->session->flashdata('info'); ?>
        </div>
    <?php } ?>
      <div class="col-md-4 col-md-offset-4 m-t-lg">
        <section class="panel">
          <header class="panel-heading text-center">
            Sign in
          </header>
          <form action="" class="panel-body" method="post">
            <div class="form-group">
              <label class="control-label">Email</label>
              <input type="email" name="email"placeholder="test@example.com" class="form-control" required>
            </div>
            <div class="form-group">
              <label class="control-label">Password</label>
              <input type="password" name="password" id="inputPassword" placeholder="Password" class="form-control" required>
            </div>
            <div class="checkbox">
              <label>
                <input type="checkbox"> Keep me logged in
              </label>
            </div>
            <a href="#" class="pull-right m-t-xs"><small>Forgot password?</small></a>
            <button type="submit" class="btn btn-info">Sign in</button>
            
           
          </form>
        </section>
      </div>
    </div>
  </section>
  <!-- footer -->
  <footer id="footer">
    <div class="text-center padder clearfix">
      <p>
        <small><br>Arifin &copy; 2017</small>
      </p>
    </div>
  </footer>
  <!-- / footer -->
	<script src="<?php echo base_url();?>/assets/js/jquery.min.js"></script>
  <!-- Bootstrap -->
  <script src="<?php echo base_url();?>/assets/js/bootstrap.js"></script>
  <!-- app -->
  <script src="<?php echo base_url();?>/assets/js/app.js"></script>
  <script src="<?php echo base_url();?>/assets/js/app.plugin.js"></script>
  <script src="<?php echo base_url();?>/assets/js/app.data.js"></script>
</body>
</html>
