<!DOCTYPE html>
<html>

<head>
    <title>mapping</title>
</head>

<body>
    <style>
        .main-div {
            background: #ffffff none repeat scroll 0 0;
            border-radius: 2px;
            margin: 10px auto 30px;
            max-width: 38%;
            padding: 50px 70px 70px 71px;
        }

    </style>
    <div class="main-div">
        <form action="" method="post">
            year <br>
            <select name="year">
                <option value="2">2nd</option>
                <option value="3">3rd</option>
            </select>

            <br>
            section : <br>
            <select name="section">
                <option value="a">a</option>
                <option value="b">b</option>
                <option value="c">c</option>
            </select>
            <br><br>
            semster : <br>
            <select name="semster">
                <option value="1">1</option>
                <option vlaue="2">2</option>
            </select>
    </div>
    <br>

    <br><br><br><br><br><br><br><br><br><br>
    compiler design :
    <input type="text" name="id">
    <br>
    <br>
    web technologies :
    <input type="text" name="id1">
    <br><br>
    computer architecture :
    <input type="text" name="id2">
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
  if(isset($_POST['id']))
  {
  	$year=$_POST['year'];
  	$section=$_POST['section'];
  	$semster=$_POST['semster'];
  	$id=$_POST['id'];
  	echo $year,$section,$semster;
  	$compilerdesign="compiler design";
  	$query="INSERT INTO `classes`(`year`, `section`, `semster`, `subject`, `teacher`) VALUES ('$year','$section','$semster','$compilerdesign','$id')";
    $result = mysqli_query($conn,$query);
    $id=$_POST['id1'];
    $wt="web technologies";
    $query="INSERT INTO `classes`(`year`, `section`, `semster`, `subject`, `teacher`) VALUES ('$year','$section','$semster','$wt','$id')";
    $result = mysqli_query($conn,$query);
    $ca="computer architecture";
    $id2=$_POST['id2'];
    $query="INSERT INTO `classes`(`year`, `section`, `semster`, `subject`, `teacher`) VALUES ('$year','$section','$semster','$ca','$id2')";
    $result = mysqli_query($conn,$query);
  }
?>
