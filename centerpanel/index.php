<?php include "include/header.php"; ?>

<?php
function giplCurl($url, $postdata)
{
    $client = curl_init($url);
    curl_setopt($client, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($client, CURLOPT_POSTFIELDS, $postdata);
    $response = curl_exec($client);
    //print_r($response);
    return $result = json_decode($response);
}


$url_read_exam_count = $URL . "dashboard/read_exam_count.php";
// $url_read_student_count = $URL . "dashboard/read_student_count_by_franchise.php";

$data_exam = array();
$postdata_exam = json_encode($data_exam);
$result_exam = giplCurl($url_read_exam_count, $postdata_exam);
// print_r($result_exam);
$total_exam_count = $result_exam->records[0]->exam_count;

// $data_approved = array("status" => '1');
// $postdata_approved = json_encode($data_approved);
// $result_approved_users = giplCurl($url_read_franchise_count, $postdata_approved);
// // print_r($result_approved_users);
// $approved_franchise = $result_approved_users->records[0]->franchise_count;

// $data_rejected = array("status" => '2');
// $postdata_rejected = json_encode($data_rejected);
// $result_rejected = giplCurl($url_read_franchise_count, $postdata_rejected);
// // print_r($result_rejected);
// $rejected_franchise = $result_rejected->records[0]->franchise_count;

// $data_student = array("franchise_id" => '');
// $postdata_student = json_encode($data_student);
// $result_student = giplCurl($url_read_student_count, $postdata_student);
// // print_r($result_student);
// $student_count = $result_student->records[0]->student_count;

// $data_user_update_req = array("status" => '0', "userType" => '2');
// $postdata_user_update_req = json_encode($data_user_update_req);
// $result_users_update_req = giplCurl($url_user_update_req, $postdata_user_update_req);
// print_r($result_users_update_req);
// $users_update_req_count = $result_users_update_req->records[0]->users_update_req;


// $result_vacancy_count = giplCurl($url_read_total_vacancy, $postdata_approved);
// //print_r($result_vacancy_count);
// $total_vacncy = $result_vacancy_count->records[0]->exam_count;
?>

<!-- main wrapper -->
<main class="main-content-wrapper">
    <section class="container">
        <!-- row -->
        <div class="row mb-8">
            <div class="col-md-12">
                <!-- card -->
                <div class="card bg-light border-0 rounded-4"
                    style="background-image: url(assets/images/slider/slider-image-1.jpg); background-repeat: no-repeat; background-size: cover; background-position: right;">
                    <div class="card-body p-lg-12">
                        <!-- <h1>Welcome back! FreshCart</h1> -->
                        <!-- <p>FreshCart is simple & clean design for developer and
                            designer.</p> -->
                        <!-- <a href="#" class="btn btn-primary">
                            Create Product
                        </a> -->
                        <br />
                        <br />
                        <br />
                    </div>
                </div>
            </div>
        </div>
        <!-- table -->

        <div class="row">
            <div class="col-lg-4 col-12 mb-6">
                <div class="card h-100 card-lg">
                    <div class="card-body p-6">
                        <div class="d-flex justify-content-between align-items-center mb-6">
                            <div>
                                <h4 class="mb-0 fs-5">Total Exam</h4>
                            </div>
                            <div class="icon-shape icon-md bg-light-primary text-dark-primary rounded-circle">
                                <!-- <i class="bi bi-currency-dollar fs-5"></i> -->
                                <i class="bi bi-people fs-5"></i>
                            </div>
                        </div>
                        <div class="lh-1">
                            <h1 class=" mb-2 fw-bold fs-2"><?php echo $total_exam_count; ?></h1>
                            <span><b>Status:</b> Ok</span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-12 mb-6">
                <div class="card h-100 card-lg">
                    <div class="card-body p-6">
                        <div class="d-flex justify-content-between align-items-center mb-6">
                            <div>
                                <h4 class="mb-0 fs-5">Registered Franchise</h4>
                            </div>
                            <div class="icon-shape icon-md bg-light-primary text-dark-primary rounded-circle">
                                <!-- <i class="bi bi-currency-dollar fs-5"></i> -->
                                <i class="bi bi-people fs-5"></i>
                            </div>
                        </div>
                        <div class="lh-1">
                            <h1 class=" mb-2 fw-bold fs-2"><?php //echo $approved_franchise; ?></h1>
                            <span><b>Status:</b> Approved</span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-12 mb-6">
                <div class="card h-100 card-lg">
                    <div class="card-body p-6">
                        <div class="d-flex justify-content-between align-items-center mb-6">
                            <div>
                                <h4 class="mb-0 fs-5">Registered Franchise</h4>
                            </div>
                            <div class="icon-shape icon-md bg-light-primary text-dark-primary rounded-circle">
                                <!-- <i class="bi bi-currency-dollar fs-5"></i> -->
                                <i class="bi bi-people fs-5"></i>
                            </div>
                        </div>
                        <div class="lh-1">
                            <h1 class=" mb-2 fw-bold fs-2"><?php //echo $rejected_franchise; ?></h1>
                            <span><b>Status:</b> Rejected</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </section>
</main>
<!-- </div> -->
</div>

<?php include "include/footer.php"; ?>