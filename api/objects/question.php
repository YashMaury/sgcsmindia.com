<?php
class Question
{

    private $conn;
    private $questions = "questions";

    public $id, $exam_id, $question_name, $option_1, $option_2, $option_3, $option_4, $correct_option, $status, $created_on, $created_by;

    public function __construct($db)
    {
        $this->conn = $db;
    }

    function insert_question()
    {

        // query to insert record
        $query = "INSERT INTO
                    " . $this->questions . "
                SET
                         exam_id=:exam_id,
                         question_name=:question_name,
                         option_1=:option_1,
                         option_2=:option_2,
                         option_3=:option_3,
                         option_4=:option_4,
                         correct_option=:correct_option,
                         status=:status,
                         created_by=:created_by,
                         created_on=:created_on
                    ";

        // prepare query
        $stmt = $this->conn->prepare($query);
        $this->exam_id = htmlspecialchars(strip_tags($this->exam_id));
        $this->question_name = htmlspecialchars(strip_tags($this->question_name));
        $this->option_1 = htmlspecialchars(strip_tags($this->option_1));
        $this->option_2 = htmlspecialchars(strip_tags($this->option_2));
        $this->option_3 = htmlspecialchars(strip_tags($this->option_3));
        $this->option_4 = htmlspecialchars(strip_tags($this->option_4));
        $this->correct_option = htmlspecialchars(strip_tags($this->correct_option));
        $this->status = htmlspecialchars(strip_tags($this->status));
        $this->created_by = htmlspecialchars(strip_tags($this->created_by));
        $this->created_on = htmlspecialchars(strip_tags($this->created_on));

        //bind values
        $stmt->bindParam(":exam_id", $this->exam_id);
        $stmt->bindParam(":question_name", $this->question_name);
        $stmt->bindParam(":option_1", $this->option_1);
        $stmt->bindParam(":option_2", $this->option_2);
        $stmt->bindParam(":option_3", $this->option_3);
        $stmt->bindParam(":option_4", $this->option_4);
        $stmt->bindParam(":correct_option", $this->correct_option);
        $stmt->bindParam(":status", $this->status);
        $stmt->bindParam(":created_by", $this->created_by);
        $stmt->bindParam(":created_on", $this->created_on);



        // execute query
        if ($stmt->execute()) {
            return true;
        }

        return false;

    }

    // function update_exam()
    // {

    //     // query to insert record
    //     $query = "UPDATE " . $this->exam . "
    //             SET
    //                 exam_name=:exam_name,
    //                 exam_course=:exam_course,
    //                 no_question=:no_question
    //                 where id=:id
    //                 ";

    //     // prepare query
    //     $stmt = $this->conn->prepare($query);
    //     $this->id = htmlspecialchars(strip_tags($this->id));
    //     $this->exam_name = htmlspecialchars(strip_tags($this->exam_name));
    //     $this->exam_course = htmlspecialchars(strip_tags($this->exam_course));
    //     $this->no_question = htmlspecialchars(strip_tags($this->no_question));

    //     //bind values
    //     $stmt->bindParam(":id", $this->id);
    //     $stmt->bindParam(":exam_name", $this->exam_name);
    //     $stmt->bindParam(":exam_course", $this->exam_course);
    //     $stmt->bindParam(":no_question", $this->no_question);

    //     // execute query
    //     if ($stmt->execute()) {
    //         return true;
    //     }

    //     return false;
    // }

    // function read_notice_maxId()
    // {
    //     $query = "Select max(id) as id from " . $this->table_name . "";
    //     $stmt = $this->conn->prepare($query);
    //     $stmt->execute();
    //     return $stmt;
    // }

    function read_question_list()
    {
        $query = "Select id, exam_id, question_name, option_1, option_2, option_3, option_4, correct_option, status, created_on, created_by from " . $this->questions;
        $stmt = $this->conn->prepare($query);
        // $stmt->bindParam(":id", $this->id);
        $stmt->execute();
        return $stmt;
    }

    function delete_question()
    {

        // delete query
        $query = " DELETE FROM " . $this->questions . " WHERE id= ? ";
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

    // function read_exam_by_id()
    // {
    //     $query = "Select id, exam_name, exam_course, no_question, status, created_on, created_by from " . $this->exam . " where id=:id";
    //     $stmt = $this->conn->prepare($query);
    //     $stmt->bindParam(":id", $this->id);
    //     $stmt->execute();
    //     return $stmt;
    // }

}
?>