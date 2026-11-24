<?php
  include("../Admin-Includes/header.php");
?>

    <!-- Page content -->
    <div class="wrap">

<div class="card mb-4">
        <div class="card-body">
          <h5 class="card-title">Hospital details</h5>
          <form>
          <div class="row g-3 mb-3">
            <div class="col-md-6"><label class="form-label">Hospital name</label><input type="text" class="form-control"></div>
            <div class="col-md-6"><label class="form-label">Phone</label><input type="text" class="form-control"></div>
          </div>
          <div class="row g-3 mb-3">
            <div class="col-md-6"><label class="form-label">Email</label><input type="email" class="form-control"></div>
            <div class="col-md-6"><label class="form-label">City</label><input type="text" class="form-control"></div>
          </div>
          <div class="row g-3 mb-3">
            <div class="col-md-6"><label class="form-label">Address</label><textarea class="form-control" rows="3"></textarea></div>
            <div class="col-md-6"><label class="form-label">Location (map link)</label><input type="text" class="form-control"></div>
          </div>
            <button type="button" class="btn btn-primary">Save hospital</button>
            <a href="hospitals.html" class="btn btn-outline-primary">Cancel</a>
          </form>
        </div>
      </div>

    </div>
  </div>
</div>

</body>
</html>
