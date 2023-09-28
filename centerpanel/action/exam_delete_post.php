<?php
include "../../constant.php";

if (isset($_POST['delete'])) {
  $id = $_POST['id'];
  $url = $URL . "exam/delete_exam.php";

  $data = array('id' => $id);
  //print_r($data);

  $postdata = json_encode($data);
  $client = curl_init($url);
  curl_setopt($client, CURLOPT_POSTFIELDS, $postdata);
  curl_setopt($client, CURLOPT_RETURNTRANSFER, true);
  $response = curl_exec($client);
  //print_r($response);    
  $result = json_decode($response);
  //print_r($result);

  if ($result->message == "Exam deleted successfully.") {
    header('location:../view_exam_list.php?msg=Deleted Successfully');
  } else {
    header('location:../view_exam_list.php?msg=Failed to Delete');
  }

}

?>