
<?php
include("header.php");
include "database.php";

$sql = "
    SELECT patient.*, hospital.title AS hospital_name, hospital.city 
    FROM patient
    LEFT JOIN hospital ON patient.hospital_id = hospital.id
";
$result = $def_conn->query($sql);
if ($result && $result->num_rows > 0) {
    $patients = $result->fetch_all(MYSQLI_ASSOC);
}


    if (isset($_GET ['id']) && $_GET['id']> 0){
        $sql = "DELETE FROM patient WHERE id =".$_GET['id'];
        $result = $def_conn->query($sql);
         header("Location: hospital.php");
    exit;

    }
      ?>

      
 
  <?php


if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $id = $_POST['id'] ?? ''; 
    $name = $_POST['name'];
    $cnic = $_POST['cnic'];
    $address = $_POST['address'];
    $hospital_id = $_POST['hospital_id'];

  
    if (!empty($id)) {

      
        $sql = "SELECT * FROM patient WHERE id = $id";
        $result = $def_conn->query($sql);
        $patient = $result->fetch_assoc();
        $old_file_path = "uploads/" . $patient['img'];

        
        $new_file_name = $patient['img']; 

        if (!empty($_FILES['banner_image']['name'])) {

            if (file_exists($old_file_path)) {
                unlink($old_file_path);
            }

            $upload_dir = "uploads/";
            if (!is_dir($upload_dir)) {
                mkdir($upload_dir, 0777, true);
            }

            $new_file_name = time() . '-' . basename($_FILES['banner_image']['name']);
            $target_file = $upload_dir . $new_file_name;

            if (!move_uploaded_file($_FILES['banner_image']['tmp_name'], $target_file)) {
                echo "Error uploading new file.";
                exit;
            }
        }

      
        $update_sql = "UPDATE patient 
                       SET name = '$name', 
                           cnic = '$cnic', 
                           address = '$address', 
                           hospital_id = '$hospital_id', 
                           img = '$new_file_name' 
                       WHERE id = $id";

        if ($def_conn->query($update_sql)) {
            echo "Record updated successfully.";
        } else {
            echo "Database Error: " . $def_conn->error;
        }

    } else {
        
        if (!empty($_FILES['banner_image']['name'])) {
            $upload_dir = "uploads/";
            if (!is_dir($upload_dir)) {
                mkdir($upload_dir, 0777, true);
            }

            $file_name = time() . '-' . basename($_FILES['banner_image']['name']);
            $target_file = $upload_dir . $file_name;

            if (move_uploaded_file($_FILES['banner_image']['tmp_name'], $target_file)) {
                $insert_sql = "INSERT INTO patient (name, cnic, address, hospital_id, img)
                               VALUES ('$name', '$cnic', '$address', '$hospital_id', '$file_name')";

                if ($def_conn->query($insert_sql)) {
                    echo "Data saved successfully.";
                } else {
                    echo "Database Error: " . $def_conn->error;
                }
            } else {
                echo "Error uploading file.";
            }
        } else {
            echo "Please select an image to upload.";
        }
    }

    $def_conn->close();
}
?>

   


 <?php


$edit_data = null;

if (isset($_GET['edit_id']) && $_GET['edit_id'] > 0) {  
    $edit_id = $_GET['edit_id'];
    $sql = "SELECT * FROM patient WHERE id = $edit_id";
    $result = $def_conn->query($sql);
    if ($result && $result->num_rows > 0) {
        $edit_data = $result->fetch_assoc();
    }
}
?>

<div class="container ">
 <div class= "row mt-5">

  <div class="col-md-12">
        <form action="/mudassir/hospital.php" method="post" enctype="multipart/form-data">

                <input type="text" name="id" class="form-control" value="<?= $edit_data['id'] ?? '' ?>" style="display:none;">

                <div class="mb-3">
                    <label for="name" class="form-label">Name</label>
                    <input type="text" name="name" class="form-control" value="<?= $edit_data['name'] ?? '' ?>" id="name" placeholder="Enter Patient Name">
                </div>
                
                <div class="mb-3">
                    <label for="cnic" class="form-label">CNIC</label>
                    <input type="text" name="cnic" class="form-control" value="<?= $edit_data['cnic'] ?? '' ?>" id="cnic" placeholder="Enter  Patient CNIC">
                </div>

                <div class="mb-3">
                    <label for="address" class="form-label">Address</label>
                    <input type="text" name="address" class="form-control" value="<?= $edit_data['address'] ?? '' ?>" id="address" placeholder="Enter  Patient Address">
                </div>
                    

                <div class="mb-3">
                    <label for="hospital_id" class="form-label">Hospital</label>
                    <input type="text" name="hospital_id" class="form-control" value="<?= $edit_data['hospital_id'] ?? '' ?>"  id="hospital_id" placeholder="Enter  Hospital">
                </div>

                <div class="mb-3">
            <label for="banner_image" class="form-label">Banner Image</label>
            <input type="file" name="banner_image" class="form-control">
            

            <?php
                if (!empty($_GET['edit_id']) && $_GET['edit_id'] > 0) {
                    if (!empty($edit_data['img'])) {
            ?>
                        <img src="uploads/<?= $edit_data['img'] ?>" alt="Banner" width="100px" height="100px">
                        
            <?php
                    }
                }
            ?>
        </div>
                
                <button type="submit" class="btn btn-primary">
                    <?= !empty($edit_data) ? 'Update' : 'Submit' ?>
                </button>
        </form>
  </div>
 </div>
</div>


           


<!-- Listing -->

 <div class = "col-md-12 table-responsive mt-5">
 <table class="table table-striped table-hover   table-bordered align-middle shadow-sm">
    <thead class="table-dark text-center">
       <tr>
                        <th>SR#</th>
                        <th>Patient Name</th>
                        <th>CNIC</th>
                        <th>Address</th>
                        <th>Hospital Name</th>
                        <th>Hospital City</th>
                        <th>Banner Image</th>
                        <th>Action</th>
                        <th>Action</th>
        </tr>
    </thead> 
    <tbody>
        <?php
        if(!empty ($patients)){
          $count = 1;
            foreach ($patients AS $patient){?>
             <tr>
                                <td><?=$count++?></td>
                                <td><?=$patient['name']?></td>
                                <td><?=$patient['cnic']?></td>
                                <td><?=$patient['address']?></td>
                                <td><?=$patient['hospital_name']?></td>
                                <td><?=$patient['city']?></td>
                             
                                <td>
                                   <img src="/mudassir/uploads/<?= $patient['img'] ?>" alt="Banner" width="100px" height="100px">
                                   <?=$patient['img']?>



                                </td>

                                
                                <td>
                                     <a href="/mudassir/hospital.php?id=<?=$patient['id']?>"
                                       onclick="return confirm('Are you sure want to delete?')"
                                       class="btn btn-danger btn-sm">
                                        Delete
                                    </a>
                                   
                                </td>
                                 <td>
                                     <a href="/mudassir/hospital.php?edit_id=<?=$patient['id']?>"
                                       onclick="return confirm('Are you sure want to Edit?')"
                                       class="btn btn-primary btn-sm">
                                        Edit
                                    </a>
                                </td>
             </tr>

          <?php  } }?>
    
    </tbody>   
 </div>
  </div>
</div>

 </div>




 