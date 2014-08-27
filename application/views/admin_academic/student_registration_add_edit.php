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
                    <div id="collapse4" class="body">
                        <table id="dataTable" class="table table-bordered table-condensed table-hover table-striped dataTable">
                            <thead>
                                <tr role="row">
                                    <th class="sorting_asc" role="columnheader" tabindex="0" aria-controls="dataTable" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Rendering engine: activate to sort column descending" style="width: 80px;">ID</th>
                                    <th class="sorting" role="columnheader" tabindex="0" aria-controls="dataTable" rowspan="1" colspan="1" aria-label="Browser: activate to sort column ascending" style="width: 341px;">Student Name</th>
                                    <th class="sorting" role="columnheader" tabindex="0" aria-controls="dataTable" rowspan="1" colspan="1" aria-label="Platform(s): activate to sort column ascending" style="width: 147px;">Department</th>
                                    <th class="sorting" role="columnheader" tabindex="0" aria-controls="dataTable" rowspan="1" colspan="1" aria-label="Platform(s): activate to sort column ascending" style="width: 147px;">Date of Birth</th>
                                    <th class="sorting" role="columnheader" tabindex="0" aria-controls="dataTable" rowspan="1" colspan="1" aria-label="Platform(s): activate to sort column ascending" style="width: 147px;">Gender</th>
                                    <th class="sorting" role="columnheader" tabindex="0" aria-controls="dataTable" rowspan="1" colspan="1" aria-label="Platform(s): activate to sort column ascending" style="width: 147px;">Contact No</th>
                                    <th class="sorting" role="columnheader" tabindex="0" aria-controls="dataTable" rowspan="1" colspan="1" aria-label="Engine version: activate to sort column ascending" style="width: 204px;">Status</th>
                                    <th class="sorting" role="columnheader" tabindex="0" aria-controls="dataTable" rowspan="1" colspan="1" aria-label="Engine version: activate to sort column ascending" style="width: 204px;">Action</th>
                                </tr>
                            </thead>
                            <tbody role="alert" aria-live="polite" aria-relevant="all">
                                <tr class="odd">
                                    <td class=" sorting_1">14050201</td>
                                    <td class=" ">Kamrul Hasan</td>
                                    <td class=" ">CSE</td>
                                    <td class=" ">20/02/1989</td>
                                    <td class=" ">Male</td>
                                    <td class=" ">01718382717</td>
                                    <td class=" ">Active</td>
                                    <td class="">
                                        <a href="<?php echo base_url() . $this->uri->segment('1') . "/" . $this->uri->segment('2') . "/add_edit" ?>" >View Detail's</a>
                                    </td>
                                </tr>
                                <tr class="odd">
                                    <td class=" sorting_1">14050202</td>
                                    <td class=" ">Md. Maraj Hossain</td>
                                    <td class=" ">CSE</td>
                                    <td class=" ">25/03/1987</td>
                                    <td class=" ">Male</td>
                                    <td class=" ">01946190311</td>
                                    <td class=" ">Active</td>
                                    <td class="">
                                        <a href="<?php echo base_url() . $this->uri->segment('1') . "/" . $this->uri->segment('2') . "/add_edit" ?>" >View Detail's</a>
                                    </td>
                                </tr>
                                <tr class="odd">
                                    <td class=" sorting_1">14050203</td>
                                    <td class=" ">Mostafizur Rahman</td>
                                    <td class=" ">EEE</td>
                                    <td class=" ">03/12/1986</td>
                                    <td class=" ">Male</td>
                                    <td class=" ">01718333337</td>
                                    <td class=" ">Active</td>
                                    <td class="">
                                        <a href="<?php echo base_url() . $this->uri->segment('1') . "/" . $this->uri->segment('2') . "/add_edit" ?>" >View Detail's</a>
                                    </td>
                                </tr>
                                <tr class="odd">
                                    <td class=" sorting_1">14050204</td>
                                    <td class=" ">Mohammad Yasir</td>
                                    <td class=" ">Civil</td>
                                    <td class=" ">09/05/1988</td>
                                    <td class=" ">Male</td>
                                    <td class=" ">01911777779</td>
                                    <td class=" ">Active</td>
                                    <td class="">
                                        <a href="<?php echo base_url() . $this->uri->segment('1') . "/" . $this->uri->segment('2') . "/add_edit" ?>" >View Detail's</a>
                                    </td>
                                </tr>
                                <tr class="odd">
                                    <td class=" sorting_1">14050204</td>
                                    <td class=" ">Susmita Akter</td>
                                    <td class=" ">Electronics</td>
                                    <td class=" ">09/05/1988</td>
                                    <td class=" ">Female</td>
                                    <td class=" ">01815504480</td>
                                    <td class=" ">Active</td>
                                    <td class="">
                                        <a href="<?php echo base_url() . $this->uri->segment('1') . "/" . $this->uri->segment('2') . "/add_edit" ?>" >View Detail's</a>
                                    </td>
                                </tr>

                            </tbody>
                        </table>
                    </div>
                    <div class="form-group">
                        <label for="text1" class="control-label col-lg-4">Subject Name</label>
                        <div class="col-lg-8">
                            <input type="text" id="subject_name" name="subject_name" placeholder="Subject Name" class="form-control">
                        </div>
                    </div><!-- /.form-group -->
                    <div class="form-group">
                        <label for="text1" class="control-label col-lg-4">Subject Code</label>
                        <div class="col-lg-8">
                            <input type="text" id="subject_code" name="subject_code" placeholder="Subject Code" class="form-control">
                        </div>
                    </div><!-- /.form-group -->
                    <div class="form-group">
                        <label for="pass1" class="control-label col-lg-4">Department</label>
                        <div class="col-lg-8">
                            <select class="form-control" id="department_name" name="department_name" data-original-title="Faculty Name" data-placement="top">
                                <option>--Select--</option>
                                <option name="cse" value="cse">Computer Science & Engineering</option>
                                <option name="eee" value="eee">Electrical & Electronics Engineering</option>
                                <option name="ce" value="ce">Civil Engineering</option>
                            </select>
                        </div>
                    </div><!-- /.form-group -->
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