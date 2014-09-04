<?php
if (!defined('BASEPATH'))
    exit('No direct script access allowed');
?>
<div class="row">
    <div class="col-lg-12">
        <div class="box dark">
            <header>
                <div class="icons">
                    <i class="fa fa-edit"></i>
                </div>
                <h5><?php echo $featuretitle; ?></h5>

                <div class="toolbar">
                    <nav style="padding: 8px;">
                        <a href="javascript:;" class="btn btn-default btn-xs collapse-box">
                            <i class="fa fa-minus"></i>
                        </a> 
                        <a href="javascript:;" class="btn btn-default btn-xs full-box">
                            <i class="fa fa-expand"></i>
                        </a> 
                        <a href="javascript:;" class="btn btn-danger btn-xs close-box">
                            <i class="fa fa-times"></i>
                        </a> 
                    </nav>
                </div>
            </header>
            <div id="div-1" class="body">
                <form class="form-horizontal" method="post" action="#">
                    <div class="row">
                        <div class="col-lg-4"><label for="text1" class="control-label col-lg-12">Subject</label></div>
                    </div>

                    <div class="row">
                        <div class="col-lg-4">
                            <select onchange="show_div()" class="form-control" id="batch_name" name="batch_name" data-original-title="Faculty Name" data-placement="top">
                                <option>--Select--</option>
                                <option name="cse" value="cse">CSE-103-21st</option>
                                <option name="eee" value="eee">EEE-109-22nd</option>
                                <option name="ce" value="ce">CE-101-20th</option>
                                <option name="ce" value="ce">PHRM-102-20th</option>
                            </select>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-12 pull-right">&nbsp;</div>
                    </div>
                    <div class="row" style="margin-left: 10px; display: none" id="std_div">
                        <div class="col-lg-12">
                            <table>

                                <tr>
                                    <th>Status</th>
                                    <th>&nbsp;&nbsp;</th>
                                    <th>Student Name</th>
                                </tr>
                                <tr>
                                    <th>&nbsp;&nbsp;</th>
                                    <th>&nbsp;&nbsp;</th>
                                    <th>&nbsp;&nbsp;</th>
                                </tr>
                                <tr>
                                    <td><input class="form-control" type="checkbox" checked="checked" name="total_mark" id="total_mark" /></td>
                                    <td>&nbsp;&nbsp;</td>
                                    <td>
                                        <img src="<?php echo base_url()?>/assets/img/profile_photo_student.jpg" width="5%" />
                                        Maraj Hossain
                                    </td>
                                </tr>
                                <tr>
                                    <td><input class="form-control" type="checkbox" checked="checked" name="total_mark" id="total_mark" /></td>
                                    <td>&nbsp;&nbsp;</td>
                                    <td>
                                        <img src="<?php echo base_url()?>/assets/img/profile_photo_student1.jpg" width="5%" />
                                        Kamrul Hasan
                                    </td>
                                </tr>
                                <tr>
                                    <td><input class="form-control" type="checkbox" checked="checked" name="total_mark" id="total_mark" /></td>
                                    <td>&nbsp;&nbsp;</td>
                                    <td>
                                        <img src="<?php echo base_url()?>/assets/img/profile_photo_student2.jpg" width="5%" />
                                        Om Mahmud</td>
                                </tr>
                                <tr>
                                    <td><input class="form-control" type="checkbox" checked="checked" name="total_mark" id="total_mark" /></td>
                                    <td>&nbsp;&nbsp;</td>
                                    <td>
                                        <img src="<?php echo base_url()?>/assets/img/profile_photo_student3.jpg" width="5%" />
                                        Bikash Dutta</td>
                                </tr>
                                <tr>
                                    <td><input class="form-control" type="checkbox" checked="checked" name="total_mark" id="total_mark" /></td>
                                    <td>&nbsp;&nbsp;</td>
                                    <td>
                                        <img src="<?php echo base_url()?>/assets/img/profile_photo_student4.jpg" width="5%" />
                                        Apel Mallik</td>
                                </tr>
                                <tr>
                                    <td><input class="form-control" type="checkbox" checked="checked" name="total_mark" id="total_mark" /></td>
                                    <td>&nbsp;&nbsp;</td>
                                    <td>
                                        <img src="<?php echo base_url()?>/assets/img/profile_photo_student5.jpg" width="5%" />
                                        Maraj Hossain</td>
                                </tr>
                                <tr>
                                    <td><input class="form-control" type="checkbox" checked="checked" name="total_mark" id="total_mark" /></td>
                                    <td>&nbsp;&nbsp;</td>
                                    <td>
                                        <img src="<?php echo base_url()?>/assets/img/profile_photo_student6.jpg" width="5%" />
                                        Kamrul Hasan</td>
                                </tr>
                                <tr>
                                    <td><input class="form-control" type="checkbox" checked="checked" name="total_mark" id="total_mark" /></td>
                                    <td>&nbsp;&nbsp;</td>
                                    <td>
                                        <img src="<?php echo base_url()?>/assets/img/profile_photo_student7.jpg" width="5%" />
                                        Om Mahmud</td>
                                </tr>
                                <tr>
                                    <td><input class="form-control" type="checkbox" checked="checked" name="total_mark" id="total_mark" /></td>
                                    <td>&nbsp;&nbsp;</td>
                                    <td>
                                        <img src="<?php echo base_url()?>/assets/img/profile_photo_student8.jpg" width="5%" />
                                        Bikash Dutta</td>
                                </tr>
                                <tr>
                                    <td><input class="form-control" type="checkbox" checked="checked" name="total_mark" id="total_mark" /></td>
                                    <td>&nbsp;&nbsp;</td>
                                    <td>
                                        <img src="<?php echo base_url()?>/assets/img/profile_photo_student9.jpg" width="5%" />
                                        Apel Mallik
                                    </td>
                                </tr>
                            </table>
                        </div>
                    </div>

                    <!--////////////////////// INCREMENT /////////////////////////-->

                    <div class="row">
                        <div class="col-lg-12 pull-right">&nbsp;</div>
                    </div>

                    <div class="form-group">
                        <div class="col-lg-12">
                            <div class="col-lg-6">
                                <a href="<?php echo base_url() . $this->uri->segment('1') . "/" . $this->uri->segment('2') . "/list" ?>" class="btn btn-primary btn-rect pull-left" data-original-title="" title="">Back</a>
                            </div>
                            <div class="col-lg-6">
                                <a href="<?php echo base_url() . $this->uri->segment('1') . "/" . $this->uri->segment('2') . "/list" ?>" class="btn btn-primary btn-rect pull-right" data-original-title="" title="">Save</a>
                            </div>
                        </div>
                    </div>
                </form>

            </div>
        </div>
    </div>
</div>
<script>
    $(function() {
        formGeneral();
    });
    function show_div(){
        $("#std_div").fadeOut();
        $("#std_div").fadeIn();
    }
</script>