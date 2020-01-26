<!DOCTYPE html>
<html>
<head>
	<title>register</title>
</head>
<body>
  <form action="" method="post">
    Teacher id:<br>
  <input type="text" name="id" >
  <br>
  Name:<br>
  <input type="text" name="name" >
  <br><br>
  <input type="submit" value="Submit">
</form> 

</body>
</html>
<?php
$servername = "localhost";
$username = "root";
$password = "root";

// Create connection
$conn = new mysqli($servername, $username, $password,"exam");

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
   
   if(isset($_POST['name']))
   {
   	   $name=$_REQUEST['name'];
   	   $id=$_REQUEST['id'];
   	   $query="INSERT INTO `teacherdet`(`id`, `name`) VALUES ('$id','$name')";
        $result = mysqli_query($conn,$query);
        if($result) {
            $_SESSION['name']=$username;
            echo "succes";
        }
   }

?>