
<?php
 $file = ("sample.txt");
 if(file_exists($file)){
    $file_open = fopen($file, "r");
    if($file_open){
        while(!feof($file_open)){
            echo fgets($file_open) . "<br>";
        }
        fclose($file_open);
    }else{
        echo"file not exist";
    }


 }else{
    echo"file is not present";
 }

?>
<!-- <?php
$file = fopen("sample.txt", "r");  // "r" means read mode

$content = fread($file, filesize("sample.txt"));
fclose($file);

echo $content;
?> -->




<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>web page</title>   
   

       <link href="./assets/css/book.css" rel="stylesheet" >
       
</head>
<body>
</body>

