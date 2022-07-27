<section>
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-md-10">
        <div class="card">
          <div class="card-header bg-light-skyblue">
            <div class="d-flex justify-content-between align-items-center">
              <h6><i class="fas fa-user-edit"></i> Edit Employee Data</h6>
              <a href="<?php echo base_url('employee-lists'); ?>" class="btn btn-danger"><i class="fas fa-arrow-alt-circle-left"></i> Back</a>
            </div>
          </div>
          <div class="card-body">
          <form action="<?php echo base_url('employee-update/'.$employee->id); ?>" method="POST">
            <div class="mb-3">
              <label for="name" class="form-label">Name</label>
              <input type="text" class="form-control" id="name" name="name" value="<?= $employee->name ?>">
              <span class="text-danger"><?php echo form_error('name') ?></span>
            </div>
            <div class="mb-3">
              <label for="roll" class="form-label">Roll</label>
              <input type="text" class="form-control" id="roll" name="roll" value="<?= $employee->roll ?>">
              <span class="text-danger"><?php echo form_error('roll') ?></span>
            </div>
            <div class="mb-3">
              <label for="mobile" class="form-label">Mobile</label>
              <input type="text" class="form-control" id="mobile" name="mobile" value="<?= $employee->mobile ?>">
              <span class="text-danger"><?php echo form_error('mobile') ?></span>
            </div>
            <div class="mb-3">
              <label for="address" class="form-label">Address</label>
              <textarea name="address" id="address" cols="5" rows="5" class="form-control" name="address"><?= $employee->address ?></textarea>
              <span class="text-danger"><?php echo form_error('address') ?></span>
            </div>
            <button type="submit" class="btn btn-primary"><i class="fas fa-arrow-circle-up"></i> Update</button>
          </form>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>