<?php
require_once('connect.php');

$name = $_POST["name"];
$message = $_POST["message"];
$priority = filter_input(INPUT_POST, "priority", FILTER_VALIDATE_INT);
$type = filter_input(INPUT_POST, "type", FILTER_VALIDATE_INT);
$terms = filter_input(INPUT_POST, "terms", FILTER_VALIDATE_BOOLEAN);

if ( ! $terms){
    die("terms must be accepted");
}


 
$sql = "INSERT INTO message (name, body, priority, type)
        VALUES (?, ?, ?, ?)";

$stmt = mysqli_stmt_init($conn);

if ( ! mysqli_stmt_prepare($stmt, $sql)) {
    die(mysqli_error($conn));
}

mysqli_stmt_bind_param($stmt, "ssii",
                       $name,
                       $message,
                       $priority,
                       $type);

mysqli_stmt_execute($stmt);

echo "record saved.";

?>





<html>
    <head>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/water.css@2/out/water.min.css">
    <title>contact</title>
    </head>
    <body>
    <form action="lister.php" method="post">
        <button>verifier</button> 
    </form>
</body>
</html>

