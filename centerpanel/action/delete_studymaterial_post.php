<?php

  if(isset($_POST['delete'])){
   
  include "../../constant.php";

  $id = $_POST['id'];

  $file = "../gallery/studyMaterial/".$id."/".$id.".pdf";

  $url = $URL."studymaterial/delete_studymaterial.php";

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

  if($result->message=="Record has been deleted."){

   unlink($file);
   rmdir("../gallery/studyMaterial/".$id);
  //  rmdir("../image/studyMaterial/".$id);

  }else{
  header('location:../view_study_material.php');
  }

  header('location:../view_study_material.php');

  }

?>