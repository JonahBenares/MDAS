<div class="page-wrapper">
    <div class="container-fluid">
        <div class="row page-titles">
            <div class="col-md-7 align-self-center text-right">
                <div class="d-flex  align-items-center"> <!-- justify-content-end -->
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="<?php echo base_url(); ?>masterfile/dashboard/">Dashboard</a></li>
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
                                        if(empty($update)){ 
                                            for($x=1;$x<=$unit_number;$x++){ 
                                    ?>
                                        <div class="card shadow bor-radius20 p-20">
                                            <div class="form-group">
                                                <input type="text" placeholder="Resource ID" class="form-control" name="resource_id<?php echo $x; ?>">
                                            </div>
                                            <input type="date" placeholder="Date Commisioned/Commercial" class="form-control" name="com_date<?php echo $x; ?>">
                                        </div>
                                    <?php } $count = $x-1; }else { 
                                        $x=1;
                                        foreach($resource AS $r){
                                    ?>
                                        <div class="card shadow bor-radius20 p-20">
                                            <div class="form-group">
                                                <input type="text" placeholder="Resource ID" class="form-control" name="resource_id<?php echo $x; ?>" value = "<?php echo (isset($update)) ? $r['resource_id'] : ''; ?>">
                                            </div>
                                            <input type="date" placeholder="Date Commisioned/Commercial" class="form-control" name="com_date<?php echo $x; ?>" value = "<?php echo (isset($update)) ? $r['date_commissioned'] : ''; ?>">
                                        </div>
                                        <input type="hidden" class="form-control" name="ppr_id<?php echo $x; ?>" value = "<?php echo $r['ppr_id']; ?>">
                                    <?php $x++; } $count = $x-1; } ?>
                                    <!-- loop -->
                                    <input type="hidden" class="form-control" name="count" value = "<?php echo $count; ?>">
                                    <input type="hidden" class="form-control" name="powerplant_id" value = "<?php echo $powerplant_id; ?>">
                                    <div class="form-group">
                                        <!-- <a href="<?php echo base_url(); ?>masterfile/add_powerplant_second" class="btn btn-info-alt btn-block">Submit</a> -->
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