<?php
// required headers
header("Access-Control-Allow-Origin: *");
header("Content-Type: application/json; charset=UTF-8");
header("Access-Control-Allow-Methods: POST");
header("Access-Control-Max-Age: 3600");
header("Access-Control-Allow-Headers: Content-Type, Access-Control-Allow-Headers, Authorization, X-Requested-With");
  
// get database connection
include_once '../../config/database.php';
  
//instantiate reg object
include_once '../../objects/franchise.php';
  
$database = new Database();
$db = $database->getConnection();
  
$franchise = new Franchise($db);
  
// get posted data
$data = json_decode(file_get_contents("php://input"));
// print_r($data);
// mavarke sure data is not empty
if(

    !empty($data->franchise_id) &&
    !empty($data->status)
)

{
    $franchise->id=$data->franchise_id;
    $franchise->status = $data->status;   
    $franchise->updatedOn = $data->updatedOn;   
    $franchise->updatedBy = $data->updatedBy;   

    if($franchise->rejectFranchise()){
  
        // set response code - 201 created
        http_response_code(201);
  
        // tell the user
        echo json_encode(array("message" => "Franchise Updated Successfully"));
    }
  
    // if unable to create the reg, tell the user
    else{
  
        // set response code - 503 service unavailable
        http_response_code(503);
  
        // tell the user
        echo json_encode(array("message" => "Unable to update franchise"));
    }
}
  
// tell the user data is incomplete
else{
  
    // set response code - 400 bad request
    http_response_code(400);
  
    // tell the user
    echo json_encode(array("message" => "Unable to update franchise. Data is incomplete."));
}
?>