



 <?php
$servername = "localhost:3307";
$username = "root";
$password = "";
$database = "hospital_db";

// ✅ Correct variable name used
$def_conn = new mysqli($servername, $username, $password, $database);

// ✅ Check connection
if ($def_conn->connect_error) {
    die("Connection failed: " . $def_conn->connect_error);
}
echo "Connected successfully";
?>



