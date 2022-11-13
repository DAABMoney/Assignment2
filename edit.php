<?php
    $title ="Edit Information";
    include 'includes/header.php';
    require_once 'includes/authen.php';
    require_once 'db/dbconn.php';
    $result = $crud->getSpecialty();
    if(!isset($_GET['id'])){
        echo '<br/><br/><h2 class="text-center text-danger">Error getting participant information. <br/>
         Please go back and try again or contact your system administrator</h2>';
         header("Location: viewrec.php");
    }else{
        $id = $_GET['id'];
        $registered = $crud->getDetails($id);        
?>

<br/>
<br/>
<fieldset>
<legend>Edit attendee Information:</legend>
<form method="post" action="saveChanges.php" name="id" onsubmit="return validateForm()">
<input type="hidden" name="id" value="<?php echo $registered['reg_id']?>" />
<table style="width:100%" cellspacing="0" padding="1">
    <tr>
       <td>
<div class="form-group">
    <div class="col-sm-10">
    <i class="fa-solid fa-user"></i>
    <label for="fname" class="form-label">First Name</label>
    <input type="text" class="form-control" value="<?php echo $registered['first_name']?>" id="fname" name="fname">
    <div class="error" id="nameErr"></div>
    </div>
</div>
    </td>
       <td>    
<div class="form-group">
    <div class="col-sm-10">
    <i class="fa-solid fa-user"></i>
    <label for="lname" class="form-label" >Last Name</label>
    <input type="text" class="form-control" value="<?php echo $registered['last_name']?>"id="lname" name="lname">
    <div class="error" id="nameErr2"></div>
    </div>
</div>
</td>
</tr>
<tr>
    <td>
<div class="form-group">
    <div class="col-sm-10">
    <i class="fa fa-calendar"></i>
    <label for="dob" class="form-label" >Date of Birth</label>
    <input type="date" class="form-control" value="<?php echo $registered['date_of_birth']?>"id="dob" name="dob">
    </div>
</div>
</td>
<td>
<div class="form-group">
    <div class="col-sm-10">
    <i class="fa fa-gears"></i>
    <label for="select">Specialty</label>    
    <select class="form-control" id="select" name="specialty">    
        <?php while($r = $result->fetch(PDO::FETCH_ASSOC)) {?>
            <option value="<?php echo $r['specialty_id'] ?>" <?php if($r['specialty_id'] == 
            $registered['specialty_id']) echo 'Selected'?>> 
                <?php echo $r['name'];?> 
            </option>
            <?php }?>        
    <div class="error" id="specErr"></div>
    </div>
</div>
</td>
</tr>
<tr>
<td>
  <div class="from-group">
  <div class="col-sm-10">
  <i class="fa-solid fa-envelope"></i>
    <label for="email" class="form-label">Email address</label>
    <input type="email" class="form-control" value="<?php echo $registered['email']?>"id="email" name="email" aria-describedby="emailHelp">
    <div id="emailHelp" class="form-text">Your email and subsequent information are kept private.</div>
    <div  class="error" id="emailErr"></div> 
</div>
  </div>
</td>
<td>
  <div class="from-group">
  <div class="col-sm-10">
  <i class="fa fa-address-card"></i>
    <label for="phoneNum" class="form-label">Contact Number</label>
    <input type="text" class="form-control" value="<?php echo $registered['contact_number']?>" id="phoneNum" name="contact" aria-describedby="phoneHelp"
    onkeyup="phoneDash(this)" onkeypress="return isNumber(event)">
    <div id="phoneHelp" class="form-text">Your contact number and subsequent information are kept private.</div>
    <div class="error" id="phoneNumErr"></div>
</div>
  </div>
</td>
</tr>
<tr>
    <td>
        <div class="d-grid gap-2">    
        <button type="submit" name="submit" class="btn btn-success" value="Submit">Save &nbsp; <i class="fa fa-pencil-square-o"></i></button>
        </div>
    </td>
    <td>
        <div class="d-grid gap-2">
        <a href="viewrec.php" class="btn btn-secondary">Cancel</a>
        </div>
</table>
</form>
</fieldset>
<?php }?>
<!---
<div class="navbtn">
&nbsp<a href="array.php" class="previous">&laquo; Previous</a>
&nbsp<a href="datetime.php" class="next">Next &raquo;</a>
</div>
--->
<?php require 'includes/footer.php' ?>