<?php
include "include/header.php";
$url = $URL . "exam/read_exam_list.php";
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
                        <h2>Exam List</h2>
                        <!-- breacrumb -->
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb mb-0">
                                <li class="breadcrumb-item"><a href="index.php" class="text-inherit">Dashboard</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Exam List</li>
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
                            <table
                                class="table table-centered table-hover table-borderless mb-0 table-with-checkbox text-nowrap"
                                id="DataTable">
                                <thead class="bg-light">
                                    <tr>
                                        <th>Sr no.</th>
                                        <th>Id</th>
                                        <th>Name</th>
                                        <th>Course</th>
                                        <th>No Of Question</th>
                                        <th>Created On</th>
                                        <th>Add Question</th>
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
                                                ?>

                                                <td>
                                                    <?php echo ++$counter; ?>
                                                </td>
                                                <td>
                                                    <?php echo $value1->id; ?>
                                                </td>
                                                <td>
                                                    <?php echo $value1->exam_name; ?>
                                                </td>
                                                <td>
                                                    <?php echo $value1->exam_course; ?>
                                                </td>
                                                <td>
                                                    <?php echo $value1->no_question; ?>
                                                </td>
                                                <td>
                                                    <?php echo date("d-M-Y", strtotime($value1->created_on)); ?>
                                                </td>

                                                <?php
                                                $que_url = $URL . "dashboard/read_question_count_by_exam.php";
                                                $exam_id = $value1->id;
                                                $data = array("exam_id" => $exam_id);
                                                //print_r($data);
                                                $que_postdata = json_encode($data);
                                                $client = curl_init($que_url);
                                                curl_setopt($client, CURLOPT_RETURNTRANSFER, 1);
                                                curl_setopt($client, CURLOPT_POSTFIELDS, $que_postdata);
                                                $response_question = curl_exec($client);
                                                // print_r($response_question);
                                                $result_question = json_decode($response_question);
                                                // print_r($result_question);
                                                $counter = 0;
                                                foreach ($result_question as $key => $value) {
                                                    foreach ($value as $key1 => $que_value1) {
                                                        ?>

                                                        <td>
                                                            <form action="add_question.php" method="post">
                                                                <input type="hidden" name="exam_id" value="<?php echo $value1->id; ?>">
                                                                <button class="btn btn-sm btn-info" type="submit" name="add_question"
                                                                    <?php echo $que_value1->question_count == ($value1->no_question) ? "disabled" : ""; ?>>
                                                                    <i class="bi bi-pencil me-3"></i>Add Question
                                                                </button> 
                                                                <?php 
                                                                if ($que_value1->question_count == ($value1->no_question)){
                                                                    echo "Question Limit Reached - ".$que_value1->question_count."/".$value1->no_question;
                                                                } else {
                                                                    echo $value1->no_question-$que_value1->question_count." Question Left To Add - ".$que_value1->question_count."/".$value1->no_question;
                                                                }
                                                                ?>
                                                                    
                                                            </form>
                                                        </td>

                                                    <?php }
                                                } ?>

                                                <td>
                                                    <form action="update_exam.php" method="post">
                                                        <input type="hidden" name="id" value="<?php echo $value1->id; ?>">
                                                        <button class="btn btn-sm btn-info" type="submit" name="update_exam">
                                                            <i class="bi bi-pencil me-3"></i>Edit
                                                        </button>
                                                    </form>
                                                </td>

                                                <td>
                                                    <form action="action/exam_delete_post.php" method="post">
                                                        <input type="hidden" name="id" value="<?php echo $value1->id; ?>">
                                                        <button class="btn btn-sm btn-danger" name="delete" type="submit">
                                                            <i class="bi bi-trash me-3"></i>Delete
                                                        </button>
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