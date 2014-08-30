<?php
if (!defined('BASEPATH'))
    exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <title><?php print $title; ?></title>

        <meta charset="UTF-8" />
        <!--Mobile first-->
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <!--IE Compatibility modes-->
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="msapplication-TileColor" content="#5bc0de" />
        <meta name="msapplication-TileImage" content="<?php echo base_url(); ?>assets/img/metis-tile.png" />
        <?php print $meta; ?>

        <!-- Bootstrap -->
        <link rel="stylesheet" href="<?php echo base_url(); ?>assets/lib/bootstrap/css/bootstrap.min.css">

        <!-- Font Awesome -->
        <link rel="stylesheet" href="<?php echo base_url(); ?>assets/lib/Font-Awesome/css/font-awesome.min.css">

        <!-- Metis core stylesheet -->
        <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/main.min.css">
        <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/theme.css">
        <link rel="stylesheet" href="<?php echo base_url(); ?>assets/lib/uniform/themes/default/css/uniform.default.css">
        <link rel="stylesheet" href="<?php echo base_url(); ?>assets/lib/inputlimiter/jquery.inputlimiter.1.0.css">
        <link rel="stylesheet" href="<?php echo base_url(); ?>assets/lib/chosen/chosen.min.css">
        <link rel="stylesheet" href="<?php echo base_url(); ?>assets/lib/colorpicker/css/colorpicker.css">
        <link rel="stylesheet" href="<?php echo base_url(); ?>assets/lib/tagsinput/jquery.tagsinput.css">
        <link rel="stylesheet" href="<?php echo base_url(); ?>assets/lib/daterangepicker/daterangepicker-bs3.css">
        <link rel="stylesheet" href="<?php echo base_url(); ?>assets/lib/datepicker/css/datepicker.css">
        <link rel="stylesheet" href="<?php echo base_url(); ?>assets/lib/timepicker/css/bootstrap-timepicker.min.css">
        <link rel="stylesheet" href="<?php echo base_url(); ?>assets/lib/switch/build/css/bootstrap3/bootstrap-switch.min.css">
        <link rel="stylesheet" href="<?php echo base_url(); ?>assets/lib/jasny/css/jasny-bootstrap.min.css">

        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->

        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->

        <!--[if lt IE 9]>
          <script src="<?php echo base_url(); ?>assets/lib/html5shiv/html5shiv.js"></script>
                  <script src="<?php echo base_url(); ?>assets/lib/respond/respond.min.js"></script>
                <![endif]-->

        <!--Modernizr 3.0-->
        <?php print $css; ?>
        <script src="<?php echo base_url(); ?>assets/js/jquery-2.1.1.min.js"></script>
        <script src="<?php echo base_url(); ?>assets/lib/bootstrap/js/bootstrap.min.js"></script>
        
        <?php print $javascript; ?>
    </head>
    <body>
        <div id="wrap">
            <div id="top">

                <!-- .navbar -->
                <nav class="navbar navbar-inverse navbar-static-top">

                    <!-- Brand and toggle get grouped for better mobile display -->
                    <?php print $top_nav;?>
                    <!-- /.topnav -->

                </nav><!-- /.navbar -->

                <!-- header.head -->
                <header class="head">
                    <div class="search-bar">
                        <a data-original-title="Show/Hide Menu" data-placement="bottom" data-tooltip="tooltip" class="accordion-toggle btn btn-primary btn-sm visible-xs visible-sm" id="menu-toggle">
                            <i class="fa fa-bars"></i>
                        </a> 
                    </div>

                    <!-- ."main-bar  Task Title Bar-->
                    <div class="main-bar">
                        <h3>
                            <!--<i class="fa fa-pencil"></i>-->
                            <?php print $tasktitle;?>
                        </h3>
                    </div>
                    <!-- /.main-bar   Task Title Bar-->
                </header>

                <!-- end header.head -->
            </div><!-- /#top -->
            <div id="left">
                <div class="media user-media">
                    <?php print $user_info;?>
                </div>

                <!-- #menu -->
                <?php 
                print $left_menu;
                ?>
                <!-- /#menu -->
            </div><!-- /#left -->
            <div id="content">
                <div class="outer">
                    <div class="inner">
                        <?php print $content; ?>
                    </div>

                    <!-- end .inner -->
                </div>

                <!-- end .outer -->
            </div>

            <!-- end #content -->
        </div><!-- /#wrap -->
        <div id="footer">
            <p>2014 &copy; SOFTBD Ltd.</p>
        </div>

        <!-- #helpModal -->
        <!-- /.modal --><!-- /#helpModal -->
        <!--<script src="<?php echo base_url(); ?>assets/lib/jquery.min.js"></script>-->
        <!---->
        <script src="<?php echo base_url(); ?>assets/lib/uniform/jquery.uniform.min.js"></script>
        <script src="<?php echo base_url(); ?>assets/lib/inputlimiter/jquery.inputlimiter.1.3.1.min.js"></script>
        <script src="<?php echo base_url(); ?>assets/lib/chosen/chosen.jquery.min.js"></script>
        <script src="<?php echo base_url(); ?>assets/lib/colorpicker/js/bootstrap-colorpicker.js"></script>
        <script src="<?php echo base_url(); ?>assets/lib/tagsinput/jquery.tagsinput.min.js"></script>
        <script src="<?php echo base_url(); ?>assets/lib/validVal/src/js/jquery.validVal.min.js"></script>
        <script src="<?php echo base_url(); ?>assets/lib/daterangepicker/daterangepicker.js"></script>
        <script src="<?php echo base_url(); ?>assets/lib/daterangepicker/moment.min.js"></script>
        <script src="<?php echo base_url(); ?>assets/lib/datepicker/js/bootstrap-datepicker.js"></script>
        <script src="<?php echo base_url(); ?>assets/lib/timepicker/js/bootstrap-timepicker.min.js"></script>
        <script src="<?php echo base_url(); ?>assets/lib/switch/build/js/bootstrap-switch.min.js"></script>
        <script src="<?php echo base_url(); ?>assets/lib/jquery.dualListbox-1.3/jquery.dualListBox-1.3.min.js"></script>
        <script src="<?php echo base_url(); ?>assets/lib/autosize/jquery.autosize.min.js"></script>
        <script src="<?php echo base_url(); ?>assets/lib/jasny/js/jasny-bootstrap.min.js"></script>
        <script>
            $(function() {
                formGeneral();
            });
        </script>
        <script src="<?php echo base_url(); ?>assets/lib/screenfull/screenfull.js"></script>
        <script src="<?php echo base_url(); ?>assets/js/main.min.js"></script>

        <!--For Demo Only. Not required -->
        <script type="text/javascript" src="<?php echo base_url(); ?>assets/js/style-switcher.js"></script>
    </body>
</html>