<?php
if (isset($_POST['login'])) {
  include '../config/db.php';
  $email = $_POST['email'];
  $password = $_POST['password'];

  $query = "SELECT * FROM AdminLogin WHERE email = '$email' AND password = '$password'";
  $result = mysqli_query($conn, $query);

  if (mysqli_num_rows($result) == 1) {
    // Successful login
    header("Location: dashboard.php");
    exit();
  } else {
    // Invalid credentials
    echo "<script>alert('Invalid email or password.');</script>";
  }
}


?>


<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Parent login | VaccineCare</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
  <link
    href="https://fonts.googleapis.com/css2?family=Bricolage+Grotesque:wght@600;800&family=Figtree:wght@400;500;600;700;800&display=swap"
    rel="stylesheet">
  <link rel="stylesheet" href="../assets/style.css">
</head>

<body>

  <div class="row g-0 min-vh-100">

    <!-- Left blue panel -->
    <div class="col-lg-6 d-none d-lg-flex art-panel">
      <div class="brand"><span class="logo"><i class="fa-solid fa-shield-heart"></i></span> VaccineCare</div>
      <div>
        <h2>No child should miss a vaccine.</h2>
        <p>Register your child, get reminders for every dose and book a hospital in a few clicks.</p>
        <div class="pts">
          <span><i class="fa-regular fa-bell"></i> Dashboard reminders for upcoming doses</span>
          <span><i class="fa-solid fa-hospital"></i> Book approved hospitals near you</span>
          <span><i class="fa-solid fa-file-lines"></i> Full vaccination history in one place</span>
        </div>
      </div>
      <div></div>
    </div>

    <!-- Right form -->
    <div class="col-lg-6 d-flex align-items-center justify-content-center p-4 bg-white">
      <div class="auth w-100">
        <h1>Parent login</h1>
        <p class="text-secondary mb-4">Sign in to see upcoming vaccinations.</p>
        <form method="post">
          <div class="mb-3"><label class="form-label">Email</label><input type="email" class="form-control" name="email"></div>
          <div class="mb-3"><label class="form-label">Password</label><input type="password" class="form-control" name="password"></div>
          <button class="btn btn-primary w-100 mt-2" name="login">Sign in</button>
        </form>
        <p class="text-center text-secondary mt-4">New here? <a href="register.html" class="fw-bold">Create an
            account</a></p>
      </div>
    </div>

  </div>

</body>

</html>