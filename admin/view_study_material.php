<?php
include "include/header.php";
$url = $URL . "studymaterial/read_studymaterial.php";
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


<!-- main wrapper -->
<main class="main-content-wrapper">
  <div class="container">
    <!-- row -->
    <div class="row mb-8">
      <div class="col-md-12">
        <!-- page header -->
        <div>
          <h2>Order List</h2>
          <!-- breacrumb -->
          <nav aria-label="breadcrumb">
            <ol class="breadcrumb mb-0">
              <li class="breadcrumb-item"><a href="index.php">Dashboard</a></li>
              <li class="breadcrumb-item active" aria-current="page">Order List</li>
            </ol>
          </nav>

        </div>
      </div>
    </div>
    <!-- row -->
    <div class="row">
      <div class="col-xl-12 col-12 mb-5">
        <!-- card -->
        <div class="card h-100 card-lg py-5">
          <div class="card-body p-0">
            <!-- table responsive -->
            <div class="table-responsive">
              <table class="table table-centered table-hover text-nowrap table-borderless mb-0 table-with-checkbox"
                id="DataTable">
                <thead class="bg-light">
                  <tr>
                    <th>S.N</th>
                    <th>Title</th>
                    <th>Description</th>
                    <th>Material</th>
                    <th>Created On</th>
                    <th>Actions</th>
                  </tr>
                </thead>
                <tbody>

                  <?php
                  $counter = 0;
                  foreach ($result as $key => $value) {
                    foreach ($value as $key1 => $value1) {
                      ?>
                      <tr>

                        <td>
                          <?php echo ++$counter; ?>
                        </td>

                        <td>
                          <?php echo $value1->materialTitle; ?>
                        </td>

                        <td>
                          <?php echo $value1->materialDescription; ?>
                        </td>

                        <td>
                          <a href="gallery/studyMaterial/<?php echo $value1->id; ?>/<?php echo $value1->id; ?>.pdf"
                            target="_blank">
                            <img src="assets/images/app/pdf.png" alt="View Pdf"> View Pdf
                          </a>
                        </td>

                        <td>
                          <?php echo date("d-m-Y", strtotime($value1->createdOn)); ?>
                        </td>

                        <td>
                          <form action="action/delete_studymaterial_post.php" method="post">
                            <input type="hidden" name="id" value="<?php echo $value1->id; ?>">
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