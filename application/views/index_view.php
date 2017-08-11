<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8" />
<meta http-equiv="X-UA-Compatible" content="IE=Edge" />
<meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport" />
<title>Login To UVC Employee Panel</title>
<!-- Favicon-->
<link rel="icon" href="<?php echo base_url();?>favicon.ico" type="image/x-icon" />
<!-- Custom Css -->
<link href="<?php echo base_url();?>assets/css/main.css" rel="stylesheet" />
<link href="<?php echo base_url();?>assets/css/login.css" rel="stylesheet" />

<!-- Swift Themes. You can choose a theme from css/themes instead of get all themes -->
<link href="<?php echo base_url();?>assets/css/themes/all-themes.css" rel="stylesheet" />
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" /></head>
<body class="login-page authentication">

<div class="container">
    <div class="card-top"></div>
    <div class="card">
        <h1 class="title"><span>Login Area</span>UVC Employee <div class="msg">Sign in to start your session</div></h1>
        <div class="col-md-12">
            <?php
            $attributs=array(
            'id'=>'sign_in'
            );
             echo form_open('user/checklogin',$attributs);
            ?>
                
                <div class="input-group"> <span class="input-group-addon"> <i class="zmdi zmdi-account"></i> </span>
                    <div class="form-line">
                    <?php 
                    $txtUsername=array(
                        'type' => 'text',
                        'class' => 'form-control',
                        'name' => 'txtUsername',
                        'placeholder' => 'Username',
                        'required' => 'required'
                    );
                       echo form_input($txtUsername);
                    ?>
                    </div>
                </div>
                <div class="input-group"> <span class="input-group-addon"> <i class="zmdi zmdi-lock"></i> </span>
                    <div class="form-line">
                    <?php 
                    $txtPassword=array(
                        'type' => 'password',
                        'class' => 'form-control',
                        'name' => 'txtPassword',
                        'placeholder' => 'Password',
                        'required' => 'required'
                    );
                      echo form_password($txtPassword);
                    ?>
                       
                    </div>
                </div>
                <div>
                    <div class="text-center">
                    <?php
                    $btnSubmit=array(
                        'class'=>'btn btn-raised waves-effect g-bg-cyan',
                        'name'=>'btnLogin',
                        'value'=>'SIGN IN'
                    );
                    echo form_submit($btnSubmit);
                    ?>
                       
                    </div>
                </div>
            <?php echo form_close(); ?>
            <?php if($this->session->flashdata('login_error')): ?>
            <div class="alert alert-danger alert-dismissible" role="alert">
              <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <?php echo $this->session->flashdata('login_error'); ?>
            </div>
           <?php endif; ?>
           <?php if($this->session->flashdata('errors')): ?>
            <div class="alert alert-danger alert-dismissible" role="alert">
              <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <?php echo $this->session->flashdata('errors'); ?>
            </div>
           <?php endif; ?>
        </div>
    </div>    
</div>
<div class="theme-bg"></div>

<!-- Jquery Core Js --> 
<script src="<?php echo base_url();?>assets/bundles/libscripts.bundle.js"></script> <!-- Lib Scripts Plugin Js --> 
<script src="<?php echo base_url();?>assets/bundles/vendorscripts.bundle.js"></script> <!-- Lib Scripts Plugin Js --> 


<script src="<?php echo base_url();?>assets/bundles/mainscripts.bundle.js"></script><!-- Custom Js --> 
<script src="<?php echo base_url();?>assets/js/pages/examples/sign-in.js"></script>

</body>
</html>