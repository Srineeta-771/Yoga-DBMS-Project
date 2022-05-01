<?php
    $connection = mysqli_connect("localhost","root","");
    $db = mysqli_select_db($connection, 'details');

    if(isset($_POST['deletedata']))
    {
        $AreaCode = $_POST['AreaCode'];

        $query = "DELETE FROM yogacenter WHERE AreaCode='$AreaCode'";
        $query_run = mysqli_query($connection, $query);

        if($query_run)
        {
            echo '<script> alert("Data Deleted"); </script>';
            header("Location:YCIndex.php");
        }
        else
        {
            echo '<script> alert("Data Not Deleted"); </script>';
        }
    }
?>