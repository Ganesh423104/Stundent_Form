<?php include "confi.php"; ?>
<?php
// session_start();

// if ($_SESSION['username']) {
//   $username = $_SESSION['username'];
// } else {
//   header("Location: login.php");
// }
?>
<?php include "header.php" ?>

<?php
if (isset($_POST['save'])) {
  extract($_POST);

  $sql = "INSERT INTO one(firstname,lastname,email,contact,gender,country,city,state,address)
	 VALUES('$firstname','$lastname','$email','$contact','$gender','$country','$city','$state','$address')";
  if (mysqli_query($conn, $sql)) {
    echo "<script>";
    echo "alert('New Student record created successfully !');";
    echo 'window.location.href="tables.php";';
    echo "</script>";
  } else {
    echo "Error: " . $sql . " " . mysqli_error($conn);
  }
  mysqli_close($conn);
}
?>

<div class="page">
    <div class="page">
      <section class="forms">
        <div class="container-fluid">
          <div class="row">
            <div class="col-lg-12">
              <div class="card">
                <div class="card-header">
                  <div class="card-close">
                    <div class="dropdown">
                      <button class="dropdown-toggle text-sm" type="button" id="closeCard1" data-bs-toggle="dropdown"
                        aria-expanded="false"><i class="fas fa-ellipsis-v"></i></button>
                      <div class="dropdown-menu dropdown-menu-end shadow-sm" aria-labelledby="closeCard1"><a
                          class="dropdown-item py-1 px-3 remove" href="#"> <i class="fas fa-times"></i>Close</a><a
                          class="dropdown-item py-1 px-3 edit" href="#"> <i class="fas fa-cog"></i>Edit</a></div>
                    </div>
                  </div>
                  <h3 class="h1 text-center mb-0"> Enter Your Student Details</h3>
                </div>
                <div class="card-body">
                  <form method="post">
                    <div class="row">
                      <label class="col-sm-3 form-label">First Name</label>
                      <div class="col-sm-9">
                        <input class="form-control" type="text" name="firstname">
                      </div>
                    </div>
                    <div class="border-bottom my-5 border-gray-200"></div>
                    <div class="row">
                      <label class="col-sm-3 form-label">Last Name</label>
                      <div class="col-sm-9">
                        <input class="form-control" type="text" name="lastname">
                      </div>
                    </div>
                    <div class="border-bottom my-5 border-gray-200"></div>
                    <div class="row">
                      <label class="col-sm-3 form-label">Email</label>
                      <div class="col-sm-9">
                        <input class="form-control" type="text" name="email">
                      </div>
                    </div>
                    <div class="border-bottom my-5 border-gray-200"></div>
                    <div class="row">
                      <label class="col-sm-3 form-label">Contact</label>
                      <div class="col-sm-9">
                        <input class="form-control" type="text" name="contact">
                      </div>
                    </div>
                    <div class="border-bottom my-5 border-gray-200"></div>
                    <div class="row">
                      <label class="col-sm-3 form-label">Gender</label>
                      <div class="col-sm-9">
                        <div class="form-check">
                          <input class="form-check-input" id="defaultRadio0" type="radio" name="gender" checked>
                          <label class="form-check-label" for="defaultRadio0">Male</label>
                        </div>
                        <div class="form-check">
                          <input class="form-check-input" id="defaultRadio1" type="radio" name="gender" checked>
                          <label class="form-check-label" for="defaultRadio1">Female</label>
                        </div>
                        <div class="form-check">
                          <input class="form-check-input" id="defaultRadio1" type="radio" name="gender" checked>
                          <label class="form-check-label" for="defaultRadio1">Other</label>
                        </div>
                      </div>
                    </div>
                    <div class="border-bottom my-5 border-gray-200"></div>
                    <div class="row">
                      <label class="col-sm-3 form-label">Country</label>
                      <div class="col-sm-9">
                        <input class="form-control" type="text" name="country">
                      </div>
                    </div>
                    <div class="border-bottom my-5 border-gray-200"></div>
                    <div class="row">
                      <label class="col-sm-3 form-label">State</label>
                      <div class="col-sm-9">
                        <input class="form-control" type="text" name="state">
                      </div>
                    </div>
                    <div class="border-bottom my-5 border-gray-200"></div>
                    <div class="row">
                      <label class="col-sm-3 form-label">City</label>
                      <div class="col-sm-9">
                        <input class="form-control" type="text" name="city">
                      </div>
                    </div>
                    <div class="border-bottom my-5 border-gray-200"></div>
                    <div class="row">
                      <label class="col-sm-3 form-label">Address</label>
                      <div class="col-sm-9">
                        <input class="form-control" type="text" name="address">
                      </div>
                    </div>
                    <div class="border-bottom my-5 border-gray-200"></div>
                    <div class="row">
                      <div class="col-sm-9 ms-auto">
                        <div class="text-start mb-3">
                          <button class="btn btn-secondary" type="reset">Cancel</button>
                          <button type="submit" class="btn btn-primary" name="save">Save Changes</button>
                        </div>
                      </div>
                    </div>
                  </form>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
     <?php include "footer.php"; ?>