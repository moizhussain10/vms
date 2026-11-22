
<?php
  include("../Admin-Includes/header.php");
?>
    <!-- Page content -->
    <div class="wrap">

<div class="hero">
        <div>
          <h2>Good morning, Admin</h2>
          <p>17 parent requests are waiting for your approval and 6 vaccines are running low across hospitals.</p>
          <a class="btn" href="requests.html">Review requests</a>
        </div>
        <i class="fa-solid fa-shield-heart hero-icon"></i>
      </div>

      <div class="row g-3 mb-4">
        <div class="col-md-6 col-xl-3">
          <div class="stat">
            <span class="ic "><i class="fa-solid fa-users"></i></span>
            <div><span>Registered children</span><b>1,248</b>
            <em>+42 this week</em></div>
          </div>
        </div>
        <div class="col-md-6 col-xl-3">
          <div class="stat">
            <span class="ic c2"><i class="fa-solid fa-inbox"></i></span>
            <div><span>Pending requests</span><b>17</b></div>
          </div>
        </div>
        <div class="col-md-6 col-xl-3">
          <div class="stat">
            <span class="ic c3"><i class="fa-solid fa-hospital"></i></span>
            <div><span>Hospitals</span><b>24</b></div>
          </div>
        </div>
        <div class="col-md-6 col-xl-3">
          <div class="stat">
            <span class="ic c4"><i class="fa-solid fa-syringe"></i></span>
            <div><span>Vaccinated this month</span><b>386</b>
            <em>+12%</em></div>
          </div>
        </div>
      </div>

      <div class="row g-4">
        <div class="col-lg-8">
          <div class="card mb-4">
            <div class="card-body">
              <h5 class="card-title">Vaccinations per month</h5>
              <div class="chart">
            <div class="m"><span style="height:40%"></span>Jun</div>
            <div class="m"><span style="height:55%"></span>Jul</div>
            <div class="m"><span style="height:48%"></span>Aug</div>
            <div class="m"><span style="height:70%"></span>Sep</div>
            <div class="m"><span style="height:62%"></span>Oct</div>
            <div class="m hi"><span style="height:88%"></span>Nov</div>
              </div>
            </div>
          </div>
      <div class="card mb-4">
        <div class="card-body">
          <div class="d-flex justify-content-between align-items-center mb-3"><h5 class="card-title mb-0">Upcoming vaccinations</h5><a class="btn btn-sm btn-outline-primary" href="vaccination-dates.html">View all</a></div>
          <div class="table-responsive">
            <table class="table table-hover align-middle mb-0">
              <thead><tr><th>Child</th><th>Vaccine</th><th>Date</th><th>Time</th></tr></thead>
              <tbody>
            <tr><td>Ali Raza</td><td>Polio (OPV)</td><td>25 Nov 2026</td><td>10:00 AM</td></tr>
            <tr><td>Sara Ahmed</td><td>Measles</td><td>26 Nov 2026</td><td>11:30 AM</td></tr>
            <tr><td>Hamza Khan</td><td>Hepatitis B</td><td>28 Nov 2026</td><td>09:00 AM</td></tr>
              </tbody>
            </table>
          </div>
        </div>
      </div>
        </div>
        <div class="col-lg-4">
          <div class="card mb-4">
            <div class="card-body">
              <h5 class="card-title">Vaccination status</h5>
              <div class="donut"><span>72%</span></div>
              <ul class="legend">
                <li>Vaccinated <b>72%</b></li>
                <li>Upcoming <b>18%</b></li>
                <li>Missed <b>10%</b></li>
              </ul>
            </div>
          </div>
      <div class="card mb-4">
        <div class="card-body">
          <h5 class="card-title">Latest requests</h5>
          <div class="table-responsive">
            <table class="table table-hover align-middle mb-0">
              <thead><tr><th>Parent</th><th>Status</th></tr></thead>
              <tbody>
            <tr><td>Ayesha Khan</td><td><span class="badge b-warn">Pending</span></td></tr>
            <tr><td>Bilal Shah</td><td><span class="badge b-ok">Approved</span></td></tr>
            <tr><td>Ahmed Ali</td><td><span class="badge b-bad">Rejected</span></td></tr>
              </tbody>
            </table>
          </div>
        </div>
      </div>
        </div>
      </div>

    </div>
  </div>
</div>

</body>
</html>
