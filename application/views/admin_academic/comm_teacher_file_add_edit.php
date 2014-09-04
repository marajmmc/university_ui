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

                <!-- .toolbar -->
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
                        <div class="col-lg-6"><label for="text1" class="control-label col-lg-12">Title</label></div>
                        <div class="col-lg-3"><label for="text1" class="control-label col-lg-12">Subject</label></div>
                        <div class="col-lg-1"><label for="pass1" class="control-label col-lg-12">Upload File</label> </div>

                    </div>

                    <div class="row">
                        <div class="col-lg-6">
                            <input type="text" class="form-control" name="file-subject" id="file-subject"/>
                        </div>
                        <div class="col-lg-3">
                            <select class="form-control" id="sub_status" name="religion" data-original-title="Status" data-placement="top">
                                <option>--Select--</option>
                                <option value="">Database Design & Development</option>
                                <option value="">System Analysis & Design</option>
                                <option value="">Algorithm & Data Structure</option>
                                <option value="">Managing Business Projects</option>
                            </select>
                        </div>
                        <div class="col-lg-1">
                            <input type="file" name="file" id="file"/>
                        </div>
                    </div>


                    <div class="row">
                        <div class="col-lg-12 pull-right">&nbsp;</div>
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
</script>