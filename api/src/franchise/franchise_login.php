<?php
header("Access-Control-Allow-Origin: *");
header("Content-Type: application/json; charset=UTF-8");
header("Access-Control-Allow-Methods: POST");
header("Access-Control-Max-Age: 3600");
header("Access-Control-Allow-Headers: Content-Type, Access-Control-Allow-Headers, Authorization, X-Requested-With");
require '../../../constant.php';
include_once '../../config/database.php';
include_once '../../objects/franchise.php';
require '../../../admin/php-jwt/src/JWT.php';
require '../../../admin/php-jwt/src/ExpiredException.php';
require '../../../admin/php-jwt/src/SignatureInvalidException.php';
require '../../../admin/php-jwt/src/BeforeValidException.php';
use \Firebase\JWT\JWT;

$issuedat_claim = time(); // issued at
$notbefore_claim = $issuedat_claim; //not before in seconds
$expire_claim = $issuedat_claim + 30; // expire time in seconds

$database = new Database();
$db = $database->getConnection();

$franchise = new Franchise($db);

$data = json_decode(file_get_contents("php://input"));
// print_r($data);

$franchise->login_email = $data->login_email;
$franchise->login_password = $data->login_password;

$stmt = $franchise->franchiseLogin();
$num = $stmt->rowCount();
if ($num > 0) {

        if ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
                // var_dump($row);
                extract($row);
                $token = array(
                        "iss" => $ISSUER_CLAIM,
                        "aud" => $AUDIENCE_CLAIM,
                        "iat" => $issuedat_claim,
                        "nbf" => $notbefore_claim,
                        "exp" => $expire_claim,
                        "data" => array(
                                "message" => $LOGIN_SUCCESS_MSG,
                                "id" => $id,
                                "center_name" => $center_name,
                                "center_director" => $center_director,
                                "login_email" => $login_email,
                                "login_password" => $login_password,
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
                                "createdBy" => $createdBy,
                                "updatedOn" => $updatedOn,
                                "updatedBy" => $updatedBy

                        )
                );
                //var_dump($token);
                $jwt = JWT::encode($token, $SECRET_KEY);

                echo json_encode(
                        array(
                                "access_token" => $jwt
                        )
                );
        }
        http_response_code(200);
} else {

        http_response_code(401);
        echo json_encode(array("message" => $LOGIN_FAILED_MSG));
}

?>