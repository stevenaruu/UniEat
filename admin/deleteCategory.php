<div class="modal fade" id="hapus<?= $list["id"]; ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLongTitle">Delete Category [<?= $list["list"]; ?>]</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                Are you sure you want to delete this category?
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <form action="" method="POST">
                    <input type="hidden" name="id" value="<?= $list["id"]; ?>">
                    <button type="submit" class="btn btn-primary" name="hapus">Save</button>
                </form>
            </div>
        </div>
    </div>
</div>