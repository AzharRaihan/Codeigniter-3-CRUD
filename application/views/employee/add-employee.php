<section>
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-md-10">
        <div class="card">
          <div class="card-header bg-light-green">
            <div class="d-flex justify-content-between align-items-center">
              <h6><i class="fas fa-user-plus"></i> Add Employee</h6>
              <a href="<?php echo base_url('employee-lists'); ?>" class="btn btn-danger"><i class="fas fa-arrow-alt-circle-left"></i> Back</a>
            </div>
          </div>
          <div class="card-body">
          <form id="addForm" action="<?php echo base_url('employee-store'); ?>" method="POST" enctype="multipart/form-data">
            <div class="mb-3">
              <label for="name" class="form-label">Name</label>
              <input type="text" class="form-control" id="name" name="name">
              <span class="text-danger"><?php echo form_error('name') ?></span>
            </div>
            <div class="mb-3">
              <label for="roll" class="form-label">Roll</label>
              <input type="number" class="form-control" id="roll" name="roll">
              <span class="text-danger"><?php echo form_error('roll') ?></span>
            </div>
            <div class="mb-3">
              <label for="mobile" class="form-label">Mobile</label>
              <input type="number" class="form-control" id="mobile" name="mobile">
              <span class="text-danger"><?php echo form_error('mobile') ?></span>
            </div>
            <div class="mb-3">
              <label for="address" class="form-label">Address</label>
              <textarea name="address" id="address" cols="5" rows="5" class="form-control" name="address"></textarea>
              <span class="text-danger"><?php echo form_error('address') ?></span>
            </div>
            <div class="mb-3">
              <label for="photo" class="form-label">Image</label>
              <input type="file" class="form-control" id="photo" name="photo">
              <span class="text-danger"><?php if(isset($error)) {echo $error; } ?></span>
            </div>
            <button type="submit" class="btn btn-success"><i class="fas fa-save"></i> Save</button>
          </form>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>