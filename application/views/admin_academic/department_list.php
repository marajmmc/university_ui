<?php
if (!defined('BASEPATH'))
    exit('No direct script access allowed');
?>
<div class="col-lg-12">
    <div class="box  pull-right">
        <a href="<?php echo base_url() .$this->uri->segment('1')."/".$this->uri->segment('2'). "/add_edit" ?>" class="btn btn-primary btn-rect" data-original-title="" title="">New</a>
        <a href="<?php echo base_url() .$this->uri->segment('1')."/".$this->uri->segment('2'). "/list" ?>" class="btn btn-primary btn-rect" data-original-title="" title="" onclick="">Reload</a>
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
                            <th class="sorting_asc" role="columnheader" tabindex="0" aria-controls="dataTable" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Rendering engine: activate to sort column descending" style="width: 80px;">Department Code</th>
                            <th class="sorting" role="columnheader" tabindex="0" aria-controls="dataTable" rowspan="1" colspan="1" aria-label="Browser: activate to sort column ascending" style="width: 341px;">Department Name</th>
                            <th class="sorting" role="columnheader" tabindex="0" aria-controls="dataTable" rowspan="1" colspan="1" aria-label="Engine version: activate to sort column ascending" style="width: 204px;">Status</th>
                        </tr>
                    </thead>
                    <tbody role="alert" aria-live="polite" aria-relevant="all">
                        <tr class="odd">
                            <td class=" sorting_1">SCI-001</td>
                            <td class=" ">Computer Science & Engineering</td>
                            <td class=" ">Active</td>
                        </tr>
                        <tr class="odd">
                            <td class=" sorting_1">SCI-002</td>
                            <td class=" ">Electrical & Electronics Engineering</td>
                            <td class=" ">Active</td>
                        </tr>
                        <tr class="odd">
                            <td class=" sorting_1">SCI-003</td>
                            <td class=" ">Civil Engineering</td>
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
