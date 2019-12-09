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
                                <h4 class="card-title">Add Power Plant </h4>
                                <form method = "POST" action="<?php echo base_url(); ?>masterfile/insert_powerplant">
                                    <div class="form-group">
                                        <input type="text" placeholder="Facility Name" class="form-control" name="facility">
                                    </div>
                                    <div class="form-group">
                                        <select class="form-control" name='type' id="type" onChange="chooseType();">
                                            <option value="">--Select Type--</option>
                                            <?php foreach($type AS $t){ ?>
                                            <option value="<?php echo $t->type_id; ?>"><?php echo $t->type_name; ?></option>
                                            <?php } ?>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <select class="form-control" name='subtype' id="subtype"></select>
                                    </div>
                                    <div class="form-group">
                                        <input type="text" placeholder="Operator" class="form-control" name="operator">
                                    </div>
                                    <div class="form-group">
                                        <input type="text" placeholder="Participant ID" class="form-control" name="participant">
                                    </div>
                                    <div class="form-group">
                                        <input type="text" placeholder="Region" class="form-control" name="region">
                                    </div>
                                    <div class="form-group">
                                        <input type="text" placeholder="Region ID" class="form-control" name="region_id">
                                    </div>
                                    <div class="form-group">
                                        <input type="text" placeholder="Municipality/Province" class="form-control" name="mprovince">
                                    </div>
                                    <div class="form-group">
                                        <select class="form-control" name='location'>
                                            <option value="">--Select Location--</option>
                                            <?php foreach($location AS $l){ ?>
                                            <option value="<?php echo $l->location_code;?>"><?php echo $l->location_name;?></option>
                                            <?php } ?>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <input type="text" placeholder="Capacity Installed (MW)" class="form-control" name="cap_installed" onkeypress="return isNumberKey(this, event)">
                                    </div>
                                    <div class="form-group">
                                        <input type="text" placeholder="Capacity Dependable (MW)" class="form-control" name="cap_dependable" onkeypress="return isNumberKey(this, event)">
                                    </div>
                                    <div class="form-group">
                                        <input type="number" placeholder="Number of Units" class="form-control" name="num_units">
                                    </div>
                                    <div class="form-group">
                                        <input type="text" placeholder="IPPA" class="form-control" name="ippa">
                                    </div>
                                    <div class="form-group">
                                        <input type="text" placeholder="Fit Approved" class="form-control" name="fit_approved">
                                    </div>
                                    <div class="form-group">
                                        <input type="text" placeholder="Owner Type" class="form-control" name="owner_type">
                                    </div>
                                    <div class="form-group">
                                        <input type="text" placeholder="Type of Contract" class="form-control" name="toc">
                                    </div>
                                    <div class="form-group">
                                        <select class="form-control" name='status'>
                                            <option value="">-Status-</option>
                                            <option value="0">Active</option>
                                            <option value="1">Inactive</option>
                                        </select>
                                    </div>
                                    <input type="hidden" class="form-control" name="baseurl" id = "baseurl" value = "<?php echo base_url(); ?>">
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