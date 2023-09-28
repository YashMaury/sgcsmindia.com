<?php
include '../../constant.php';

if (isset($_POST["submit"])) {

    $url = $URL . "question/insert_question.php";
    // $url_read_maxId = $URL . "gallery/read_maxId.php";

    $exam_id = $_POST["exam_id"];
    $question_name = $_POST["question_name"];
    $option_1 = $_POST["option_1"];
    $option_2 = $_POST["option_2"];
    $option_3 = $_POST["option_3"];
    $option_4 = $_POST["option_4"];
    $correct_option = $_POST["correct_option"];
    $status = 0;
    $created_on = date("Y-m-d H:i:s");
    $created_by = $_SESSION['FRANCHISE_ID'];

    $data = array(
        "exam_id" => $exam_id,
        "question_name" => $question_name,
        "option_1" => $option_1,
        "option_2" => $option_2,
        "option_3" => $option_3,
        "option_4" => $option_4,
        "correct_option" => $correct_option,
        "status" => $status,
        "created_on" => $created_on,
        "created_by" => $created_by
    );

    print_r($data);
    $postdata = json_encode($data);
    $result = url_encode_Decode($url, $postdata);
    print_r($result);


    // $target_dir = "../gallery/image/";
    // $target_file_type = basename($_FILES["image_file"]["name"]);
    // $uploadOk = 1;
    // $imageFileType = strtolower(pathinfo($target_file_type, PATHINFO_EXTENSION));

    // $check = getimagesize($_FILES["image_file"]["tmp_name"]);
    // // print_r($check);

    // if ($check !== false) {
    //     $uploadOk = 1;
    // } else {
    //     $uploadOk = 0;
    // }


    // // Check file size
    // if ($_FILES["image_file"]["size"] > 5000000) {
    //     $msg = "Sorry, your file is too large.";
    //     $_SESSION["galleryErrors"] = $msg;
    //     header('Location:../upload_gallery_image.php');
    //     $uploadOk = 0;
    // }

    // // Allow certain file formats
    // if ($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg") {
    //     $msg = "Sorry, only JPG, JPEG, PNG files are allowed.";
    //     $_SESSION["galleryErrors"] = $msg;
    //     header('Location:../upload_gallery_image.php');
    //     $uploadOk = 0;
    // }

    // // Check if $uploadOk is set to 0 by an error
    // if ($uploadOk == 0) {
    //     $msg = "Sorry, your file was not uploaded.";
    //     header('Location:../upload_gallery_image.php');
    // } else {


    // $data_maxId = array();
    // $maxId_postdata = json_encode($data_maxId);
    // $result_galleryMaxId = url_encode_Decode($url_read_maxId, $maxId_postdata);
    // //print_r($result_galleryMaxId);
    // $id = $result_galleryMaxId->records[0]->id;

    // $target_file = $target_dir . "gallery_img_" . $id . ".png";

    // if (move_uploaded_file($_FILES["image_file"]["tmp_name"], $target_file)) {

    //     $_SESSION["gallerySuccessMsg"] = "File uploaded succesfully.";
    // } else {
        //     //   echo "Sorry, there was an error uploading your file.";
    //     $_SESSION["galleryErrors"] = "Sorry, there was an error uploading your file.";
    //     header('Location:../upload_gallery_image.php');
    // }

    // }
    
    header('Location:../view_exam_list.php?msg=Question Inserted Successfully');
}

function url_encode_Decode($url, $postdata)
{
    $client = curl_init($url);
    curl_setopt($client, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($client, CURLOPT_POSTFIELDS, $postdata);
    $response = curl_exec($client);
    //print_r($response);
    return $result = json_decode($response);

}
?>