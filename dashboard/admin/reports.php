<?php
  include("../Admin-Includes/header.php");
?>
    <!-- Page content -->
    <div class="wrap">

<div class="card mb-4">
        <div class="card-body">
          <h5 class="card-title">Child and vaccination report (date wise)</h5>
          <form>
          <div class="row g-3 mb-3">
            <div class="col-md-6"><label class="form-label">From date</label><input type="date" class="form-control"></div>
            <div class="col-md-6"><label class="form-label">To date</label><input type="date" class="form-control"></div>
          </div>
          <div class="row g-3 mb-3">
            <div class="col-md-6"><label class="form-label">Vaccine</label><select class="form-select"><option>All vaccines</option><option>Polio (OPV)</option><option>Measles</option></select></div>
          </div>
            <button type="button" class="btn btn-primary">Show report</button>
            <button type="button" class="btn btn-outline-primary">Print</button>
          </form>
        </div>
      </div>

      <div class="card mb-4">
        <div class="card-body">
          <h5 class="card-title">Report</h5>
          <div class="table-responsive">
            <table class="table table-hover align-middle mb-0">
              <thead><tr><th>Date</th><th>Child</th><th>Vaccine</th><th>Hospital</th><th>Status</th></tr></thead>
              <tbody>
            <tr><td>10 Nov 2026</td><td>Ali Raza</td><td>Polio (OPV)</td><td>City Care Hospital</td><td><span class="badge b-ok">Vaccinated</span></td></tr>
            <tr><td>12 Nov 2026</td><td>Sara Ahmed</td><td>Measles</td><td>Green Valley Clinic</td><td><span class="badge b-bad">Not vaccinated</span></td></tr>
            <tr><td>15 Nov 2026</td><td>Hamza Khan</td><td>Hepatitis B</td><td>City Care Hospital</td><td><span class="badge b-ok">Vaccinated</span></td></tr>
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
