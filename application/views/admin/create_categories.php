<?php $this->load->view('admin/header'); ?>
<div class="content-wrapper">
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Create Categories</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="<?php echo base_url() ?>admin/">Home</a></li>
                        <li class="breadcrumb-item"><a href="<?php echo base_url() ?>categories/display">Categories</a>
                        </li>
                        <li class="breadcrumb-item active">Create Categories</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>

    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <!-- left column -->
                <div class="col-md-12">
                    <!-- general form elements -->
                    <div class="card card-primary">
                        <div class="card-header">
                            <h3 class="card-title">Create Categories</h3>
                        </div>
                        <!-- /.card-header -->
                        <!-- form start -->
                        <form method="POST" action="<?php echo base_url();?>categories/create">

                            <div class="card-body">
                                <div class="form-group">
                                    <label>Categories</label>
                                    <input type="text" class="form-control" name="name" placeholder="Enter Categories">
                                </div>
                                <div class="form-group">
                                    <label>Type</label>
                                    <input type="text" class="form-control" name="type" placeholder="Type">
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="status" id="exampleRadios1"
                                        value="1" checked>
                                    <label class="form-check-label" for="exampleRadios1">
                                        Active
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="status" id="exampleRadios2"
                                        value="0">
                                    <label class="form-check-label" for="exampleRadios2">
                                        Block
                                    </label>
                                </div>

                            </div>
                            <!-- /.card-body -->
                            
                            <div class="card-footer">
                                <button type="submit" class="btn btn-primary" name="btnlogin" id="btnlogin"
                                    value="submit">Submit</button>
                                <a href="<?php echo base_url()?>categories/display" class="btn btn-primary">Back</a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>

</div>

<?php $this->load->view('admin/sidebar'); ?>