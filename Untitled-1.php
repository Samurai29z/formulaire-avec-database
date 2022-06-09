 

<?php

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
if(isset($_GET["del"]))
    {
        $data = $_GET["del"];
    }
// suprimer un donnée de la base                       
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
  }

  $sql = "DELETE FROM message WHERE id=$_GET['id']";
  
  if (mysqli_query($conn, $sql)) {
   echo "Record deleted successfully";
  } else {
    echo "Error deleting record: " . mysqli_error($conn);
  }
  
  $conn->close();


 ?>