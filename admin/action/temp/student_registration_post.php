<?php
include '../../constant.php';

if (isset($_POST["submit"])) {

    $student_name = ucwords($_POST["student_name"]);
    $student_mobile = $_POST["student_mobile"];
    $course = $_POST["course"];
    $status = 0;
    $student_email = $_POST["student_email"];
    $student_password = $_POST["student_password"];
    $createdOn = date("Y-m-d h:i:s");
    $createdBy = ucwords($_POST["student_name"]);

    $url = $URL . "student/student_registration.php";
    $url_read_maxId = $URL . "student/read_maxId.php";

    $data_maxId = array();
    $maxId_postdata = json_encode($data_maxId);
    $result_max_notification = url_encode_Decode($url_read_maxId, $maxId_postdata);
    $id = $result_max_notification->records[0]->id+1;

    /*--- update the images in img folder inside user folder ---*/

    $target_dir = "../gallery/student/";
    $path = "../gallery/student/" . $id . "/";
    if (!is_dir($path)) {
        mkdir($path, 0777, true);
        //echo "directory created";
    } else {
        // echo "unable to create directory";
    }
    $target_file = $target_dir . $id . "/" . $id . ".png";

    $uploadOk = 1;
    $FileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));
    // print_r($FileType);

    //Check if image file is a actual image or fake image
    // if(isset($_POST["submit"])) {
    //  $check = getimagesize($_FILES["student_image"]["tmp_name"]);

    //   if(($check !== false)){

    //     $uploadOk = 1;
    //   }
    //    else {
    //     $uploadOk = 0;
    //   }
    // }

    // Check if file already exists
    if (file_exists($target_file)) {
        $msg = "file already exists";
        $uploadOk = 0;
        header('location:../../student_registration.php');
    }


    // Check file size
    if ($_FILES["student_image"]["size"] > 9000000) {
        $msg = "file is over size";
        $uploadOk = 0;
        header('location:../../student_registration.php');
    }


    // Allow certain file formats
    if ($FileType != "jpg" && $FileType != "png" && $FileType != "jpeg") {
        $msg = "Sorry, only JPG, JPEG, PNG files are allowed.";
        $uploadOk = 0;
        header('location:../../student_registration.php');
    }

    // Check if $uploadOk is set to 0 by an error
    if ($uploadOk == 0) {
        $msg = "Sorry, your file was not uploaded.";
        header('location:../../student_registration.php');

    } else {

        if (move_uploaded_file($_FILES["student_image"]["tmp_name"], $target_file)) {

            $msg = "File uploaded succesfully.";
            header('location:../../student_registration.php');
        } else {
            //echo "Sorry, there was an error uploading your file.";

            $msg = "Sorry, there was an error uploading your file.";
            header('location:../../student_registration.php');
        }
    }

    // echo "Not Matched";
    $data = array(
        "student_name" => $student_name,
        "student_mobile" => $student_mobile,
        "course" => $course,
        "status" => $status,
        "student_email" => $student_email,
        "student_password" => $student_password,
        "createdOn" => $createdOn,
        "createdBy" => $createdBy
    );

    // print_r($data);
    $postdata = json_encode($data);
    $result = url_encode_Decode($url, $postdata);
    // print_r($result);
    if ($result->message == "Successfull") {
        $_SESSION["farmer_reg_success"] = "Registred Successfully";
        header('location:../../student_registration.php');
    } else {
        header('location:../../student_registration.php');
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