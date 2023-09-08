<?php
// required headers
header("Access-Control-Allow-Origin: *");
header("Content-Type: application/json; charset=UTF-8");
header("Access-Control-Allow-Methods: POST");
header("Access-Control-Max-Age: 3600");
header("Access-Control-Allow-Headers: Content-Type, Access-Control-Allow-Headers, Authorization, X-Requested-With");
  
// get database connection
include_once '../../config/database.php';
  
// instantiate student_reg object
include_once '../../objects/student.php';
  
$database = new Database();
$db = $database->getConnection();
  
$student_reg = new Student($db);
  
// get posted data
$data = json_decode(file_get_contents("php://input"));
// print_r($data);  
// make sure data is not empty
if(
    
    !empty($data->student_name) &&
    !empty($data->student_mobile) &&
    !empty($data->course) &&
    !empty($data->student_email) &&
    !empty($data->student_password) &&
    !empty($data->createdOn) &&
    !empty($data->createdBy) 
)

{
    $student_reg->student_name = $data->student_name;
    $student_reg->student_mobile = $data->student_mobile;
    $student_reg->course = $data->course;
    $student_reg->status = $data->status;
    $student_reg->student_email = $data->student_email;
    $student_reg->student_password = $data->student_password;
    $student_reg->createdOn = $data->createdOn;
    $student_reg->createdBy = $data->createdBy;
    
    //var_dump($student_reg);
    // create the student_reg
    if($student_reg->student_registration()){

        http_response_code(201);
        echo json_encode(array("message" => "Successfull"));
    }
    else{
  
        // set response code - 503 service unavailable
        http_response_code(503);
  
        // tell the user
        echo json_encode(array("message" => "Unable to register student"));
    }
}
  
// tell the user data is incomplete
else{
  
    // set response code - 400 bad request
    http_response_code(400);
  
    // tell the user
    echo json_encode(array("message" => "Unable to register student. Data is incomplete."));
}
?>