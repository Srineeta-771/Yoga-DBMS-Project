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
        <b>Yoga Type details</b>
    </div>
    <br><br>
    
    <?php
        $connection = mysqli_connect("localhost","root","");
        $db = mysqli_select_db($connection, 'details');

        $query = "SELECT * FROM YTYPE";
        $query_run = mysqli_query($connection , $query);
    ?>

    <table style="width:60%; position: relative; left: 20%;">
        <tr>
            <th>YOGA&nbsp TYPE</th>
            <th>DURATION<br> (in minutes)</th>
            <th>FEES<br>(per month in Rupees)</th>
            <th scope="col"> EDIT </th>
            <th scope="col"> DELETE </th>
        </tr>
         
        <?php
            if($query_run)
            {
                while($row = mysqli_fetch_array($query_run))
                {
        ?>
                    <tr>
                        <td><?php echo $row['YogaType']; ?></td>
                        <td><?php echo $row['Duration']; ?></td>
                        <td><?php echo $row['Fees']; ?></td>
                        <td> 
                            <form action="YTypeUpdate.php" method="post">
                                <input type="hidden" name="YogaType" value="<?php echo $row['YogaType'] ?>">
                                <input type="submit" name="updatedata" class="btn3" value="EDIT">
                            </form>
                        </td>
                        <td> 
                            <form action="YTypeDelete.php" method="post">
                                <input type="hidden" name="YogaType" value="<?php echo $row['YogaType'] ?>">
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
                    <th colspan="3"> No Record Found </th>
        <?php
            }
        ?>
    </table>
    <br>
</body>
</html>