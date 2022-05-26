<div class="row">
    <div class="col-md-12">
        <div class="panel panel-primary">
            <div class="panel-heading">
                All Blogs
            </div>
            <div class="panel-body">
                <div class="table-responsive">
                    <table class="table table-striped table-bordered table-hover">
                        <thead>
                            <tr class="warning">
                                <th>ID</th>
                                <th>Title</th>
                                <th>Meta Title</th>
                                <th>Path</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php 
                                foreach ($dataArr as $row) {
                            ?>
                            <tr>
                                <td><?php echo $row['n_category_id']; ?></td>
                                <td><?php echo $row['v_category_title']; ?></td>
                                <td><?php echo $row['v_category_meta_title']; ?></td>
                                <td><?php echo $row['v_category_path']; ?></td>
                                <td class="col-md-3">
                                    <button class="btn btn-success">
                                        <i class="fa fa-arrow-up-right-from-square"></i>
                                        View
                                    </button>
                                    <button class="btn btn-warning" data-toggle="modal" data-target="#edit_category<?php echo $row['n_category_id']; ?>">
                                        <i class="fa fa-edit"></i>
                                        Edit
                                    </button>
                                    <button class="btn btn-danger" data-toggle="modal" data-target="#delete_category<?php echo $row['n_category_id']; ?>">
                                        <i class="fa fa-trash"></i>
                                        Drop
                                    </button>

                                    <div class="modal fade" id="edit_category<?php echo $row['n_category_id']; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                        <div class="modal-dialog">
                                            <div class="modal-content">
                                                <form role="form" method="POST" action="">
                                                    <div class="modal-header">
                                                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                                        <h4 class="modal-title" id="myModalLabel">Sửa danh mục</h4>
                                                    </div>
                                                    <div class="modal-body">
                                                        <div class="form-group">
                                                            <label>Category Title</label>
                                                            <input class="form-control" name="category_title" placeholder="Enter title" value="<?php echo $row['v_category_title']; ?>">
                                                        </div>
                                                        <div class="form-group">
                                                            <label>Category Meta Title</label>
                                                            <input class="form-control" name="category_meta_title" placeholder="Enter meta title" value="<?php echo $row['v_category_meta_title']; ?>">
                                                        </div>
                                                        <div class="form-group">
                                                            <label>Category Path</label>
                                                            <input class="form-control" name="category_path" placeholder="Enter path" value="<?php echo $row['v_category_path']; ?>">
                                                        </div>
                                                    </div>
                                                    <div class="modal-footer">
                                                        <input type="hidden" name="form_name" value="edit_category">
                                                        <input type="hidden" name="category_id" value="<?php echo $row['n_category_id']; ?>">
                                                        <button type="submit" class="btn btn-primary">Save changes</button>
                                                        <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="modal fade" id="delete_category<?php echo $row['n_category_id']; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                        <div class="modal-dialog">
                                            <div class="modal-content">
                                                <form role="form" method="POST" action="">
                                                    <div class="modal-header">
                                                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                                        <h4 class="modal-title" id="myModalLabel">Delete Category</h4>
                                                    </div>
                                                    <div class="modal-body">
                                                        Are you sure wanna delete category <b><?php echo $row['v_category_title']; ?></b>? This couldn't be restored.
                                                    </div>
                                                    <div class="modal-footer">
                                                        <input type="hidden" name="form_name" value="delete_category">
                                                        <input type="hidden" name="category_id" value="<?php echo $row['n_category_id']; ?>">
                                                        <button type="submit" class="btn btn-danger">Delete</button>
                                                        <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                            <?php
                                } 
                            ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
