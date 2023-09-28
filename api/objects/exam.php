<?php
class Exam
{

    private $conn;
    private $exam = "exam";

    public $id, $exam_name, $exam_course, $no_question, $status, $created_on, $created_by;

    public function __construct($db)
    {
        $this->conn = $db;
    }

    function insert_exam()
    {

        // query to insert record
        $query = "INSERT INTO
                    " . $this->exam . "
                SET
                         exam_name=:exam_name,
                         exam_course=:exam_course,
                         no_question=:no_question, 
                         status=:status,
                         created_on=:created_on,
                         created_by=:created_by
                    ";

        // prepare query
        $stmt = $this->conn->prepare($query);
        $this->exam_name = htmlspecialchars(strip_tags($this->exam_name));
        $this->exam_course = htmlspecialchars(strip_tags($this->exam_course));
        $this->no_question = htmlspecialchars(strip_tags($this->no_question));
        $this->status = htmlspecialchars(strip_tags($this->status));
        $this->created_by = htmlspecialchars(strip_tags($this->created_by));
        $this->created_on = htmlspecialchars(strip_tags($this->created_on));

        //bind values
        $stmt->bindParam(":exam_name", $this->exam_name);
        $stmt->bindParam(":exam_course", $this->exam_course);
        $stmt->bindParam(":no_question", $this->no_question);
        $stmt->bindParam(":status", $this->status);
        $stmt->bindParam(":created_by", $this->created_by);
        $stmt->bindParam(":created_on", $this->created_on);



        // execute query
        if ($stmt->execute()) {
            return true;
        }

        return false;

    }

    function update_exam()
    {

        // query to insert record
        $query = "UPDATE " . $this->exam . "
                SET
                    exam_name=:exam_name,
                    exam_course=:exam_course,
                    no_question=:no_question
                    where id=:id
                    ";

        // prepare query
        $stmt = $this->conn->prepare($query);
        $this->id = htmlspecialchars(strip_tags($this->id));
        $this->exam_name = htmlspecialchars(strip_tags($this->exam_name));
        $this->exam_course = htmlspecialchars(strip_tags($this->exam_course));
        $this->no_question = htmlspecialchars(strip_tags($this->no_question));

        //bind values
        $stmt->bindParam(":id", $this->id);
        $stmt->bindParam(":exam_name", $this->exam_name);
        $stmt->bindParam(":exam_course", $this->exam_course);
        $stmt->bindParam(":no_question", $this->no_question);

        // execute query
        if ($stmt->execute()) {
            return true;
        }

        return false;
    }

    // function read_notice_maxId()
    // {
    //     $query = "Select max(id) as id from " . $this->table_name . "";
    //     $stmt = $this->conn->prepare($query);
    //     $stmt->execute();
    //     return $stmt;
    // }

    function read_exam_list()
    {
        $query = "Select id, exam_name, exam_course, no_question, status, created_on, created_by from " . $this->exam;
        $stmt = $this->conn->prepare($query);
        // $stmt->bindParam(":id", $this->id);
        $stmt->execute();
        return $stmt;
    }

    function delete_exam()
    {

        // delete query
        $query = " DELETE FROM " . $this->exam . " WHERE id= ? ";
        // prepare query
        $stmt = $this->conn->prepare($query);
        // sanitize
        $this->id = htmlspecialchars(strip_tags($this->id));
        // bind id of record to delete
        $stmt->bindParam(1, $this->id);
        // execute query
        if ($stmt->execute()) {
            return true;
        }

        return false;
    }

    function read_exam_by_id()
    {
        $query = "Select id, exam_name, exam_course, no_question, status, created_on, created_by from " . $this->exam . " where id=:id";
        $stmt = $this->conn->prepare($query);
        $stmt->bindParam(":id", $this->id);
        $stmt->execute();
        return $stmt;
    }

}
?>