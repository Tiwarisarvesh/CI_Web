<?php $this->load->view('admin/header'); ?>
<div class="content-wrapper">
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Article</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="<?php echo base_url() ?>admin/">Home</a></li>
                        <li class="breadcrumb-item active">Article</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>

    <!-- Main content -->
    <section class="content">
        <div class="container">
            <a href="<?php echo base_url()?>article/insert" class="btn btn-primary" style="margin-bottom: 10px;">Create
                Article</a>
            <div class="row">

                <!-- left column -->
                <div class="col-md-12">
                    <!-- general form elements -->
                    <div class="card card-primary">
                        <!-- Alerts START -->
                        <?php if($this->session->flashdata('message') != "") { ?>
                        <div class="alert alert-success alert-dismissible mb-3" role="alert">
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                            <strong><?php echo $this->session->flashdata('message'); ?></strong>
                        </div>
                        <?php unset($_SESSION['message']); } ?>
                        <?php if($this->session->flashdata('delete') != "") { ?>
                        <div class="alert alert-success alert-dismissible mb-3" role="alert">
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                            <strong><?php echo $this->session->flashdata('delete'); ?></strong>
                        </div>
                        <?php unset($_SESSION['delete']); } ?>
                        <?php if($this->session->flashdata('update') != "") { ?>
                        <div class="alert alert-success alert-dismissible mb-3" role="alert">
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                            <strong><?php echo $this->session->flashdata('update'); ?></strong>
                        </div>
                        <?php unset($_SESSION['update']); } ?>
                        <!-- Alerts END -->
                        <div class="card-header">
                            <h3 class="card-title">Article</h3>
                        </div>

                        <!-- /.card-header -->
                        <!-- form start -->
                        <table class="table table-striped">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Image</th>
                                    <th>Categories</th>
                                    <th>Description</th>
                                    <th>Type</th>
                                    <th colspan="2" style="margin-left:5px">Action</th>

                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                   $i=1;
                                        foreach($display as $row)
                                       {
                                            echo "<tr>";
                                            echo "<td>".$i."</td>";
                                            echo "<td ><img src=".$row->image." style='width: 40%'></td>";
                                            echo "<td>".$row->categories."</td>";
                                            echo "<td>".$row->description."</td>";
                                            echo "<td>".$row->type."</td>";
                                            echo "<td style='width: 10px' ><a href='article_update_load?id=".$row->id."' 
                                            class='btn btn-primary'>Update</a></td>";
                                            echo "<td style='width: 10px'><a href='article_delete?id=".$row->id."'
                                             class='btn btn-danger'>Delete</a></td>";
                                             echo "</tr>";
                                             $i++;
                                        }
                                ?>

                            </tbody>
                        </table>

                    </div>

                    <p><?php echo $links; ?></p>

                </div>
            </div>
        </div>
    </section>

</div>

<?php $this->load->view('admin/sidebar'); ?>