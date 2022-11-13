<?php
    $title ="View Record";
    include 'includes/header.php';
    require_once 'includes/authen.php';
    require_once 'db/dbconn.php';

    $result = $crud->getAttendees();

    if(!isset($_GET['id'])){       
        echo '<br/><br/><h2 class="text-danger text-center">404 error <br/>
         You have reach this page in error. <br/>';
         echo 'Navigate to <a href="index.php">Home</a> page or contact your system administrator.</h2>';        
    }else{
        $id = $_GET['id'];
        $result = $crud->getDetails($id);
?>

<br/>
<br/>
<div class="card" style="width: 18rem;">
    <div class="card-body">
        <h3 class="card-title">
        <?php echo $result['first_name'] . ' ' . $result['last_name'];?>
        </h3>
        <h6 class="card-subtitle mb-2 text-mute">
        <?php echo $result['name'];?>
        </h6>
        <br/>
        <p class="card-text">
        Date of Birth: <?php echo $result['date_of_birth'];?>
        </p>
        <p class="card-text">
        Email: <?php echo $result['email'];?>
        </p>
        <p class="card-text">
        Phone Number: <?php echo $result['contact_number'];?>
        </p>
    </div>
</div>
<br/> &nbsp;&nbsp;&nbsp;&nbsp;
        <a href="viewrec.php" class="btn btn-info">View List</a> &nbsp;
        <a href="edit.php?id=<?php echo $result['reg_id'] ?>" class="btn btn-warning">Edit</a> &nbsp;
        <a onclick="return confirm('You are about the delete information. Are you sure you want to delete record?');"
            href="Delete.php?id=<?php echo $result['reg_id'] ?>" class="btn btn-danger">Delete</a>
<?php }?>
<br/>
<br/>
<br/>
<br/>
<br/>
<?php require 'includes/footer.php' ?>