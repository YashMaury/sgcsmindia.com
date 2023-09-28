<?php
include '../../constant.php';

if (isset($_POST["submit"])) {

    $exam_name = $_POST['exam_name'];
    $exam_course = ucwords($_POST["exam_course"]);
    $no_question = $_POST["no_question"];
    $status = 0;
    $created_on = date("Y-m-d h:i:s");
    $created_by = ucwords($_SESSION['FRANCHISE_ID']);

    $url = $URL . "exam/insert_exam.php";

    // echo "Not Matched";
    $data = array(
        "exam_name"=>$exam_name,
        "exam_course" => $exam_course,
        "no_question" => $no_question,
        "status" => $status,
        "created_on" => $created_on,
        "created_by" => $created_by
    );

    // print_r($data);
    $postdata = json_encode($data);
    $result = url_encode_Decode($url, $postdata);
    // print_r($result);
    if ($result->message == "Successfull") {
        header('location:../create_exam.php?msg=Exam Created Succefully');
    } else {
        header('location:../create_exam.php?msg=Failed To Create Exam');
    }

}

function url_encode_Decode($url, $postdata)
{
    $client = curl_init($url);
    curl_setopt($client, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($client, CURLOPT_POSTFIELDS, $postdata);
    $response = curl_exec($client);
    // print_r($response);
    $result = json_decode($response);
    return $result;

}

?>