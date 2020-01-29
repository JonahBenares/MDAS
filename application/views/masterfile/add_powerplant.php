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
                                <h4 class="card-title"><?php echo (empty($powerplant_id)) ? "Add" : "Edit"; ?> Power Plant </h4>
                                <?php 
                                if(empty($powerplant_id)){
                                    $url = base_url().'masterfile/insert_powerplant';
                                } else {
                                    $url = base_url().'masterfile/update_powerplant';
                                } ?>
                                <form method = "POST" action="<?php echo $url; ?>">
                                    <div class="form-group">
                                        <input type="text" placeholder="Facility Name" class="form-control" name="facility" value = "<?php echo (!empty($powerplant_id)) ? $facility_name : ''; ?>">
                                    </div>
                                    <div class="form-group">
                                        <input type="text" placeholder="Short Name" class="form-control" name="shortname" value = "<?php echo (!empty($powerplant_id)) ? $short_name : ''; ?>">
                                    </div>
                                    <div class="form-group">
                                        <select class="form-control" name='type' id="type" onChange="chooseType();">
                                            <option value="">--Select Type--</option>
                                            <?php foreach($type AS $t){ ?>
                                            <option value="<?php echo $t->type_id; ?>" <?php echo (!empty($powerplant_id) ? (($type_id == $t->type_id) ? ' selected' : '') : ''); ?>><?php echo $t->type_name; ?></option>
                                            <?php } ?>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <select class="form-control" name='subtype' id="subtype">
                                            <?php 
                                                if(!empty($powerplant_id)){ 
                                                    foreach($subtype AS $s){
                                            ?>
                                            <option value="<?php echo $s->subtype_id; ?>" <?php echo (!empty($powerplant_id) ? (($subtype_id == $s->subtype_id) ? ' selected' : '') : ''); ?>><?php echo $s->subtype_name; ?></option>
                                            <?php } } ?>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <input type="text" placeholder="Operator" class="form-control" name="operator" value = "<?php echo (!empty($powerplant_id)) ? $operator : ''; ?>">
                                    </div>
                                    <div class="form-group">
                                        <input type="text" placeholder="Participant ID" class="form-control" name="participant" value = "<?php echo (!empty($powerplant_id)) ? $participant_id : ''; ?>">
                                    </div>
                                    <div class="form-group">
                                        <input type="text" placeholder="Region" class="form-control" name="region" value = "<?php echo (!empty($powerplant_id)) ? $region : ''; ?>">
                                    </div>
                                    <div class="form-group">
                                        <input type="text" placeholder="Region ID" class="form-control" name="region_id" value = "<?php echo (!empty($powerplant_id)) ? $region_id : ''; ?>">
                                    </div>
                                    <div class="form-group">
                                        <input type="text" placeholder="Municipality/Province" class="form-control" name="mprovince" value = "<?php echo (!empty($powerplant_id)) ? $municipality_city : ''; ?>">
                                    </div>
                                    <div class="form-group">
                                        <select class="form-control" name='location'>
                                            <option value="">--Select Location--</option>
                                            <?php foreach($location AS $l){ ?>
                                            <option value="<?php echo $l->location_code;?>" <?php echo (!empty($powerplant_id) ? (($location_id == $l->location_id) ? ' selected' : '') : ''); ?>><?php echo $l->location_name;?></option>
                                            <?php } ?>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <input type="text" placeholder="Capacity Installed (MW)" class="form-control" name="cap_installed" onkeypress="return isNumberKey(this, event)" value = "<?php echo (!empty($powerplant_id)) ? $capacity_installed : ''; ?>">
                                    </div>
                                    <div class="form-group">
                                        <input type="text" placeholder="Capacity Dependable (MW)" class="form-control" name="cap_dependable" onkeypress="return isNumberKey(this, event)" value = "<?php echo (!empty($powerplant_id)) ? $capacity_dependable : ''; ?>">
                                    </div>
                                    <div class="form-group">
                                        <input type="number" placeholder="Number of Units" class="form-control" name="num_units" value = "<?php echo (!empty($powerplant_id)) ? $no_of_units : ''; ?>">
                                    </div>
                                    <div class="form-group">
                                        <input type="text" placeholder="IPPA" class="form-control" name="ippa" value = "<?php echo (!empty($powerplant_id)) ? $ippa : ''; ?>">
                                    </div>
                                    <div class="form-group">
                                        <input type="text" placeholder="Fit Approved" class="form-control" name="fit_approved" value = "<?php echo (!empty($powerplant_id)) ? $fit_approved : ''; ?>">
                                    </div>
                                    <div class="form-group">
                                        <input type="text" placeholder="Owner Type" class="form-control" name="owner_type" value = "<?php echo (!empty($powerplant_id)) ? $owner_type : ''; ?>">
                                    </div>
                                    <div class="form-group">
                                        <input type="text" placeholder="Type of Contract" class="form-control" name="toc" value = "<?php echo (!empty($powerplant_id)) ? $type_of_contract : ''; ?>">
                                    </div>
                                    <div class="form-group">
                                        <select class="form-control" name='status'>
                                            <option value="">-Status-</option>
                                            <option value="Active" <?php echo (!empty($powerplant_id) ? (($status=='Active') ? ' selected' : '') : ''); ?>>Active</option>
                                            <option value="Inactive" <?php echo (!empty($powerplant_id) ? (($status=='Inactive') ? ' selected' : '') : ''); ?>>Inactive</option>
                                        </select>
                                    </div>
                                    <input type="hidden" class="form-control" name="baseurl" id = "baseurl" value = "<?php echo base_url(); ?>">
                                    <input type="hidden" class="form-control" name="powerplant_id" id = "powerplant_id" value = "<?php echo $powerplant_id; ?>">
                                    <div class="form-group">
                                        <!-- <a href="<?php echo base_url(); ?>masterfile/add_powerplant_second" class="btn btn-info-alt btn-block">Next</a> -->
                                        <input type="submit" name="submit" class="btn btn-info-alt btn-block" value = "Next">
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