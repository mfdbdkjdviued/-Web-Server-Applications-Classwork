<html>
<head>
<title>Exerise </title>
</head>
<body>

<?php

$servername ="localhost";
$username = "root";
$password  = "";
$dbname ="classicmodels";

$conn = new mysqli($servername, $username, $password, $dbname);
$sql = "SELECT * FROM customers";
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} else
echo "Connected successfully to the ".$dbname." database ";
    $result = mysqli_query($conn, $sql);

    if (mysqli_num_rows($result) > 0) {
        while($row = mysqli_fetch_assoc($result)) {
            echo  " Name: ". $row["contactLastName"]."
                - Country :". $row["country"]."
                - City: " .  $row["city"].
                "<br>";
        }
    } else {
        echo "0 results";
    }

    mysqli_close($conn);


?>

</body>
</html>