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
include_once '../../objects/payment.php';
  
// instantiate database and product object
$database = new Database();
$db = $database->getConnection();
  
// initialize object
$payment = new payment($db);
  
$data = json_decode(file_get_contents("php://input"));
//print_r($data);
$payment->user_id=$data->user_id;
$payment->amount=$data->amount;

$stmt = $payment->read_payment_details();
$num = $stmt->rowCount();
  
// check if more than 0 record found
if($num>0){
  
    // products array
    $payments_arr=array();
    $payments_arr["records"]=array();


    while ($row = $stmt->fetch(PDO::FETCH_ASSOC)){
     
        extract($row);
  
        $payment_item=array(

            "pid" => $pid,
            "user_id"=>$user_id,
            "amount"=>$amount,
            "transaction_id"=>$transaction_id,
            "request_id "=>$request_id,
            "status"=>$status,
            "created_by "=>$created_by,
            "created_on "=>$created_on
        );
  
        array_push($payments_arr["records"], $payment_item);
    }
  
    // show products data in json format
    echo json_encode($payments_arr);

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