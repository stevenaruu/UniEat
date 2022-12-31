<div class="modal fade" id="edit<?= $barang["id"]; ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLongTitle"><?= $barang["nama"]; ?></h5>
                <button type="button" class="close btn" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="" method="POST">
                <div class="modal-body">
                    <div class="form-group row mb-3">
                        <label for="picture" class="col-sm-3 col-form-label">Current picture: </label>
                        <div class="col-sm-9">
                            <img src="../assets/tenant/<?= $barang["picture"]; ?>" style="width: 40%; object-fit: cover; height: 20vh;">
                            <input type="hidden" name="pictureHidden" value="<?= $barang["picture"]; ?>">
                            <input type="file" class="form-control-file mt-3" id="picture" name="picture" value="<?= $barang["picture"]; ?>">
                        </div>
                    </div>
                    <div class="form-group row mb-3">
                        <label for="name" class="col-sm-3 col-form-label">Name</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" id="name" placeholder="Current name" name="name" value="<?= $barang["nama"]; ?>">
                        </div>
                    </div>
                    <div class="form-group row mb-3">
                        <label for="price" class="col-sm-3 col-form-label">Price</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" id="price" placeholder="Current price" name="price" value="<?= $barang["price"]; ?>">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="desc" class="col-sm-3 col-form-label">Description</label>
                        <div class="col-sm-9">
                            <textarea class="form-control" id="desc" rows="3" placeholder="Input description" name="desc"><?= $barang["deskripsi"]; ?></textarea>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                    <input type="hidden" name="id" value="<?= $barang["id"]; ?>">
                    <button type="submit" class="btn btn-primary" name="edit">Update Items</button>
            </form>
        </div>
    </div>
</div>
</div>