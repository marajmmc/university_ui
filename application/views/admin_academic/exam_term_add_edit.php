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
                </div><!-- /.toolbar -->
            </header>
            <div id="div-1" class="body">
                <form class="form-horizontal" method="post" action="#">
                    <div class="form-group">
                        <label for="text1" class="control-label col-lg-4">Exam Term</label>
                        <div class="col-lg-8">
                            <input type="text" id="term_name" name="term_name" placeholder="Term Name" class="form-control">
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="pass1" class="control-label col-lg-4">Time Span</label>
                        <div class="col-lg-8">
                            <div class="input-group">
                                <span class="input-group-addon">
                                    <i class="fa fa-calendar"></i>
                                </span>
                                <input id="reservation" class="form-control" type="text" name="reservation">
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="pass1" class="control-label col-lg-4">Status</label>
                        <div class="col-lg-8">
                            <select class="form-control" id="status" name="status" data-original-title="Status" data-placement="top">
                                <option>--Select--</option>
                                <option value="Active" selected="">Active</option>
                                <option value="In-Active">Inactive</option>
                            </select>
                        </div>
                    </div>
                    <style>
                        table{
                            border:1px solid #428bca;
                        } 
                        td{
                            border:1px solid #428bca;
                            padding: 5px;
                            width: 380px;
                        }
                        th{
                            color: #428bca;
                            border:1px solid #428bca;
                        }
                        .newWidth{
                            /*width: 150px !important;*/
                        }
                        .addRow{
                            /*margin-left: 200px !important;*/ 
                        }
                    </style>
                    <table>
                        <tr>
                            <th>
                                <label for="text1" class="control-label col-lg-4">Course</label>  
                            </th>
                            <th>
                                <label for="text1" class="control-label col-lg-4">Mark</label>  
                            </th>
                            <th>
                                <label for="text1" class="control-label col-lg-4">Status</label>  
                            </th>
                        </tr>
                        <tr>
                            <td width="140">
                                <div class="form-group col-lg-12 newWidth">

                                    <select name="course_name" id="course_name" data-placeholder="Select Course" class="form-control chzn-select" tabindex="-1">
                                        <option value=""></option>
                                        <option value="CSE-101">CSE-101</option>
                                        <option value="CSE-102">CSE-102</option>
                                        <option value="CSE-103">CSE-103</option>
                                        <option value="EEE-101">EEE-101</option>
                                        <option value="EEE-102">EEE-102</option>
                                        <option value="CE-101">CE-101</option>
                                        <option value="CE-102">CE-101</option>
                                        <option value="ARC-101">ARC-101</option>
                                        <option value="ARC-101">ARC-102</option>
                                        <option value="ARC-101">ARC-103</option>
                                    </select>
                                </div>
                            </td>
                            <td>
                                <div class="form-group col-lg-12 newWidth">

                                    <input class="form-control" type="number" value="6">
                                </div>

                            </td>
                            <td>


                            </td>

                        </tr>
                    </table>

                    <div style="padding: 10px; text-align: right; ">
                        <a  class="btn btn-danger" data-color="rgb(255, 255, 255)" data-color-format="hex" href="#">Add Row</a>
                    </div>

                    

                    <!-- /.form-group -->

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
                    <!-- /.form-group -->
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