<?php
class Admin
{

    private $conn;
    private $table_name = "admin";
    public $id, $admin_name, $admin_email, $admin_password, $status, $createdOn, $createdBy;
    public function __construct($db)
    {
        $this->conn = $db;
    }

    function adm_login()
    {
        $query = "Select id, admin_name, admin_email, admin_password, status, createdOn, createdBy from " . $this->table_name . " where admin_email=:admin_email and admin_password=:admin_password";
        $stmt = $this->conn->prepare($query);
        $stmt->bindParam(":admin_email", $this->admin_email);
        $stmt->bindParam(":admin_password", $this->admin_password);

        $stmt->execute();
        return $stmt;
    }
}
?>