<!--<div class="user-media-toggleHover">
    <span class="fa fa-user"></span> 
</div>-->
<div class="user-wrapper" style="height: 100px;">
    <div id="sidebar_icon" style="background: #fff; border-radius: 6px; display: none; padding: 5px; text-align: center;">
        <div>
            <img src="<?php echo base_url() ?>images/Report-Robi-Logo.png" />
        </div>
    </div>
    <div id="sidebar_user_info" style="display: none; color: #FB2D2D;">
        <a class="user-link" href="">
            <?php
            $baseurl = base_url();
            if ($this->session->userdata('user_type') == "Admin") {
                $userfullname = "Md. Anower Hossan";
                $location = $baseurl . "assets/img/profile_photo_admin.jpg";
            } else if ($this->session->userdata('user_type') == "Teacher") {
                $userfullname = "Selim Rahman";
                $location = $baseurl . "assets/img/profile_photo_teacher.jpg";
            } else if ($this->session->userdata('user_type') == "Student") {
                $userfullname = "Mohammad Ali";
                $location = $baseurl . "assets/img/profile_photo_student.jpg";
            } else {
                $location = "";
                $userfullname = "";
            }
            echo "<img class='media-object img-thumbnail user-img' alt='User Picture' src='$location' width='80' />";
            ?>
            <!--<img class="media-object img-thumbnail user-img" alt="User Picture" src="<?php // echo base_url();  ?>assets/img/user.gif">-->
            <!--<span class="label label-danger user-label">16</span>--> 
        </a> 
        <div class="media-body" style="color: #FB2D2D;">
            <h5 class="media-heading" style="color: #FB2D2D; font-weight: bold;"><?php echo $userfullname; ?></h5>
            <ul class="list-unstyled user-info">
                <li> <a href=""><?php echo $this->session->userdata('user_type'); ?></a>  </li>
                <li>Last Access :
                    <br>
                    <small>
                        <i class="fa fa-calendar"></i>&nbsp;03 September 
                        <!--16:32-->
                    </small> 
                </li>
            </ul>
        </div>
    </div>
</div>

<script>
    $(document).ready(function(){
        setTimeout(function(){
            $( "#sidebar_icon" ).fadeIn('slow');
            $( "#sidebar_user_info" ).fadeOut('slow');
        }, 1000);
        setTimeout(function(){
            $( "#sidebar_icon" ).fadeOut('slow');
        }, 4000);
        setTimeout(function(){
            $( "#sidebar_user_info" ).fadeIn('slow');
        }, 5000);
    });
</script>