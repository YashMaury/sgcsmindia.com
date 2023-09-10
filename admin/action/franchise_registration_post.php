<?php
include '../../constant.php';

if (isset($_POST["submit"])) {

    $center_name = ucwords($_POST["center_name"]);
    $center_director = $_POST["center_director"];
    $center_state = $_POST["center_state"];
    $center_district = $_POST["center_district"];
    $center_block = $_POST["center_block"];
    $center_city = $_POST["center_city"];
    $center_pincode = $_POST["center_pincode"];
    $center_email = $_POST["center_email"];
    $center_mobile = $_POST["center_mobile"];
    $center_message = $_POST["center_message"];
    $status = 0;
    $createdOn = date("Y-m-d h:i:s");
    $createdBy = ucwords($_POST["center_name"]);

    $url = $URL . "franchise/insert_franchise.php";

    // echo "Not Matched";
    $data = array(
        "center_name" => $center_name,
        "center_director" => $center_director,
        "center_state" => $center_state,
        "center_district" => $center_district,
        "center_block" => $center_block,
        "center_city" => $center_city,
        "center_pincode" => $center_pincode,
        "center_email" => $center_email,
        "center_mobile" => $center_mobile,
        "center_message" => $center_message,
        "status" => $status,
        "createdOn" => $createdOn,
        "createdBy" => $createdBy
    );

    // print_r($data);
    $postdata = json_encode($data);
    $result = url_encode_Decode($url, $postdata);
    // print_r($result);
    if ($result->message == "Successfull") {
        // $_SESSION["farmer_reg_success"] = "Registred Successfully";
        header('location:../../franchise-online-form.php');
    } else {
        header('location:../../franchise-online-form.php');
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