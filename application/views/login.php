
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <!-- <title>Login CodeIgniter</title> -->
  <script type="text/javascript" src="<?php echo base_url('assets/bootstrap4/js/bootstrap.js');?>"></script>
   <script type="text/javascript" src="<?php echo base_url('assets/js/jquery-3.3.1.js');?>"></script>
   
  <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/bootstrap4/css/bootstrap.css'); ?>">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/bootstrap4/css/bootstrap-grid.css'); ?>">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/custom_file/float_lib.css'); ?>">

    <link rel="stylesheet" type="text/css" href="<?php echo base_url().'assets/fontawesome-free-5.6.3-web/css/all.css'?>">
  </head>
   <body>

<div class="container">
  <div class="row">
     <div class="card bg-secondary">

    <div class="d-flex  container justify-content-center align-items-center pad">
    <h1>Login Form for CMAS</h1>
    </div>
     <div class="col-lg-4 container justify-content-center align-items-center">
     <div class="px-0 ">
         <!-- //img-thumbnail ,rounded-->
            <img src="<?php echo base_url('/images/loginpic.PNG'); ?>" class="img-fluid rounded-circle" style="padding-bottom:0.5rem;padding-left: 5rem;padding-right: 5rem;" >
        </div>
    </div>


    <div class="container d-flex  justify-content-center align-items-center">
    <!-- <div class="row"> -->

     <form method="post" action="<?php echo site_url('Authentication/login');?>">

      <div class="form-row col-lg-12">

<!--          <div class="input-group ">-->
<!--            <div class="input-group-prepend">-->
<!--              <span class="input-group-text"><i class="fa fa-user"></i></span>-->
<!--                <input type="password" class="form-control" id="password"  name="password">-->
<!--            </div>-->
<!--          </div>-->

        <div class="form-label-group col-lg-12">

          <input type="text" class="form-control" id="username" name="username" placeholder="user name" required autofocus>
              <label for="username"  class="fa fa-user">User Name</label>
        </div>
        <div class=" form-label-group col-lg-12">
             <input type="password" class="form-control" id="password"  name="password" placeholder="Password" required autofocus>
             <label for="password" class="fa fa-key">Password</label>
        </div>
      </div>
      <div class="col-auto">
          <div class="form-check mb-2">
            <input class="form-check-input" type="checkbox" id="autoSizingCheck">
            <label class="form-check-label" for="autoSizingCheck">
              Remember me
            </label>
          </div>
        </div>
        <div class="col-auto">
          <button type="submit" class="btn btn-primary mb-2">Submit</button>
        </div>
         <?php echo validation_errors('<p class="text-danger">','</p>')?>
        </form>
    </div>

    </div>
  </div>




