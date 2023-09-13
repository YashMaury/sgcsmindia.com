<?php
include "../../constant.php";

if (isset($_POST['delete'])) {
  $id = $_POST['id'];
  $file = "../gallery/image/gallery_img_".$id.".png";
  $url = $URL."gallery/delete_gallery.php";

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

  if ($result->message == "Image deleted successfully.") {

    unlink($file);
    $_SESSION["gallery_delete_success"] = "File deleted successfully";

  } else {
    header('location:../view_uploaded_image.php');
  }

  header('location:../view_uploaded_image.php');

}

?>