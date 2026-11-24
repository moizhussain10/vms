<?php
include("../Parent-Includes/header.php");

if (isset($_POST['savechild'])) {
  $parent_id = $_SESSION['parent_id'];
  $cname = $_POST['Cname'];
  $cdob = $_POST['Cdob'];
  $cgender = $_POST['Cgender'];
  $cbloodgroup = $_POST['Cbloodgroup'];
  $cweight = $_POST['Cweight'];
  $cnotes = $_POST['Cnotes'];

  $insert = "INSERT INTO children (parent_id, child_name, date_of_birth, gender, blood_group, weight_kg, notes_allergies)
             VALUES ('$parent_id', '$cname', '$cdob', '$cgender', '$cbloodgroup', '$cweight', '$cnotes')";

  $result = mysqli_query($conn, $insert);

  if ($result) {
    echo "<script>alert('Child details saved successfully.');</script>";
  } else {
    echo "<script>alert('Failed to save child details.');</script>";
  }
}

$parent_id = $_SESSION['parent_id'];
$select = "SELECT * FROM children WHERE parent_id = '$parent_id'";
$children_result = mysqli_query($conn, $select);
?>


<!-- Page content -->
<div class="wrap">

  <div class="card mb-4">
    <div class="card-body">
      <h5 class="card-title">Add / update child</h5>
      <form method="post">
        <div class="row g-3 mb-3">
          <div class="col-md-6"><label class="form-label">Child name</label><input type="text" class="form-control"
              name="Cname"></div>
          <div class="col-md-6"><label class="form-label">Date of birth</label><input type="date" class="form-control"
              name="Cdob"></div>
        </div>
        <div class="row g-3 mb-3">
          <div class="col-md-6"><label class="form-label">Gender</label><select class="form-select" name="Cgender">
              <option>Male</option>
              <option>Female</option>
            </select></div>
          <div class="col-md-6"><label class="form-label">Blood group</label><input type="text" class="form-control"
              name="Cbloodgroup"></div>
        </div>
        <div class="row g-3 mb-3">
          <div class="col-md-6"><label class="form-label">Weight (kg)</label><input type="text" class="form-control"
              name="Cweight"></div>
          <div class="col-md-6"><label class="form-label">Notes / allergies</label><input type="text"
              class="form-control" name="Cnotes"></div>
        </div>
        <button type="submit" class="btn btn-primary" name="savechild">Save child</button>
      </form>
    </div>
  </div>

  <div class="card mb-4">
    <div class="card-body">
      <h5 class="card-title">My children</h5>
      <div class="table-responsive">
        <table class="table table-hover align-middle mb-0">
          <thead>
            <tr>
              <th>Name</th>
              <th>Date of birth</th>
              <th>Gender</th>
              <th>Action</th>
            </tr>
          </thead>
          <tbody>
            <?php
            if (mysqli_num_rows($children_result) > 0) {
              while ($row = mysqli_fetch_assoc($children_result)) {
                ?>
                <tr>
                  <td><?php echo $row['child_name']; ?></td>
                  <td><?php echo $row['date_of_birth']; ?></td>
                  <td><?php echo $row['gender']; ?></td>
                  <td><a href="edit-child.php?id=<?php echo $row['id']; ?>" class="btn btn-sm btn-primary">Edit</a></td>
                </tr>
                <?php
              }
            } else {
              ?>
              <tr>
                <td colspan="4" class="text-center text-secondary">No child record found.</td>
              </tr>
              <?php
            }
            ?>
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