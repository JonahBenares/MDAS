<!-- modals -->
<div class="modal fade" id="addType" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Add Type</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form method="POST" action = "<?php echo base_url(); ?>masterfile/insert_type">
                <div class="modal-body">
                    <div class="form-group">
                        Type Name
                        <input type="text" name="type" class="form-control">
                    </div>
                    <div class="form-group">
                        Legend Color(HEX)
                        <input type="text" placeholder="Sample: #00000" name="color" class="form-control">
                    </div>
                </div>
                <div class="modal-footer">                                        
                    <button type="submit" class="btn btn-info-alt btn-block">Add</button>
                </div>
            </form>
        </div>
    </div>
</div>

<div class="modal fade" id="updatetype" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Update Type</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form method="POST" action = "<?php echo base_url(); ?>masterfile/update_type">
                <div class="modal-body">
                    <div class="form-group">
                        Type Name
                        <input type="text" id = "type" name="type" class="form-control">
                        Legend Color(HEX)
                        <input type="text" id = "color" name="color" class="form-control">
                    </div>
                </div>
                <input type="hidden" name="type_id" id = "type_id" class="form-control">
                <div class="modal-footer">                                        
                    <button type="submit" class="btn btn-warning-alt btn-block">Update</button>
                </div>
            </form>
        </div>
    </div>
</div>

<div class="modal fade" id="addSubType" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Add Sub Type</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form method="POST" action = "<?php echo base_url(); ?>masterfile/insert_subtype">
                <div class="modal-body">
                    <div class="form-group">
                        Sub Type Name
                        <input type="text" name="subtype" class="form-control">
                    </div>
                </div>
                <input type="hidden" name="type_id" value="<?php echo $type_id; ?>" class="form-control">
                <div class="modal-footer">                                        
                    <button type="submit" class="btn btn-info-alt btn-block">Add</button>
                </div>
            </form>
        </div>
    </div>
</div>

<div class="modal fade" id="updatesub" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Update Sub Type</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form method="POST" action = "<?php echo base_url(); ?>masterfile/update_subtype">
                <div class="modal-body">
                    <div class="form-group">
                        Sub Type Name
                        <input type="text" name="subtype" id="subtype" class="form-control">
                    </div>
                </div>
                <input type="hidden" name="subtype_id" id="subtype_id"  class="form-control">
                <input type="hidden" name="type_id" value="<?php echo $type_id; ?>" class="form-control">
                <div class="modal-footer">                                        
                    <button type="submit" class="btn btn-warning-alt btn-block">Update</button>
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
                        <li class="breadcrumb-item"><a href="<?php echo base_url(); ?>masterfile/dashboard/">Dashboard</a></li>
                        <li class="breadcrumb-item active">Power Plant Type</li>
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
                            <div class="col-lg-6">
                                <h4 class="card-title">Power Plant Type </h4>
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
                                <table class="table-bordered" width="100%">
                                    <tr>
                                        <td style="padding: 0.375rem 0.75rem!important;font-size: 0.875rem;">Type
                                            <span data-toggle="modal" data-target="#addType">
                                                <a href="#" class="btn btn-info-alt btn-xs bor-radius pull-right" data-toggle="tooltip" data-placement="top" title="Add Type" >
                                                    <span class="fa fa-plus" ></span>
                                                </a>
                                            </span>
                                        </td>
                                    </tr>
                                </table> 
                                <div style="overflow-y: scroll;height:400px;">                      
                                    <table class="table table-hover table-bordered " width="100%" >
                                        <tbody>
                                            <!-- loop -->
                                            <?php foreach($type AS $t){ ?> 
                                            <tr class="plant-hover">
                                                <td>
                                                    <a class="btn btn-lg btn-link text-dark btn-block" href="<?php echo base_url(); ?>masterfile/plant_type_list/<?php echo $t->type_id; ?>" style="text-align: left;background: <?php echo $t->legend_color; ?>">
                                                        <b><?php echo $t->type_name; ?></b>
                                                    </a>
                                                </td>
                                                <td width="10%" align="center">                                             
                                                    <span data-toggle="modal" data-target="#updatetype">
                                                        <a data-id = "<?php echo $t->type_id; ?>" data-name = "<?php echo $t->type_name; ?>" data-aa = "<?php echo $t->legend_color; ?>" class="btn btn-warning-alt btn-xs bor-radius" title="Update Type" id = "updateType_button">
                                                            <span class="fa fa-pencil"></span>
                                                        </a>
                                                    </span>
                                                    <a href="<?php echo base_url(); ?>masterfile/delete_type/<?php echo $t->type_id; ?>" class="btn btn-danger-alt btn-xs bor-radius" title="Delete Type" onclick="confirmationDelete(this);return false;">
                                                        <span class="fa fa-trash"></span>
                                                    </a>
                                                </td>                                                                      
                                            </tr>
                                            <?php } ?>
                                            <!-- loop delete the others-->                                            
                                        </tbody>
                                    </table>
                                </div> 
                            </div>
                            <div class="col-lg-6" >
                                <h4 class="card-title">Sub Type </h4>
                                <?php
                                    $msgsub= $this->session->flashdata('msgsub');  
                                    if($msgsub){
                                ?>
                                <div class="row">
                                     <div class="col-lg-12">
                                        <div class="success bor-radius10 shadow alert-success alert-shake animated headShake" style='padding:10px'>
                                            <center><?php echo $msgsub; ?></center>                    
                                        </div>
                                    </div>
                                </div>
                                <?php } ?>
                                <div style="border: 2px solid #aeaeae">
                                    <div id="subhide"> <!-- DIRI KA MA DISPLAY HIDE AND SHOW  -->
                                        <table class="table-bordered" width="100%">
                                            <tr>
                                                <td style="padding: 0.375rem 0.75rem!important;font-size: 0.875rem;">Sub Type
                                                    <span data-toggle="modal" data-target="#addSubType">
                                                        <a class="btn btn-info-alt btn-xs bor-radius pull-right" data-toggle="tooltip" data-placement="left" title="Add Sub Type" style = "<?php echo (!isset($type_id)) ? "pointer-events: none;" : '';?>">
                                                            <span class="fa fa-plus" ></span>
                                                        </a>
                                                    </span>
                                                </td>
                                            </tr>
                                        </table> 
                                        <div style="overflow-y: scroll;height:400px;">                      
                                            <table class="table table-hover table-bordered " width="100%" >
                                                <tbody>
                                                    <!-- loop -->
                                                    <?php 
                                                        if(!empty($subtype)){  
                                                            foreach($subtype AS $s){ 
                                                    ?>
                                                    <tr>
                                                        <td>
                                                            <a class="btn btn-lg btn-link text-dark" href="">
                                                                <?php echo $s->subtype_name; ?>
                                                            </a>
                                                        </td>
                                                        <td width="10%" align="center">                                             
                                                            <span data-toggle="modal" data-target="#updatesub">
                                                                <a data-id = "<?php echo $s->subtype_id; ?>" data-name = "<?php echo $s->subtype_name; ?>" class="btn btn-warning-alt btn-xs bor-radius" title="Update Sub Type" id = "updateSubtype_button">
                                                                    <span class="fa fa-pencil"></span>
                                                                </a>
                                                            </span>
                                                            <a href="<?php echo base_url(); ?>masterfile/delete_subtype/<?php echo $s->subtype_id; ?>/<?php echo $s->type_id; ?>" class="btn btn-danger-alt btn-xs bor-radius" title="Delete Sub Type" onclick="confirmationDelete(this);return false;">
                                                                <span class="fa fa-trash"></span>
                                                            </a>
                                                        </td>                                                                        
                                                    </tr>
                                                    <?php } } ?>
                                                    <!-- loop delete the others-->
                                                </tbody>
                                            </table>
                                        </div> 
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>