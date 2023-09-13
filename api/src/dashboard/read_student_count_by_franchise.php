<?php
// required headers
header("Access-Control-Allow-Origin: *");
header("Content-Type: application/json; charset=UTF-8");
header("Access-Control-Allow-Methods: POST");
header("Access-Control-Max-Age: 3600");
header("Access-Control-Allow-Headers: Content-Type, Access-Control-Allow-Headers, Authorization, X-Requested-With");
  
//database connection will be here

// include database and object files
include_once '../../config/database.php';
include_once '../../objects/dashboard.php';
  
// instantiate database and product object
$database = new Database();
$db = $database->getConnection();
  
// initialize object
$student_counts = new Dashboard($db);
  
$data = json_decode(file_get_contents("php://input"));
// print_r($data);
// read products will be here
$student_counts->franchise_id=$data->franchise_id;

// query products
$stmt = $student_counts->studentCounter();
$num = $stmt->rowCount();
  
// check if more than 0 record found
if($num>0){
  
    // products array
    $student_countss_arr=array();
    $student_countss_arr["records"]=array();


    while ($row = $stmt->fetch(PDO::FETCH_ASSOC)){
     
        extract($row);
  
        $student_counts_item=array(

         "student_count" => $student_count,
     
        );
  
        array_push($student_countss_arr["records"], $student_counts_item);
    }
  
    // show products data in json format
    echo json_encode($student_countss_arr);

     // set response code - 200 OK
     http_response_code(200);
}
  
// no products found will be here
else{
  
    // set response code - 404 Not found
    http_response_code(404);
  
    // tell the user no products found
    echo json_encode(
        array("message" => "No vacancy record found.")
    );
}
?>