<html>
<head>
    <title></title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" />
    <style type = "text/css">
        .div1 {height: 10%; background-image: url(https://t4.ftcdn.net/jpg/04/26/64/13/360_F_426641333_x71suUrAE1A4N9lqnYVgjdGPjkgudmdR.jpg); background-size: cover; padding: 12px 16px; box-shadow: 0 0 5px 0 #302D1F;}
        .btn {background-color: transparent; border: none; color: black; font-weight: bold; padding: 12px 16px; font-size: 16px; cursor: pointer; }
        .btn:hover {background-color: black; color: white; }
        .btn2 {background-color: red; border: none; color: black; font-weight: bold; padding: 12px 16px; font-size: 16px; cursor: pointer; }
        .btn3 {background-color: Green; border: none; color: black; font-weight: bold; padding: 12px 16px; font-size: 16px; cursor: pointer; }
        table, th, td { border:1px solid white; text-align: center; border-collapse: collapse; padding: 10px;}
        th {font-size: 20px; font-weight: bold; color: white; background-color: black;}
        td {background-color: #f0ede4;  font-size: 20px;}
    </style>
</head>

<body>
    <div class = "div1">
        <button class="btn" onclick="document.location='HP.php'"> <i class="fa fa-home"></i> Home</button>
        <b>Trainee Details</b>
    </div>
    <br><br>

    <?php
        $connection = mysqli_connect("localhost","root","");
        $db = mysqli_select_db($connection, 'details');

        $query = "SELECT * FROM TRAINEE";
        $query_run = mysqli_query($connection, $query);
    ?>
    
    <table style = "width:60%; position: relative; left: 10%;">
        <thead>
            <tr>
                <th scope="col"> ID</th>
                <th scope="col">FIRST&nbsp NAME</th>
                <th scope="col">LAST &nbspNAME</th>
                <th scope="col">DOB</th>
                <th scope="col">ADDRESS</th>
                <th scope="col">PHONE&nbsp NO</th>
                <th scope="col">YOGA&nbsp TYPE</th>
                <th scope="col">AREA</th>               
                <th scope="col"> EDIT </th>
                <th scope="col"> DELETE </th>
            </tr>
        </thead>
        <tbody>
            <?php
                if($query_run)
                {
                    while($row = mysqli_fetch_array($query_run))
                    {
            ?>
                        <tr>
                            <td> <?php echo $row['tid']; ?> </td>
                            <td> <?php echo $row['fname']; ?> </td>
                            <td> <?php echo $row['lname']; ?> </td>
                            <td> <?php echo $row['dob']; ?> </td>
                            <td> <?php echo $row['addr']; ?> </td>
                            <td> <?php echo $row['phno']; ?> </td>
                            <td> <?php echo $row['yogatype']; ?> </td>
                            <td> <?php echo $row['area']; ?> </td>
                            <td> 
                                <form action="TraineeUpdate.php" method="post">
                                    <input type="hidden" name="tid" value="<?php echo $row['tid'] ?>">
                                    <input type="submit" name="updatedata" class="btn3" value="EDIT">
                                </form>
                            </td>
                            <td> 
                                <form action="TraineeDelete.php" method="post">
                                    <input type="hidden" name="tid" value="<?php echo $row['tid'] ?>">
                                    <input type="submit" name="deletedata" class="btn2" value="DELETE"> 
                                </form>
                            </td>
                        </tr>
            <?php
                    }
                }
                else
                {
            ?>
                    <tr>    
                        <th colspan="8"> No Record Found </th>
                    </th>
            
            <?php
                }
            ?>
        </tbody>
    </table>
</body>