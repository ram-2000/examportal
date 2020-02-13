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
            display: block;
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
                        <button class="list-group-item list-group-item-action">Home</button>
                        <div style="margin-top: 10px;"></div>
                    </div>
                </div>
                <div class="col-md-9" style="height: 100%; padding: 20px;border-radius:8px;">
                    <div class="container" style="background-color: yellow;">
                        <div id="ram">
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
                        <div id="ram1">
                            <p style="text-align: center;font-size: 35px; padding-top: 10px;font-family: cursive;">Time Table</p>
                            <hr class="my-4">
                            <label style="font-size: 20px; padding-right: 40px;margin-left:20px;">Year : </label>
                            <label class="radio-inline" >
                                <input type="radio" name="year2" value="2" onclick=""> 2nd year
                            </label>
                            <label class="radio-inline" >
                                <input type="radio" name="year3" value="3" onclick="show1();">3rd year
                            </label>
                            <label class="radio-inline">
                                <input type="radio" name="year4" value="4" onclick="show3();" ;>4th year
                            </label>
                            
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>
