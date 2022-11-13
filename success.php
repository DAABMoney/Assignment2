<?php
    $title ="Successful";
    include 'includes/header.php';
    require_once 'db/dbconn.php';

   

    if(isset($_POST['submit'])){
        $fname = $_POST['fname'];
        $lname = $_POST['lname'];
        $dob = $_POST['dob'];
        $specialty = $_POST['specialty'];
        $email = $_POST['email'];
        $contact = $_POST['contact'];

        $origin_file = $_FILES["upimg"]["tmz_name"];
        $ext = pathinfo($_FILES["upimg"]["name"], PATHINFO_EXTENSION);
        $target_dir = 'uploads/';
        $destination = "$target_dir$contact.$ext";
        move_uploaded_file($origin_file,$destination);
       

        $isSuccess = $crud->insert($fname, $lname, $dob, $specialty, $email, $contact, $destination);
        if($isSuccess){
            echo '<h2 class="text-center text-success">Registration successful.</h2><br/><br/>';
            echo '<h2 class="text-center text-success">Thank you for registering. Click the link 
            to return<a href="index.php">Home</a></h2>';
        }
        else{
            echo '<br/><h2 class="text-center text-danger">Sorry registration unsuccessful.</h2><br/><br/>';
            echo '<h2 class="text-center text-danger">Click the link to return<a href="index.php">Home</a>
            and try again.</h2>';
            
        }
    }
?>
<br/>
<br/>
<br/>
<br/>
<br/>
<br/>
<?php require 'includes/footer.php' ?>