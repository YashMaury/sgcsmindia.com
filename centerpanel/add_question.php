<?php
if (isset($_POST["exam_id"])) {

} else {
    header('location: view_exam_list.php');
}
?>
<?php include "include/header.php";
$url = $URL . "exam/read_exam_by_id.php";
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

<!-- main -->
<main class="main-content-wrapper">
    <!-- container -->
    <div class="container">
        <!-- row -->
        <div class="row mb-8">
            <div class="col-md-12">
                <div class="d-md-flex justify-content-between align-items-center">
                    <!-- page header -->
                    <div>
                        <h2>Add Question</h2>
                        <!-- breacrumb -->
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb mb-0">
                                <li class="breadcrumb-item"><a href="index.php" class="text-inherit">Dashboard</a></li>
                                <li class="breadcrumb-item active">Add Question</li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12 col-12">
                <!-- card -->
                <div class="card mb-6 shadow border-0">
                    <div class="card-body p-6 ">
                        <form action="action/add_question_post.php" method="post" enctype="multipart/form-data">
                            <div class="container content">
                                <div class="mb-4" align="justify">
                                    <p>
                                        <strong>Question :</strong> <br />
                                        <input type="text" name="question_name" value="" class="form-control" required />
                                    </p>
                                    <p>
                                        <strong>Option 1 :</strong> <br />
                                        <input type="text" name="option_1" value="" class="form-control" required />
                                    </p>
                                    <p>
                                        <strong>Option 2 :</strong> <br />
                                        <input type="text" name="option_2" value="" class="form-control" required />
                                    </p>
                                    <p>
                                        <strong>Option 3 :</strong> <br />
                                        <input type="text" name="option_3" value="" class="form-control" required />
                                    </p>
                                    <p>
                                        <strong>Option 4 :</strong> <br />
                                        <input type="text" name="option_4" value="" class="form-control" required />
                                    </p>
                                    <p>
                                        <strong>Correct Option : (1,2,3,4)</strong> <br />
                                        <input type="text" name="correct_option" value="" class="form-control" required />
                                    </p>
                                    <p>
                                        <strong>Question Image : (if any)</strong> <br />
                                        <input type="file" name="question_image" value="" class="form-control" />
                                    </p>

                                    <p>
                                        <input type="hidden" name="exam_id" value="<?php echo $_POST['exam_id'];?>">
                                        <button type="submit" name="submit" class="btn btn-primary">Submit</button>
                                    </p>

                                </div>
                            </div>
                        </form>
                    </div>
                </div>

            </div>


        </div>
    </div>
</main>

</div>

<script src="assets/libs/quill/dist/quill.min.js"></script>
<script src="assets/js/vendors/editor.js"></script>
<script src="assets/libs/dropzone/dist/min/dropzone.min.js"></script>
<script src="assets/libs/flatpickr/dist/flatpickr.min.js"></script>

<?php include "include/footer.php"; ?>