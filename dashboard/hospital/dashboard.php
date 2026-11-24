<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Appointments | VaccineCare</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
  <link href="https://fonts.googleapis.com/css2?family=Bricolage+Grotesque:wght@600;800&family=Figtree:wght@400;500;600;700;800&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="../assets/style.css">
</head>
<body>

<div class="d-flex flex-column flex-lg-row">

  <!-- Sidebar -->
  <div class="side">
    <div class="brand"><span class="logo"><i class="fa-solid fa-shield-heart"></i></span> VaccineCare</div>
    <div class="role">Hospital Panel</div>
    <a href="dashboard.html" class="on"><i class="fa-solid fa-clipboard-list"></i> Appointments</a>
    <a href="stock.html"><i class="fa-solid fa-boxes-stacked"></i> Vaccine Stock</a>

    <div class="gap"></div>
    <div class="help"><b>Every dose counts</b>Keep every child protected and on schedule.</div>
    <a class="out" href="../index.html"><i class="fa-solid fa-right-from-bracket"></i> Logout</a>
  </div>

  <!-- Main area -->
  <div class="main flex-grow-1">

    <!-- Top bar -->
    <div class="top">
      <div>
        <h1>Appointments</h1>
        <small>Monday, 23 November 2026</small>
      </div>
      <div class="d-flex align-items-center gap-3">
        <label class="sbox"><i class="fa-solid fa-magnifying-glass"></i><input placeholder="Search..."></label>
        <span class="bell"><i class="fa-regular fa-bell"></i></span>
        <div class="me d-flex align-items-center gap-2 fw-bold">
          <span class="av">CC</span>
          <div>City Care Hospital<small>Hospital Panel</small></div>
        </div>
      </div>
    </div>

    <!-- Page content -->
    <div class="wrap">

<div class="hero">
        <div>
          <h2>6 appointments scheduled today</h2>
          <p>Update each child's status once the vaccine has been given.</p>
          
        </div>
        <i class="fa-solid fa-shield-heart hero-icon"></i>
      </div>

      <div class="row g-3 mb-4">
        <div class="col-md-4">
          <div class="stat">
            <span class="ic "><i class="fa-solid fa-calendar-days"></i></span>
            <div><span>Appointments today</span><b>6</b></div>
          </div>
        </div>
        <div class="col-md-4">
          <div class="stat">
            <span class="ic c4"><i class="fa-solid fa-syringe"></i></span>
            <div><span>Vaccinated</span><b>112</b></div>
          </div>
        </div>
        <div class="col-md-4">
          <div class="stat">
            <span class="ic c3"><i class="fa-solid fa-clipboard-list"></i></span>
            <div><span>Not vaccinated</span><b>9</b></div>
          </div>
        </div>
      </div>

      <div class="card mb-4">
        <div class="card-body">
          <h5 class="card-title">Update vaccine status</h5>
          <div class="table-responsive">
            <table class="table table-hover align-middle mb-0">
              <thead><tr><th>Child</th><th>Parent</th><th>Vaccine</th><th>Date</th><th>Status</th><th>Update</th></tr></thead>
              <tbody>
            <tr><td>Hamza Khan</td><td>Ayesha Khan</td><td>Hepatitis B</td><td>28 Nov 2026</td><td><span class="badge b-warn">Scheduled</span></td><td><select class="form-select form-select-sm d-inline-block w-auto"><option>Vaccinated</option><option>Not vaccinated</option></select> <button class="btn btn-sm btn-primary">Save</button></td></tr>
            <tr><td>Zain Shah</td><td>Bilal Shah</td><td>Polio (OPV)</td><td>30 Nov 2026</td><td><span class="badge b-warn">Scheduled</span></td><td><select class="form-select form-select-sm d-inline-block w-auto"><option>Vaccinated</option><option>Not vaccinated</option></select> <button class="btn btn-sm btn-primary">Save</button></td></tr>
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
