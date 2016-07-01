<html>
<head>
</head>
<body>
<?php
//variable section

$servername = "localhost";
$username = "courseUser";
$password = "password";
$dbname = "Course_DB";
$user = $_POST["userName"];
$userPassword = $_POST["password"];
parse_str($_SERVER['QUERY_STRING']);

echo "timestamp is --> " . $timestamp;
// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

//Check if username exists
$sql = "SELECT userName FROM Login WHERE userName = '" . $user .  "'";
$result = $conn->query($sql);

//check for rows returned
$rowcount=mysqli_num_rows($result);
echo "rows = " . $rowcount;//for logging, remove in production
if($rowcount > 0){
    echo "Username already exists!" ; 
}else{
    //If new user insert name into database
    $sql = "INSERT INTO Login (userName, userPassword)
    VALUES ('" . $user . "', '" . $userPassword . "')";

    if ($conn->query($sql) === TRUE) {
        echo "New record created successfully";
    } 
    else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}
$conn->close();
?>



</body>
</html>