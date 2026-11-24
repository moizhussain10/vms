<?php
  include("../Parent-Includes/header.php"); 
  ?>
    <!-- Page content -->
    <div class="wrap">

<div class="card mb-4">
        <div class="card-body">
          <h5 class="card-title">Search hospitals</h5>
          <form>
          <div class="row g-3 mb-3">
            <div class="col-md-6"><label class="form-label">Hospital or area</label><input type="text" class="form-control"></div>
            <div class="col-md-6"><label class="form-label">Vaccine</label><select class="form-select"><option>All vaccines</option><option>Polio (OPV)</option><option>Measles</option></select></div>
          </div>
            <button type="button" class="btn btn-primary">Search</button>
          </form>
        </div>
      </div>

      <div class="row g-4">
        <div class="col-md-6">
          <div class="card">
            <div class="card-body">
              <div class="pic"><i class="fa-solid fa-hospital"></i></div>
              <h5>City Care Hospital</h5>
              <p class="text-secondary">Block 5, Clifton, Karachi<br>021-1112233</p>
              <span class="badge b-ok">Vaccine available</span>
              <div class="row g-2 mt-2">
                <div class="col-6"><label class="form-label">Child</label><select class="form-select"><option>Hamza Khan</option><option>Hira Khan</option></select></div>
                <div class="col-6"><label class="form-label">Date</label><input type="date" class="form-control"></div>
              </div>
              <button class="btn btn-primary mt-3">Request booking</button>
            </div>
          </div>
        </div>
        <div class="col-md-6">
          <div class="card">
            <div class="card-body">
              <div class="pic"><i class="fa-solid fa-hospital"></i></div>
              <h5>Green Valley Clinic</h5>
              <p class="text-secondary">Gulshan-e-Iqbal, Karachi<br>021-4445566</p>
              <span class="badge b-bad">Vaccine unavailable</span>
              <div class="row g-2 mt-2">
                <div class="col-6"><label class="form-label">Child</label><select class="form-select"><option>Hamza Khan</option><option>Hira Khan</option></select></div>
                <div class="col-6"><label class="form-label">Date</label><input type="date" class="form-control"></div>
              </div>
              <button class="btn btn-primary mt-3">Request booking</button>
            </div>
          </div>
        </div>
      </div>

    </div>
  </div>
</div>

</body>
</html>
