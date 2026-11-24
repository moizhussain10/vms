<?php
  include("../Admin-Includes/header.php");
?>

    <!-- Page content -->
    <div class="wrap">

<div class="card mb-4">
        <div class="card-body">
          <div class="d-flex justify-content-between align-items-center mb-3"><h5 class="card-title mb-0">Hospitals</h5><a href="add-hospital.html" class="btn btn-primary">Add hospital</a></div>
          <div class="table-responsive">
            <table class="table table-hover align-middle mb-0">
              <thead><tr><th>#</th><th>Name</th><th>Address</th><th>Phone</th><th>Action</th></tr></thead>
              <tbody>
            <tr><td>1</td><td>City Care Hospital</td><td>Block 5, Clifton, Karachi</td><td>021-1112233</td><td><a href="edit-hospital.html" class="btn btn-sm btn-primary">Update</a> <button class="btn btn-sm btn-danger">Delete</button></td></tr>
            <tr><td>2</td><td>Green Valley Clinic</td><td>Gulshan-e-Iqbal, Karachi</td><td>021-4445566</td><td><a href="edit-hospital.html" class="btn btn-sm btn-primary">Update</a> <button class="btn btn-sm btn-danger">Delete</button></td></tr>
              </tbody>
            </table>
          </div>
        </div>
      </div>

    </div>
  </div>
</div>

</body>
</html>
