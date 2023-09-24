<?php
include "../../constant.php";

if (isset($_POST['delete'])) {
  $id = $_POST['id'];
  $student_name = $_POST['student_name'];
  $file = "../gallery/student/".$id."/".$student_name.".png";
  $url = $URL."student/delete_student.php";

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

  if ($result->message == "Student data deleted successfully.") {

    unlink($file);
    rmdir("../gallery/student/".$id);
    // $_SESSION["gallery_delete_success"] = "File deleted successfully";

  } else {
    header('location:../view_students_list.php');
  }

  header('location:../view_students_list.php');

}

?>