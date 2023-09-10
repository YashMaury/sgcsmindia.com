<?php
include "include/header.php";
$url = $URL . "student/read_students_detail.php";
$data = array();
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
                    <th>Name</th>
                    <th>Email</th>
                    <th>Phone</th>
                    <th>Course</th>
                    <th>Registered On</th>
                    <th>Action</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>

                    <?php
                    $counter = 0;
                    foreach ($result as $key => $value) {
                      foreach ($value as $key1 => $value1) {
                        ?>

                        <td>
                          <div class="d-flex align-items-center">
                            <img src="assets/images/avatar/avatar-1.jpg" alt="" class="avatar avatar-xs rounded-circle">
                            <div class="ms-2">
                              <a class="text-inherit">
                                <?php echo $value1->student_name; ?>
                              </a>
                            </div>
                          </div>
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
                          <button class="btn btn-sm btn-danger"><i class="bi bi-trash me-3"></i>Delete</button>
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