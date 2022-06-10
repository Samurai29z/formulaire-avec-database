 

<?php
require_once('connect.php');



// recuperation de l id
if(isset($_GET["del"]))
    {
        $del = $_GET["del"];
    }


// suprimer un donnée de la base                       
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
  }

  $sql = "DELETE FROM message WHERE id=$del";
  
  if (mysqli_query($conn, $sql)) {
   echo "Record deleted successfully";
  } else {
    echo "Error deleting record: " . mysqli_error($conn);
  }
  
  $conn->close();


 ?>



 <html>
  <head>

  <style>
    .img{
      height:20px;
      width: auto;
      margin-left:20px
    }
  </style>
</head>
<body>
<form action="delete.php" method="GET">
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


// afficher les donnees de la base                       

$sql = "SELECT id, name, body, priority, type FROM message";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  echo "<table style='border: solid 1px black;width:100%;'>
  <tr>
   <th style='border: solid 1px black;'>ID</th>
   <th style='border: solid 1px black;'>Name</th>
   <th style='border: solid 1px black;'>body</th>
   <th style='border: solid 1px black;'>priority</th>
   <th style='border: solid 1px black;'>type</th>
   <th style='border: solid 1px black;'>Supprimer</th>
   <th style='border: solid 1px black;'>Modifier</th>
  </tr>";
  // sortir dans chaque ligne
  while($row = $result->fetch_assoc()) {
  
    ?> 
    <tr>
    <td><?php echo $row["id"]?></td>
    <td><?php echo $row["name"]?></td>
    <td><?php echo $row["body"]?></td>
    <td><?php echo $row["priority"]?></td>
    <td><?php echo $row["type"]?></td>
   <td>
     <a  href="delete.php?del=<?php echo $row["id"]?>">
         <img class="img" src="trash.png" alt="" srcset="">
     </a>
    </td>
   <td>
     <a  href="/formulaire-avec-database/modifipage.php">
       <img class="img" src="edit.png" alt="" srcset="">
      </a>
    </td>
</tr>
   

<?php
  
  }
  echo "</table>";
} else {
  echo "0 results";
}
$conn->close();

 ?>
<form>
</body>
</html>