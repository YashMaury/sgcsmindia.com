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
$franchise_count = new Dashboard($db);

$data = json_decode(file_get_contents("php://input"));
// print_r($data);
// read products will be here
$franchise_count->status = $data->status;

// query products
$stmt = $franchise_count->franchiseCounter();
$num = $stmt->rowCount();

// check if more than 0 record found
if ($num > 0) {

    // products array
    $franchise_count_arr = array();
    $franchise_count_arr["records"] = array();


    while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {

        extract($row);

        $franchise_count_item = array(

            "franchise_count" => $franchise_count,

        );

        array_push($franchise_count_arr["records"], $franchise_count_item);
    }

    // show products data in json format
    echo json_encode($franchise_count_arr);

    // set response code - 200 OK
    http_response_code(200);
}

// no products found will be here
else {

    // set response code - 404 Not found
    http_response_code(404);

    // tell the user no products found
    echo json_encode(
        array("message" => "No reg count record found.")
    );
}
?>