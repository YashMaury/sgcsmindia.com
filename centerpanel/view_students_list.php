<?php
include "include/header.php";
$url = $URL . "student/read_students_detail.php";
$franchise_id = $_SESSION['FRANCHISE_ID'];
$data = array("franchise_id" => $franchise_id);
//print_r($data);
$postdata = json_encode($data);
$client = curl_init($url);
curl_setopt($client, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($client, CURLOPT_POSTFIELDS, $postdata);
$response = curl_exec($client);
//print_r($response);
$result = json_decode($response);
//print_r($result);
?>

<main class="main-content-wrapper">
  <div class="container">
    <div class="row mb-8">
      <div class="col-md-12">
        <div class="d-md-flex justify-content-between align-items-center">
          <div>
            <h2>Registered Students List</h2>
            <!-- breacrumb -->
            <nav aria-label="breadcrumb">
              <ol class="breadcrumb mb-0">
                <li class="breadcrumb-item"><a href="index.php" class="text-inherit">Dashboard</a></li>
                <li class="breadcrumb-item active" aria-current="page">Registered Students List</li>
              </ol>
            </nav>
          </div>
        </div>
      </div>
    </div>
    <div class="row ">
      <div class="col-xl-12 col-12 mb-5">
        <div class="card h-100 card-lg py-5">

          <div class="card-body p-0 ">

            <div class="table-responsive">
              <table class="table table-centered table-hover table-borderless mb-0 table-with-checkbox text-nowrap"
                id="DataTable">
                <thead class="bg-light">
                  <tr>
                    <th>Sr no.</th>
                    <th>Image</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Phone</th>
                    <th>Course</th>
                    <th>Registered On</th>
                    <th>Edit</th>
                    <th>Delete</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>

                    <?php
                    $counter = 0;
                    foreach ($result as $key => $value) {
                      foreach ($value as $key1 => $value1) {
                        ++$counter;
                        $student_profile_image = $STUDENT_IMG_PATH . $value1->id . "/" . $value1->student_name . ".png";
                        ?>

                        <td>
                          <?php echo $counter; ?>
                        </td>
                        <td>
                          <a href="<?php echo $student_profile_image; ?>" data-toggle="lightbox"
                            data-gallery="admin-image-gallery" data-caption="<?php echo $value1->student_name; ?>">
                            <img src="<?php echo $student_profile_image; ?>" alt="" class="img-fluid">
                          </a>
                        </td>
                        <td>
                          <?php echo $value1->student_name; ?>
                          <?php echo $value1->id; ?>
                        </td>

                        <td>
                          <?php echo $value1->student_email; ?>
                        </td>
                        <td>
                          <?php echo $value1->student_mobile; ?>
                        </td>
                        <td>
                          <?php echo $value1->course; ?>
                        </td>
                        <td>
                          <?php echo date("d-M-Y", strtotime($value1->createdOn)); ?>
                        </td>

                        <td>
                          <form action="action/update_student_post.php" method="post">
                            <input type="hidden" name="id" value="<?php echo $value1->id; ?>">
                            <input type="hidden" name="franchise_id" value="<?php echo $value1->franchise_id; ?>">
                            <input type="hidden" name="student_name" value="<?php echo $value1->student_name; ?>">
                            <input type="hidden" name="student_mobile" value="<?php echo $value1->student_mobile; ?>">
                            <input type="hidden" name="course" value="<?php echo $value1->course; ?>">
                            <input type="hidden" name="student_email" value="<?php echo $value1->student_email; ?>">
                            <input type="hidden" name="student_password" value="<?php echo $value1->student_password; ?>">
                            <button class="btn btn-sm btn-info" type="submit" name="update_student"><i class="bi bi-pencil me-3"></i>Edit</button>
                          </form>
                        </td>

                        <td>
                          <form action="action/student_delete_post.php" method="post">
                            <input type="hidden" name="id" value="<?php echo $value1->id; ?>">
                            <input type="hidden" name="student_name" value="<?php echo $value1->student_name; ?>">
                            <button class="btn btn-sm btn-danger" name="delete" type="submit">
                              <i class="bi bi-trash me-3"></i>Delete</button>
                          </form>
                        </td>

                      </tr>

                    <?php }
                    } ?>

                </tbody>
              </table>

            </div>

          </div>

        </div>

      </div>
    </div>
  </div>
</main>

</div>

<?php include "include/footer.php"; ?>