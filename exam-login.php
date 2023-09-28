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


<div class="achivements" style="background: url(assets/images/slide/breadcrumb.jpg);padding: 50px;">
    <div class="sec-title mb-3 text-center">
        <h2 class="mb-0" style="color:#fff;">EXAM LOGIN</h2>
        <p style="color:#fff;">Home / Exam Login</p>
    </div>
    <div class="container">
        <div class="row">
        </div>
    </div>
</div>

<!-- <form action="" method="post" accept-charset="utf-8"> -->
<div class="container content">
    <div class="sec-title mb-3 text-center">
        <h2 class="mb-0">EXAM LOGIN</h2>
    </div>
    <div class="mb-4" align="justify">
        <p>
            <strong>Course :</strong> <br />
            <select name="course" id="coursename" class="form-control" required>

                <?php
                $counter = 0;
                foreach ($result as $key => $value) {
                foreach ($value as $key1 => $value1) {
                ?>

                <option value="<?php echo $value1->id ;?>">
                    <?php echo $value1->exam_name ;?>
                </option>

                <?php } } ?>

            </select>
        </p>
        <p>
            <button class="btn btn-primary" id="btnStart">Submit</button>
        </p>
    </div>
</div>
<!-- </form> -->

<script type="text/javascript">
    $(document).ready(function () {
        $('#btnStart').on('click', function (e) {
            e.preventDefault();
            temp = $('#coursename').val();
            window.location.href = "studentlogin.php?type=" + btoa(temp);
        });
    });
</script>


<?php include "include/footer.php"; ?>