<?php
// Start the session
session_start();
?>
<?php
//variable section

$servername = "localhost";
$username = "courseUser";
$password = "titus115";
$dbname = "Course_DB";
$user = $_POST["userName"];
$userPassword = $_POST["password"];

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

//Check if username exists
$sql = "SELECT userName FROM Login WHERE userName = '" . $user .  "' AND userPassword = '" . $userPassword . "'";
$result = $conn->query($sql);

//check for rows returned
$rowcount=mysqli_num_rows($result);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8"> 
    <meta name="viewport" content="width=device-width, initial-scale=1">   
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
    <link rel="stylesheet" type="text/css" href="style/style.css">
    <link rel="stylesheet" type="text/css" href="style/style2.css">
</head>
<body>
<div class="container" style="height:150px;">
    <img src="/images/webHeader.png" class="img-responsive">
  </div>
 <div class="container">
    <!--***include for navigation bar.***-->
    <?php include 'navigation.php';?>
 </div>
<div class="container text-center">
    <form action="coursepage1.php">
        <?php 
        //echo "<br>rows = " . $rowcount;//for logging, remove in production
        if($rowcount > 0){
            echo "<br><h3>Login Successfull!</h3><br>" ;
            $_SESSION["login"]=1; 
        }else{
            echo "<br>Invalid Username or Password";
            $_SESSION["login"]=0;
        }
        //echo "<br>Session login = " . $_SESSION["login"];
        $conn->close();
        ?>
        <button name="start" type="submit" value="start">Start Course</button>
        
    </form>
</div>
</body>
</html>