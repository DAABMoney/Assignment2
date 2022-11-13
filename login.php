<?php
    $title ="User Login";
    include 'includes/header.php';
    require_once 'db/dbconn.php';
    if($_SERVER['REQUEST_METHOD'] == 'POST'){
        $username = strtolower(trim($_POST['username']));
        $password = $_POST['password'];
        $new_password = md5($password.$username);
        $result = $user->getUser($username,$new_password);
        if(!$result){
            echo '<div class="alert alert-danger">Username of password incorrect, try again. </div>';
        }else{
            $_SESSION['username'] = $username;
            $_SESSION['userid'] = $result['id'];
            header("Location: viewrec.php");
        }

    }
?>

<br/>
<fieldset class="fieldsetLogin">
<legend>User Login:</legend>
<form action="<?php echo htmlentities($_SERVER['PHP_SELF']); ?>" method="post">
<table style="width: 100%" cellspacing="0">
    <tr>
       <td>
<div class="form-group">
    <div class="col-sm-10">
    <i class="fa-solid fa-user"></i>
    <label for="username" >Username*</label>
    <input type="text" class="form-control" id="username" name="username" 
    value="<?php if($_SERVER['REQUEST_METHOD'] == 'POST') echo $_POST['username'];?>">
    </div>
</div>
    <td>    
<div class="form-group">
    <div class="col-sm-10">
    <i class="fa-solid fa-user"></i>
    <label for="password" >Password*</label>
    <input type="password" class="form-control" id="passsword" name="password">
    <?php if (empty($password) && isset($password_error)) echo "<p class='text-danger'> $password_error</P> "?>
    </div>
</div>
</td>
</tr>
</table>
<br/>
    <div class="d-grid gap-1">    
        <button type="submit" class="btn btn-primary" value="Login">Login &nbsp;<i class="fa fa-key"></i></button>
        <a href="#"> Forgot password </a>
    </div>
</fieldset>
<br/>
<br/>
<?php require 'includes/footer.php' ?>