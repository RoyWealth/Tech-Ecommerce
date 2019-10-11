<!-- Add -->
<div class="modal fade" id="addnew">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span></button>
              <h4 class="modal-title"><b>Add New Checkout Form</b></h4>
            </div>
            <div class="modal-body">
              <form class="form-horizontal" method="POST" action="checkout_add.php" enctype="multipart/form-data">
                <div class="form-group">
                    <label for="firstname" class="col-sm-3 control-label">FIRST NAME</label>

                    <div class="col-sm-9">
                      <input type="firstname" class="form-control" id="firstname" name="firstname" required>
                    </div>
                </div>
                <div class="form-group">
                    <label for="lastname" class="col-sm-3 control-label">LAST NAME</label>

                    <div class="col-sm-9">
                      <input type="lastname" class="form-control" id="lastname" name="lastname" required>
                    </div>
                </div>
                <div class="form-group">
                    <label for="email" class="col-sm-3 control-label">EMAIL</label>

                    <div class="col-sm-9">
                      <input type="email" class="form-control" id="email" name="email" required>
                    </div>
                </div>
                <div class="form-group">
                    <label for="address" class="col-sm-3 control-label">ADDRESS</label>

                    <div class="col-sm-9">
                      <input type="text" class="form-control" id="address" name="address" required>
                    </div>t
                </div>
                <div class="form-group">
                    <label for="address" class="col-sm-3 control-label">CITY</label>

                    <div class="col-sm-9">
                      <textarea class="form-control" id="city" name="city"></textarea>
                    </div>
                </div>
                <div class="form-group">
                    <label for="contact" class="col-sm-3 control-label">CONUTRY</label>

                    <div class="col-sm-9">
                      <input type="text" class="form-control" id="country" name="country">
                    </div>
                </div>
                <div class="form-group">
                    <label for="photo" class="col-sm-3 control-label">ZIP CODE</label>
                    <div class="col-sm-9">
                      <input type="text" class="form-control" id="zip code" name="zip code">
                    </div>
                </div>
                <div class="form-group">
                    <label for="photo" class="col-sm-3 control-label">TELEPHONE</label>
                    <div class="col-sm-9">
                      <input type="text" class="form-control" id="telephone" name="telephone">
                    </div>
                </div>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-default btn-flat pull-left" data-dismiss="modal"><i class="fa fa-close"></i> Close</button>
              <button type="submit" class="btn btn-primary btn-flat" name="add"><i class="fa fa-save"></i> Save</button>
              </form>
            </div>
        </div>
    </div>
</div>

<!-- Edit -->
<div class="modal fade" id="edit">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span></button>
              <h4 class="modal-title"><b>Edit </b>Checkout Form</h4>
            </div>
            <div class="modal-body">
              <form class="form-horizontal" method="POST" action="checkout_edit.php">
                <input type="hidden" class="userid" name="id">
                <div class="form-group">
                    <label for="edit_firstname" class="col-sm-3 control-label">FIRST NAME</label>

                    <div class="col-sm-9">
                      <input type="firstname" class="form-control" id="edit_firstname" name="firstname">
                    </div>
                </div>
                <div class="form-group">
                    <label for="edit_lastname" class="col-sm-3 control-label">LAST NAME</label>

                    <div class="col-sm-9">
                      <input type="lastname" class="form-control" id="edit_lastname" name="lastname">
                    </div>
                </div>
                <div class="form-group">
                    <label for="edit_firstname" class="col-sm-3 control-label">EMAIL</label>

                    <div class="col-sm-9">
                      <input type="email" class="form-control" id="edit_email" name="email">
                    </div>
                </div>
                <div class="form-group">
                    <label for="edit_address" class="col-sm-3 control-label">ADDRESS</label>

                    <div class="col-sm-9">
                      <input type="address" class="form-control" id="edit_address" name="address">
                    </div>
                </div>
                <div class="form-group">
                    <label for="edit_city" class="col-sm-3 control-label">CITY</label>

                    <div class="col-sm-9">
                      <input type="city" class="form-control" id="edit_city" name="city">
                    </div>
                </div>
                <div class="form-group">
                    <label for="edit_country" class="col-sm-3 control-label">COUNTRY</label>

                    <div class="col-sm-9">
                      <input type="country" class="form-control" id="edit_country" name="country">
                    </div>
                </div>
                <div class="form-group">
                    <label for="edit_zipcode" class="col-sm-3 control-label">ZIP CODE</label>

                    <div class="col-sm-9">
                      <input type="zipcode" class="form-control" id="edit_zipcode" name="zipcode">
                    </div>
                </div>
                <div class="form-group">
                    <label for="edit_telephone" class="col-sm-3 control-label">TELEPHONE</label>

                    <div class="col-sm-9">
                      <input type="telephone" class="form-control" id="edit_telephone" name="telephone">
                    </div>
                </div>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-default btn-flat pull-left" data-dismiss="modal"><i class="fa fa-close"></i> Close</button>
              <button type="submit" class="btn btn-success btn-flat" name="edit"><i class="fa fa-check-square-o"></i> Update</button>
              </form>
            </div>
        </div>
    </div>
</div>

<!-- Delete -->
<div class="modal fade" id="delete">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span></button>
              <h4 class="modal-title"><b>Deleting...</b></h4>
            </div>
            <div class="modal-body">
              <form class="form-horizontal" method="POST" action="checkout_delete.php">
                <input type="hidden" class="checkoutid" name="ID">
                <div class="text-center">
                    <p>DELETE Checkout Form</p>
                    <h2 class="bold fullname"></h2>
                </div>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-default btn-flat pull-left" data-dismiss="modal"><i class="fa fa-close"></i> Close</button>
              <button type="submit" class="btn btn-danger btn-flat" name="delete"><i class="fa fa-trash"></i> Delete</button>
              </form>
            </div>
        </div>
    </div>
</div>




     