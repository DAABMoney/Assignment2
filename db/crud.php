<?php
    class crud{
        private $db;

        function __construct($dbconn){
            $this->db = $dbconn;
        }

        public function insert($fname, $lname, $dob, $specialty, $email, $contact, $upimg){
            try {
                $sql ="INSERT INTO registered (first_name,last_name,date_of_birth,specialty_id,email,contact_number,upimg) 
                VALUE (:fname, :lname, :dob, :specialty, :email, :contact, :upimg)";
                $stmt = $this -> db->prepare($sql);
                $stmt->bindparam(':fname',$fname);
                $stmt->bindparam(':lname',$lname);
                $stmt->bindparam(':dob',$dob);
                $stmt->bindparam(':specialty',$specialty);
                $stmt->bindparam(':email',$email);                
                $stmt->bindparam(':contact',$contact);
                $stmt->bindparam(':upimg',$upimg);
                $stmt->execute();
                return true;
            } catch (PDOException $e) {
                echo $e->getMessage();
                return false;
            }
        } 

        public function getAttendees(){
            try{
            $sql = "SELECT * FROM `registered` a inner join specialties s on a.specialty_id = s.specialty_id";
            $result  = $this->db->query($sql);
            return $result;
        } catch (PDOException $e) {
            echo $e->getMessage();
            return false;
        }
        }

        public function getSpecialty(){
            try{
            $sql = "SELECT * FROM `specialties`";
            $result  = $this->db->query($sql);
            return $result;
        } catch (PDOException $e) {
            echo $e->getMessage();
            return false;
        }
        }

        public function getDetails($id){
            try{
            $sql = "select * FROM registered a inner join specialties s ON a.specialty_id = s.specialty_id 
            WHERE reg_id = :id";
            $stmt = $this->db->prepare($sql);
            $stmt->bindparam(':id', $id);
            $stmt->execute();
            $result = $stmt->fetch();
            return $result;
            } catch (PDOException $e) {
                echo $e->getMessage();
                return false;
            }
        }

        public function editDetails($id, $fname, $lname, $dob, $specialty, $email, $contact){
            try{
            $sql = "UPDATE `registered` SET `first_name`=:fname, `last_name`=:lname,
            `date_of_birth`=:dob,`specialty_id`=:specialty,`email`=:email,
            `contact_number`=:contact WHERE reg_id = :id";
            $stmt = $this -> db->prepare($sql);
            $stmt->bindparam(':id',$id);
            $stmt->bindparam(':fname',$fname);
            $stmt->bindparam(':lname',$lname);
            $stmt->bindparam(':dob',$dob);
            $stmt->bindparam(':specialty',$specialty);
            $stmt->bindparam(':email',$email);                
            $stmt->bindparam(':contact',$contact);
            $stmt->execute();
            return true;
        } catch (PDOException $e) {
            echo $e->getMessage();
            return false;
        }

    }
    public function deleteDetails($id){
        try{
        $sql = "DELETE FROM `registered` WHERE reg_id = :id";
        $stmt = $this->db->prepare($sql);
        $stmt->bindparam(':id', $id);
        $stmt->execute();
        return true;
            }catch (PDOException $e) {
                echo $e->getMessage();
                return false;
            }


    }

    }
?>