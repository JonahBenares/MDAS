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
                                <form>
                                    <div class="form-group">
                                        <input type="text" placeholder="Facility Name" class="form-control" name="priority_no">
                                    </div>
                                    <div class="form-group">
                                        <select class="form-control" name='monitor'>
                                            <option value="">-Type-</option>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <select class="form-control" name='monitor'>
                                            <option value="">-Sub Type-</option>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <input type="text" placeholder="Operator" class="form-control" name="priority_no">
                                    </div>
                                    <div class="form-group">
                                        <input type="text" placeholder="Participant ID" class="form-control" name="priority_no">
                                    </div>
                                    <div class="form-group">
                                        <input type="text" placeholder="Region" class="form-control" name="priority_no">
                                    </div>
                                    <div class="form-group">
                                        <input type="text" placeholder="Region ID" class="form-control" name="priority_no">
                                    </div>
                                    <div class="form-group">
                                        <input type="text" placeholder="Municipality/Province" class="form-control" name="priority_no">
                                    </div>
                                    <div class="form-group">
                                        <select class="form-control" name='monitor'>
                                            <option value="">-Location-</option>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <input type="text" placeholder="Capacity Installed (MW)" class="form-control" name="priority_no">
                                    </div>
                                    <div class="form-group">
                                        <input type="text" placeholder="Capacity Dependable (MW)" class="form-control" name="priority_no">
                                    </div>
                                    <div class="form-group">
                                        <input type="number" placeholder="Number of Units" class="form-control" name="priority_no">
                                    </div>
                                    <div class="form-group">
                                        <input type="number" placeholder="IPPA" class="form-control" name="priority_no">
                                    </div>
                                    <div class="form-group">
                                        <input type="number" placeholder="Fit Approved" class="form-control" name="priority_no">
                                    </div>
                                    <div class="form-group">
                                        <input type="number" placeholder="Owner Type" class="form-control" name="priority_no">
                                    </div>
                                    <div class="form-group">
                                        <input type="number" placeholder="Type of Contract" class="form-control" name="priority_no">
                                    </div>
                                    <div class="form-group">
                                        <select class="form-control" name='monitor'>
                                            <option value="">-Status-</option>
                                            <option value="">Active</option>
                                            <option value="">Inactive</option>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <a href="<?php echo base_url(); ?>masterfile/add_powerplant_second" class="btn btn-info-alt btn-block">Next</a>
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