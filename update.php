<html>
<?php
$name = $_POST["name"];
$message = $_POST["message"];
$priority = filter_input(INPUT_POST, "priority", FILTER_VALIDATE_INT);
$type = filter_input(INPUT_POST, "type", FILTER_VALIDATE_INT);
$terms = filter_input(INPUT_POST, "terms", FILTER_VALIDATE_BOOLEAN);

// connection a la base de donnee
$host = "localhost";
$dbname = "message_db";
$username = "root";
$password = "";

$conn = mysqli_connect( $host,
                        $username,
                        $password,
                        $dbname);

if (mysqli_connect_errno()) {
    die("connection error: " .mysqli_connect_error());
}
// recuperation de l id
// if(isset($_POST["upd"]))
//     {
//         $upd = $_POST["upd"];
//     }
// suprimer un donnée de la base                       
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
  }

  $sql = "UPDATE message
   SET name=?, body=?, priority=?, type=?;
   WHERE some_column=some_value "; 

  
  if (mysqli_query($conn, $sql)) {
   echo "Record deleted successfully";
  } else {
    echo "Error deleting record: " . mysqli_error($conn);
  }
  
  $conn->close();


 ?>
 </html>