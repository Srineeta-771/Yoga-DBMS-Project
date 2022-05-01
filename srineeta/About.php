<html>
<head>
    <title></title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" />
    <style type = "text/css">
        .div1 {height: 10%; background-image: url(https://t4.ftcdn.net/jpg/04/26/64/13/360_F_426641333_x71suUrAE1A4N9lqnYVgjdGPjkgudmdR.jpg); background-size: cover; padding: 12px 16px; box-shadow: 0 0 5px 0 #302D1F;}
        .btn {background-color: transparent; border: none; color: black; font-weight: bold; padding: 12px 16px; font-size: 16px; cursor: pointer; }
        .btn:hover {background-color: black; color: white; }
        table, th, td { border:1px solid white; text-align: center; border-collapse: collapse; padding: 15px;}
        th {font-size: 30px; font-weight: bold; color: white; background-color: black;}
        td {background-color: #f0ede4;  font-size: 25px;}
    </style>
</head>

<body>
    <div class = "div1">
        <button class="btn" onclick="document.location='HP.php'"> <i class="fa fa-home"></i> Home</button>
        <b>About</b>
    </div>
    <br><br>
    
    <?php
        $connection = mysqli_connect("localhost","root","");
        $db = mysqli_select_db($connection, 'details');

        $query = "SELECT * FROM CLASS";
        $query_run = mysqli_query($connection , $query);
    ?>

    <h2> Class details </h2>
    <table style="width:100%">
        <tr>
            <th>Time</th>
            <th>Yoga Type</th>
            <th>Duration (in minutes)</th>
        </tr>
         
        <?php
            if($query_run)
            {
                while($row = mysqli_fetch_array($query_run))
                {
        ?>
                    <tr>
                        <td><?php echo $row['Time']; ?></td>
                        <td><?php echo $row['YogaType']; ?></td>
                        <td><?php echo $row['Duration']; ?></td>
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

    <?php
        $connection = mysqli_connect("localhost","root","");
        $db = mysqli_select_db($connection, 'details');

        $query = "SELECT * FROM YTYPE";
        $query_run = mysqli_query($connection , $query);
    ?>
    <h2> Yoga Type details </h2>
    <table style="width:100%">
        <tr>
            <th>Yoga Type</th>
            <th>Duration (in minutes)</th>
            <th>Fees (per month in Rupees)</th>
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
</body>
</html>