<?php
class Dashboard
{

    private $conn;
    private $franchise_registration = "franchise_registration";
    private $student_registration = "student_registration";

    public $id, $center_name, $center_director, $center_state, $center_district, $center_block, $center_city, $center_pincode, $center_email, $center_mobile, $center_message, $status, $createdOn, $createdBy, $updatedOn, $updatedBy;

    public $student_name, $student_mobile, $course, $student_email, $student_password;

    public function __construct($db)
    {
        $this->conn = $db;
    }

    function franchiseCounter()
    {

        if ($this->status == 0) {
            $query = "SELECT COUNT(id) as franchise_count FROM " . $this->franchise_registration . " where status=0";
            $stmt = $this->conn->prepare($query);
            // $stmt->bindParam(":status", $this->status);
        } else if ($this->status == 1) {
            $query = "SELECT COUNT(id) as franchise_count FROM " . $this->franchise_registration . " where status=1";
            $stmt = $this->conn->prepare($query);
        } else if ($this->status == 2) {
            $query = "SELECT COUNT(id) as franchise_count FROM " . $this->franchise_registration . " where status=2";
            $stmt = $this->conn->prepare($query);
        }
        // execute query
        $stmt->execute();
        return $stmt;
    }

    //Total vacancy count

    // function total_vacancy_count()
    // {

    //     $query = "SELECT COUNT(exam_name) as exam_count FROM " . $this->table_exam . " where status=1";
    //     $stmt = $this->conn->prepare($query);
    //     // $stmt->bindParam(":status", $this->status);

    //     // execute query
    //     $stmt->execute();
    //     return $stmt;
    // }
}