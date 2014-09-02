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
                            <select class="form-control" id="batch_name" name="batch_name" data-original-title="Faculty Name" data-placement="top">
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
                    
                    <div class="row" style="margin-left: 10px;">
                        <table>
                            
                            <tr>
                                <th>Student Name</th>
                                <th>&nbsp;&nbsp;</th>
                                <th>Status</th>
                            </tr>
                            <tr>
                                <th>&nbsp;&nbsp;</th>
                                <th>&nbsp;&nbsp;</th>
                                <th>&nbsp;&nbsp;</th>
                            </tr>
                            <tr>
                                <td>Maraj Hossain</td>
                                <td>&nbsp;&nbsp;</td>
                                <td><input class="form-control" type="checkbox" checked="checked" name="total_mark" id="total_mark" /></td>
                            </tr>
                            <tr>
                                <td>Kamrul Hasan</td>
                                <td>&nbsp;&nbsp;</td>
                                <td><input class="form-control" type="checkbox" checked="checked" name="total_mark" id="total_mark" /></td>
                            </tr>
                            <tr>
                                <td>Om Mahmud</td>
                                <td>&nbsp;&nbsp;</td>
                                <td><input class="form-control" type="checkbox" checked="checked" name="total_mark" id="total_mark" /></td>
                            </tr>
                            <tr>
                                <td>Bikash Dutta</td>
                                <td>&nbsp;&nbsp;</td>
                                <td><input class="form-control" type="checkbox" checked="checked" name="total_mark" id="total_mark" /></td>
                            </tr>
                            <tr>
                                <td>Apel Mallik</td>
                                <td>&nbsp;&nbsp;</td>
                                <td><input class="form-control" type="checkbox" checked="checked" name="total_mark" id="total_mark" /></td>
                            </tr>
                            <tr>
                                <td>Maraj Hossain</td>
                                <td>&nbsp;&nbsp;</td>
                                <td><input class="form-control" type="checkbox" checked="checked" name="total_mark" id="total_mark" /></td>
                            </tr>
                            <tr>
                                <td>Kamrul Hasan</td>
                                <td>&nbsp;&nbsp;</td>
                                <td><input class="form-control" type="checkbox" checked="checked" name="total_mark" id="total_mark" /></td>
                            </tr>
                            <tr>
                                <td>Om Mahmud</td>
                                <td>&nbsp;&nbsp;</td>
                                <td><input class="form-control" type="checkbox" checked="checked" name="total_mark" id="total_mark" /></td>
                            </tr>
                            <tr>
                                <td>Bikash Dutta</td>
                                <td>&nbsp;&nbsp;</td>
                                <td><input class="form-control" type="checkbox" checked="checked" name="total_mark" id="total_mark" /></td>
                            </tr>
                            <tr>
                                <td>Apel Mallik</td>
                                <td>&nbsp;&nbsp;</td>
                                <td><input class="form-control" type="checkbox" checked="checked" name="total_mark" id="total_mark" /></td>
                            </tr>
                        </table>
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