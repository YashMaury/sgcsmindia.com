<?php
// required headers
header("Access-Control-Allow-Origin: *");
header("Content-Type: application/json; charset=UTF-8");
header("Access-Control-Allow-Methods: POST");
header("Access-Control-Max-Age: 3600");
header("Access-Control-Allow-Headers: Content-Type, Access-Control-Allow-Headers, Authorization, X-Requested-With");

// get database connection
include_once '../../config/database.php';

// instantiate reg object
include_once '../../objects/student.php';

$database = new Database();
$db = $database->getConnection();

$student = new Student($db);

// get posted data
$data = json_decode(file_get_contents("php://input"));
var_dump($data);
// mavarke sure data is not empty
if (

    !empty($data->id) &&
    !empty($data->franchise_id) &&
    !empty($data->student_name) &&
    !empty($data->student_mobile) &&
    !empty($data->course) &&
    !empty($data->status) &&
    !empty($data->student_email) &&
    !empty($data->student_password)
) {
    $student->id = $data->id;
    $student->franchise_id = $data->franchise_id;
    $student->student_name = $data->student_name;
    $student->student_mobile = $data->student_mobile;
    $student->course = $data->course;
    $student->status = $data->status;
    $student->student_email = $data->student_email;
    $student->student_password = $data->student_password;

    if ($student->update_student()) {

        // set response code - 201 created
        http_response_code(201);

        // tell the user
        echo json_encode(array("message" => "Successfull"));
    }

    // if unable to create the student, tell the user
    else {

        // set response code - 503 service unavailable
        http_response_code(503);

        // tell the user
        echo json_encode(array("message" => "Unable to update student"));
    }
}

// tell the user data is incomplete
else {

    // set response code - 400 bad request
    http_response_code(400);

    // tell the user
    echo json_encode(array("message" => "Unable to update student. Data is incomplete."));
}
?>