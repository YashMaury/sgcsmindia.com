<?php 

 class payment{
    private $conn;
    private $table_name = "payment";
    public function __construct($db){
        $this->conn = $db;
    }

    public $pid,$user_id,$transaction_id,$amount,$status,$request_id ,$created_by,$created_on;


       public function payment_entry(){

        $query="INSERT INTO
        " . $this->table_name . "
    SET
             user_id=:user_id,
             transaction_id=:transaction_id,
             amount=:amount, 
             request_id=:request_id,
             status=:status,
             created_on=:created_on,
             created_by=:created_by 
             ";

        $stmt = $this->conn->prepare($query);
        $this->user_id=htmlspecialchars(strip_tags($this->user_id));
        $this->transaction_id=htmlspecialchars(strip_tags($this->transaction_id));
        $this->amount=htmlspecialchars(strip_tags($this->amount));
        $this->request_id=htmlspecialchars(strip_tags($this->request_id));
        $this->status=htmlspecialchars(strip_tags($this->status));
        $this->created_by=htmlspecialchars(strip_tags($this->created_by));
        $this->created_on=htmlspecialchars(strip_tags($this->created_on));


        $stmt->bindParam(":user_id", $this->user_id);
        $stmt->bindParam(":transaction_id", $this->transaction_id);
        $stmt->bindParam(":amount", $this->amount);
        $stmt->bindParam(":request_id", $this->request_id);
        $stmt->bindParam(":status", $this->status);
        $stmt->bindParam(":created_by", $this->created_by);
        $stmt->bindParam(":created_on", $this->created_on);
       
         // execute query
         if($stmt->execute()){
            return true;
        }
      
        return false;
    }


    public function read_payment_details(){
        $query="Select pid,user_id,transaction_id,amount,status,request_id ,created_by,created_on
        from " .$this->table_name .  " where user_id=:user_id and amount=:amount and status=1";
        $stmt = $this->conn->prepare($query); 
        $stmt->bindParam(":user_id", $this->user_id);
        $stmt->bindParam(":amount", $this->amount);
        $stmt->execute();
        return $stmt;
    }

    public function confirm_payment(){
        $query="Select pid,user_id,transaction_id,amount,status,request_id ,created_by,created_on
        from " .$this->table_name .  " where user_id=:user_id and transaction_id=:transaction_id and amount=:amount and status=1";
        $stmt = $this->conn->prepare($query); 
        $stmt->bindParam(":user_id", $this->user_id);
        $stmt->bindParam(":amount", $this->amount);
        $stmt->bindParam(":transaction_id", $this->transaction_id);
       

        $stmt->execute();
        return $stmt;
    }
}

?>