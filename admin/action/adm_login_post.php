<?php
include '../../constant.php';
include '../php-jwt/src/JWT.php';
include '../php-jwt/src/ExpiredException.php';
include '../php-jwt/src/SignatureInvalidException.php';
include '../php-jwt/src/BeforeValidException.php';
use \Firebase\JWT\JWT;

$admin_password = $_POST["admin_password"];
$admin_email = $_POST["admin_email"];
$url = $URL . "admin_login/admin_login.php";
$data = array("admin_email" => $admin_email, "admin_password" => $admin_password);
// print_r($data);
$postdata = json_encode($data);
$client = curl_init($url);
curl_setopt($client, CURLOPT_POSTFIELDS, $postdata);
curl_setopt($client, CURLOPT_CONNECTTIMEOUT, 0);
curl_setopt($client, CURLOPT_TIMEOUT, 4); //timeout in seconds
curl_setopt($client, CURLOPT_RETURNTRANSFER, true);
$response = curl_exec($client);
// curl_close($client);
// print_r($response);
$decode = json_decode($response);
// print_r($decode);
//  exit();
// echo "hello00000000";
if (isset($decode->access_token)) {
  // echo "hello";
  $result = JWT::decode($decode->access_token, $SECRET_KEY, array('HS256'));
  // print_r($result);
  $adminID = $result->data->id;
  $adminName = $result->data->admin_name;
  $adminEmail = $result->data->admin_email;
  $adminPassword = $result->data->admin_password;

  if ($adminEmail == $_POST["admin_email"] && $adminPassword == $_POST["admin_password"]) {
    $_SESSION["ADMIN_ID"] = $adminID;
    $_SESSION["ADMIN_NAME"] = $adminName;
    $_SESSION["ADMIN_EMAIL"] = $adminEmail;
    $_SESSION["ADMIN_PASSWORD"] = $adminPassword;
    $_SESSION["JWT"] = $result;
    $_SESSION['MEMBBER_FROM'] = $result->data->createdOn;
    //print_r($_SESSION['SPONSOR_ID']);
    // echo "done";
    header('Location:../index.php?msg=Login Successful');
  }

} else {
  // $_SESSION["login_faild_msg"] = "Request Failed! Please try again";
  // echo "failed";
  header('Location:../../index.php?msg=Login Failed! Please try again');
}

// function giplCurl($api,$postdata){
//    $url = $api; 
//    $client = curl_init($url);
//     curl_setopt($client,CURLOPT_RETURNTRANSFER,true);
//     curl_setopt($client, CURLOPT_POSTFIELDS, $postdata);
//     $response = curl_exec($client);
//   //  print_r($response);
//     return $result = json_decode($response);
// }

?>