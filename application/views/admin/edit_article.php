<?php $this->load->view('admin/header'); ?>
<div class="content-wrapper">
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">update Article</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="<?php echo base_url() ?>admin/">Home</a></li>
                        <li class="breadcrumb-item"><a href="<?php echo base_url() ?>article/article_display">Article</a>
                        </li>
                        <li class="breadcrumb-item active">Update Article</li>
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
                            <h3 class="card-title">Update Article</h3>
                        </div>

                        <!-- /.card-header -->
                        <!-- form start -->
                        <form method="POST" action="<?php echo base_url() ?>article/article_update"
                            enctype="multipart/form-data">
                            <div class="card-body">
                                <div class="form-group">
                                    <label>Categories</label>
                                    <select class="form-control select2" name="dropdown" style="width: 100%;">
                                        <option selected="selected"><?php echo $load['categories']; ?></option>
                                        <?php foreach($save as $each){ ?>
                                        <option value="<?php echo $each->name; ?>">
                                            <?php echo $each->name; ?></option>';
                                        <?php } ?>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="exampleFormControlFile1">Description</label>
                                    <textarea class="form-control mb-3" rows="3" name="description"
                                        placeholder="Description Here ... "> <?php echo $load['description']; ?></textarea>
                                </div>
                                <div class="form-group">
                                    <label for="exampleFormControlFile1">Image Upload</label>
                                    <input type="file" class="form-control-file" name="image"
                                        id="exampleFormControlFile1">
                                    <img src=" <?php echo $load['image'];?>" width: 40%>
                                </div>
                                <div class="form-group">
                                    <label>Type</label>
                                    <input type="text" class="form-control" name="type" placeholder="Type"
                                        value="<?php echo $load['type']; ?>">
                                </div>
                            </div>
                            <!-- /.card-body -->
                            <?php echo form_hidden('id', set_value('id', $load['id'])); ?>
                            <div class="card-footer">
                                <button type="submit" class="btn btn-primary" name="btnlogin" id="btnlogin"
                                    value="submit">update</button>
                                <a href="<?php echo base_url()?>article/article_display" class="btn btn-primary">Back</a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>

</div>

<?php $this->load->view('admin/sidebar'); ?>