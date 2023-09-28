<?php
class Dashboard
{

    private $conn;
    private $franchise_registration = "franchise_registration";
    private $student_registration = "student_registration";
    private $exam = "exam";
    private $questions = "questions";

    public $id, $center_name, $center_director, $center_state, $center_district, $center_block, $center_city, $center_pincode, $center_email, $center_mobile, $center_message, $status, $createdOn, $createdBy, $updatedOn, $updatedBy;

    public $franchise_id, $student_name, $student_mobile, $course, $student_email, $student_password;

    public $exam_id;

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


    function studentCounter()
    {

        $query = "SELECT COUNT(id) as student_count FROM " . $this->student_registration . " where franchise_id=:franchise_id";
        $stmt = $this->conn->prepare($query);
        $stmt->bindParam(":franchise_id", $this->franchise_id);

        // execute query
        $stmt->execute();
        return $stmt;
    }

    function questionCounterByExam()
    {

        $query = "SELECT COUNT(id) as question_count FROM " . $this->questions . " where exam_id=:exam_id";
        $stmt = $this->conn->prepare($query);
        $stmt->bindParam(":exam_id", $this->exam_id);

        // execute query
        $stmt->execute();
        return $stmt;
    }

    function examCounter()
    {

        $query = "SELECT COUNT(id) as exam_count FROM " . $this->exam;
        $stmt = $this->conn->prepare($query);
        // $stmt->bindParam(":franchise_id", $this->franchise_id);

        // execute query
        $stmt->execute();
        return $stmt;
    }
}