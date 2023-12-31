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
include_once '../../objects/gallery.php';
  
$database = new Database();
$db = $database->getConnection();
  
$insert_gallery = new Galley($db);
  
// get posted data
$data = json_decode(file_get_contents("php://input"));
// print_r($data);  
// make sure data is not empty
if(

   !empty($data->created_by)
)

{
    
    $insert_gallery->imageTitle = $data->image_title;
    $insert_gallery->franchise_id = $data->franchise_id;
    $insert_gallery->imageDescription = $data->image_description;
    $insert_gallery->createdBy = $data->created_by;
    $insert_gallery->createdOn = $data->created_on;

    
    //var_dump($reg);
    // create the reg
    if($insert_gallery->insert_galleryimg()){

        http_response_code(201);
        echo json_encode(array("message" => "Image uploaded successfully"));
    }
    else{
  
        // set response code - 503 service unavailable
        http_response_code(503);
  
        // tell the user
        echo json_encode(array("message" => "Unable to upload image"));
    }
}
  
// tell the user data is incomplete
else{
  
    // set response code - 400 bad request
    http_response_code(400);
  
    // tell the user
    echo json_encode(array("message" => "Unable to upload image. Data is incomplete."));
}
?>