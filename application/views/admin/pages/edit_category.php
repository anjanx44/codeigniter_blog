<section class="content-header">
    <h1>
        Edit Category Form
        <h4 style="color: green">
            <?php
            $msg = $this->session->userdata('message');
            if ($msg) {
                echo $msg;
                $this->session->unset_userdata('message');
            }
            ?>
        </h4>
        <small>Preview</small>
    </h1>
    <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="#">Forms</a></li>
        <li class="active">General Elements</li>
    </ol>
</section>

<!-- Main content -->
<section class="content">
    <div class="row">
        <!-- left column -->
        <div class="col-md-6">
            <!-- general form elements -->
            <div class="box box-primary">
                <div class="box-header with-border">
                    <h3 class="box-title">Add Category</h3>

                </div>
                <!-- /.box-header -->
                <!-- form start -->
                <form role="form" name="edit_category" action="<?php echo base_url();?>super_admin/update_category" method="post">
                    <div class="box-body">
                        <div class="form-group">
                            <label for="exampleInputEmail1">Category Name</label>

                            <input type="text" name="category_name" value="<?php echo $category_info->category_name; ?>" class="form-control" id="exampleInputEmail1" >
                            <input type="hidden" name="category_id" value="<?php echo $category_info->category_id; ?>"  >
                        </div>

                        <div class="form-group">
                            <label>Category Description</label>
                            <textarea name="category_description" class="form-control" rows="3" placeholder="Enter ..."><?php echo $category_info->category_description; ?></textarea>
                        </div>
                        <div class="form-group">
                            <label>Publication Status</label>
                            <select name="publication_status">
                                <option>select publication status</option>
                                <option value="1">Publish</option>
                                <option value="0">Unpublished</option>
                            </select>
                        </div>


                    </div>
                    <!-- /.box-body -->

                    <div class="box-footer">
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </div>
                </form>
            </div>
            <!-- /.box -->


            <!-- /.box -->
        </div>
        <!--/.col (right) -->
    </div>
    <!-- /.row -->



</section>

<script type="text/javascript">
    document.forms['edit_category'].elements['publication_status'].value = '<?php echo $category_info->publication_status; ?>';
</script>