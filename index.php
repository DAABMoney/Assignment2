<?php
    $title ="Registration";
    include 'includes/header.php';
    require_once 'db/dbconn.php';
    $result = $crud->getSpecialty();
?>
<br/>
<br/>
<fieldset>
<legend>Attendee Information:</legend>
<form method="post" action="success.php" onsubmit="return validateForm()">
<table style="width:100%" cellspacing="0">
    <tr>
       <td>
<div class="form-group">
    <div class="col-sm-10">
    <i class="fa-solid fa-user"></i>
    <label for="fname" class="form-label">First Name</label>
    <input type="text" class="form-control" id="fname" name="fname" required>
    <div class="error" id="nameErr"></div>
    </div>
</div>
    </td>
       <td>    
<div class="form-group">
    <div class="col-sm-10">
    <i class="fa-solid fa-user"></i>
    <label for="lname" class="form-label" >Last Name</label>
    <input type="text" class="form-control" id="lname" name="lname" required>
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
    <input type="date" class="form-control" id="dob" name="dob" required>
    </div>
</div>
</td>
<td>
<div class="form-group">
    <div class="col-sm-10">
    <i class="fa fa-gears"></i>
    <label for="select">Specialty</label>    
    <select class="form-control" id="select" name="specialty" required>
    <option value="">--Select Area of Specialty--</option>
        <?php while($r = $result->fetch(PDO::FETCH_ASSOC)) {?>
            <option value="<?php echo $r['specialty_id'] ?>"> <?php echo $r['name'];?> </option>
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
    <input type="email" class="form-control" id="email" name="email" aria-describedby="emailHelp" required>
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
    <input type="text" class="form-control" id="phoneNum" name="contact" aria-describedby="phoneHelp"
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
  <button type="submit" name="submit" class="btn btn-primary" value="Submit">Register &nbsp;<i class="fa fa-send-o fa-fly"></i></button>
</div>
</td>
</tr>
</table>
</form>
</fieldset>
<!---
<div class="navbtn">
&nbsp<a href="array.php" class="previous">&laquo; Previous</a>
&nbsp<a href="datetime.php" class="next">Next &raquo;</a>
</div>
--->
<?php require 'includes/footer.php' ?>