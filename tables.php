<?php include "confi.php"; ?>
<?php
// session_start();

// if ($_SESSION['username']) {
//   $username = $_SESSION['username'];
// } else {
//   header("Location: forms.php");
// }
?>
<?php include "header.php"; ?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Student_Table</title>
  <meta name="description" content="">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="robots" content="all,follow">
  <!-- Google fonts - Poppins -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins:300,400,700">
  <!-- Choices CSS-->
  <link rel="stylesheet" href="vendor/choices.js/public/assets/styles/choices.min.css">
  <!-- theme stylesheet-->
  <link rel="stylesheet" href="css/style.default.css" id="theme-stylesheet">
  <!-- Custom stylesheet - for your changes-->
  <link rel="stylesheet" href="css/custom.css">
  <!-- Favicon-->
  <link rel="shortcut icon" href="img/favicon.ico">
  <!-- Tweaks for older IEs--><!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script><![endif]-->
</head>

<body>
  <div class="page">
    <div class="page-content d-flex align-items-stretch">
      <section class="tables">
        <div class="container-fluid">
          <div class="row gy-4">
            <div class="col-lg-11">
              <div class="card mb-0">
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
                  <h3 class="h4 mb-0">Striped table with hover effect</h3>
                </div>
                <div class="card-body">
                  <div class="table-responsive">
                    <table class="table mb-0 table-striped table-hover">
                      <thead>
                        <tr>
                          <th scope="col">#</th>
                          <th scope="col">First Name</th>
                          <th scope="col">Last Name</th>
                          <th scope="col">Email</th>
                          <th scope="col">Contact</th>
                          <th scope="col">Gender</th>
                          <th scope="col">Country</th>
                          <th scope="col">State</th>
                          <th scope="col">City</th>
                          <th scope="col">Address</th>
                          <th scope="col">message</th>

                          <th scope="col" colspan="2">Action</th>
                        </tr>
                      </thead>
                      <tbody>
                        <?php include 'fetch_table.php'; ?>

                        <?php if ($result->num_rows > 0): ?>

                          <?php while ($array = mysqli_fetch_row($result)): ?>

                            <tr>
                              <th scope="row">
                                <?php echo $array[0]; ?>
                              </th>
                              <td>
                                <?php echo $array[1]; ?>
                              </td>
                              <td>
                                <?php echo $array[2]; ?>
                              </td>
                              <td>
                                <?php echo $array[3]; ?>
                              </td>
                              <td>
                                <?php echo $array[4]; ?>
                              </td>
                              <td>
                                <?php echo $array[5]; ?>
                              </td>
                              <td>
                                <?php echo $array[6]; ?>
                              </td>
                              <td>
                                <?php echo $array[7]; ?>
                              </td>
                              <td>
                                <?php echo $array[8]; ?>
                              </td>
                              <td>
                                <?php echo $array[9]; ?>
                              </td>
                              <td>
                                <?php echo $array[10]; ?>
                              </td>

                              <!-- <div class="ms-auto text-end"> -->
                              <td> <a class="btn btn-link text-dark px-2 mb-0" href="Edit.php?u_id=<?php echo $array[0]; ?>"
                                  title="Edit" onclick="return confirm('Are you sure you want to Update this Notes?');"><i
                                    class="material-icons text-sm me-2">edit</i></a></td>
                              <!-- <td> <a class="btn btn-link text-danger text-gradient px-2 mb-0" href="delete.php"><i class="material-icons text-sm me-2">delete</i></a></td> -->
                              <td> <a class="btn btn-link text-danger px-2 mb-0"
                                  href="Delete.php?u_id=<?php echo $array[0]; ?>" title="Delete"
                                  onclick="return confirm('Are you sure you want to Delete this Notes?');"><i
                                    class="material-icons text-sm me-2">delete</i></a></td>
                              <!-- </div> -->
                            </tr>

                          <?php endwhile; ?>

                        <?php else: ?>
                          <tr>
                            <td colspan="5" rowspan="1" headers="">No Data Found</td>
                          </tr>
                        <?php endif; ?>

                        <?php mysqli_free_result($result); ?>

                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
    </div>
  </div>
  </div>
  <!-- JavaScript files-->
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="vendor/chart.js/Chart.min.js"></script>
  <script src="vendor/just-validate/js/just-validate.min.js"></script>
  <script src="vendor/choices.js/public/assets/scripts/choices.min.js"></script>
  <!-- Main File-->
  <script src="js/front.js"></script>
  <script>
    // ------------------------------------------------------- //
    //   Inject SVG Sprite - 
    //   see more here 
    //   https://css-tricks.com/ajaxing-svg-sprite/
    // ------------------------------------------------------ //
    function injectSvgSprite(path) {

      var ajax = new XMLHttpRequest();
      ajax.open("GET", path, true);
      ajax.send();
      ajax.onload = function (e) {
        var div = document.createElement("div");
        div.className = 'd-none';
        div.innerHTML = ajax.responseText;
        document.body.insertBefore(div, document.body.childNodes[0]);
      }
    }
    // this is set to BootstrapTemple website as you cannot 
    // inject local SVG sprite (using only 'icons/orion-svg-sprite.svg' path)
    // while using file:// protocol
    // pls don't forget to change to your domain :)
    injectSvgSprite('https://bootstraptemple.com/files/icons/orion-svg-sprite.svg');


  </script>
  <!-- FontAwesome CSS - loading as last, so it doesn't block rendering-->
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css"
    integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
</body>

</html>