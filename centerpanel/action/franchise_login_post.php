<?php
include '../../constant.php';
include '../../admin/php-jwt/src/JWT.php';
include '../../admin/php-jwt/src/ExpiredException.php';
include '../../admin/php-jwt/src/SignatureInvalidException.php';
include '../../admin/php-jwt/src/BeforeValidException.php';
use \Firebase\JWT\JWT;

$login_email = $_POST["login_email"];
$login_password = $_POST["login_password"];
$url = $URL . "franchise/franchise_login.php";
$data = array("login_email" => $login_email, "login_password" => $login_password);
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
  $franchiseID = $result->data->id;
  $centerName = $result->data->center_name;
  $franchiseEmail = $result->data->login_email;
  $franchisePassword = $result->data->login_password;

  if ($franchiseEmail == $_POST["login_email"] && $franchisePassword == $_POST["login_password"]) {
    $_SESSION["FRANCHISE_ID"] = $franchiseID;
    $_SESSION["FRANCHISE_NAME"] = $centerName;
    $_SESSION["FRANCHISE_EMAIL"] = $franchiseEmail;
    $_SESSION["FRANCHISE_PASSWORD"] = $franchisePassword;
    $_SESSION["JWT"] = $result;
    $_SESSION['MEMBBER_FROM'] = $result->data->createdOn;
    //print_r($_SESSION['SPONSOR_ID']);
    // echo "done";
    header('Location:../index.php?msg=Login Successful');
  }

} else {
  // $_SESSION["login_faild_msg"] = "Request Failed! Please try again";
  // echo "failed";
  header('Location:../login.php?msg=Login Failed! Please try again');
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