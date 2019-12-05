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
            <form method="POST" action = "<?php echo base_url(); ?>masterfile/insert_company">
                <div class="modal-body">
                    <div class="form-group">
                        Type Name
                        <input type="text" name="" class="form-control">
                    </div>
                </div>
                <div class="modal-footer">                                        
                    <button type="submit" class="btn btn-info-alt btn-block">Add</button>
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
            <form method="POST" action = "<?php echo base_url(); ?>masterfile/insert_company">
                <div class="modal-body">
                    <div class="form-group">
                        Sub Type Name
                        <input type="text" name="" class="form-control">
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
            <form method="POST" action = "<?php echo base_url(); ?>masterfile/insert_company">
                <div class="modal-body">
                    <div class="form-group">
                        Type Name
                        <input type="text" name="" class="form-control">
                    </div>
                </div>
                <div class="modal-footer">                                        
                    <button type="submit" class="btn btn-warning-alt btn-block">Add</button>
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
            <form method="POST" action = "<?php echo base_url(); ?>masterfile/insert_company">
                <div class="modal-body">
                    <div class="form-group">
                        Sub Type Name
                        <input type="text" name="" class="form-control">
                    </div>
                </div>
                <div class="modal-footer">                                        
                    <button type="submit" class="btn btn-warning-alt btn-block">Add</button>
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
                                            <tr>
                                                <td>
                                                    <a class="btn btn-lg btn-link text-dark" href="">
                                                        Large split buasdasdasda asdasda 
                                                    </a>
                                                </td>
                                                <td width="10%" align="center">                                             
                                                    <span data-toggle="modal" data-target="#updatetype">
                                                        <a href="#" class="btn btn-warning-alt btn-xs bor-radius" title="Update Type" >
                                                            <span class="fa fa-pencil"></span>
                                                        </a>
                                                    </span>
                                                    <a href="#" class="btn btn-danger-alt btn-xs bor-radius" title="Delete Type" >
                                                        <span class="fa fa-trash"></span>
                                                    </a>
                                                </td>                                                                      
                                            </tr>
                                            <!-- loop delete the others-->                                            
                                        </tbody>
                                    </table>
                                </div> 
                            </div>
                            <div class="col-lg-6" >
                                <h4 class="card-title">Sub Type </h4>
                                <div style="border: 2px solid #aeaeae">
                                    <div id="subhide"> <!-- DIRI KA MA DISPLAY HIDE AND SHOW  -->
                                        <table class="table-bordered" width="100%">
                                            <tr>
                                                <td style="padding: 0.375rem 0.75rem!important;font-size: 0.875rem;">Sub Type
                                                    <span data-toggle="modal" data-target="#addSubType">
                                                        <a href="#" class="btn btn-info-alt btn-xs bor-radius pull-right" data-toggle="tooltip" data-placement="left" title="Add Sub Type" >
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
                                                    <tr>
                                                        <td>
                                                            <a class="btn btn-lg btn-link text-dark" href="">
                                                                Large split buasdasdasda asdasda 
                                                            </a>
                                                        </td>
                                                        <td width="10%" align="center">                                             
                                                            <span data-toggle="modal" data-target="#updatesub">
                                                                <a href="#" class="btn btn-warning-alt btn-xs bor-radius" title="Update Sub Type" >
                                                                    <span class="fa fa-pencil"></span>
                                                                </a>
                                                            </span>
                                                            <a href="#" class="btn btn-danger-alt btn-xs bor-radius" title="Delete Sub Type" >
                                                                <span class="fa fa-trash"></span>
                                                            </a>
                                                        </td>                                                                        
                                                    </tr>
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