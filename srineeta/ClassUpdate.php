<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
    <title>Update data</title>
    <style>
        .card { height: 45%; width: 45%; box-shadow: 0 8px 16px 0 #302D1F; padding: 50px 10px 50px 0; text-align: center; background-color: white; position: relative; top: 25%; left: 25%;}  
        input[type=text], select, textarea{ width: 95%; padding: 12px; border: 1px solid #ccc; border-radius: 4px; box-sizing: border-box; resize: vertical; }
        label { padding: 12px 12px 12px 12px; display: inline-block; font-weight: bold;}  
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

    $YogaType = $_POST['YogaType'];

    $query = "SELECT * FROM class WHERE YogaType='$YogaType' ";
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
                            
                            <h2>Update Center Manager Details</h2>
                            <hr> -->
                            <form action="" method="post">
                                <div class="row">
                                    <div class = "col-25">
                                        <label for=""> TIME </label>
                                    </div>
                                    <div class = "col-75"> 
                                        <input type="text" name="Time" value="<?php echo $row['Time'] ?>" placeholder="Enter Time" required>
                                    </div>
                                </div>

                                <input type="hidden" name="YogaType" value="<?php echo $row['YogaType'] ?>">

                                <div class="row">
                                    <div class = "col-25">
                                        <label for=""> DURATION (in minutes)</label>
                                    </div>
                                    <div class = "col-75">    
                                        <input type="text" name="Duration" value="<?php echo $row['Duration'] ?>" placeholder="Enter Duration" required>
                                    </div>
                                </div>

                                <button type="submit" name="update" class="btn3"> Update Data </button>

                                <a href="ClassIndex.php" class="btn2"> CANCEL </a>
                            </form>

                        </div>
                    </div>
                    
                    <?php
                    if(isset($_POST['update']))
                    {
                        $Time = $_POST['Time'];
                        $YogaType  = $_POST['YogaType'];
                        $Duration  = $_POST['Duration'];
                    
                        
                        $query = "UPDATE class SET Time='$Time',  YogaType='$YogaType', Duration = '$Duration'  WHERE YogaType='$YogaType' ";
                        $query_run = mysqli_query($connection, $query);

                        if($query_run)
                        {
                            echo '<script> alert("Data Updated"); </script>';
                            header("location:ClassIndex.php");
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