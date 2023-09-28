<?php
include '../../constant.php';

if (isset($_POST["submit"])) {

    $id = $_POST['id'];
    $exam_name = $_POST['exam_name'];
    $exam_course = ucwords($_POST["exam_course"]);
    $no_question = $_POST["no_question"];

    $url = $URL . "exam/update_exam.php";

    // echo "Not Matched";
    $data = array(
        "id"=>$id,
        "exam_name"=>$exam_name,
        "exam_course" => $exam_course,
        "no_question" => $no_question
    );

    // print_r($data);
    $postdata = json_encode($data);
    $result = url_encode_Decode($url, $postdata);
    // print_r($result);
    if ($result->message == "Exam Updated Successfully") {
        header('location:../create_exam.php?msg=Exam Updated Succefully');
    } else {
        header('location:../create_exam.php?msg=Failed To Update Exam');
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