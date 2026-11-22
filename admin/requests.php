<?php
  include("../Admin-Includes/header.php");
?>
    <!-- Page content -->
    <div class="wrap">

<div class="card mb-4">
        <div class="card-body">
          <h5 class="card-title">Appointment requests from parents</h5>
          <div class="table-responsive">
            <table class="table table-hover align-middle mb-0">
              <thead><tr><th>Parent</th><th>Child</th><th>Vaccine</th><th>Hospital</th><th>Preferred date</th><th>Status</th><th>Action</th></tr></thead>
              <tbody>
            <tr><td>Ayesha Khan</td><td>Hamza Khan</td><td>Hepatitis B</td><td>City Care Hospital</td><td>28 Nov 2026</td><td><span class="badge b-warn">Pending</span></td><td><button class="btn btn-sm btn-success">Approve</button> <button class="btn btn-sm btn-danger">Reject</button></td></tr>
            <tr><td>Bilal Shah</td><td>Zain Shah</td><td>Polio (OPV)</td><td>Green Valley Clinic</td><td>30 Nov 2026</td><td><span class="badge b-warn">Pending</span></td><td><button class="btn btn-sm btn-success">Approve</button> <button class="btn btn-sm btn-danger">Reject</button></td></tr>
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
