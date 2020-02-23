<?php session_start(); ?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
    <title>seating plan</title>
    <style>
        @media print {
            .noprint {
                display: none;
            }

            table {
                display: block;
            }
        }

        .list-group-item {
            margin-bottom: 20px;
            text-align: center;
            border-radius: 50px;
            font-family: cursive;
            font-size: 20px;
            font-style: italic;
            transition-duration: 0.4s;
        }

        .list-group-item:hover {
            background-color: white;
            color: aqua;
        }

        .list-group-item:focus {
            background-color: aqua;
            color: orange;
        }

        .container {
            border-radius: 8px;
        }

        .radio-inline {
            margin-left: 20px;
        }

        #rooms1 {
            /*            display: none;*/
            margin-bottom: 30px;
        }

        #ram {
            display: none;
        }

        #ram1 {
            display: none;
        }

        #ram2 {
            display: block;
        }

        #rooms {
            display: none;
        }

        #students {
            display: none;
        }

    </style>
    <script>
        function myFunction() {
            var x = document.getElementById("ram");
            var y = document.getElementById("ram1");
            if (x.style.display === "none") {
                x.style.display = "block";
                y.style.display = "none";
            } else {
                x.style.display = "none";
            }
        }

        function myFunction1() {
            var y = document.getElementById("ram1");
            var x = document.getElementById("ram");
            if (y.style.display === "none") {
                y.style.display = "block";
                x.style.display = "none";
            } else {
                y.style.display = "none";
            }
        }

        function show1() {
            document.getElementById('rooms1').style.display = 'block';
        }

        function show3() {

        }

    </script>
</head>

<body>
    <div class="noprint">
        <image src=pics/anits.jpg height=250px width=100%> </image>
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-3" style="  height: 500px;">
                    <div class="list-group" style="margin-top: 50px;">
                        <div style="margin-bottom:   10px;"></div>
                        <button class="list-group-item list-group-item-action" onclick="myFunction()">Seating Plan</button>
                        <button class="list-group-item list-group-item-action" onclick="myFunction1()">Time Table</button>
                        <button class="list-group-item list-group-item-action">Seating Arrangement</button>
                        <button class="list-group-item list-group-item-action">Add Rooms</button>
                        <button class="list-group-item list-group-item-action">Add students</button>
                        <button class="list-group-item list-group-item-action">Home</button>
                        <div style="margin-top: 10px;"></div>
                    </div>
                </div>
                <div class="col-md-9" style="height: 100%; padding: 20px;border-radius:8px;">
                    <div class="container" style="background-color: yellow;">
                        <div id="ram">
                            <!-- seating plan-->
                            <p style="text-align: center;font-size: 35px; padding-top: 10px;font-family: cursive;">Seating Plan</p>
                            <hr class="my-4">

                            <form method="post" action="">
                                <label style="font-size: 20px; padding-right: 40px;margin-left:20px;">Seating Plan for :</label>
                                <label class="radio-inline" style="padding: 20px;">
                                    <input type="radio" name="optradio" value="2"> 2nd year
                                </label>
                                <label class="radio-inline" style="padding: 20px;">
                                    <input type="radio" name="optradio" value="3" onclick="show1();">3rd year
                                </label>
                                <label class="radio-inline">
                                    <input type="radio" name="optradio" value="6" onclick="show3();" ;>2nd and 3rd year
                                </label>
                                <div id="rooms1">
                                    <div class="form-row">
                                        <label style="font-size: 20px; padding-right: 40px;margin-left:20px;">Enter the rooms : </label>
                                        <div class="col">
                                            <input type="text" class="form-control" placeholder="room1" name="room1">
                                        </div>
                                        <div class="col">
                                            <input type="text" class="form-control" placeholder="room2" name="room2">
                                        </div>
                                        <div class="col">
                                            <input type="text" class="form-control" placeholder="room3" name="room3">
                                        </div>
                                        <div class="col">
                                            <input type="text" class="form-control" placeholder="room4" name="room4">
                                        </div>
                                    </div>
                                </div>
                                <button type="submit" class="btn btn-success" style="margin-left:50%;" name="submit">Submit</button>
                            </form>
                            <?php
                        if(isset($_POST['submit']))
                        {
                            $year=$_POST["optradio"];
                            if($year!=6)
                            {
                                $room1=$_POST["room1"];
                                $room2=$_POST["room2"];
                                $room3=$_POST["room3"];
                                $room4=$_POST["room4"];
                                $html= "
                                            <style>
                                                table, th, td {
                                                  border: 1px solid black;
                                                  border-collapse: collapse;
                                                  margin-left:20%;
                                                  margin-top:25px;
                                                  padding:inherit;
                                                }
                                                th,td {
                                                    padding :25px;
                                                    text-align:center;
                                                }
                                            </style>
                                            </div>
                                            <table>
                                        <tr>
                                            <th>Rooms</th>
                                            <th>Year</th>
                                            <th>Roll no</th>
                                            <th>students</th>
                                            <th>total students</th>
                                        </tr>
                                        <tr>
                                            <td>$room1</td>
                                            <td>$year</td>
                                            <td>1-48</td>
                                            <td>48</td>
                                            <td>48</td>
                                        </tr>
                                        <tr>
                                            <td>$room2</td>
                                            <td>$year</td>
                                            <td>49-96</td>
                                            <td>48</td>
                                            <td>48</td>
                                        </tr>
                                        <tr>
                                            <td>$room3</td>
                                            <td>$year</td>
                                            <td>97-144</td>
                                            <td>48</td>
                                            <td>48</td>
                                        </tr>
                                        <tr>
                                            <td>$room4</td>
                                            <td>$year</td>
                                            <td>144-180,lateralentry1-12</td>
                                            <td>48</td>
                                            <td>48</td>
                                        </tr>
                                    </table><div class='noprint'>";
                                echo $html;

                                echo '<a href="http://localhost/project/pdf.php">get Pdf</a>';
                                
                           
                                // $html="asda";
                                $_SESSION['data']=$html."<style>table, th, td{margin-left: 0;}</style>";
                            }
                        }
                        ?>
                        </div>
                        <!--seating plan-->
                        <div id="ram1">
                            <script>
                                function sub1() {
                                    var second = ["dsa", "dld", "psqt", "dms", "java", "dc", "mpi", "os", "co", "flat"];
                                    document.getElementById('sub1').style.display = 'block';
                                }

                            </script>
                            <p style="text-align: center;font-size: 35px; padding-top: 10px;font-family: cursive;">Time Table</p>
                            <hr class="my-4">
                            <form method="post">
                                <label style="font-size: 20px; padding-right: 40px;margin-left:20px;">Year : </label>
                                <label class="radio-inline"><input type="radio" name="optradio" checked onclick="sub1();">2nd year</label>
                                <label class="radio-inline"><input type="radio" name="optradio" onclick="sub2();">3rd year </label>
                                <label class="radio-inline"><input type="radio" name="optradio" onclick="sub3();">4th year</label>
                                <div id="sub1" style="display:none;">
                                    <table>
                                        <style>
                                            #sub1 table,
                                            #sub1 th,
                                            #sub1 td {
                                                border: 1px solid black;
                                                border-collapse: collapse;
                                                margin-left: 20%;
                                                margin-top: 25px;
                                                padding: 50px;
                                                margin-bottom: 50px;
                                            }

                                            #sub1 th,
                                            #sub1 td {
                                                padding: 25px;
                                                text-align: center;
                                            }

                                            #bt1 {
                                                margin-left: 40%;
                                            }

                                        </style>
                                        <tr>
                                            <th>date</th>
                                            <th>forenoon</th>
                                            <th>afternoon</th>
                                        </tr>
                                        <tr>
                                            <td><input type="date" value="2000-09-10" name="date1"></td>
                                            <td>
                                                <select name="sub10">
                                                    <option value="dsa" checked>dsa</option>
                                                    <option value="dld">dld</option>
                                                    <option value="psqt">psqt</option>
                                                    <option value="dms">dms</option>
                                                    <option value="java">java</option>
                                                    <option value="dc">dc</option>
                                                    <option value="mpi">mpi</option>
                                                    <option value="os">os</option>
                                                    <option value="co">co</option>
                                                    <option value="flat">flat</option>
                                                </select>
                                            </td>
                                            <td>
                                                <select name="sub2">
                                                    <option value="dsa">dsa</option>
                                                    <option value="dld" checked>dld</option>
                                                    <option value="psqt">psqt</option>
                                                    <option value="dms">dms</option>
                                                    <option value="java">java</option>
                                                    <option value="dc">dc</option>
                                                    <option value="mpi">mpi</option>
                                                    <option value="os">os</option>
                                                    <option value="co">co</option>
                                                    <option value="flat">flat</option>
                                                </select>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td><input type="date" value="2000-09-10" name="date2"></td>
                                            <td>
                                                <select name="sub3">
                                                    <option value="dsa">dsa</option>
                                                    <option value="dld">dld</option>
                                                    <option value="psqt" checked>psqt</option>
                                                    <option value="dms">dms</option>
                                                    <option value="java">java</option>
                                                    <option value="dc">dc</option>
                                                    <option value="mpi">mpi</option>
                                                    <option value="os">os</option>
                                                    <option value="co">co</option>
                                                    <option value="flat">flat</option>
                                                </select>
                                            </td>
                                            <td>
                                                <select name="sub6">
                                                    <option value="dsa">dsa</option>
                                                    <option value="dld">dld</option>
                                                    <option value="psqt">psqt</option>
                                                    <option value="dms">dms</option>
                                                    <option value="java">java</option>
                                                    <option value="dc">dc</option>
                                                    <option value="mpi">mpi</option>
                                                    <option value="os">os</option>
                                                    <option value="co">co</option>
                                                    <option value="flat">flat</option>
                                                </select>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td><input type="date" value="2000-09-10" name="date3"></td>
                                            <td>
                                                <select name="sub4">
                                                    <option value="dsa">dsa</option>
                                                    <option value="dld">dld</option>
                                                    <option value="psqt">psqt</option>
                                                    <option value="dms">dms</option>
                                                    <option value="java">java</option>
                                                    <option value="dc">dc</option>
                                                    <option value="mpi">mpi</option>
                                                    <option value="os">os</option>
                                                    <option value="co">co</option>
                                                    <option value="flat">flat</option>
                                                </select>
                                            </td>
                                            <td>
                                                <select name="sub5">
                                                    <option value="dsa">dsa</option>
                                                    <option value="dld">dld</option>
                                                    <option value="psqt">psqt</option>
                                                    <option value="dms">dms</option>
                                                    <option value="java">java</option>
                                                    <option value="dc">dc</option>
                                                    <option value="mpi">mpi</option>
                                                    <option value="os">os</option>
                                                    <option value="co">co</option>
                                                    <option value="flat">flat</option>
                                                </select>
                                            </td>
                                        </tr>
                                    </table>
                                    <button id="bt1" type="submit" class="btn btn-success" name="submit1">submit</button>
                                </div>
                            </form>
                            <?php
                            if(isset($_POST['submit1']))
                            {
                                $date1=$_POST['date1'];
                                $date2=$_POST['date2'];
                                $date3=$_POST['date3'];
                                $sub1=$_POST['sub10'];
                                $sub2=$_POST['sub2'];
                                $sub3=$_POST['sub3'];
                                $sub4=$_POST['sub4'];
                                $sub5=$_POST['sub5'];
                                $sub6=$_POST['sub6'];
                                $html="
                                <style>
                                                table, th, td {
                                                  border: 1px solid black;
                                                  border-collapse: collapse;
                                                  margin-left:20%;
                                                  margin-top:25px;
                                                  padding:inherit;
                                                }
                                                th,td {
                                                    padding :25px;
                                                    text-align:center;
                                                }
                                            </style>
                                                            <table>
                                <tr>
                                    <th>date</th>
                                    <th>forenoon</th>
                                    <th>afternoon</th>
                                </tr>
                                <tr>
                                    <td>$date1</td>
                                    <td>$sub1</td>
                                    <td>$sub2</td>
                                </tr>
                                 <tr>
                                    <td>$date2</td>
                                    <td>$sub3</td>
                                    <td>$sub4</td>
                                </tr>
                                 <tr>
                                    <td>$date3</td>
                                    <td>$sub5</td>
                                    <td>$sub6</td>
                                </tr>
                            </table>
                                ";
                                echo $html;
                                echo '<a href="http://localhost/project/pdf.php">get Pdf</a>';
                                
                           
                                // $html="asda";
                                $_SESSION['data']=$html."<style>table, th, td{margin-left: 0;}</style>";
                            }
                            ?>
                        </div>
                        <!--time table -->
                        <div id="ram2">
                            <p style="text-align: center;font-size: 35px; padding-top: 10px;font-family: cursive;">Seating Arrangement</p>
                            <hr class="my-4">

                            <form method="post" action="">
                                <label style="font-size: 20px; padding-right: 40px;margin-left:20px;">Seating Plan for :</label>
                                <label class="radio-inline" style="padding: 20px;">
                                    <input type="radio" name="optradio" value="2"> 2nd year
                                </label>
                                <label class="radio-inline" style="padding: 20px;">
                                    <input type="radio" name="optradio" value="3" onclick="show1();">3rd year
                                </label>
                                <label class="radio-inline">
                                    <input type="radio" name="optradio" value="6" onclick="show3();" ;>2nd and 3rd year
                                </label>
                                <div id="rooms1">
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
                                        $a=array();
                                    $b=array();
                                        $query="SELECT `id` FROM `studentdetails`";
                                        $result=mysqli_query($conn,$query);
                                        while($row=mysqli_fetch_assoc($result))
                                        {
                                            array_push($a,$row["id"]);
                                        }
                                    echo sizeof($a);
                                    $number_of_rooms=sizeof($a)/48;
                                    echo $number_of_rooms;
                                    $query="SELECT `roomsid` FROM `rooms` ";
                                    $result=mysqli_query($conn,$query);
                                    while($row=mysqli_fetch_assoc($result))
                                        {
                                            array_push($b,$row["roomsid"]);
                                        }
                                    ?>
                                    <div class="form-row">
                                        <label style="font-size: 20px; padding-right: 40px;margin-left:20px;">Enter the rooms : </label>
                                        <div class="col">
                                            <select name="room1">
<!--                                                <option>Choose One</option>-->
                                                <?php
                                                foreach($b as $item){
                                                ?>
                                                <option value="<?php echo $item; ?>"><?php echo $item; ?></option>
                                                <?php
                                                }
                                                ?>
                                            </select>
                                        </div>
                                        <div class="col">
                                            <select name="room2">
<!--                                                <option>Choose One</option>-->
                                                <?php
                                                foreach($b as $item){
                                                ?>
                                                <option value="<?php echo $item; ?>"><?php echo $item; ?></option>
                                                <?php
                                                }
                                                ?>
                                            </select>
                                        </div>
                                        <div class="col">
                                           <select name="room3">
<!--                                                <option>Choose One</option>-->
                                                <?php
                                                foreach($b as $item){
                                                ?>
                                                <option value="<?php echo $item; ?>"><?php echo $item; ?></option>
                                                <?php
                                                }
                                                ?>
                                            </select>
                                        </div>
                                        <div class="col">
                                            <select name="room4">
<!--                                                <option>Choose One</option>-->
                                                <?php
                                                foreach($b as $item){
                                                ?>
                                                <option value="<?php echo $item; ?>"><?php echo $item; ?></option>
                                                <?php
                                                }
                                                ?>
                                            </select>
                                        </div>
                                    </div>
                                    <br>
                                    
                                    <div class="form-row">
                                        <label style="font-size: 20px; padding-right: 10px;margin-left:20px;">Enter the capacities : </label>
                                        <div class="col">
                                            <input type="text" class="form-control" placeholder="capacity1" name="capacity1" value="48">
                                        </div>
                                        <div class="col">
                                            <input type="text" class="form-control" placeholder="capacity2" name="capacity2" value="48">
                                        </div>
                                        <div class="col">
                                            <input type="text" class="form-control" placeholder="capacity3" name="capacity3" value="48">
                                        </div>
                                        <div class="col">
                                            <input type="text" class="form-control" placeholder="capacity4" name="capacity4" value="48">
                                        </div>
                                    </div>

                                </div>
                                <button type="submit" class="btn btn-success" style="margin-left:50%;" name="submit1">Submit</button>
                            </form>
                            <?php
                        if(isset($_POST['submit1']))
                        {
                            $year=$_POST["optradio"];
                            if($year!=6)
                            {
                                $room1=$_POST["room1"];
                                $room2=$_POST["room2"];
                                $room3=$_POST["room3"];
                                $room4=$_POST["room4"];
                                $capacity1=$_POST["capacity1"];
                                $capacity2=$_POST["capacity2"];
                                $capacity3=$_POST["capacity3"];
                                $capacity4=$_POST["capacity4"];
                                $count=sizeof($a);
                                $value=$a[0];
                                //for room1 we need to give the details ..... it need to have 48 so,
                                echo "<table style='float:left;'>";
                                
                                $table1="<table style='float:left;'>";
                                $temp1="<style>
                                                table, th, td {
                                                  border: 1px solid black;
                                                  border-collapse: collapse;
                                                  margin-left:20%;
                                                  margin-top:25px;
                                                  padding:inherit;
                                                }
                                                th,td {
                                                    padding :25px;
                                                    text-align:center;
                                                }
                                            </style>";
                                for($i=0;$i<8;$i++)
                                {
                                    echo "<tr><td>$a[$i]</td><td>".$a[$i+8]."</td><tr>";
                                    $table1.="<tr><td>$a[$i]</td><td>".$a[$i+8]."</td><tr>";
                                    
                                }
                                echo "</table>";
                                echo "<table style='float:left;'>";
                                $table1.="</table>";
                                $table2="<table style='float:left;'>";
                                for($i=16;$i<24;$i++)
                                {
                                    echo "<tr><td>$a[$i]</td><td>".$a[$i+8]."</td><tr>";
                                    $table2.="<tr><td>$a[$i]</td><td>".$a[$i+8]."</td><tr>";
                                }
                                echo "</table>";
                                echo "<table style='float:left;'>";
                                $table2.="</table>";
                                $table3="<table style='float:left;'>";
                                for($i=32;$i<40;$i++)
                                {
                                    echo "<tr><td>$a[$i]</td><td>".$a[$i+8]."</td><tr>";
                                    $table3.="<tr><td>$a[$i]</td><td>".$a[$i+8]."</td><tr>";
                                }
                                echo "</table>";
                                $table3.="</table>";
                                
                                $data1=$table1.$temp1;
                                 $data2=$table2.$temp1;
                                 $data3=$table3.$temp1;
                                echo '<a href="http://localhost/project/pdf1.php">get Pdf</a>';
//                                $html="<table style='float:left;'>";
                                // $html="asda";
//                                $_SESSION['data']=$html."<style>table, th, td{margin-left: 0;}</style>";
                                $_SESSION['data1']=$data1."<style>table, th, td{margin-left: 0;} </style>";
                                $_SESSION['data2']=$data2."<style>table, th, td{margin-left: 0;}</style>";
                                $_SESSION['data3']=$data3."<style>table, th, td{margin-left: 0;}</style>";

                            }
                        }
                            ?>
                            <a href="pdf.php" id="print">Just Print</a>
                        </div><!-- seating arrangement -->
                        <div id="rooms">
                            <label>rooms Required:</label>
                            <input type="text" id="roomsnum" value="">
                            <input type="button" value="submit" onclick="add();">
                            <script>
                                // var=document.getElemtnbyId()
                                function add() {
                                    var text = document.getElementById("roomsnum").value;
                                    var k = '<form method="post" >';

                                    var i = 0;
                                    for (i = 0; i < text; i++) {
                                        k += "</br><label>room " + i + "</label><input type='text' name='text" + i + "'></br>";
                                    }
                                    k += "<button type='submit' name='submitroom' value=" + text + ">submit11</button></form>";
                                    document.getElementById("rooms").innerHTML = document.getElementById("rooms").innerHTML + k;
                                }

                            </script>
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
                                if(isset($_POST["submitroom"]))
                                {
                                    $query="delete from `rooms`";
                                    mysqli_query($conn,$query);
                                    $k=$_POST["submitroom"];
                                    echo $k;
                                    for( $i=0;$i < $k ;$i++)
                                    {
                                        $l="text".$i;
                                        $l=$_POST["$l"];
                                        $query="INSERT INTO `rooms`(`roomsid`) VALUES ('$l')";
                                        mysqli_query($conn,$query);
                                    }
                                }
                            ?>
                        </div>
                        <!--rooms -->
                        <div id="students">
                            <form method="post" enctype="multipart/form-data">
                                <div>
                                    <input type="file" name="file">
                                    <button type="submit" id="submit" name="submitfile">Upload</button>
                                </div>
                            </form>
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
                            
                            if(isset($_POST['submitfile']))
                            {
                                $query="delete from `studentdetails`";
                                    mysqli_query($conn,$query);
                                include ("php/Classes/PHPExcel/IOFactory.php");
                               $filename = $_FILES["file"]["tmp_name"];
                                echo $filename;
                                $objPHPExcel = PHPExcel_IOFactory::load($filename);
                                $output = "<label class='text-success'>Data Inserted</label><br /><table class='table table-bordered'>";
                              foreach ($objPHPExcel->getWorksheetIterator() as $worksheet)
                              {
                               $highestRow = $worksheet->getHighestRow();
                               for($row=2; $row<=$highestRow; $row++)
                               {
                                $output .= "<tr>";
                                $id = mysqli_real_escape_string($conn, $worksheet->getCellByColumnAndRow(0, $row)->getValue());
                                $name = mysqli_real_escape_string($conn, $worksheet->getCellByColumnAndRow(1, $row)->getValue());
                                $query = "INSERT INTO studentdetails(id, name) VALUES ('".$id."', '".$name."')";
                                mysqli_query($conn, $query);
                                $output .= '<td>'.$id.'</td>';
                                $output .= '<td>'.$name.'</td>';
                                $output .= '</tr>';
                               }
                              } 
                              $output .= '</table>';
                           // echo $output;
                            }
                           
                              
                            ?>
                        </div>
                        <!--student xl entry -->

                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>
