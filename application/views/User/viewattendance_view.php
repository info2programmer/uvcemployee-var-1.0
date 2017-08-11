<div class="container-fluid">
    <div class="block-header">
        <h2>View Attendance</h2>
    </div>
    <!-- Exportable Table -->
    <div class="row clearfix">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <div class="card">
                <div class="header">
                    <h2>Attendance LIST</h2>
                </div>
                <div class="body">
                <?php if(isset($result)>0) 
                {
                ?>
                    <table class="table table-bordered table-striped table-hover dataTable js-exportable">
                        <thead>
                            <tr>
                                <th>Employee ID</th>
                                <th>Date</th>
                                <th>In Time</th>
                                <th>Out Time</th>
                            </tr>
                        </thead>
                        <tfoot>
                           <tr>
                                <th>Employee ID</th>
                                <th>Date</th>
                                <th>In Time</th>
                                <th>Out Time</th>
                            </tr>
                        </tfoot>
                      <tbody>
                            <?php
                                foreach ($result as $object) {
                                    echo "<tr>
                                        <td>".$object->emp_id."</td>
                                        <td>".$object->date."</td>
                                        <td>".$object->starttime."</td>
                                        <td>".$object->endtime."</td>
                                    </tr>";
                                }
                            ?>
                      </tbody>
                    </table>
                    <?php
                        }
                        else{
                            echo "<h3 align='center'>No Data Found</h3>";
                        }
                    ?>
                </div>
            </div>
        </div>
    </div>
    <!-- #END# Exportable Table --> 
</div>
    <!-- Jquery Core Js --> 
<script src="<?php echo base_url(); ?>assets/bundles/libscripts.bundle.js"></script> <!-- Lib Scripts Plugin Js --> 
<script src="<?php echo base_url(); ?>assets/bundles/vendorscripts.bundle.js"></script> <!-- Lib Scripts Plugin Js --> 

<!-- Jquery DataTable Plugin Js --> 
<script src="<?php echo base_url(); ?>assets/plugins/jquery-datatable/jquery.dataTables.js"></script> 
<script src="<?php echo base_url(); ?>assets/plugins/jquery-datatable/skin/bootstrap/js/dataTables.bootstrap.js"></script> 
<script src="<?php echo base_url(); ?>assets/plugins/jquery-datatable/extensions/export/dataTables.buttons.min.js"></script> 
<script src="<?php echo base_url(); ?>assets/plugins/jquery-datatable/extensions/export/buttons.flash.min.js"></script> 
<script src="<?php echo base_url(); ?>assets/plugins/jquery-datatable/extensions/export/jszip.min.js"></script> 
<script src="<?php echo base_url(); ?>assets/plugins/jquery-datatable/extensions/export/pdfmake.min.js"></script> 
<script src="<?php echo base_url(); ?>assets/plugins/jquery-datatable/extensions/export/vfs_fonts.js"></script> 
<script src="<?php echo base_url(); ?>assets/plugins/jquery-datatable/extensions/export/buttons.php5.min.js"></script> 
<script src="<?php echo base_url(); ?>assets/plugins/jquery-datatable/extensions/export/buttons.print.min.js"></script> 

<script src="<?php echo base_url(); ?>assets/bundles/mainscripts.bundle.js"></script><!-- Custom Js --> 
<script src="<?php echo base_url(); ?>assets/js/pages/tables/jquery-datatable.js"></script> 

<script src="<?php echo base_url(); ?>assets/js/pages/index.js"></script>