<?php $this->load->view('admin/header'); ?>
<div class="content-wrapper">
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Create Article</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="<?php echo base_url() ?>admin/">Home</a></li>
                        <li class="breadcrumb-item"><a href="<?php echo base_url() ?>categories/display">Article</a>
                        </li>
                        <li class="breadcrumb-item active">Create Article</li>
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
                            <h3 class="card-title">Create Article</h3>
                        </div>
                        <!-- /.card-header -->
                        <!-- form start -->
                        <form method="POST" action="<?php echo base_url() ?>article/insert" enctype="multipart/form-data">
                            <div class="card-body">
                                <div class="form-group">
                                    <label>Categories</label>
                                    <select class="form-control select2" name="dropdown" style="width: 100%;">
                                        <option selected="selected">Select Category</option>
                                        <?php foreach($data as $each){ ?>
                                        <option value="<?php echo $each->name; ?>">
                                            <?php echo $each->name; ?></option>';
                                        <?php } ?>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="exampleFormControlFile1">Description</label>
                                    <textarea class="form-control mb-3" rows="3" name="description"
                                        placeholder="Description Here ..."></textarea>
                                </div>
                                <div class="form-group">
                                    <label for="exampleFormControlFile1">Image Upload</label>
                                    <input type="file" class="form-control-file" name="image"
                                        id="exampleFormControlFile1">
                                </div>
                                <div class="form-group">
                                    <label>Type</label>
                                    <input type="text" class="form-control" name="type" placeholder="Type">
                                </div>
                                <div class="form-group">
                                    <label>category ID</label>
                                    <input type="text" class="form-control" name="catagoryId" placeholder="Type">
                                </div>
                            </div>
                            <!-- /.card-body -->
                            <div class="card-footer">
                                <button type="submit" class="btn btn-primary" name="btnlogin" id="btnlogin"
                                    value="submit">Insert</button>
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