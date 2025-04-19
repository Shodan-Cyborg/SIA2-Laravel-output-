<div class="modal productModal" tabindex="-1" role="dialog">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title"><strong>Student</strong></h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
            <div class="form-outline mb-2" data-mdb-input-init>
                <input type="text" id="product_name" class="form-control" />
                <label class="form-label" for="product_name"><strong>Product Name</strong></label>
            </div>

            <div class="form-outline mb-2" data-mdb-input-init>
                <input type="number" id="product_price" class="form-control" step="0.01" />
                <label class="form-label" for="product_price"><strong>Product Price</strong></label>
            </div>

            <div class="form-outline mb-2" data-mdb-input-init>
                <input type="number" id="product_quantity" class="form-control" />
                <label class="form-label" for="product_quantity"><strong>Quantity</strong></label>
            </div>

            <div class="form-outline mb-2" data-mdb-input-init>
                <input type="number" id="sales_volume" class="form-control" />
                <label class="form-label" for="sales_volume"><strong>Sales Volume</strong></label>
            </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-primary"><strong>Save changes</strong></button>
          <button type="button" class="btn btn-secondary" data-dismiss="modal" onclick="closeModal()"><strong>Close</strong></button>
        </div>
      </div>
    </div>
  </div>
