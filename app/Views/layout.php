<?php
$session = session();
?>
<!DOCTYPE html>
<html lang="en">


<head>
    <meta charset="utf-8" />
    <title>SIPL</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="A fully featured admin theme which can be used to build CRM, CMS, etc." name="description" />
    <meta content="Coderthemes" name="author" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <!-- App favicon -->
    <link rel="shortcut icon" href="<?php echo base_url('public') ?>/assets/images/favicon.ico">

    <!-- plugin css -->
    <link href="<?php echo base_url('public') ?>/assets/libs/jquery-vectormap/jquery-jvectormap-1.2.2.css" rel="stylesheet" type="text/css" />

    <link href="<?php echo base_url('public') ?>/assets/css/jquery-ui.css" rel="stylesheet" type="text/css">

    <!-- App css -->
    <link href="<?php echo base_url('public') ?>/assets/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
    <link href="<?php echo base_url('public') ?>/assets/css/icons.min.css" rel="stylesheet" type="text/css" />
    <link href="<?php echo base_url('public') ?>/assets/css/app.min.css" rel="stylesheet" type="text/css" />

</head>

<body>

    <!-- Begin page -->
    <div id="wrapper">

        <!-- Topbar Start -->
        <div class="navbar-custom">
            <ul class="list-unstyled topnav-menu float-right mb-0">

                <li class="dropdown notification-list">
                    <a class="nav-link dropdown-toggle nav-user mr-0 waves-effect waves-light" data-toggle="dropdown" href="#" role="button" aria-haspopup="false" aria-expanded="false">
                        <img src="<?php echo base_url('public') ?>/assets/images/users/avatar-1.jpg" alt="user-image" class="rounded-circle">
                        <span class="pro-user-name ml-1">
                            <?= $session->get('user_name'); ?> <i class="mdi mdi-chevron-down"></i> 
                        </span>
                    </a>
                    <div class="dropdown-menu dropdown-menu-right profile-dropdown ">
                        <!-- item-->
                        <a href="<?= base_url('logout'); ?>" class="dropdown-item notify-item">
                            <i class="remixicon-logout-box-line"></i>
                            <span>Logout</span>
                        </a>

                    </div>
                </li>
            </ul>

            <!-- LOGO -->
            <div class="logo-box">
                <a href="dashboard.html" class="logo text-center">
                    <span class="logo-lg">
                        <img src="<?php echo base_url('public') ?>/assets/images/logo-light.jpg" alt="" height="50">
                        <!-- <span class="logo-lg-text-light">Xeria</span> -->
                    </span>
                    <span class="logo-sm">
                        <!-- <span class="logo-sm-text-dark">X</span> -->
                        <img src="<?php echo base_url('public') ?>/assets/images/logo-sm.jpg" alt="" height="24">
                    </span>
                </a>
            </div>

            <ul class="list-unstyled topnav-menu topnav-menu-left m-0">
                <li>
                    <button class="button-menu-mobile waves-effect waves-light">
                        <i class="fe-menu"></i>
                    </button>
                </li>
                
                
            </ul>
        </div>
        <!-- end Topbar -->

        <!-- ========== Left Sidebar Start ========== -->
        <div class="left-side-menu">

            <div class="slimscroll-menu">

                <!--- Sidemenu -->
                <div id="sidebar-menu">

                    <ul class="metismenu" id="side-menu">

                        <li class="menu-title">Navigation</li>

                        <li>
                            <a href="<?= base_url('dashboard'); ?>" class="waves-effect">
                                <i class="remixicon-dashboard-line"></i>
                                <span> Dashboard </span>
                            </a>
                        </li> 
                        <li>
                            <a href="<?= base_url('kit-request'); ?>" class="waves-effect">
                                <i class="remixicon-dashboard-line"></i>
                                <span> Drop-In Center </span>
                            </a>
                        </li> 

                        
                    </ul>

                </div>
                <!-- End Sidebar -->

                <div class="clearfix"></div>

            </div>
            <!-- Sidebar -left -->

        </div>
        <!-- Left Sidebar End -->

        <!-- ============================================================== -->
        <!-- Start Page Content here -->
        <!-- ============================================================== -->

        <div class="content-page">
            <?php if (session()->getFlashdata('msg')) : ?>
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    <?php echo session()->getFlashdata('msg'); ?>
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                </div>
            <?php endif; ?>
            <?= $this->renderSection('content'); ?>
            <!-- Footer Start -->
            <footer class="footer">
                <div class="container-fluid">
                    <div class="row">
                     
                        <div class="col-md-6">
                            <div class="text-md-right footer-links d-none d-sm-block">
                                2020 © SIPL
                            </div>
                        </div>
                    </div>
                </div>
            </footer>
            <!-- end Footer -->

        </div>

        <!-- ============================================================== -->
        <!-- End Page content -->
        <!-- ============================================================== -->


    </div>
    <!-- END wrapper -->

    

    <!-- Right bar overlay-->
    <div class="rightbar-overlay"></div>

    <!-- Vendor js -->
    <script src="<?php echo base_url('public') ?>/assets/js/vendor.min.js"></script>
    <script src="<?php echo base_url('public') ?>/assets/js/jquery-1.12.4.min.js"></script>
    <script src="<?php echo base_url('public') ?>/assets/js/jquery-ui.min.js"></script>



    <script src="<?php echo base_url('public') ?>/assets/libs/apexcharts/apexcharts.min.js"></script>
    <script src="<?php echo base_url('public') ?>/assets/libs/jquery-sparkline/jquery.sparkline.min.js"></script>
    <script src="<?php echo base_url('public') ?>/assets/libs/jquery-vectormap/jquery-jvectormap-1.2.2.min.js"></script>
    <script src="<?php echo base_url('public') ?>/assets/libs/jquery-vectormap/jquery-jvectormap-world-mill-en.js"></script>


    <!-- Peity chart-->
    <script src="<?php echo base_url('public') ?>/assets/libs/peity/jquery.peity.min.js"></script>
    <script type="text/javascript" src="<?php echo base_url('public') ?>/assets/js/jquery.ui.scrolltabs.js"></script>

    <!-- Peity chart-->
    <script src="<?php echo base_url('public') ?>/assets/libs/peity/jquery.peity.min.js"></script>

    <!-- init js -->
    <script src="<?php echo base_url('public') ?>/assets/js/pages/dashboard-2.init.js"></script>

    <!-- App js -->
    <script src="<?php echo base_url('public') ?>/assets/js/app.min.js"></script>

    <!-- App js -->
    <script src="<?php echo base_url('public') ?>/assets/js/app.min.js"></script>
    <script>
        var $tabs;
        var scrollEnabled;
        $(function() {



                $('#example_3').scrollTabs({
                    scrollOptions: {
                        easing: 'swing',
                        enableDebug: false,
                        // closable: true,
                        showFirstLastArrows: false,
                        selectTabAfterScroll: true
                    }
                });
            }


        );

    </script>
    <script>
        $("#btn-appointment").click(function() {
            $("#select_dr").toggle();
        });

        $(function() {
            $('#example_3').hide();
            $('#address_id').change(function() {
                if ($('#address_id').val() == 'dr1' || $('#address_id').val() == 'dr2') {
                    $('#example_3').show();
                } else {
                    $('#example_3').hide();
                }
            });
        });

    </script>
</body>

</html>