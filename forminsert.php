<?php 
include "header.php";   
 include "database.php";
?>  

<div class="container">
    <div class="row mt-5">
        <div class="col-md-12">
            <form action="/mudassir/file.php" method="post">
                <div class="mb-3">
                    <label for="name" class="form-label">Name</label>
                    <input type="text" name="name" class="form-control"  id="name" placeholder="Enter Name">
                </div>
                
                <div class="mb-3">
                    <label for="cnic" class="form-label">CNIC</label>
                    <input type="text" name="cnic" class="form-control" id="cnic" placeholder="Enter CNIC">
                </div>
                
                <div class="mb-3">
                    <label for="email" class="form-label">Email</label>
                    <input type="email" name="email" class="form-control" id="email" placeholder="Enter Email">
                </div>
                
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>

            <?php
            if($_POST){
                $name = "'".$_POST['name']."'";   
                $cnic = "'".$_POST['cnic']."'";       
                $email = "'".$_POST['email']."'";     
                
                $insert_sql = "INSERT INTO employee     
                             (name, cnic, email)                          
                             VALUES ('".$name."', ".$cnic.", ".$email.")";
                             
                $conn->query($insert_sql);
                
                header("Location: forminsert.php");
                exit;
            }
            ?>
        </div>
    </div>
</div>


