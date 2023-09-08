<?php
class StudyMaterial{

    private $conn;
    private $table_name = "studymaterial";

    public $id, $material_title, $material_description, $created_on, $created_by;

    public function __construct($db){
        $this->conn = $db;
    }

    function insert_studymaterial(){
  
        // query to insert record
    $query = "INSERT INTO
                    " . $this->table_name . "
                SET
                         materialTitle=:material_title,
                         materialDescription=:material_description,
                         createdBy=:created_by, 
                         createdOn=:created_on
                    "; 
                          
        // prepare query
        $stmt = $this->conn->prepare($query);
        $this->material_title=htmlspecialchars(strip_tags($this->material_title));
        $this->material_description=htmlspecialchars(strip_tags($this->material_description));
        $this->created_by=htmlspecialchars(strip_tags($this->created_by));
        $this->created_on=htmlspecialchars(strip_tags($this->created_on));
        
        //bind values
        $stmt->bindParam(":material_title", $this->material_title);
        $stmt->bindParam(":material_description", $this->material_description);
        $stmt->bindParam(":created_by", $this->created_by);
        $stmt->bindParam(":created_on", $this->created_on);
    
       
      
        // execute query
        if($stmt->execute()){
            return true;
        }
      
        return false;
          
    }
    function read_notice_maxId(){
        $query="Select max(id) as id from " . $this->table_name ."";
        $stmt = $this->conn->prepare($query); 
        $stmt->execute();
        return $stmt;
    }

    function read_studymaterial(){
        $query="Select id, materialTitle, materialDescription, createdBy, createdOn from " .$this->table_name;
        $stmt = $this->conn->prepare($query); 
        // $stmt->bindParam(":id", $this->id);
        $stmt->execute();
        return $stmt;
    }

  function delete_studymaterial(){
  
    // delete query
    $query = " DELETE FROM " . $this->table_name . " WHERE id= ? ";
  
    // prepare query
    $stmt = $this->conn->prepare($query);
  
    // sanitize
    $this->id=htmlspecialchars(strip_tags($this->id));
  
    // bind id of record to delete
    $stmt->bindParam(1, $this->id);
  
    // execute query
    if($stmt->execute()){
        return true;
    }
  
    return false;
}
  
}
?>