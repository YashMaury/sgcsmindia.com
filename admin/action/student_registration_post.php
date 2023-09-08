<?php
include '../../constant.php';

if (isset($_POST["submit"])) {

    $student_name = ucwords($_POST["student_name"]);
    $student_mobile = $_POST["student_mobile"];
    $course = $_POST["course"];
    $status = 0;
    $student_email = $_POST["student_email"];
    $student_password = $_POST["student_password"];
    $createdOn = date("Y-m-d h:i:s");
    $createdBy = ucwords($_POST["student_name"]);

    $url = $URL . "student/student_registration.php";

    // echo "Not Matched";
    $data = array(
        "student_name" => $student_name,
        "student_mobile" => $student_mobile,
        "course" => $course,
        "status" => $status,
        "student_email" => $student_email,
        "student_password" => $student_password,
        "createdOn" => $createdOn,
        "createdBy" => $createdBy
    );

    // print_r($data);
    $postdata = json_encode($data);
    $result = url_encode_Decode($url, $postdata);
    // print_r($result);
    if ($result->message == "Successfull") {
        $_SESSION["farmer_reg_success"] = "Registred Successfully";
        header('location:../../student_registration.php');
    } else {
        header('location:../../student_registration.php');
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