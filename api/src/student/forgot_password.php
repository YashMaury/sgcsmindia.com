
<?php
// required headers
header("Access-Control-Allow-Origin: *");
header("Content-Type: application/json; charset=UTF-8");
header("Access-Control-Allow-Methods: POST");
header("Access-Control-Max-Age: 3600");
header("Access-Control-Allow-Headers: Content-Type, Access-Control-Allow-Headers, Authorization, X-Requested-With");
  
// include database and object files
include_once '../../config/database.php';
include_once '../../objects/registration.php';
//Database connection
$dbconnection= new Database();
$db=$dbconnection->getConnection();
$registration=new registration($db);
$data = json_decode(file_get_contents("php://input"));

$registration->email=$data->email;
$stmt = $registration->forgot_password();
// query products

$num = $stmt->rowCount();
  
// check if more than 0 record found
if($num>0 ){
  
    // products array
    $registration_read_array=array();
    $registration_read_array["records"]=array();

    while ($row = $stmt->fetch(PDO::FETCH_ASSOC)){
        extract($row);
        $registration_read_obj=array(
            
           "email" =>  $email,
            "name"=>$name,
            "password"=>$password,
            "id"=>$id,
        );
        array_push($registration_read_array["records"], $registration_read_obj);
    }
    // set response code - 200 OK
    http_response_code(200);
  
    // show products data in json format
    echo json_encode($registration_read_array);
}
else{
  
    // set response code - 400 bad request
    http_response_code(400);
  
    // tell the user
    echo json_encode(array("message" => "Unable to Read User data. Data is incomplete."));
}



?>