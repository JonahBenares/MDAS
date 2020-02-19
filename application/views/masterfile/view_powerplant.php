<div class="page-wrapper">
    <div class="container-fluid">
        <div class="row page-titles">
            <div class="col-md-7 align-self-center text-right">
                <div class="d-flex  align-items-center"> <!-- justify-content-end -->
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="<?php echo base_url(); ?>masterfile/index/">Dashboard</a></li>
                        <li class="breadcrumb-item"><a href="<?php echo base_url(); ?>masterfile/powerplant_list/">Power Plant</a></li>
                        <li class="breadcrumb-item active">View</li>
                        <li class="breadcrumb-item">
                        </li>
                    </ol>
                </div>
            </div>
            <div class="col-md-5 align-self-center">
            </div>            
        </div>
        <div class="row">
            <div class="col-lg-8 offset-lg-2">
                <div class="card">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-lg-6"> 
                                <a href="<?php echo base_url(); ?>masterfile/add_powerplant/<?php echo $powerplant_id; ?>" class="btn btn-warning-alt btn-xs bor-radius" title="Update Powerplant" style='float: right'><span class="fa fa-pencil"></span></a>
                                <?php foreach($powerplant AS $p){ ?>
                                    <h5><small>Facility Name</small><br><?php echo $p['facility_name']; ?></h5>
                                    <h5><small>Short Name</small><br><?php echo $p['short_name']; ?></h5>
                                    <h5><small>Type </small><br><?php echo $p['type']; ?></h5>
                                    <h5><small>Sub Type </small><br><?php echo $p['subtype']; ?></h5>
                                    <h5><small>Operator </small><br><?php echo $p['operator']; ?></h5>
                                    <h5><small>Participant ID </small><br><?php echo $p['participant_id']; ?></h5>
                                    <h5><small>Region </small><br><?php echo $p['region']; ?></h5>
                                    <h5><small>Region ID </small><br><?php echo $p['region_id']; ?></h5>
                                    <h5><small>Municipality/Province </small><br><?php echo $p['municipality_city']; ?></h5>
                                    <h5><small>Location </small><br><?php echo $p['location']; ?></h5>
                                    <h5><small>Capacity Installed (MW) </small><br><?php echo $p['capacity_installed']; ?></h5>
                                    <h5><small>Capacity Dependable (MW) </small><br><?php echo $p['capacity_dependable']; ?></h5>
                                    <h5><small>Number of Units </small><br><?php echo $p['no_of_units']; ?></h5>
                                    <h5><small>IPPA </small><br><?php echo $p['ippa']; ?></h5>
                                    <h5><small>Fit Approved </small><br><?php echo $p['fit_approved']; ?></h5>
                                    <h5><small>Owner Type </small><br><?php echo $p['owner_type']; ?></h5>
                                    <h5><small>Type of Contract </small><br><?php echo $p['type_of_contract']; ?></h5>
                                    <h5><small>Status </small><br><?php echo ($p['status']==0) ? 'Active' : 'Inactive'; ?></h5>
                                <?php } ?>

                            </div>
                            <div class="col-lg-6">
                                <div style="overflow-y: scroll;height: 750px;padding: 20px;background: #efefef">
                                    <?php foreach($resource AS $r){ ?>
                                        <div class="card shadow bor-radius20 p-20">
                                            <h5><small>Resource ID</small><br><?php echo $r['resource_id'];?></h5>
                                            <h5><small>Date Commisioned/Commercial</small><br><?php echo $r['date_commissioned'];?></h5>
                                            <span style="height:15px; background-color: <?php echo (!empty($r['hex']) ? $r['hex'] : '#000000') ;?>"></span>
                                        </div>
                                    <?php } ?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>