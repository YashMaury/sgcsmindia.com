<?php
include "../../constant.php";

if (isset($_POST["update_student"])) {

    $id = $_POST['id'];
    $franchise_id = $_POST['franchise_id'];
    $student_name = ucwords($_POST["student_name"]);
    $student_mobile = $_POST["student_mobile"];
    $course = $_POST["course"];
    $status = 0;
    $student_email = $_POST["student_email"];
    $student_password = $_POST["student_password"];

    $old_name = $_POST["old_name"];
    $student_profile_image = "../gallery/student/" . $id . "/" . $old_name . ".png";
    $target_student_profile_image = "../gallery/student/" . $id . "/" . $student_name . ".png";

    copy($student_profile_image, $target_student_profile_image);
    unlink($student_profile_image);

    $url = $URL . "student/update_student.php";


    $data = array(
        "id" => $id,
        "franchise_id" => $franchise_id,
        "student_name" => $student_name,
        "student_mobile" => $student_mobile,
        "course" => $course,
        "status" => $status,
        "student_email" => $student_email,
        "student_password" => $student_password
    );

    //print_r($data);

    $postdata = json_encode($data);
    $result_student = url_encode_Decode($url, $postdata);
    //print_r($result_student);

    if ($result_student->message = "Successfull") {
        header('location:../view_students_list.php?msg=Student record updated');
    } else {
        header('location:../view_students_list.php?msg=Failed to update record');
    }


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