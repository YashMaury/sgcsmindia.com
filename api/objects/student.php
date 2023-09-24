<?php
class Student
{

    private $conn;
    private $student_registration = "student_registration";
    // private $table_name = "registration";
    public $id, $franchise_id, $student_name, $student_mobile, $course, $student_email, $student_password, $status, $createdOn, $createdBy;


    public function __construct($db)
    {
        $this->conn = $db;
    }

    function read_reg_maxId()
    {
        $query = "Select max(id) as id from " . $this->student_registration;
        $stmt = $this->conn->prepare($query);
        $stmt->execute();
        return $stmt;
    }
    function read_reg_by_email()
    {
        $query = "Select student_email from " . $this->student_registration . "where student_email=:student_email";
        $stmt = $this->conn->prepare($query);
        $stmt->bindParam(":student_email", $this->student_email);
        $stmt->execute();
        return $stmt;
    }

    function student_registration()
    {

        // query to insert record
        $query = "INSERT INTO " . $this->student_registration . "
                SET
                    franchise_id=:franchise_id,
                    student_name=:student_name,
                    student_mobile=:student_mobile,
                    course=:course,
                    status=:status,
                    student_email=:student_email,
                    student_password=:student_password,
                    createdOn=:createdOn,
                    createdBy=:createdBy
                    ";

        // prepare query
        $stmt = $this->conn->prepare($query);
        $this->franchise_id = htmlspecialchars(strip_tags($this->franchise_id));
        $this->student_name = htmlspecialchars(strip_tags($this->student_name));
        $this->student_mobile = htmlspecialchars(strip_tags($this->student_mobile));
        $this->course = htmlspecialchars(strip_tags($this->course));
        $this->status = htmlspecialchars(strip_tags($this->status));
        $this->student_email = htmlspecialchars(strip_tags($this->student_email));
        $this->student_password = htmlspecialchars(strip_tags($this->student_password));
        $this->createdOn = htmlspecialchars(strip_tags($this->createdOn));
        $this->createdBy = htmlspecialchars(strip_tags($this->createdBy));

        //bind values
        $stmt->bindParam(":franchise_id", $this->franchise_id);
        $stmt->bindParam(":student_name", $this->student_name);
        $stmt->bindParam(":student_mobile", $this->student_mobile);
        $stmt->bindParam(":course", $this->course);
        $stmt->bindParam(":status", $this->status);
        $stmt->bindParam(":student_email", $this->student_email);
        $stmt->bindParam(":student_password", $this->student_password);
        $stmt->bindParam(":createdOn", $this->createdOn);
        $stmt->bindParam(":createdBy", $this->createdBy);


        // execute query
        if ($stmt->execute()) {
            return true;
        }

        return false;
    }

    function deleteStudent()
    {

        // delete query
        $query = " DELETE FROM " . $this->student_registration . " WHERE id= ? ";

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

    // function insert_registration(){

    //     // query to insert record
    // $query = "INSERT INTO
    //                 " . $this->table_name . "
    //             SET
    //                      full_name=:full_name,
    //                       father_name=:father_name,
    //                        mother_name=:mother_name, 
    //                        status=:status,
    //                        result=:result,
    //                        admit_card=:admit_card,
    //                        password=:password,
    //                      spouse_name=:spouse_name,
    //                      marital_status=:marital_status,
    //                       gender=:gender,
    //                        dob=:dob,
    //                         mobile=:mobile,
    //                      alternate_mobile=:alternate_mobile,
    //                       email=:email, 
    //                       address1=:address1,
    //                       address2=:address2,
    //                        address3=:address3,
    //                      cor_address=:cor_address ,
    //                      district=:district,
    //                      state=:state,
    //                       pincode=:pincode,
    //                       religion=:religion,
    //                       category=:category,
    //                       nationality=:nationality,
    //                      h_qualification=:h_qualification, 
    //                       subject=:subject,
    //                        passing_date=:passing_date,
    //                         h_percentage=:h_percentage,
    //                      grade=:grade, 
    //                       languages=:languages, 
    //                       is_read=:is_read,
    //                        is_write=:is_write, 
    //                        is_speak=:is_speak,
    //                        disability_cat=:disability_cat,  
    //                      disability_type=:disability_type,
    //                       ex_serviceman=:ex_serviceman,
    //                       serving_defence_per=:serving_defence_per, 
    //                       exam_name=:exam_name,
    //                        service_period=:service_period, 
    //                        created_by=:created_by, 
    //                        created_on=:created_on,
    //                       registration_no=:registration_no"; 

    //     // prepare query
    //     $stmt = $this->conn->prepare($query);
    //     $this->full_name=htmlspecialchars(strip_tags($this->full_name));
    //     $this->father_name=htmlspecialchars(strip_tags($this->father_name));
    //     $this->mother_name=htmlspecialchars(strip_tags($this->mother_name));
    //     $this->spouse_name=htmlspecialchars(strip_tags($this->spouse_name));
    //     $this->marital_status=htmlspecialchars(strip_tags($this->marital_status));
    //     $this->status=htmlspecialchars(strip_tags($this->status));
    //     $this->admit_card=htmlspecialchars(strip_tags($this->admit_card));
    //     $this->result=htmlspecialchars(strip_tags($this->result));
    //     $this->password=htmlspecialchars(strip_tags($this->password));
    //     $this->gender=htmlspecialchars(strip_tags($this->gender));
    //     $this->dob=htmlspecialchars(strip_tags($this->dob));
    //     $this->mobile=htmlspecialchars(strip_tags($this->mobile));
    //     $this->alternate_mobile=htmlspecialchars(strip_tags($this->alternate_mobile));
    //     $this->email=htmlspecialchars(strip_tags($this->email));
    //     $this->address1=htmlspecialchars(strip_tags($this->address1));
    //     $this->address2=htmlspecialchars(strip_tags($this->address2));
    //     $this->address3=htmlspecialchars(strip_tags($this->address3));
    //     $this->cor_address=htmlspecialchars(strip_tags($this->cor_address));
    //     $this->district=htmlspecialchars(strip_tags($this->district));
    //     $this->state=htmlspecialchars(strip_tags($this->state));
    //     $this->pincode=htmlspecialchars(strip_tags($this->pincode));
    //     $this->religion=htmlspecialchars(strip_tags($this->religion));
    //     $this->category=htmlspecialchars(strip_tags($this->category));
    //     $this->nationality=htmlspecialchars(strip_tags($this->nationality));
    //     $this->h_qualification=htmlspecialchars(strip_tags($this->h_qualification));
    //     $this->subject=htmlspecialchars(strip_tags($this->subject));
    //     $this->passing_date=htmlspecialchars(strip_tags($this->passing_date));
    //     $this->h_percentage=htmlspecialchars(strip_tags($this->h_percentage));
    //     $this->grade=htmlspecialchars(strip_tags($this->grade));
    //     $this->languages=htmlspecialchars(strip_tags($this->languages));
    //     $this->is_read=htmlspecialchars(strip_tags($this->is_read));
    //     $this->is_write=htmlspecialchars(strip_tags($this->is_write));
    //     $this->is_speak=htmlspecialchars(strip_tags($this->is_speak));
    //     $this->disability_cat=htmlspecialchars(strip_tags($this->disability_cat));
    //     $this->disability_type=htmlspecialchars(strip_tags($this->disability_type));
    //     $this->ex_serviceman=htmlspecialchars(strip_tags($this->ex_serviceman));
    //     $this->serving_defence_per=htmlspecialchars(strip_tags($this->serving_defence_per));
    //     $this->exam_name=htmlspecialchars(strip_tags($this->exam_name));
    //     $this->service_period=htmlspecialchars(strip_tags($this->service_period));
    //     $this->created_by=htmlspecialchars(strip_tags($this->created_by));
    //     $this->created_on=htmlspecialchars(strip_tags($this->created_on));
    //     $this->registration_no=htmlspecialchars(strip_tags($this->registration_no));

    //     //bind values
    //     $stmt->bindParam(":full_name", $this->full_name);
    //     $stmt->bindParam(":father_name", $this->father_name);
    //     $stmt->bindParam(":mother_name", $this->mother_name);
    //     $stmt->bindParam(":spouse_name", $this->spouse_name);
    //     $stmt->bindParam(":marital_status", $this->marital_status);
    //     $stmt->bindParam(":status", $this->status);
    //     $stmt->bindParam(":admit_card", $this->admit_card);
    //     $stmt->bindParam(":result", $this->result);
    //     $stmt->bindParam(":password", $this->password);
    //     $stmt->bindParam(":gender", $this->gender);
    //     $stmt->bindParam(":dob", $this->dob);
    //     $stmt->bindParam(":mobile", $this->mobile);
    //     $stmt->bindParam(":alternate_mobile", $this->alternate_mobile);
    //     $stmt->bindParam(":email", $this->email); 
    //     $stmt->bindParam(":address1", $this->address1);
    //     $stmt->bindParam(":address2", $this->address2);
    //     $stmt->bindParam(":address3", $this->address3);
    //     $stmt->bindParam(":cor_address", $this->cor_address);
    //     $stmt->bindParam(":district", $this->district);
    //     $stmt->bindParam(":state", $this->state);
    //     $stmt->bindParam(":religion", $this->religion);
    //     $stmt->bindParam(":pincode", $this->pincode);
    //     $stmt->bindParam(":category", $this->category);
    //     $stmt->bindParam(":nationality", $this->nationality);
    //     $stmt->bindParam(":h_qualification", $this->h_qualification);
    //     $stmt->bindParam(":subject", $this->subject);
    //     $stmt->bindParam(":passing_date", $this->passing_date);
    //     $stmt->bindParam(":grade", $this->grade);
    //     $stmt->bindParam(":h_percentage", $this->h_percentage);
    //     $stmt->bindParam(":languages", $this->languages);
    //     $stmt->bindParam(":is_read", $this->is_read);
    //     $stmt->bindParam(":is_write", $this->is_write);
    //     $stmt->bindParam(":is_speak", $this->is_speak);
    //     $stmt->bindParam(":disability_cat", $this->disability_cat);
    //     $stmt->bindParam(":disability_type", $this->disability_type);
    //     $stmt->bindParam(":ex_serviceman", $this->ex_serviceman);
    //     $stmt->bindParam(":serving_defence_per", $this->serving_defence_per);
    //     $stmt->bindParam(":exam_name", $this->exam_name);
    //     $stmt->bindParam(":service_period", $this->service_period);
    //     $stmt->bindParam(":created_by", $this->created_by);
    //     $stmt->bindParam(":created_on", $this->created_on);
    //     $stmt->bindParam(":registration_no", $this->registration_no);


    //     // execute query
    //     if($stmt->execute()){
    //         return true;
    //     }

    //     return false;

    // }

    //read registerd farmers
    function readStudent()
    {
        $query = "Select id, franchise_id, student_name, student_mobile , course, student_email, student_password, status, createdOn, createdBy  from " . $this->student_registration .
            " where franchise_id=:franchise_id";
        $stmt = $this->conn->prepare($query);
        $stmt->bindParam(":franchise_id", $this->franchise_id);

        $stmt->execute();
        return $stmt;
    }


    // function read_profile_by_id(){
    //     $query="Select 
    //     id, full_name, father_name, mother_name, spouse_name,
    //     exam_name, marital_status, status, result, admit_card, 
    //     password, gender, dob, mobile, alternate_mobile, email,
    //     address1, address2, address3, cor_address, district, state,
    //     pincode, religion, category, nationality, h_qualification, subject,
    //     passing_date, h_percentage, grade, languages, is_read, is_write, is_speak,
    //     zone, post, postcode, disability_cat, disability_type, ex_serviceman, exam_name,
    //     serving_defence_per, service_period, state_exam1, state_exam2, center_exam1, center_exam2,
    //     created_by, created_on, registration_no

    //     from " .$this->table_name .  " where id=:id";
    //     $stmt = $this->conn->prepare($query); 
    //     $stmt->bindParam(":id", $this->id);
    //     $stmt->execute();
    //     return $stmt;
    // }

    function student_login()
    {
        $query = "Select id, student_name, student_mobile, course, student_email, student_password, status, createdOn, createdBy  from " . $this->student_registration . " 
        where student_email=:student_email and student_password=:student_password";
        $stmt = $this->conn->prepare($query);
        $stmt->bindParam(":student_email", $this->student_email);
        $stmt->bindParam(":student_password", $this->student_password);

        $stmt->execute();
        return $stmt;
    }

    // function update_registration(){

    //     // query to insert record
    //     $query = "UPDATE 
    //                 " . $this->table_name . "
    //             SET
    //                      full_name=:full_name,
    //                       father_name=:father_name,
    //                        mother_name=:mother_name, 
    //                        status=:status,
    //                        result=:result,
    //                        admit_card=:admit_card,
    //                        password=:password,
    //                      spouse_name=:spouse_name,
    //                      marital_status=:marital_status,
    //                       gender=:gender,
    //                        dob=:dob,
    //                         mobile=:mobile,
    //                      alternate_mobile=:alternate_mobile,
    //                       email=:email, 
    //                       address1=:address1,
    //                       address2=:address2,
    //                        address3=:address3,
    //                      cor_address=:cor_address ,
    //                      district=:district,
    //                      state=:state,
    //                       pincode=:pincode,
    //                       religion=:religion,
    //                       category=:category,
    //                       nationality=:nationality,
    //                      h_qualification=:h_qualification, 
    //                       subject=:subject,
    //                        passing_date=:passing_date,
    //                      h_percentage=:h_percentage,
    //                      grade=:grade, 
    //                       languages=:languages, 
    //                       is_read=:is_read,
    //                        is_write=:is_write, 
    //                        is_speak=:is_speak,
    //                        disability_cat=:disability_cat,  
    //                      disability_type=:disability_type,
    //                       ex_serviceman=:ex_serviceman,
    //                       serving_defence_per=:serving_defence_per, 
    //                        service_period=:service_period
    //                           WHERE id=:id
    //                       "; 

    //     // prepare query
    //     $stmt = $this->conn->prepare($query);
    //     $this->id=htmlspecialchars(strip_tags($this->id));
    //     $this->full_name=htmlspecialchars(strip_tags($this->full_name));
    //     $this->father_name=htmlspecialchars(strip_tags($this->father_name));
    //     $this->mother_name=htmlspecialchars(strip_tags($this->mother_name));
    //     $this->spouse_name=htmlspecialchars(strip_tags($this->spouse_name));
    //     $this->marital_status=htmlspecialchars(strip_tags($this->marital_status));
    //     $this->status=htmlspecialchars(strip_tags($this->status));
    //     $this->admit_card=htmlspecialchars(strip_tags($this->admit_card));
    //     $this->result=htmlspecialchars(strip_tags($this->result));
    //     $this->password=htmlspecialchars(strip_tags($this->password));
    //     $this->gender=htmlspecialchars(strip_tags($this->gender));
    //     $this->dob=htmlspecialchars(strip_tags($this->dob));
    //     $this->mobile=htmlspecialchars(strip_tags($this->mobile));
    //     $this->alternate_mobile=htmlspecialchars(strip_tags($this->alternate_mobile));
    //     $this->email=htmlspecialchars(strip_tags($this->email));
    //     $this->address1=htmlspecialchars(strip_tags($this->address1));
    //     $this->address2=htmlspecialchars(strip_tags($this->address2));
    //     $this->address3=htmlspecialchars(strip_tags($this->address3));
    //     $this->cor_address=htmlspecialchars(strip_tags($this->cor_address));
    //     $this->district=htmlspecialchars(strip_tags($this->district));
    //     $this->state=htmlspecialchars(strip_tags($this->state));
    //     $this->pincode=htmlspecialchars(strip_tags($this->pincode));
    //     $this->religion=htmlspecialchars(strip_tags($this->religion));
    //     $this->category=htmlspecialchars(strip_tags($this->category));
    //     $this->nationality=htmlspecialchars(strip_tags($this->nationality));
    //     $this->h_qualification=htmlspecialchars(strip_tags($this->h_qualification));
    //     $this->subject=htmlspecialchars(strip_tags($this->subject));
    //     $this->passing_date=htmlspecialchars(strip_tags($this->passing_date));
    //     $this->h_percentage=htmlspecialchars(strip_tags($this->h_percentage));
    //     $this->grade=htmlspecialchars(strip_tags($this->grade));
    //     $this->languages=htmlspecialchars(strip_tags($this->languages));
    //     $this->is_read=htmlspecialchars(strip_tags($this->is_read));
    //     $this->is_write=htmlspecialchars(strip_tags($this->is_write));
    //     $this->is_speak=htmlspecialchars(strip_tags($this->is_speak));
    //     $this->disability_cat=htmlspecialchars(strip_tags($this->disability_cat));
    //     $this->disability_type=htmlspecialchars(strip_tags($this->disability_type));
    //     $this->ex_serviceman=htmlspecialchars(strip_tags($this->ex_serviceman));
    //     $this->serving_defence_per=htmlspecialchars(strip_tags($this->serving_defence_per));
    //     $this->service_period=htmlspecialchars(strip_tags($this->service_period));

    //     //bind values
    //     $stmt->bindParam(":id", $this->id);
    //     $stmt->bindParam(":full_name", $this->full_name);
    //     $stmt->bindParam(":father_name", $this->father_name);
    //     $stmt->bindParam(":mother_name", $this->mother_name);
    //     $stmt->bindParam(":spouse_name", $this->spouse_name);
    //     $stmt->bindParam(":marital_status", $this->marital_status);
    //     $stmt->bindParam(":status", $this->status);
    //     $stmt->bindParam(":admit_card", $this->admit_card);
    //     $stmt->bindParam(":result", $this->result);
    //     $stmt->bindParam(":password", $this->password);
    //     $stmt->bindParam(":gender", $this->gender);
    //     $stmt->bindParam(":dob", $this->dob);
    //     $stmt->bindParam(":mobile", $this->mobile);
    //     $stmt->bindParam(":alternate_mobile", $this->alternate_mobile);
    //     $stmt->bindParam(":email", $this->email); 
    //     $stmt->bindParam(":address1", $this->address1);
    //     $stmt->bindParam(":address2", $this->address2);
    //     $stmt->bindParam(":address3", $this->address3);
    //     $stmt->bindParam(":cor_address", $this->cor_address);
    //     $stmt->bindParam(":district", $this->district);
    //     $stmt->bindParam(":state", $this->state);
    //     $stmt->bindParam(":religion", $this->religion);
    //     $stmt->bindParam(":pincode", $this->pincode);
    //     $stmt->bindParam(":category", $this->category);
    //     $stmt->bindParam(":nationality", $this->nationality);
    //     $stmt->bindParam(":h_qualification", $this->h_qualification);
    //     $stmt->bindParam(":subject", $this->subject);
    //     $stmt->bindParam(":passing_date", $this->passing_date);
    //     $stmt->bindParam(":grade", $this->grade);
    //     $stmt->bindParam(":h_percentage", $this->h_percentage);
    //     $stmt->bindParam(":languages", $this->languages);
    //     $stmt->bindParam(":is_read", $this->is_read);
    //     $stmt->bindParam(":is_write", $this->is_write);
    //     $stmt->bindParam(":is_speak", $this->is_speak);
    //     $stmt->bindParam(":disability_cat", $this->disability_cat);
    //     $stmt->bindParam(":disability_type", $this->disability_type);
    //     $stmt->bindParam(":ex_serviceman", $this->ex_serviceman);
    //     $stmt->bindParam(":serving_defence_per", $this->serving_defence_per);
    //     $stmt->bindParam(":service_period", $this->service_period);


    //     // execute query
    //     if($stmt->execute()){
    //         return true;
    //     }

    //     return false;

    // }


    //     function reg_update_approve(){

    //     // query to insert record
    //    $query = "UPDATE 
    //                 " . $this->table_name . "
    //             SET
    //                         status=:status
    //                         WHERE id=:id and registration_no=:registration_no"; 

    //     // prepare query
    //     $stmt = $this->conn->prepare($query);
    //     $this->id=htmlspecialchars(strip_tags($this->id));
    //     $this->status=htmlspecialchars(strip_tags($this->status));
    //     $this->registration_no=htmlspecialchars(strip_tags($this->registration_no));

    //     //bind values
    //     $stmt->bindParam(":id", $this->id);
    //     $stmt->bindParam(":status", $this->status);
    //     $stmt->bindParam(":registration_no", $this->registration_no);


    //     // execute query
    //     if($stmt->execute()){
    //         return true;
    //     }

    //     return false;     
    // }

    // public function forgot_password(){
    //     $query="SELECT  id, name,email, password from " . $this->table_name .  " where email=:email";
    //     $stmt = $this->conn->prepare($query); 
    //     $stmt->bindParam(":email", $this->email);
    //     $stmt->execute();
    //     return $stmt;
    // }

    // function read_registration_by_status(){
    //     $query="Select 
    //     id, full_name, father_name, mother_name, spouse_name, marital_status,status,result,admit_card,password,  gender,dob , mobile  , alternate_mobile , email, address1
    // , address2, address3 , cor_address  , district , state , pincode , religion, category ,nationality, h_qualification , subject, passing_date
    //  , h_percentage, grade,languages , is_read,is_write,zone,post,postcode,disability_cat,disability_type,ex_serviceman,
    //  exam_name
    // , serving_defence_per,service_period , state_exam1,state_exam2,center_exam1,center_exam2 created_by,created_on,registration_no
    //     from " .$this->table_name .  " where status=:status";
    //     $stmt = $this->conn->prepare($query); 
    //     $stmt->bindParam(":status", $this->status);
    //     $stmt->execute();
    //     return $stmt;
    // }
}
?>