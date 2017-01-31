<section class="content-header">
    <h1>
        Manage Category
        <small>advanced tables</small>
    </h1>
    <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="#">Tables</a></li>
        <li class="active">Data tables</li>
    </ol>
</section>

<!-- Main content -->
<section class="content">
    <div class="row">
        <div class="col-xs-12">
            <div class="box">
                <div class="box-header">
                    <h3 class="box-title">Hover Data Table</h3>
                </div>
                <!-- /.box-header -->
                <div class="box-body">
                    <table id="example2" class="table table-bordered table-hover">
                        <thead>
                            <tr>
                                <th>Category id</th>
                                <th>Category name</th>
                                <th>Category description</th>
                                <th>Publication status</th>
                                <th>Button</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            foreach ($all_category as $v_category) {
                                ?>
                                <tr>
                                    <td><?php echo $v_category->category_id; ?></td>
                                    <td><?php echo $v_category->category_name; ?></td>
                                    <td><?php echo $v_category->category_description; ?></td>
                                    <td>
                                        <?php
                                        if ($v_category->publication_status == 1) {
                                            ?>
                                            <span class="label label-success">Published</span>

                                            <?php
                                        } else {
//                                     
                                            ?>
                                            <span class="label label-danger">Unpublished</span>

                                        <?php }
                                        ?>

                                    </td>

                                    <td>
                                        <?php
                                        if ($v_category->publication_status == 0) {
                                            ?>

                                            <a class="btn btn-success" href="<?php echo site_url(); ?>super_admin/published_category/<?php echo $v_category->category_id; ?>" title="Publish">
                                                <i class="fa fa-toggle-up"></i>
                                            </a>


                                            <?php
                                        } else {
                                            ?>

                                            <a class="btn btn-danger" href="<?php echo site_url(); ?>super_admin/unpublished_category/<?php echo $v_category->category_id; ?>" title="Unpublish">
                                                <i class="fa fa-toggle-down"></i>
                                            </a>

                                            <?php
                                        }
                                        ?>

                                        <a class="btn btn-success" href="<?php echo site_url(); ?>super_admin/edit_category/<?php echo $v_category->category_id; ?>" title="Edit">
                                            <i class="fa fa-pencil-square-o" aria-hidden="true"></i>
                                        </a>
                                        <a class="btn btn-danger" href="<?php echo site_url(); ?>super_admin/delete_category/<?php echo $v_category->category_id; ?>" title="Delete" onclick="return delete_category();">
                                            <i class="fa fa-times" aria-hidden="true"></i>
                                        </a>



                                    </td>

                                </tr>
                            <?php } ?>

                        </tbody>
                        <tfoot>
                            <tr>
                                <th>Category id</th>
                                <th>Category name</th>
                                <th>Category description</th>
                                <th>Publication status</th>
                                <th>Button</th>
                            </tr>
                        </tfoot>
                    </table>
                </div>
                <!-- /.box-body -->
            </div>

            <!-- /.box -->
        </div>
        <!-- /.col -->
    </div>
    <!-- /.row -->
</section>