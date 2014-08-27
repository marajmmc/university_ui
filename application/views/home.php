<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<?php
@session_start();
if (@$_SESSION['active'] != "active") {
    echo "<script>
            window.location.href = '../../index.php';
        </script>";
}
?>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" >
    <head>
        <title>Dash Board</title>
        <META HTTP-EQUIV="REFRESH" CONTENT="5"></META>
        <META HTTP-EQUIV="REFRESH" CONTENT="5">
        <meta http-equiv="content-type" content="application/xhtml; charset=UTF-8" />
        <link rel="stylesheet" type="text/css" href="../../css/style.css" />
        <!--[if lt IE 8.]><link rel="stylesheet" type="text/css" href="../../css/style-ie.css" /><![endif]-->
        <!--[if lt IE 7.]><link rel="stylesheet" type="text/css" href="../../css/style-ie6.css" /><![endif]-->
        <!--  STEP ONE: insert path to SWFObject JavaScript -->
        <script type="text/javascript" src="../../js/swfobject/swfobject.js"></script>
        <script type="text/javascript" src="../../js/common.js"></script>
        <script src="../../js/jquery-1.7.1.js"></script>
        <!--  STEP TWO: configure SWFObject JavaScript and embed CU3ER slider -->
        <script type="text/javascript">
            var flashvars = {};
            flashvars.xml = "config.xml";
            flashvars.font = "font.swf";
            var attributes = {};
            attributes.wmode = "transparent";
            attributes.id = "slider";
            swfobject.embedSWF("cu3er.swf", "cu3er-container", "920", "327", "9", "expressInstall.swf", flashvars, attributes);
        </script>
    </head>
    <body>
        <!-- Main Body Starts Here -->
        <div id="main_body">
            <!-- Top Part Starts Here -->
            <div id="top_part">
                <!-- Top Part Image Starts Here -->
                <div id="top_part_image">
                    <!-- Logo Part Starts Here -->
                    <?php require_once '../../module/common_file/header.php'; ?>
                    <!-- Logo Part Ends Here -->
                </div>
                <!-- Top Part Image Ends Here -->
                <!-- Main Menu Starts Here -->
                <div id="main_menu_bg">
                    <!-- Main Menu Body Starts Here -->
                    <?php require_once '../../module/common_file/top_menu.php'; ?>
                    <!-- Main Menu Body Ends Here -->
                </div>
                <!-- Main Menu Ends Here -->
            </div>
            <!-- Top Part Ends Here -->
            <!-- Content Body Starts Here -->
            <div id="content_body" style="height: 400px;">
                <!-- Home Content Slider Starts Here -->
                <div id="home_video_box">
                    <!--<div id="cu3er-container"> <a href="#"> <img src="http://www.adobe.com/images/shared/download_buttons/get_flash_player.gif" alt="" /> </a> </div>-->
                </div>
                <!-- Home Content Slider Ends Here -->
                <!-- Home News Starts Here -->
                <div id="home_news_box">
                    <!-- Headers Starts Here -->
                    <?php // require_once '../../module/common_file/assign_project.php'; ?>
                    <!-- News Ends Here -->
                </div>
                <!-- Home News Ends Here -->
                <!-- Home Social & Newsletter Part Starts here -->
                <div id="home_middle_part">
                    <?php // require_once '../../module/common_file/dashboard.php'; ?>
                </div>
                <!-- Home Social & Newsletter Part Starts here -->
                <!-- Home Right Box Starts here -->
                <div id="home_right_box">
                    <!-- Clients Starts Here -->
                    <?php // require_once '../../module/common_file/notice.php'; ?>
                    <!-- Clients Ends Here -->
                </div>
                <!-- Home Right Box Ends Here -->
            </div>
            <!-- Clear -->
            <div class="clear"> </div>
            <!-- Clear -->
            <!-- Content Body Ends Here -->
            <!--Footer Starts Here -->
            <div id="footer">
                <?php require_once '../../module/common_file/footer.php'; ?>
            </div>
            <!-- Footer Ends Here -->
        </div>
        <!-- Main Body Ends Here -->
    </body>
</html>
