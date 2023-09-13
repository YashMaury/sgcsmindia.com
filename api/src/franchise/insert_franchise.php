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
include_once '../../objects/franchise.php';
  
$database = new Database();
$db = $database->getConnection();
  
$franchise = new Franchise($db);
  
// get posted data
$data = json_decode(file_get_contents("php://input"));
// print_r($data);  
// make sure data is not empty
if(
    
    !empty($data->center_name) &&
    !empty($data->center_director) &&
    !empty($data->login_email) &&
    !empty($data->login_password) 
)

{
    $franchise->center_name = $data->center_name;
    $franchise->center_director = $data->center_director;
    $franchise->login_email = $data->login_email;
    $franchise->login_password = $data->login_password;
    $franchise->center_state = $data->center_state;
    $franchise->center_district = $data->center_district;
    $franchise->center_block = $data->center_block;
    $franchise->center_city = $data->center_city;
    $franchise->center_pincode = $data->center_pincode;
    $franchise->center_email = $data->center_email;
    $franchise->center_mobile = $data->center_mobile;
    $franchise->center_message = $data->center_message;
    $franchise->status = $data->status;
    $franchise->createdBy = $data->createdBy;
    $franchise->createdOn = $data->createdOn;
       
    //var_dump($franchise);
    // create the reg
    if($franchise->insertFranchise()){

        http_response_code(201);
        echo json_encode(array("message"=>"Successfull"));
    }
    else{
  
        // set response code - 503 service unavailable
        http_response_code(503);
  
        // tell the user
        echo json_encode(array("message" => "Unable to register franchise"));
    }
}
  
// tell the user data is incomplete
else{
  
    // set response code - 400 bad request
    http_response_code(400);
  
    // tell the user
    echo json_encode(array("message" => "Unable to register franchise. Data is incomplete."));
}
?>