<?php include "header.php"; ?>
<!-- End Navbar -->
<div class="container-fluid py-4">
    <div class="row">
        <div class="col-12">
            <div class="card my-4">
                <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
                    <div class="bg-gradient-primary shadow-primary border-radius-lg pt-4 pb-3">
                        <h6 class="text-white text-capitalize ps-3">Student View</h6>
                    </div>
                </div>
                <div class="card-body px-0 pb-2">
                    <div class="table-responsive p-0">
                        <table class="table align-items-center mb-0">
                            <thead>
                                <tr>
                                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                        SR.No</th>
                                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                        First Name</th>
                                    <th
                                        class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">
                                        Last Name</th>
                                    <th
                                        class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                        Email</th>
                                    <th
                                        class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                        Contact</th>
                                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                        Gender</th>
                                    <th
                                        class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">
                                        Country</th>
                                    <th
                                        class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                        City</th>
                                    <th
                                        class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                        State</th>
                                    <th
                                        class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                        Address
                                    </th>
                                    <th
                                        class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                        Action
                                    </th>
                                    <th class="text-secondary opacity-7"></th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <?php include 'fetch_table.php'; ?>

                                    <?php if ($result->num_rows > 0): ?>

                                        <?php while ($array = mysqli_fetch_row($result)): ?>
                                            <td>
                                                <p class="text-xs font-weight-bold mb-0">
                                                    <?php echo $array[0]; ?>
                                                </p>
                                            </td>

                                            <td class="align-middle text-center text-sm">
                                                <span class="text-secondary text-xs font-weight-bold">
                                                    <?php echo $array[1]; ?>
                                                </span>
                                            </td>
                                            <td class="align-middle text-center text-sm">
                                                <span class="text-secondary text-xs font-weight-bold">
                                                    <?php echo $array[2]; ?>
                                                </span>
                                            </td>
                                            <td class="align-middle text-center">
                                                <span class="text-secondary text-xs font-weight-bold">
                                                    <?php echo $array[3]; ?>
                                                </span>
                                            </td>
                                            <td class="align-middle text-center text-sm">
                                                <span class="text-secondary text-xs font-weight-bold">
                                                    <?php echo $array[4]; ?>
                                                </span>
                                            </td>
                                            <td class="align-middle text-center">
                                                <span class="text-secondary text-xs font-weight-bold">
                                                    <?php echo $array[5]; ?>
                                                </span>
                                            </td>
                                            <td class="align-middle text-center text-sm">
                                                <span class="text-secondary text-xs font-weight-bold">
                                                    <?php echo $array[6]; ?>
                                                </span>
                                            </td>
                                            <td class="align-middle text-center">
                                                <span class="text-secondary text-xs font-weight-bold">
                                                    <?php echo $array[7]; ?>
                                                </span>
                                            </td>
                                            <td class="align-middle text-center text-sm">
                                                <span class="text-secondary text-xs font-weight-bold">
                                                    <?php echo $array[8]; ?>
                                                </span>
                                            </td>
                                            <td class="align-middle text-center">
                                                <span class="text-secondary text-xs font-weight-bold">
                                                    <?php echo $array[9]; ?>
                                                </span>
                                            </td>
                                            <td> <a class="btn btn-link text-dark px-2 mb-0"
                                                    href="edit.php?u_id=<?php echo $array[0]; ?>" title="Edit"
                                                    onclick="return confirm('Are you sure you want to Update this Notes?');"><i
                                                        class="material-icons text-sm me-2">edit</i></a></td>
                                            <!-- <td> <a class="btn btn-link text-danger text-gradient px-2 mb-0" href="delete.php"><i class="material-icons text-sm me-2">delete</i></a></td> -->
                                            <td> <a class="btn btn-link text-danger px-2 mb-0"
                                                    href="delete.php?u_id=<?php echo $array[0]; ?>" title="Delete"
                                                    onclick="return confirm('Are you sure you want to Delete this Notes?');"><i
                                                        class="material-icons text-sm me-2">delete</i></a></td>
                                        </tr>
                                        <tr>
                                        <?php endwhile; ?>

                                    <?php else: ?>
                                    <tr>
                                        <td colspan="5" rowspan="1" headers="">No Data Found</td>
                                    </tr>
                                <?php endif; ?>

                                <?php mysqli_free_result($result); ?>

                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <?php include "footer.php"; ?>