<div class="modal fade" id="edit<?= $list["id"]; ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLongTitle">Edit Category</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form class="modal-body" action="" method="POST">
                <div class="form-group row">
                    <div class="col-sm-12">
                        <input type="hidden" name="id" value="<?= $list["id"]; ?>">
                        <input type="text" class="form-control" id="name" placeholder="Input category name" name="name" value="<?= $list["list"]; ?>">
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary" name="edit">Save</button>
                </div>
            </form>
        </div>
    </div>
</div>