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
include_once '../../objects/student.php';

// instantiate database and product object
$database = new Database();
$db = $database->getConnection();

// initialize object
$student = new Student($db);

$data = json_decode(file_get_contents("php://input"));
// is_read products will be here
$student->id = $data->id;

// query products
$stmt = $student->read_student_by_id();
$num = $stmt->rowCount();

// check if more than 0 record found
if ($num > 0) {

    // products array
    $students_arr = array();
    $students_arr["records"] = array();


    while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {

        extract($row);

        $student_item = array(
            "id" => $id,
            "franchise_id" => $franchise_id,
            "student_name" => $student_name,
            "student_mobile" => $student_mobile,
            "course" => $course,
            "status" => $status,
            "student_email" => $student_email,
            "student_password" => $student_password,
            "createdBy" => $createdBy,
            "createdOn" => $createdOn
        );

        array_push($students_arr["records"], $student_item);
    }

    // show products data in json format
    echo json_encode($students_arr);

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