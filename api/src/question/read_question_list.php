<?php
// required headers
header("Access-Control-Allow-Origin: *");
header("Content-Type: application/json; charset=UTF-8");
header("Access-Control-Allow-Methods: POST");
header("Access-Control-Max-Age: 3600");
header("Access-Control-Allow-Headers: Content-Type, Access-Control-Allow-Headers, Authorization, X-Requested-With");
  
// database connection will be here

// include database and object files
include_once '../../config/database.php';
include_once '../../objects/question.php';
  
// instantiate database and product object
$database = new Database();
$db = $database->getConnection();
  
// initialize object
$question = new Question($db);
  
$data = json_decode(file_get_contents("php://input"));

$stmt = $question->read_question_list();
$num = $stmt->rowCount();
  
// check if more than 0 record found
if($num>0){
  
    // products array
    $questions_arr=array();
    $questions_arr["records"]=array();


    while ($row = $stmt->fetch(PDO::FETCH_ASSOC)){
     
        extract($row);
  
        $question_item=array(
            "id" => $id,
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
  
        array_push($questions_arr["records"], $question_item);
    }
  
    // show products data in json format
    echo json_encode($questions_arr);

     // set response code - 200 OK
     http_response_code(200);
}
  
// no products found will be here
else{
  
    // set response code - 404 Not found
    http_response_code(404);
  
    // tell the user no products found
    echo json_encode(
        array("message" => "No user found.")
    );
}
?>