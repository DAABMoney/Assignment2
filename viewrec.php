<?php
    $title ="View Records";
    include 'includes/header.php';
    require_once 'db/dbconn.php';

    $result = $crud->getAttendees();
?>
<br/>

    <table class="table table-striped table-hover" >
    <thead>
        <tr>
            <th>#</th>    
            <th>First Name</th>
            <th>Last Name</th>           
            <th>Specialty</th>            
            <th class="text-center">Actions</th>                         
        </tr>
    </thead>
    <tbody>
    <?php while($r = $result->fetch(PDO::FETCH_ASSOC)){?>
        <tr>
            <td><?php echo $r['reg_id'] ?></td>
            <td><?php echo $r['first_name'] ?></td>
            <td><?php echo $r['last_name'] ?></td>            
            <td><?php echo $r['name'] ?></td>            
            <td class="text-center">   
                <a href="view.php?id=<?php echo $r['reg_id'] ?>" class="btn btn-info">View</a> &nbsp; &nbsp;
                <a href="edit.php?id=<?php echo $r['reg_id'] ?>" class="btn btn-warning">Edit</a> &nbsp; &nbsp;
                <a onclick="return confirm('You are about the delete information. Are you sure you want to delete record?');"
                 href="Delete.php?id=<?php echo $r['reg_id'] ?>" class="btn btn-danger">Delete</a>
            </td>
        </tr>
    <?php }?>
    </tbody>
    </table>
<br/>
<br/>
<br/>
<br/>
<br/>
<br/>
<?php require 'includes/footer.php' ?>