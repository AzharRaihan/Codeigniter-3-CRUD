<section>
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-md-10">
        <?php 
        if($this->session->flashdata('status')){
        ?>
        <div class="alert alert-success"><strong><?= $this->session->flashdata('status') ?></strong></div>
        <?php } ?>
        <?php
          if (isset($error)){
            echo $error;
          }
        ?>
        <div class="card">
          <div class="card-header bg-light-blue">
          <div class="d-flex justify-content-between align-items-center">
              <h6><i class="fas fa-list"></i> Employee Lists</h6>
              <a href="<?php echo base_url('add-employee'); ?>" class="btn btn-primary"><i class="fas fa-user-plus"></i> Add Employee</a>
            </div>
          </div>
          <div class="card-body">
            <table class="table table-border table-striped">
              <thead>
                <th>ID</th>
                <th>Name</th>
                <th>Roll</th>
                <th>Mobile</th>
                <th>Address</th>
                <th>Action</th>
              </thead>
              <tbody>
                <?php
                foreach ($employee->result() as $row) {
                ?>
                <tr>
                  <td><?= $row->id; ?></td>
                  <td><?= $row->name; ?></td>
                  <td><?= $row->roll; ?></td>
                  <td><?= $row->mobile; ?></td>
                  <td><?= $row->address; ?></td>
                  <td class="d-flex btn-group">
                    <a href="<?= base_url('employee-edit/'. $row->id); ?>" class="btn btn-warning btn-sm"><i class="fas fa-edit"></i> Edit</a>
                    <button class="btn btn-danger btn-sm delete" value="<?= $row->id ?>"><i class="fas fa-trash"></i> Delete</button>
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
</section>