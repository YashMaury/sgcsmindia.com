<?php
include '../../constant.php';

if (isset($_POST["submit"])) {

    $franchise_id = $_POST["franchise_id"];
    $status = 1;

    $url = $URL . "franchise/approve_franchise.php";
    $data = array("franchise_id" => $franchise_id, "status" => $status);

    //print_r($data);
    $postdata = json_encode($data);
    $result = url_encode_Decode($url, $postdata);
    //print_r($result);
    if ($result->message == "Successfull") {
        // header('Location:../pending registration_list.php');
    }
    // header('Location:../pending registration_list.php');
}

function url_encode_Decode($url, $postdata)
{
    $client = curl_init($url);
    curl_setopt($client, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($client, CURLOPT_POSTFIELDS, $postdata);
    $response = curl_exec($client);
    print_r($response);
    $result = json_decode($response);
    return $result;

}

?>