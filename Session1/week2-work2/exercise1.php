<html>
<head>
<title>create</title>
</head>
<body>

<?php
$servername ="localhost";
$username = "root";
$password  = "";
$dbname ="classicmodels";
$conn = new mysqli($servername, $username, $password, $dbname);

$sql = " INSERT INTO productlines (productLine, textDescription) VALUES('','')";
$result = mysqli_query($conn, $sql);

if ($conn->query($sql) ===TRUE) {
   echo"New record created successfully";
}
 else{
echo "Error:".$sql."<br>".$conn->error;
 }
 $conn->close();
?>

</body>
</html>