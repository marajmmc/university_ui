<?php
if (!defined('BASEPATH'))
    exit('No direct script access allowed');
?>
<div class="col-lg-12">
    <div class="box  pull-right">
        <a href="<?php echo base_url() . $this->uri->segment('1') . "/" . $this->uri->segment('2') . "/add_edit" ?>" class="btn btn-primary btn-rect" data-original-title="" title="">New</a>
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
                            <th class="sorting_asc" role="columnheader" tabindex="0" aria-controls="dataTable" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Rendering engine: activate to sort column descending" style="width: 120px;">Period ID</th>
                            <th class="sorting" role="columnheader" tabindex="0" aria-controls="dataTable" rowspan="1" colspan="1" aria-label="Browser: activate to sort column ascending" style="width: 341px;">Period</th>
                            <th class="sorting" role="columnheader" tabindex="0" aria-controls="dataTable" rowspan="1" colspan="1" aria-label="Browser: activate to sort column ascending" style="width: 341px;">Time</th>
                            <th class="sorting" role="columnheader" tabindex="0" aria-controls="dataTable" rowspan="1" colspan="1" aria-label="Engine version: activate to sort column ascending" style="width: 204px;">Status</th>
                        </tr>
                    </thead>
                    <tbody role="alert" aria-live="polite" aria-relevant="all">
                        <tr class="odd">
                            <td class=" sorting_1">001</td>
                            <td class=" ">Period 1</td>
                            <td class=" ">8:30 AM ~ 9.50 AM</td>
                            <td class=" ">Active</td>
                        </tr>
                        <tr class="odd">
                            <td class=" sorting_1">002</td>
                            <td class=" ">Period 2</td>
                            <td class=" ">10:00 AM ~ 11.20 AM</td>
                            <td class=" ">Active</td>
                        </tr>
                        <tr class="odd">
                            <td class=" sorting_1">003</td>
                            <td class=" ">Period 3</td>
                            <td class=" ">11:30 AM ~ 12.50 PM</td>
                            <td class=" ">Active</td>
                        </tr>
                        <tr class="odd">
                            <td class=" sorting_1">004</td>
                            <td class=" ">Period 4</td>
                            <td class=" ">2:00 PM ~ 3.20 PM</td>
                            <td class=" ">Active</td>
                        </tr>
                        <tr class="odd">
                            <td class=" sorting_1">005</td>
                            <td class=" ">Period 5</td>
                            <td class=" ">3:30 PM ~ 4.50 PM</td>
                            <td class=" ">Active</td>
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
