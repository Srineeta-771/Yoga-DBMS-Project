<?php
    $connection = mysqli_connect("localhost","root","");
    $db = mysqli_select_db($connection, 'details');

    if(isset($_POST['deletedata']))
    {
        $ManagerID = $_POST['ManagerID'];

        $query = "DELETE FROM centermanager WHERE ManagerID='$ManagerID'";
        $query_run = mysqli_query($connection, $query);

        if($query_run)
        {
            echo '<script> alert("Data Deleted"); </script>';
            header("Location:CMIndex.php");
        }
        else
        {
            echo '<script> alert("Data Not Deleted"); </script>';
        }
    }
?>