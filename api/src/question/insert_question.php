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
include_once '../../objects/question.php';
  
$database = new Database();
$db = $database->getConnection();
  
$question = new Question($db);
  
// get posted data
$data = json_decode(file_get_contents("php://input"));
// print_r($data);  
// make sure data is not empty
if(

   !empty($data->exam_id) &&
   !empty($data->question_name) 
)

{
    $question->exam_id = $data->exam_id;
    $question->question_name = $data->question_name;
    $question->option_1 = $data->option_1;
    $question->option_2 = $data->option_2;
    $question->option_3 = $data->option_3;
    $question->option_4 = $data->option_4;
    $question->correct_option = $data->correct_option;
    $question->status = $data->status;
    $question->created_by = $data->created_by;
    $question->created_on = $data->created_on;

    
    //var_dump($reg);
    // create the reg
    if($question->insert_question()){

        http_response_code(201);
        echo json_encode(array("message" => "Successfull"));
    }
    else{
  
        // set response code - 503 service unavailable
        http_response_code(503);
  
        // tell the user
        echo json_encode(array("message" => "Unable to upload study material"));
    }
}
  
// tell the user data is incomplete
else{
  
    // set response code - 400 bad request
    http_response_code(400);
  
    // tell the user
    echo json_encode(array("message" => "Unable to upload study material. Data is incomplete."));
}
?>