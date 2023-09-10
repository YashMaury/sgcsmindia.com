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
include_once '../../objects/franchise.php';

// instantiate database and product object
$database = new Database();
$db = $database->getConnection();

// initialize object
$franchise = new Franchise($db);

$data = json_decode(file_get_contents("php://input"));

$stmt = $franchise->readFranchiseDetails();
$num = $stmt->rowCount();

// check if more than 0 record found
if ($num > 0) {

    // products array
    $franchises_arr = array();
    $franchises_arr["records"] = array();


    while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {

        extract($row);

        $franchise_item = array(

            "center_name" => $center_name,
            "center_director" => $center_director,
            "center_state" => $center_state,
            "center_district" => $center_district,
            "center_block" => $center_block,
            "center_city" => $center_city,
            "center_pincode" => $center_pincode,
            "center_email" => $center_email,
            "center_mobile" => $center_mobile,
            "center_message" => $center_message,
            "status" => $status,
            "createdOn" => $createdOn,
            "createdBy" => $createdBy

        );

        array_push($franchises_arr["records"], $franchise_item);
    }

    // show products data in json format
    echo json_encode($franchises_arr);

    // set response code - 200 OK
    http_response_code(200);
}

// no products found will be here
else {

    // set response code - 404 Not found
    http_response_code(404);

    // tell the user no products found
    echo json_encode(
        array("message" => "No user found.")
    );
}
?>