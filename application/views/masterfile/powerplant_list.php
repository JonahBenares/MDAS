<div class="page-wrapper">
    <div class="container-fluid">
        <div class="row page-titles">
            <div class="col-md-7 align-self-center text-right">
                <div class="d-flex  align-items-center"> <!-- justify-content-end -->
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="<?php echo base_url(); ?>masterfile/dashboard/">Dashboard</a></li>
                        <li class="breadcrumb-item active">Power Plant</li>
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
                        <h4 class="card-title">Power Plant
                            <a href="<?php echo base_url(); ?>masterfile/add_powerplant" class="btn btn-info-alt btn-sm bor-radius pull-right" data-toggle="tooltip" data-placement="top" title="Add Company" >
                                <span class="fa fa-plus" ></span>
                            </a>
                        </h4>                                                
                        <table id="myTable" class="table table-hover table-bordered" >
                            <thead>
                                <tr>
                                    <th>Facility Name</th>
                                    <th>Type</th>
                                    <th>Subtype</th>
                                    <th>Operator</th>
                                    <th>Region</th>
                                    <th>Municipality</th>
                                    <th>No. of Units</th>
                                    <th width="10%" class="text-center"><span class="fa fa-bars"></span></th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td align="center">                                             
                                        <span data-toggle="modal" data-target="#updatetype">
                                            <a href="#" class="btn btn-warning-alt btn-xs bor-radius" title="Update Type" >
                                                <span class="fa fa-pencil"></span>
                                            </a>
                                        </span>
                                        <a href="<?php echo base_url(); ?>masterfile/view_powerplant/" class="btn btn-primary-alt btn-xs bor-radius" title="Delete Type" >
                                            <span class="fa fa-eye"></span>
                                        </a>
                                        <a href="#" class="btn btn-danger-alt btn-xs bor-radius" title="Delete Type" >
                                            <span class="fa fa-trash"></span>
                                        </a>
                                        
                                    </td>                                       
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>