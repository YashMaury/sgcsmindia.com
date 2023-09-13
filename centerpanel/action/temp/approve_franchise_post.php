<?php
include '../../constant.php';

if (isset($_POST["submit"])) {

    $franchise_id = $_POST["franchise_id"];
    $status = 1;
    $updatedOn = date("Y-m-d h:i:s");
    $updatedBy = "Admin";

    $url = $URL . "franchise/approve_franchise.php";
    $data = array("franchise_id" => $franchise_id, "status" => $status, "updatedOn" => $updatedOn, "updatedBy" => $updatedBy);

    // print_r($data);
    $postdata = json_encode($data);
    $result = url_encode_Decode($url, $postdata);
    // print_r($result);
    if ($result->message == "Franchise Updated Successfully") {
        header('Location:../view_franchise_list.php');
    }
    header('Location:../view_franchise_list.php');
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