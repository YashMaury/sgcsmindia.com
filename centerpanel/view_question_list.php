<?php
include "include/header.php";
$url = $URL . "question/read_question_list.php";
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
                        <h2>Question List</h2>
                        <!-- breacrumb -->
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb mb-0">
                                <li class="breadcrumb-item"><a href="index.php" class="text-inherit">Dashboard</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Question List</li>
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
                                        <th>Exam Id</th>
                                        <th>Question</th>
                                        <th>Option 1</th>
                                        <th>Option 2</th>
                                        <th>Option 3</th>
                                        <th>Option 4</th>
                                        <th>Correct Option</th>
                                        <th>Created On</th>
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
                                                    <?php echo $value1->exam_id; ?>
                                                </td>
                                                <td>
                                                    <?php echo $value1->question_name; ?>
                                                </td>
                                                <td>
                                                    <?php echo $value1->option_1; ?>
                                                </td>
                                                <td>
                                                    <?php echo $value1->option_2; ?>
                                                </td>
                                                <td>
                                                    <?php echo $value1->option_3; ?>
                                                </td>
                                                <td>
                                                    <?php echo $value1->option_4; ?>
                                                </td>
                                                <td>
                                                    <?php echo $value1->correct_option; ?>
                                                </td>
                                                <td>
                                                    <?php echo date("d-M-Y", strtotime($value1->created_on)); ?>
                                                </td>

                                                <td>
                                                    <form action="action/question_delete_post.php" method="post">
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