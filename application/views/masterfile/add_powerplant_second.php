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
                                <h4 class="card-title">Add Unit</h4>
                                <form>
                                    <!-- loop -->
                                    <div class="card shadow bor-radius20 p-20">
                                        <div class="form-group">
                                            <input type="text" placeholder="Resource ID" class="form-control" name="priority_no">
                                        </div>
                                        <input type="text" placeholder="Date Commisioned/Commercial" class="form-control" name="priority_no">
                                    </div>
                                    <!-- loop -->
                                    <div class="form-group">
                                        <a href="<?php echo base_url(); ?>masterfile/add_powerplant_second" class="btn btn-info-alt btn-block">Submit</a>
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