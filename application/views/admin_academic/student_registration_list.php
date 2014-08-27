<?php
if (!defined('BASEPATH'))
    exit('No direct script access allowed');
?>
<div class="col-lg-12">
    <div class="box  pull-right">
        <!--<a href="<?php // echo base_url() . $this->uri->segment('1') . "/" . $this->uri->segment('2') . "/add_edit" ?>" class="btn btn-primary btn-rect" data-original-title="" title="">New</a>-->
        <a href="<?php echo base_url() . $this->uri->segment('1') . "/" . $this->uri->segment('2') . "/list" ?>" class="btn btn-primary btn-rect" data-original-title="" title="" onclick="">Reload</a>
    </div>
</div>
<div class="row">
    <div class="col-lg-12">
        <div class="box">
            <header>
                <div class="icons">
                    <i class="fa fa-table"></i>
                </div>
                <h5><?php print $featuretitle; ?></h5>
            </header>
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
        </div>
    </div>
</div>

<script src="<?php echo base_url() ?>assets/lib/datatables/jquery.dataTables.js"></script>
<script src="<?php echo base_url() ?>assets/lib/datatables/DT_bootstrap.js"></script>
<script src="<?php echo base_url() ?>assets/lib/tablesorter/js/jquery.tablesorter.min.js"></script>
<script src="<?php echo base_url() ?>assets/lib/touch-punch/jquery.ui.touch-punch.min.js"></script>
<script>
    $(function() {
        metisTable();
        metisSortable();
    });
</script>
