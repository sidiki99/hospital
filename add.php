<?php
include "header.php";      // your header file
include "database.php";  // database connection
?>

<div class="container mt-4">
  <div class="row">
    <div class="col-lg-6 col-md-8 mx-auto">
      <div class="card shadow">
        <div class="card-header bg-primary text-white">
          <h4>Add New Employee</h4>
        </div>
        <div class="card-body">

          <!-- Form -->
          <form method="POST">
            <div class="mb-3">
              <label class="form-label">Name</label>
              <input type="text" name="name" class="form-control" required>
            </div>

            <div class="mb-3">
              <label class="form-label">Email</label>
              <input type="email" name="email" class="form-control" required>
            </div>

            <div class="mb-3">
              <label class="form-label">Designation</label>
              <input type="text" name="designation" class="form-control" required>
            </div>

            <button type="submit" name="submit" class="btn btn-success">Add Employee</button>
          </form>

          <!-- PHP Insert Logic -->
          <?php
          if (isset($_POST['submit'])) {
              $name = $_POST['name'];
              $email = $_POST['email'];
              $designation = $_POST['designation'];

              try {
                  $sql = "INSERT INTO employee (name, email, designation)
                          VALUES (:name, :email, :designation)";
                  $stmt = $conn->prepare($sql);
                  $stmt->bindParam(':name', $name);
                  $stmt->bindParam(':email', $email);
                  $stmt->bindParam(':designation', $designation);

                  if ($stmt->execute()) {
                      echo "<div class='alert alert-success mt-3'>✅ Employee added successfully!</div>";
                  } else {
                      echo "<div class='alert alert-danger mt-3'>❌ Error adding employee.</div>";
                  }
              } catch (PDOException $e) {
                  echo "<div class='alert alert-danger mt-3'>Database error: " . $e->getMessage() . "</div>";
              }
          }
          ?>
        </div>
      </div>
    </div>
  </div>
</div>

<?php
include "footer.php";   // your footer file
?>
