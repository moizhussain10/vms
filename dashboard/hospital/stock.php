<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Vaccine Stock | VaccineCare</title>
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
    <a href="dashboard.html"><i class="fa-solid fa-clipboard-list"></i> Appointments</a>
    <a href="stock.html" class="on"><i class="fa-solid fa-boxes-stacked"></i> Vaccine Stock</a>

    <div class="gap"></div>
    <div class="help"><b>Every dose counts</b>Keep every child protected and on schedule.</div>
    <a class="out" href="../index.html"><i class="fa-solid fa-right-from-bracket"></i> Logout</a>
  </div>

  <!-- Main area -->
  <div class="main flex-grow-1">

    <!-- Top bar -->
    <div class="top">
      <div>
        <h1>Vaccine Stock</h1>
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

      <!-- Summary -->
      <div class="row g-3 mb-4">
        <div class="col-md-4">
          <div class="stat">
            <span class="ic "><i class="fa-solid fa-boxes-stacked"></i></span>
            <div><span>Vaccines in stock</span><b>4</b></div>
          </div>
        </div>
        <div class="col-md-4">
          <div class="stat">
            <span class="ic c2"><i class="fa-solid fa-triangle-exclamation"></i></span>
            <div><span>Low stock</span><b>1</b></div>
          </div>
        </div>
        <div class="col-md-4">
          <div class="stat">
            <span class="ic c3"><i class="fa-solid fa-ban"></i></span>
            <div><span>Unavailable</span><b>1</b></div>
          </div>
        </div>
      </div>

      <!-- Add / restock form -->
      <div class="card mb-4">
        <div class="card-body">
          <h5 class="card-title">Add or restock a vaccine</h5>
          <form>
            <div class="row g-3 mb-3">
              <div class="col-md-4"><label class="form-label">Vaccine</label><select class="form-select"><option>Polio (OPV)</option><option>Hepatitis B</option><option>Measles</option><option>BCG</option><option>Typhoid</option></select></div>
              <div class="col-md-4"><label class="form-label">Quantity (doses)</label><input type="number" class="form-control" placeholder="e.g. 100"></div>
              <div class="col-md-4"><label class="form-label">Date received</label><input type="date" class="form-control"></div>
            </div>
            <button type="button" class="btn btn-primary">Add to stock</button>
          </form>
        </div>
      </div>

      <!-- Stock list -->
      <div class="card mb-4">
        <div class="card-body">
          <h5 class="card-title">My vaccine stock</h5>
          <div class="table-responsive">
            <table class="table table-hover align-middle mb-0">
              <thead><tr><th>Vaccine</th><th>Quantity</th><th>Status</th><th>Last updated</th><th>Action</th></tr></thead>
              <tbody>
              <tr>
                <td>Polio (OPV)</td><td>120</td><td><span class="badge b-ok">Available</span></td><td>20 Nov 2026</td>
                <td>
                  <button class="btn btn-sm btn-primary" data-bs-toggle="modal" data-bs-target="#editModal">Edit</button>
                  <button class="btn btn-sm btn-danger" onclick="return confirm('Delete this vaccine from your stock?')">Delete</button>
                </td>
              </tr>
              <tr>
                <td>Hepatitis B</td><td>8</td><td><span class="badge b-warn">Low stock</span></td><td>18 Nov 2026</td>
                <td>
                  <button class="btn btn-sm btn-primary" data-bs-toggle="modal" data-bs-target="#editModal">Edit</button>
                  <button class="btn btn-sm btn-danger" onclick="return confirm('Delete this vaccine from your stock?')">Delete</button>
                </td>
              </tr>
              <tr>
                <td>Measles</td><td>0</td><td><span class="badge b-bad">Unavailable</span></td><td>02 Nov 2026</td>
                <td>
                  <button class="btn btn-sm btn-primary" data-bs-toggle="modal" data-bs-target="#editModal">Edit</button>
                  <button class="btn btn-sm btn-danger" onclick="return confirm('Delete this vaccine from your stock?')">Delete</button>
                </td>
              </tr>
              <tr>
                <td>BCG</td><td>45</td><td><span class="badge b-ok">Available</span></td><td>15 Nov 2026</td>
                <td>
                  <button class="btn btn-sm btn-primary" data-bs-toggle="modal" data-bs-target="#editModal">Edit</button>
                  <button class="btn btn-sm btn-danger" onclick="return confirm('Delete this vaccine from your stock?')">Delete</button>
                </td>
              </tr>
              </tbody>
            </table>
          </div>
        </div>
      </div>

      <!-- Edit popup (Bootstrap modal) -->
      <div class="modal fade" id="editModal" tabindex="-1">
        <div class="modal-dialog modal-dialog-centered">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title">Edit stock</h5>
              <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
            </div>
            <div class="modal-body">
              <div class="mb-3"><label class="form-label">Vaccine</label><select class="form-select"><option>Polio (OPV)</option><option>Hepatitis B</option><option>Measles</option><option>BCG</option><option>Typhoid</option></select></div>
              <div class="mb-3"><label class="form-label">Quantity (doses)</label><input type="number" class="form-control" value="120"></div>
              <div class="mb-3"><label class="form-label">Date received</label><input type="date" class="form-control"></div>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-outline-primary" data-bs-dismiss="modal">Cancel</button>
              <button type="button" class="btn btn-primary">Save changes</button>
            </div>
          </div>
        </div>
      </div>

    </div>
  </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
