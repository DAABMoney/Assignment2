<?php
require_once 'db/dbconn.php';

if(isset($_POST['submit'])){
    $id = $_POST['id'];
    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $dob = $_POST['dob'];
    $specialty = $_POST['specialty'];
    $email = $_POST['email'];
    $contact = $_POST['contact'];
    
    $result = $crud->editDetails($id, $fname, $lname, $dob, $specialty, $email, $contact);
    if($result){
        header("Location: viewrec.php");
    
    }else{
        echo '<h2 class="text-danger">Error updating participant information. <br/>
            Please go back and try again or contact your system administrator</h2>';
    }
}
else{

}

?>