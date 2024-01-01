<?php include "confi.php"; ?>
<?php
// session_start();

// if ($_SESSION['username']) {
//     $username = $_SESSION['username'];
// } else {
//     header("Location: tables.php");
// }
?>
<?php

if (isset($_POST['save'])) {
    extract($_POST);
    if ($username !== '') {
        $up = "update one set 
  firstname='" . $firstname . "',
    lastname='" . $lastname . "',
     email='" . $email . "',
     contact='" . $contact . "',
     gender='" . $gender . "',
     country='" . $country . "',
     city='" . $city . "',
     state='" . $state . "'
     address='" . $address . "'
    where id='" . $_GET['u_id'] . "'";
    } else {
        $up = "update one set 
       firstname='" . $firstname . "',
       lastname='" . $lastname . "',
       email='" . $email . "',
       contact='" . $contact . "',
       gender='" . $gender . "',
       country='" . $country . "',
       city='" . $city . "',
       state='" . $state . "'
       address='" . $address . "'
    where id='" . $_GET['u_id'] . "'";
    }
    $result = mysqli_query($conn, $up) or die(mysqli_error($conn));
    if ($result) {
        echo "<script>";
        echo "alert('Updated Successfully..!!');";
        echo "window.location.href='tables.php';";
        echo "</script>";
    } else {
        echo "<script>";
        echo "alert('error in update');";
        echo "window.location.href='form.php';";
        echo "</script>";
    }
}
?>
<?php include "header.php"; ?>

    <!-- Start Header form -->
    <div class="text-center pt-5">
        <!-- <img src="https://i.ibb.co/8cDgdFX/Logo.png" alt="network-logo" width="72" height="72" /> -->
        <h2>Enter Your Student Details</h2>

    </div>
    <!-- End Header form -->

    <!-- Start Card -->
    <div class="card">
        <!-- Start Card Body -->
        <div class="card-body">
            <!-- Start Form -->
            <?php
            if (isset($_GET['u_id'])) {
                $abc = mysqli_query($conn, "select * from one where id='" . $_GET['u_id'] . "'");

                while ($fetch = mysqli_fetch_array($abc)) {

                    ?>
                    <form id="bookingForm" action="" method="post" accept-charset="utf-8" class="needs-validation" novalidate
                        autocomplete="off">
                        <!-- Start Input Name -->
                        <div class="form-group">
                            <label for="inputName">First Name</label>
                            <input type="text" class="form-control" id="inputName" name="firstname"
                                value="<?php echo $fetch['firstname']; ?>" required />
                            <small class="form-text text-muted"></small>
                        </div>
                        <div class="form-group">
                            <label for="inputName">Last Name</label>
                            <input type="text" class="form-control" id="inputName" name="lastname"
                                value="<?php echo $fetch['lastname']; ?>" required />
                            <small class="form-text text-muted"></small>
                        </div>
                        <div class="form-group">
                            <label for="inputName">Email</label>
                            <input type="email" class="form-control" id="inputName" name="email"
                                value="<?php echo $fetch['email']; ?>" required />
                            <small class="form-text text-muted"></small>
                        </div>
                        <div class="form-group">
                            <label for="inputName">Contact</label>
                            <input type="text" class="form-control" id="inputName" name="contact"
                                value="<?php echo $fetch['contact']; ?>" required />
                            <small class="form-text text-muted"></small>
                        </div>
                        <div class="form-group">
                            <label for="inputName">Gender</label>
                            <!-- <input type="text" class="form-control" id="inputName" name="gender" -->

                            <BR />
                            Male
                            <input type="radio" name="gender" value="Male" <?php if ($fetch['gender'] == "Male") {
                                echo "checked";
                            } ?> />

                            <BR />

                            Female
                            <input type="radio" name="gender" value="Female" <?php if ($fetch['gender'] == "Female") {
                                echo "checked";
                            } ?> />
                            <BR />
                            Other
                            <input type="radio" name="gender" value="Other" <?php if ($fetch['gender'] == "Other") {
                                echo "checked";
                            } ?> />

                        </div>
                        <div class="form-group">
                            <label for="inputName">Country</label>
                            <input type="text" class="form-control" id="inputName" name="country"
                                value="<?php echo $fetch['country']; ?>" required />
                            <small class="form-text text-muted"></small>
                        </div>
                        <div class="form-group">
                            <label for="inputName">State</label>
                            <input type="text" class="form-control" id="inputName" name="state"
                                value="<?php echo $fetch['state']; ?>" required />
                            <small class="form-text text-muted"></small>
                        </div>
                        <div class="form-group">
                            <label for="inputName">City</label>
                            <input type="text" class="form-control" id="inputName" name="city"
                                value="<?php echo $fetch['city']; ?>" required />
                            <small class="form-text text-muted"></small>
                        </div>
                        <div class="form-group">
                            <label for="inputName">Address</label>
                            <input type="textarea" class="form-control" id="inputName" name="address"
                                value="<?php echo $fetch['address']; ?>" required />
                            <small class="form-text text-muted"></small>
                        </div>
                        <!-- End Input Name -->
                        <br>
                        <button class="btn btn-primary btn-block col-lg-2 mb-5" name="save" type="submit">Submit</button>

                    <?php }
            } ?>
            <?php include "footer.php"; ?>

                