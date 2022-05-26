<div class="row">
    <div class="col-md-12">
        <div class="panel panel-primary">
            <div class="panel-heading">
                Add Contact
            </div>
            <div class="panel-body">
                <form role="form" method="POST" action="">
                    <div class="form-group">
                        <label>Contact Fullname</label>
                        <input class="form-control" name="fullname" placeholder="Enter fullname">
                    </div>
                    <div class="form-group">
                        <label>Contact Email</label>
                        <input class="form-control" name="email" placeholder="Enter email">
                    </div>
                    <div class="form-group">
                        <label>Contact Phone</label>
                        <input class="form-control" name="phone" placeholder="Enter phone">
                    </div>
                    <div class="form-group">
                        <label>Contact Message</label>
                        <textarea class="form-control" name="message" placeholder="Enter message"></textarea>
                    </div>
                    <input type="hidden" name="form_name" value="create_contact">
                    <button type="submit" class="btn btn-primary">Add Contact</button>
                </form>
            </div>
        </div>
    </div>
</div>

<hr>

<div class="row">
    <div class="col-md-12">
        <div class="panel panel-primary">
            <div class="panel-heading">
                All Contacts
            </div>
            <div class="panel-body">
                <div class="table-responsive">
                    <table class="table table-striped table-bordered table-hover">
                        <thead>
                            <tr class="warning">
                                <th>ID</th>
                                <th>Fullname</th>
                                <th>Email</th>
                                <th>Phone</th>
                                <th>Status</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php 
                                foreach ($dataArr as $row) {
                            ?>
                            <tr>
                                <td><?php echo $row['n_contact_id']; ?></td>
                                <td><?php echo $row['v_fullname']; ?></td>
                                <td><?php echo $row['v_email']; ?></td>
                                <td><?php echo $row['v_phone']; ?></td>
                                <td><?php echo ($row['f_contact_status'] == 1) ? 'Active' : 'Inactive'; ?></td>
                                <td class="col-md-3">
                                    <button class="btn btn-success">
                                        <i class="fa fa-arrow-up-right-from-square"></i>
                                        View
                                    </button>
                                    <button class="btn btn-warning" data-toggle="modal" data-target="#edit_contact<?php echo $row['n_contact_id']; ?>">
                                        <i class="fa fa-edit"></i>
                                        Edit
                                    </button>
                                    <button class="btn btn-danger" data-toggle="modal" data-target="#delete_contact<?php echo $row['n_contact_id']; ?>">
                                        <i class="fa fa-trash"></i>
                                        Drop
                                    </button>

                                    <div class="modal fade" id="edit_contact<?php echo $row['n_contact_id']; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                        <div class="modal-dialog">
                                            <div class="modal-content">
                                                <form role="form" method="POST" action="">
                                                    <div class="modal-header">
                                                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                                        <h4 class="modal-title" id="myModalLabel">Edit Contact</h4>
                                                    </div>
                                                    <div class="modal-body">
                                                        <div class="form-group">
                                                            <label>Contact Fullname</label>
                                                            <input class="form-control" name="fullname" placeholder="Enter fullname" value="<?php echo $row['v_fullname']; ?>">
                                                        </div>
                                                        <div class="form-group">
                                                            <label>Contact Email</label>
                                                            <input class="form-control" name="email" placeholder="Enter email" value="<?php echo $row['v_email']; ?>">
                                                        </div>
                                                        <div class="form-group">
                                                            <label>Contact Phone</label>
                                                            <input class="form-control" name="phone" placeholder="Enter phone" value="<?php echo $row['v_phone']; ?>">
                                                        </div>
                                                        <div class="form-group">
                                                            <label>Contact Message</label>
                                                            <textarea class="form-control" name="message" placeholder="Enter message"><?php echo $row['v_message']; ?></textarea>
                                                        </div>
                                                        <div class="form-group">
                                                            <label>Contact Status</label>
                                                            <input type="checkbox" class="form-control custom-checkbox checkbox-xl" name="contact_status">
                                                        </div>
                                                    </div>
                                                    <div class="modal-footer">
                                                        <input type="hidden" name="form_name" value="edit_contact">
                                                        <input type="hidden" name="contact_id" value="<?php echo $row['n_contact_id']; ?>">
                                                        <button type="submit" class="btn btn-primary">Save changes</button>
                                                        <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="modal fade" id="delete_contact<?php echo $row['n_contact_id']; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                        <div class="modal-dialog">
                                            <div class="modal-content">
                                                <form role="form" method="POST" action="">
                                                    <div class="modal-header">
                                                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                                        <h4 class="modal-title" id="myModalLabel">Delete Contact</h4>
                                                    </div>
                                                    <div class="modal-body">
                                                        Are you sure wanna delete contact <b><?php echo $row['v_fullname']; ?></b>? This couldn't be restored.
                                                    </div>
                                                    <div class="modal-footer">
                                                        <input type="hidden" name="form_name" value="delete_contact">
                                                        <input type="hidden" name="contact_id" value="<?php echo $row['n_contact_id']; ?>">
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