<!-- modals -->
<div class="modal fade" id="addCompany" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Add Location</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form method="POST" action = "<?php echo base_url(); ?>masterfile/insert_location">
                <div class="modal-body">
                    <div class="form-group">
                        LVM
                        <input type="text" name="lvm" class="form-control">
                    </div>
                    <div class="form-group">
                        Code
                        <input type="text" name="location_code" class="form-control">
                    </div>
                    <div class="form-group">
                        Location Name
                        <input type="text" name="location_name" class="form-control">
                    </div>                   
                </div>
                <div class="modal-footer">                                        
                    <button type="submit" class="btn btn-primary btn-block">Add</button>
                </div>
            </form>
        </div>
    </div>
</div>


<div class="modal fade" id="updateCompany" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Update Location</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form method="POST" action = "<?php echo base_url(); ?>masterfile/update_location">
                <div class="modal-body">
                    <div class="form-group">
                        LVM
                        <input type="text" name="lvm" id = "lvm" class="form-control">
                    </div>
                    <div class="form-group">
                        Code
                        <input type="text" name="location_code" id = "location_code" class="form-control">
                    </div>
                    <div class="form-group">
                        Location Name
                        <input type="text" name="location_name" id = "location_name" class="form-control">
                    </div> 
                </div>
                <input type="hidden" name="location_id" id = "location_id" class="form-control">
                <div class="modal-footer">                                        
                    <button type="submit" class="btn btn-info btn-block">Update</button>
                </div>
            </form>
        </div>
    </div>
</div>




<div class="page-wrapper">
    <div class="container-fluid">
        <div class="row page-titles">
            <div class="col-md-7 align-self-center text-right">
                <div class="d-flex  align-items-center"> <!-- justify-content-end -->
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="<?php echo base_url(); ?>masterfile/index/">Dashboard</a></li>
                        <li class="breadcrumb-item active">Location</li>
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
                        <h4 class="card-title">Location
                            <span data-toggle="modal" data-target="#addCompany">
                                <a href="#" class="btn btn-info-alt btn-sm bor-radius pull-right" data-toggle="tooltip" data-placement="top" title="Add Location" >
                                    <span class="fa fa-plus" ></span>
                                </a>
                            </span>
                        </h4>  
                        <?php
                            $msg= $this->session->flashdata('msg');  
                            if($msg){
                        ?>
                        <div class="row">
                             <div class="col-lg-12">
                                <div class="success bor-radius10 shadow alert-success alert-shake animated headShake" style='padding:10px'>
                                    <center><?php echo $msg; ?></center>                    
                                </div>
                            </div>
                        </div>
                        <?php }  ?> 
                        <div class="table-responsive">                            
                            <table id="myTable" class="table table-hover table-bordered" >
                                <thead>
                                    <tr>
                                        <th>LVM</th>
                                        <th>Code</th>
                                        <th>Location Name</th>                                       
                                        <th width="7%" class="text-center"><span class="fa fa-bars"></span></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php foreach($location AS $l){ ?>
                                    <tr>
                                        <td><?php echo $l->lvm; ?></td>
                                        <td><?php echo $l->location_code; ?></td>
                                        <td><?php echo $l->location_name; ?></td>
                                        <td>                                            
                                            <div class="table-data-feature">
                                                <span data-toggle="modal" data-target="#updateCompany">
                                                    <a  class="btn btn-warning-alt item btn-xs" data-toggle="tooltip" data-id = "<?php echo $l->location_id; ?>" data-name = "<?php echo $l->lvm; ?>" data-aa = "<?php echo $l->location_code; ?>" data-ab = "<?php echo $l->location_name; ?>" id = "updateLoc_button" data-placement="top" title="Update" >
                                                        <i class="fa fa-pencil-square-o"></i>
                                                    </a>
                                                </span>
                                                
                                                <a href="<?php echo base_url(); ?>masterfile/delete_location/<?php echo $l->location_id; ?>" onclick="confirmationDelete(this);return false;" class="btn btn-danger-alt item btn-xs" data-toggle="tooltip" data-placement="top" title="Delete" title="Delete" alt='Delete'>
                                                    <i class="fa fa-trash"></i>
                                                </a>
                                            </div>
                                        </td>                                        
                                    </tr>
                                    <?php } ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>