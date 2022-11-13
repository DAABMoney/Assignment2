<?php
require_once 'db/dbconn.php';

if(!$_GET['id']){
    echo '<h2 class="text-danger">Error deleting participant information. <br/>
    Please go back and try again or contact your system administrator</h2>';
    header("Location: viewrec.php");
    }else{
        $id = $_GET['id'];
        $result = $crud->deleteDetails($id);
        if($result){
            header("Location: viewrec.php");
        }
        else{
            echo '<h2 class="text-danger">Error deleting participant information. <br/>
             Please go back and try again or contact your system administrator</h2>';
        }
    }
?>