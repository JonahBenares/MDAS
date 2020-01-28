<div class="page-wrapper">
    <div class="container-fluid">
        <div class="row page-titles">
            <div class="col-md-7 align-self-center text-right">
                <div class="d-flex  align-items-center"> <!-- justify-content-end -->
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="<?php echo base_url(); ?>masterfile/index/">Dashboard</a></li>
                        <li class="breadcrumb-item"><a href="<?php echo base_url(); ?>masterfile/powerplant_list/">Power Plant</a></li>
                        <li class="breadcrumb-item active">Add</li>
                        <li class="breadcrumb-item">
                        </li>
                    </ol>
                </div>
            </div>
            <div class="col-md-5 align-self-center">
            </div>            
        </div>
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-lg-4 offset-lg-4">
                                <h4 class="card-title"><?php echo (empty($update)) ? "Add" : "Edit"; ?> Unit</h4>
                                <?php 
                                if(empty($update)){
                                    $url = base_url().'masterfile/insert_powersec';
                                } else {
                                    $url = base_url().'masterfile/update_powersec';
                                } ?>
                                <form method = "POST" action="<?php echo $url; ?>">
                                    <!-- loop -->
                                    <?php 
                                        for($x=0;$x<$unit_number;$x++){ 
                                    ?>
                                        <div class="card shadow bor-radius20 p-20">
                                            <div class="form-group">
                                                <input type="text" placeholder="Resource ID" class="form-control" name="resource_id<?php echo $x; ?>" value = "<?php echo (!empty($resource[$x]['resource_id'])) ? $resource[$x]['resource_id'] : ''; ?>">
                                            </div>
                                            <div class="form-group">
                                                <input type="date" placeholder="Date Commisioned/Commercial" class="form-control" name="com_date<?php echo $x; ?>" value = "<?php echo (!empty($resource[$x]['date_commissioned'])) ? $resource[$x]['date_commissioned'] : ''; ?>">
                                            </div>
                                            <input type="hidden" class="form-control" name="ppr_id<?php echo $x; ?>" value = "<?php echo (!empty($resource[$x]['ppr_id'])) ? $resource[$x]['ppr_id'] : ''; ?>">
                                        </div>
                                    <?php } ?>
                                    <!-- loop -->
                                    <input type="hidden" class="form-control" name="count" value = "<?php echo $x; ?>">
                                    <input type="hidden" class="form-control" name="powerplant_id" value = "<?php echo $powerplant_id; ?>">
                                    <div class="form-group">
                                        <input type="submit" name="submit" class="btn btn-info-alt btn-block" value = "Submit">
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>