<?php

include "database.php";


if ($_SERVER["REQUEST_METHOD"] == "POST") {

    
    $name = $_POST['name'];
    $cnic = $_POST['cnic'];
    $address = $_POST['address'];
    $hospital_id = $_POST['hospital_id'];

 
    if (!empty($_FILES['banner_image']['name'])) {

        $upload_dir = "uploads/";

       
        if (!is_dir($upload_dir)) {
            mkdir($upload_dir, 0777, true);
        }

        
        $file_name = time() . '-' . basename($_FILES['banner_image']['name']);
        $target_file = $upload_dir . $file_name;

      
        if (move_uploaded_file($_FILES['banner_image']['tmp_name'], $target_file)) {
            echo " File uploaded successfully.<br>";

           
            $insert_sql = "INSERT INTO patient (name, cnic, address, hospital_id, img)
                           VALUES ('$name', '$cnic', '$address', '$hospital_id', '$file_name')";

            if ($def_conn->query($insert_sql)) {
                echo " Data saved successfully to database.";
            } else {
                echo " Database Error: " . $def_conn->error;
            }
        } else {
            echo " Error uploading file.";
        }
    } else {
        echo " Please select an image to upload.";
    }

  
    $def_conn->close();
}
?>
