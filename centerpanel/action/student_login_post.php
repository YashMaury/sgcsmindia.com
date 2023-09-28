<?php
header('Access-Control-Allow-Origin: *');
header('Access-Control-Allow-Methods: POST, GET, OPTIONS');
error_reporting(0);
include '../../constant.php';
include '../php-jwt/src/JWT.php';
include '../php-jwt/src/ExpiredException.php';
include '../php-jwt/src/SignatureInvalidException.php';
include '../php-jwt/src/BeforeValidException.php';
use \Firebase\JWT\JWT;

$student_email = $_POST["student_email"];
$student_password = $_POST["student_password"];
$exam_id = $_POST["exam_id"];

$url = $URL . "student/student_login.php";
$data = array("student_email" => $student_email, "student_password" => $student_password);
//print_r($data);
$postdata = json_encode($data);
$client = curl_init($url);
curl_setopt($client, CURLOPT_POSTFIELDS, $postdata);
curl_setopt($client, CURLOPT_CONNECTTIMEOUT, 0);
curl_setopt($client, CURLOPT_TIMEOUT, 4); //timeout in seconds
curl_setopt($client, CURLOPT_RETURNTRANSFER, true);
$response = curl_exec($client);
// curl_close($client);
// print_r($response);
$decode = (json_decode($response));
// print_r($decode);

// echo $decode->message;

if ($decode->message !== "Request Failed") {
  // echo "done";
  $result = JWT::decode($decode->access_token, $SECRET_KEY, array('HS256'));

  if (
    $result->data->student_email == $_POST['student_email'] &&
    $result->data->student_password == $_POST['student_password']
  ) {
    $studentId = $result->data->id;
    $studentName = $result->data->student_name;
    $studentMobile = $result->data->student_mobile;
    $studentEmail = $result->data->student_email;
    $studentPassword = $result->data->student_password;

    $_SESSION["STUDENT_ID"] = $studentId;
    $_SESSION["STUDENT_NAME"] = $studentName;
    $_SESSION["STUDENT_MOBILE"] = $studentMobile;
    $_SESSION["STUDENT_EMAIL"] = $studentEmail;
    $_SESSION["STUDENT_PASSWORD"] = $studentPassword;
    $_SESSION["JWT"] = $result;
    // $_SESSION['MEMBBER_FROM'] = $result->data->createdOn;

    echo $msg = "Login Successfull";
    header('Location:../../Instruction_exam.php?type=' . $exam_id);
  } else {
    echo $msg = "Incorrect User Email or Password";
    header('Location:../../studentlogin.php?msg=' . $msg);
  }
} else {
  // print_r($decode->message);
  header('Location:../../studentlogin.php');
  echo "Request Failed To Login";
  // echo "0";
}

?>