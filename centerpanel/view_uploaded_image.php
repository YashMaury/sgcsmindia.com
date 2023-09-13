<?php
include "include/header.php";
$url = $URL . "gallery/read_galley.php";
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


<!-- main wrapper -->
<main class="main-content-wrapper">
  <div class="container">
    <!-- row -->
    <div class="row mb-8">
      <div class="col-md-12">
        <!-- page header -->
        <div>
          <h2>Image Gallery List</h2>
          <!-- breacrumb -->
          <nav aria-label="breadcrumb">
            <ol class="breadcrumb mb-0">
              <li class="breadcrumb-item"><a href="index.php">Dashboard</a></li>
              <li class="breadcrumb-item active" aria-current="page">Image Gallery List</li>
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
          <!-- <div class=" p-6 ">
            <div class="row justify-content-between">
              <div class="col-md-4 col-12 mb-2 mb-md-0">
                <form class="d-flex" role="search">
                  <input class="form-control" type="search" placeholder="Search" aria-label="Search">

                </form>
              </div>
            </div>
          </div> -->



          <div class="card-body p-0">
            <!-- table responsive -->
            <div class="table-responsive">
              <table class="table table-centered table-hover text-nowrap table-borderless mb-0 table-with-checkbox"
                id="DataTable">
                <thead class="bg-light">
                  <tr>
                    <!-- <th>
                      <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="" id="checkAll">
                        <label class="form-check-label" for="checkAll">

                        </label>
                      </div>
                    </th> -->
                    <th>S.N</th>
                    <th>Title</th>
                    <th>Description</th>
                    <th>Image</th>
                    <th>Created On</th>
                    <th>Actions</th>
                  </tr>
                </thead>
                <tbody>

                  <?php
                  $counter = 0;
                  foreach ($result as $key => $value) {
                    foreach ($value as $key1 => $value1) {
                      $image = $GALLERY_IMG_PATH . "gallery_img_" . $value1->id . ".png";
                      ?>
                      <tr>

                        <!-- <td>
                          <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="" id="orderOne">
                            <label class="form-check-label" for="orderOne">

                            </label>
                          </div>
                        </td> -->

                        <td>
                          <?php echo ++$counter; ?>
                        </td>

                        <td><a href="#" class="text-reset">
                            <?php echo $value1->image_title; ?>
                          </a></td>

                        <td>
                          <?php echo $value1->image_description; ?>
                        </td>

                        <td>
                          <a href="<?php echo $image; ?>" data-toggle="lightbox" data-gallery="admin-image-gallery"
                            data-caption="<?php echo $value1->image_description; ?>">
                            <img src="<?php echo $image; ?>" class="card-img-top" alt="<?php echo $image; ?>">
                          </a>
                        </td>

                        <td>
                          <?php echo date("d-m-Y", strtotime($value1->created_on)); ?>
                        </td>

                        <td>
                          <!-- <div class="dropdown">
                            <a href="#" class="text-reset" data-bs-toggle="dropdown" aria-expanded="false">
                              <i class="feather-icon icon-more-vertical fs-5"></i>
                            </a>
                            <ul class="dropdown-menu"> -->
                          <form action="action/gallery_delete_post.php" method="post">
                            <input type="hidden" name="id" value="<?php echo $value1->id; ?>">
                            <!-- <li> -->
                            <button class="btn btn-sm btn-danger" name="delete" type="submit">
                              <i class="bi bi-trash me-3"></i>Delete</button>
                            <!-- </li> -->
                          </form>
                          <!-- <li><a class="dropdown-item" href="#"><i class="bi bi-pencil-square me-3 "></i>Edit</a> -->
                          <!-- </li>
                          </ul>
                </div> -->
                        </td>
                      </tr>

                    <?php }
                  } ?>

                </tbody>
              </table>
            </div>
          </div>
          <!-- <div class="border-top d-md-flex justify-content-between align-items-center p-6">
            <span>Showing 1 to 8 of 12 entries</span>
            <nav class="mt-2 mt-md-0">
              <ul class="pagination mb-0 ">
                <li class="page-item disabled"><a class="page-link " href="#!">Previous</a></li>
                <li class="page-item"><a class="page-link active" href="#!">1</a></li>
                <li class="page-item"><a class="page-link" href="#!">2</a></li>
                <li class="page-item"><a class="page-link" href="#!">3</a></li>
                <li class="page-item"><a class="page-link" href="#!">Next</a></li>
              </ul>
            </nav>
          </div> -->
        </div>

      </div>

    </div>
  </div>
</main>

</div>

<?php include "include/footer.php"; ?>