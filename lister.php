<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <title>Document</title>

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
     <a  href="/phpmysql/form.php">
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


