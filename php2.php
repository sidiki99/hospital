<!---->
<!---->
<?php

//?>

<table border="1" cellpadding="5" cellspacing="0">
    <thead>
    <tr>
        <th>Sr #</th>
        <th>Name</th>
        <th>Email</th>
        <th>Address</th>
        <th>Phone</th>
    </tr>
    </thead>
    <tbody>
    <?php
    $file_name = "sample.csv";
    if(file_exists($file_name)){
        $file_open = fopen($file_name, "r");
        if($file_open) {
            while (!feof($file_open)) {
                $line = fgets($file_open);
                if($line){
                $userdata = explode(",",$line);
                ?>
                <tr>
                    <?php
                    foreach ($userdata as $key => $value) {
                        echo "<td>".$value."</td>";
                    }?>
                </tr>
          <?php  } }
        }else{
            echo "File not open";
        }
    }else{
        echo "File not found";
    }
    ?>
    </tbody>
</table>











