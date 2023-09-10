<?php
include "include/header.php";
$status='1';
$url = $URL . "franchise/read_franchise_by_status.php";
$data = array("status"=>$status);
//print_r($data);
$postdata = json_encode($data);
$client = curl_init($url);
curl_setopt($client,CURLOPT_RETURNTRANSFER,1);
//curl_setopt($client, CURLOPT_POST, 5);
curl_setopt($client, CURLOPT_POSTFIELDS, $postdata);
$response = curl_exec($client);
// print_r($response);
$result = json_decode($response);
// print_r($result);
?>

<main class="main-content-wrapper">
  <div class="container">
    <div class="row mb-8">
      <div class="col-md-12">
        <div class="d-md-flex justify-content-between align-items-center">
          <div>
            <h2>Approved Franchise List</h2>
            <!-- breacrumb -->
            <nav aria-label="breadcrumb">
              <ol class="breadcrumb mb-0">
                <li class="breadcrumb-item"><a href="index.php" class="text-inherit">Dashboard</a></li>
                <li class="breadcrumb-item active" aria-current="page">Approved Franchise List</li>
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
                    <th>Name</th>
                    <th>Director Name</th>
                    <th>Email</th>
                    <th>Phone</th>
                    <th>State</th>
                    <th>District</th>
                    <th>Block</th>
                    <th>City</th>
                    <th>Pincode</th>
                    <th>Message</th>
                    <th>Registered On</th>
                    <th>Reject</th>
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
                          <?php echo ++$counter; ?>
                        </td>
                        <td>
                          <a class="text-inherit">
                            <?php echo $value1->center_name; ?>
                          </a>
                        </td>
                        <td>
                          <?php echo $value1->center_director; ?>
                        </td>
                        <td>
                          <?php echo $value1->center_email; ?>
                        </td>
                        <td>
                          <?php echo $value1->center_mobile; ?>
                        </td>
                        <td>
                          <?php echo $value1->center_state; ?>
                        </td>
                        <td>
                          <?php echo $value1->center_district; ?>
                        </td>
                        <td>
                          <?php echo $value1->center_block; ?>
                        </td>
                        <td>
                          <?php echo $value1->center_city; ?>
                        </td>
                        <td>
                          <?php echo $value1->center_pincode; ?>
                        </td>
                        <td>
                          <?php echo $value1->center_message; ?>
                        </td>
                        <td>
                          <?php echo date("d-M-Y", strtotime($value1->createdOn)); ?>
                        </td>

                        <td>
                          <form action="action/reject_franchise_post.php" method="post">
                            <input type="hidden" name="franchise_id" value="<?php echo $value1->id ?>">
                            <button type="submit" name="submit" class="btn btn-sm btn-danger"><i
                                class="bi bi-trash me-3"></i>Reject</button>
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