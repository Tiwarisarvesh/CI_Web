<?php $this->load->view('admin/header'); ?>
<div class="content-wrapper">
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Categories</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="<?php echo base_url() ?>admin/">Home</a></li>
                        <li class="breadcrumb-item active">Categories</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>


    <!-- Main content -->
    <section class="content">
        <div class="container">
            <a href="<?php echo base_url()?>categories/create" class="btn btn-primary"
                style="margin-bottom: 10px;">Create Categories</a>
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
                            <h3 class="card-title">Categories</h3>
                        </div>
                        
                        <!-- /.card-header -->
                        <!-- form start -->
                        <table class="table table-striped">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Categories</th>
                                    <th>Type</th>
                                    <th>Status</th>
                                    <th colspan="2" style="margin-left:5px">Action</th>

                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                   $i=1;
                                        foreach($data as $row)
                                       {
                                            echo "<tr>";
                                            echo "<td>".$i."</td>";
                                            echo "<td>".$row->name."</td>";
                                            echo "<td>".$row->type."</td>";
                                            echo "<td>".$row->status."</td>";
                                            echo "<td style='width: 10px' ><a href='categories_update?id=".$row->id."' class='btn btn-primary'>Update</a></td>";
                                            echo "<td style='width: 10px'><a href='categories_delete?id=".$row->id."'
                                class='btn btn-danger'>Delete</a></td>";
                                echo "</tr>";
                                $i++;
                                }
                                ?>

                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </section>

</div>

<?php $this->load->view('admin/sidebar'); ?>