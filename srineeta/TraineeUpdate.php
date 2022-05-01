<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
    <title>update data</title>
    <style>
        .card { height: 100%; width: 60%; box-shadow: 0 8px 16px 0 #302D1F; padding: 50px 10px 50px 0;  text-align: center; background-color: white; position: relative; left: 20%}  
        input[type=text], [type=date], select, textarea{ width: 70%; padding: 12px; border: 1px solid #ccc; border-radius: 4px; box-sizing: border-box; resize: vertical; }
        label { display: inline-block; font-weight: bold;}  
        .col-25 { float: left; width: 25%; margin-top: 6px; }
        .col-75 { float: left; width: 75%; margin-top: 6px; }
        .row:after { content: ""; display: table; clear: both; }
        /* input[type=submit] { background-color: black; color: white; padding: 12px 20px; border: none; border-radius: 4px; cursor: pointer; float: right; }  */
        @media screen and (max-width: 600px) { .col-25, .col-75, .bg-img, input[type=submit] { width: 100%; margin-top: 0; } }
        /* .btn {background-color: Black; border: none; color: white; font-weight: bold; padding: 12px 16px; font-size: 16px; cursor: pointer; } */
        .btn2 {background-color: red; border: none; color: black; font-weight: bold; padding: 12px 16px; font-size: 16px; cursor: pointer; }
        .btn3 {background-color: Green; border: none; color: black; font-weight: bold; padding: 12px 16px; font-size: 16px; cursor: pointer; }
    </style>
</head>
<body style = "background-color: #f0ede4">
    <?php
        $connection = mysqli_connect("localhost","root","");
        $db = mysqli_select_db($connection, 'details');

        $tid = $_POST['tid'];

        $query = "SELECT * FROM trainee WHERE tid='$tid' ";
        $query_run = mysqli_query($connection, $query);

        if($query_run)
        {
            while($row = mysqli_fetch_array($query_run))
            {
    ?>
                <div class="card">
                    <!-- <div class="jumbotron">
                        <div class="row">
                            <div class="col-md-12">
                                
                                <h2>Update Trainee Details</h2>
                                <hr> -->
                                <form action="" method="post">
                                    <input type="hidden" name="tid" value="<?php echo $row['tid'] ?>">
                                    
                                    <div class="row">
                                        <div class = "col-25">
                                            <label for="">  FIRST NAME </label>
                                        </div>
                                        <div class = "col-75">
                                            <input type="text" name="fname" value="<?php echo $row['fname'] ?>" placeholder="Enter Your First Name" required>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class = "col-25">
                                            <label for="">  LAST NAME </label>
                                        </div>
                                        <div class = "col-75">
                                            <input type="text" name="lname" value="<?php echo $row['lname'] ?>" placeholder="Enter Your Last Name" required>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class = "col-25">
                                            <label for=""> DOB </label>
                                        </div>
                                        <div class = "col-75">
                                            <input type="date" name="dob" value="<?php echo $row['dob'] ?>" placeholder="Enter Your DOB" required>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class = "col-25">
                                            <label for=""> ADDRESS </label>
                                        </div>
                                        <div class = "col-75">
                                            <input type="text" name="addr" value="<?php echo $row['addr']?>" placeholder="Enter your Address">
                                        </div>  
                                    </div>
                                    <div class="row">
                                        <div class = "col-25">
                                            <label for=""> PHONE NO </label>
                                        </div>
                                        <div class = "col-75">
                                            <input type="text" name="phno" value="<?php echo $row['phno'] ?>" placeholder="Enter Your Phone no" required>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class = "col-25">
                                            <label for=""> YOGA TYPE</label>
                                        </div>
                                        <div class = "col-75">
                                            <input type="text" name="yogatype" value="<?php echo $row['yogatype']?>" placeholder="Enter Yoga Type"> 
                                        </div> 
                                    </div>
                                    <div class="row">
                                        <div class = "col-25">
                                            <label for=""> AREA </label>
                                        </div>
                                        <div class = "col-75">
                                            <input type="text" name="area" value="<?php echo $row['area'] ?>" placeholder="Enter Area" required>
                                        </div>
                                    </div>
                                    <br><br>
                                    <button type="submit" name="update" class="btn3"> Update Data </button>

                                    <a href="TraineeIndex.php" class="btn2"> CANCEL </a>
                                </form>

                            </div>
                        </div>
                        
                        <?php
                        if(isset($_POST['update']))
                        {
                            $fname = $_POST['fname'];
                            $lname = $_POST['lname'];
                            $dob = $_POST['dob'];
                            $addr = $_POST['addr'];
                            $phno = $_POST['phno'];
                            $yogatype = $_POST['yogatype'];
                            $area  = $_POST['area'];
                        
                            
                            $query = "UPDATE trainee SET fname='$fname', lname='$lname', dob='$dob', addr='$addr', phno='$phno', yogatype='$yogatype', area='$area' WHERE tid='$tid'  ";
                            $query_run = mysqli_query($connection, $query);

                            if($query_run)
                            {
                                header("Location: TraineeIndex.php");
                                echo '<script> alert("Data Updated"); </script>';
                                // header("location:TraineeIndex.php");
                            }
                            else
                            {
                                echo '<script> alert("Data Not Updated"); </script>';
                            }
                            
                        }
                        ?>

                    </div>
                </div>
            <?php
        }
    }
    else
    {
        // echo '<script> alert("No Record Found"); </script>';
        ?>
        <div class="container">
            <div class="row">
                <div >
                    <h4>No Record Found</h4>
                </div>
            </div>
        </div>
        <?php
    }
    ?>
</body>
</html>