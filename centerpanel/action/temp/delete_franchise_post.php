<?php

  if(isset($_POST['delete_franchise'])){
   
  include "../../constant.php";

  $id = $_POST['id'];

  $url = $URL."franchise/delete_franchise.php";

  $data = array('id'=>$id);
  //print_r($data);

  $postdata = json_encode($data);
  $client= curl_init($url);
  curl_setopt($client, CURLOPT_POSTFIELDS, $postdata);
  curl_setopt($client,CURLOPT_RETURNTRANSFER,true);
  $response = curl_exec($client);
  //print_r($response);    
  $result = json_decode($response);
  //print_r($result);

  header('location:../index.php');

  }

?>