<?php

include("../Parent-Includes/header.php");

$parent_id = $_SESSION['parent_id'];
$select = "SELECT * FROM children WHERE parent_id = '$parent_id'";
$children_result = mysqli_query($conn, $select);
?>



<!-- Page content -->
<div class="wrap">

  <div class="hero">
    <div>
      <h2>Hello Ayesha, your child's next dose is coming up</h2>
      <p>Hepatitis B on 28 Nov 2026 at 09:00 AM. Book a hospital now so you do not miss it.</p>
      <a class="btn" href="book-hospital.php">Book hospital</a>
    </div>
    <i class="fa-solid fa-shield-heart hero-icon"></i>
  </div>

  <div class="row g-3 mb-4">
    <div class="col-md-6 col-xl-3">
      <div class="stat">
        <span class="ic "><i class="fa-solid fa-heart"></i></span>
        <div><span>My children</span><b><?php echo mysqli_num_rows($children_result); ?></b></div>
      </div>
    </div>
    <div class="col-md-6 col-xl-3">
      <div class="stat">
        <span class="ic c2"><i class="fa-solid fa-calendar-days"></i></span>
        <div><span>Upcoming vaccines</span><b>3</b></div>
      </div>
    </div>
    <div class="col-md-6 col-xl-3">
      <div class="stat">
        <span class="ic c4"><i class="fa-solid fa-syringe"></i></span>
        <div><span>Vaccines taken</span><b>7</b></div>
      </div>
    </div>
    <div class="col-md-6 col-xl-3">
      <div class="stat">
        <span class="ic c3"><i class="fa-solid fa-inbox"></i></span>
        <div><span>Pending requests</span><b>1</b></div>
      </div>
    </div>
  </div>

  <div class="row g-4">
    <div class="col-lg-7">
      <div class="card">
        <div class="card-body">
          <h5 class="card-title">Vaccination schedule: Hamza Khan</h5>
          <ul class="tl">
            <li><b>BCG</b><small>25 Mar 2026 - Vaccinated</small></li>
            <li><b>Polio (OPV) dose 1</b><small>20 May 2026 - Vaccinated</small></li>
            <li class="n"><b>Hepatitis B</b><small>28 Nov 2026 - Due soon</small></li>
            <li class="f"><b>Polio (OPV) dose 2</b><small>20 Dec 2026 - Upcoming</small></li>
          </ul>
        </div>
      </div>
    </div>
    <div class="col-lg-5">
      <div class="card mb-4">
        <div class="card-body">
          <h5 class="card-title">Immunisation progress</h5>
          <small>Hamza Khan</small>
          <div class="progress">
            <div class="progress-bar" style="width: 50%"></div>
          </div>
          <small>Hira Khan</small>
          <div class="progress mb-0">
            <div class="progress-bar" style="width: 80%"></div>
          </div>
        </div>
      </div>
      <div class="notice"><i class="fa-regular fa-bell"></i><span>Reminder: carry the child's vaccination card to the
          hospital.</span></div>
    </div>
  </div>

</div>
</div>
</div>

</body>

</html>