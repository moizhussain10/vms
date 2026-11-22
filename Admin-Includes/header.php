<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Dashboard | VaccineCare</title>
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
    <div class="role">Admin Panel</div>
    <a href="dashboard.php" class="on"><i class="fa-solid fa-house"></i> Dashboard</a>
    <a href="children.php"><i class="fa-solid fa-users"></i> All Children</a>
    <a href="vaccination-dates.php"><i class="fa-solid fa-calendar-days"></i> Vaccination Dates</a>
    <a href="reports.php"><i class="fa-solid fa-file-lines"></i> Reports</a>
    <a href="vaccines.php"><i class="fa-solid fa-syringe"></i> Vaccine Availability</a>
    <a href="requests.php"><i class="fa-solid fa-inbox"></i> Parent Requests</a>
    <a href="add-hospital.php"><i class="fa-solid fa-plus"></i> Add Hospital</a>
    <a href="hospitals.php"><i class="fa-solid fa-hospital"></i> List of Hospitals</a>
    <a href="bookings.php"><i class="fa-solid fa-clipboard-list"></i> Booking Details</a>

    <div class="gap"></div>
    <div class="help"><b>Every dose counts</b>Keep every child protected and on schedule.</div>
    <a class="out" href="../index.html"><i class="fa-solid fa-right-from-bracket"></i> Logout</a>
  </div>

  <!-- Main area -->
  <div class="main flex-grow-1">

    <!-- Top bar -->
    <div class="top">
      <div>
        <h1>Dashboard</h1>
        <small>Monday, 23 November 2026</small>
      </div>
      <div class="d-flex align-items-center gap-3">
        <label class="sbox"><i class="fa-solid fa-magnifying-glass"></i><input placeholder="Search..."></label>
        <span class="bell"><i class="fa-regular fa-bell"></i></span>
        <div class="me d-flex align-items-center gap-2 fw-bold">
          <span class="av">AD</span>
          <div>Admin<small>Admin Panel</small></div>
        </div>
      </div>
    </div>