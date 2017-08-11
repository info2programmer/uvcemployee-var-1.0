<?php
if($this->session->userdata('logged_in'))
{
    $UserId=$this->session->userdata('userid');
    $result=$this->user_model->getUserDetails($UserId);
    foreach ($result as $object ) {
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=Edge" />
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport" />
    <title><?php echo "Welcome To UVC Employee Zone"; ?></title>
    <link rel="icon" href="<?php echo base_url();?>favicon.ico" type="image/x-icon" />
    <link href="<?php echo base_url();?>assets/plugins/jvectormap/jquery-jvectormap-1.2.2.css" rel="stylesheet" />
    <link href="<?php echo base_url();?>assets/css/main.css" rel="stylesheet" />
    <link href="<?php echo base_url();?>assets/css/themes/all-themes.css" rel="stylesheet" />
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <script src="http://cloud.tinymce.com/stable/tinymce.min.js?apiKey=qr2ohqvpocb2571pyj6x2nqzxmb80n410q89ykp09dcvj0ec"></script>
  <script>tinymce.init({ selector:'textarea' });</script>
</head>
<body class="theme-cyan">
    <!-- Page Loader -->
    <div class="page-loader-wrapper">
        <div class="loader">
            <div class="preloader">
                <div class="spinner-layer pl-red">
                    <div class="circle-clipper left">
                        <div class="circle"></div>
                    </div>
                    <div class="circle-clipper right">
                        <div class="circle"></div>
                    </div>
                </div>
            </div>
            <p>Please wait...</p>
        </div>
    </div>
    <!-- #END# Page Loader -->
    <!-- Overlay For Sidebars -->
    <div class="overlay"></div>

    <!-- #END# Overlay For Sidebars -->
    <!-- Top Bar -->
    <nav class="navbar clearHeader">
        <div class="container-fluid">
            <div class="navbar-header">
                <a href="#" class="bars"></a> <a class="navbar-brand" href="dashbord">UVC Employee</a> </div>
            <ul class="nav navbar-nav navbar-right">

                <li> <a href="<?php echo base_url(); ?>user/logout" onclick="window.open('<?php echo base_url(); ?>user/logout','_self')" class="dropdown-toggle" data-toggle="dropdown" role="button"><STRONG>LOGOUT</STRONG></a>

                </li>
            </ul>
        </div>
    </nav>
    <!-- #Top Bar -->
    <section>
        <!-- Left Sidebar -->
        <aside id="leftsidebar" class="sidebar">
            <!-- User Info -->
            <div class="user-info">
                <div class="admin-image"> <img src="<?php echo base_url(); ?>assets/images/dp/<?php echo $object->imgpath; ?>" alt="" /> </div>
                <div class="admin-action-info"> <span>Welcome</span>
                    <h3><?php echo $object->name; ?></h3>
                    <ul>
                        <li><a data-placement="bottom" title="Go to Inbox" href="javascript:void(0);"><i class="zmdi zmdi-email"></i></a></li>
                        <li><a data-placement="bottom" title="Go to Profile" href="dashbord"><i class="zmdi zmdi-account"></i></a></li>
                        <li><a data-placement="bottom" title="Lock Profile" href="<?php echo base_url(); ?>user/logout"><i class="zmdi zmdi-lock"></i></a></li>
                        <li><a data-placement="bottom" title="Open Chat Box" href="chatbox" class="js-right-sidebar" data-close="true"><i class="zmdi zmdi-comments"></i></a></li>
                    </ul>
                </div>
                <div class="quick-stats">
                    <h5>Your Details</h5>
                    <ul>
                        <li><span>D.O.B<i><?php echo $object->dob; ?></i></span></li>
                        <li><span>UVC<i>#<?php echo $object->emp_id; ?></i></span></li>
                    </ul>
                </div>
            </div>
            <!-- #User Info -->
            <!-- Menu -->
            <div class="menu">
        <ul class="list">
            <li class="header">MAIN NAVIGATION</li>
            <li><a href="dashbord"><i class="zmdi zmdi-home"></i><span>My Profile</span> </a> </li>
            <li><a href="attendance"><i class="zmdi zmdi-swap-alt"></i><span>Attendance</span> </a></li>
            <li><a href="viewattendance"><i class="zmdi zmdi-delicious"></i><span>View Attendance</span> </a></li>
            <li><a href="javascript:void(0);"><i class="zmdi zmdi-assignment"></i><span>Work Schedule</span> </a></li>
            <li><a href="messagetoadmin"><i class="zmdi zmdi-comment"></i><span>Message To Admin</span> </a></li>
            <li><a href="javascript:void(0);"><i class="zmdi zmdi-email"></i><span>Special News</span> </a></li>
            <li><a href="javascript:void(0);"><i class="zmdi zmdi-grid"></i><span>My Rating</span> </a></li>
            <li><a href="gallery"><i class="zmdi zmdi-image"></i><span>Image Gallery</span> </a></li>
            <li><a href="chatbox"><i class="zmdi zmdi-comments"></i><span>Chat Box</span> </a></li>
        </ul>
            </div>
            <!-- #Menu -->
            <!-- Footer -->
            <div class="legal">
                <div class="copyright">
                    &copy; 2017 <a href="http://uvcweb.in" target="_blank">UVC Employee</a>.
                </div>
            </div>
            <!-- #Footer -->
        </aside>
        <!-- #END# Left Sidebar -->
  </section> 
  <section class="content profile-page">
    <?php $this->load->view($main_view); ?> 
  </section>
   <div class="color-bg"></div>
    <script src="<?php echo base_url();?>assets/bundles/libscripts.bundle.js"></script>
    <script src="<?php echo base_url();?>assets/bundles/vendorscripts.bundle.js"></script>
    <script src="<?php echo base_url();?>assets/bundles/mainscripts.bundle.js"></script>
    <script src="<?php echo base_url();?>assets/js/pages/index.js"></script>
</body>

</html>
<?php
}
}
?>