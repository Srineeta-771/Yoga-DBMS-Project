<?php
    $connection = mysqli_connect("localhost","root","");
    $db = mysqli_select_db($connection, 'details');

    if(isset($_POST['deletedata']))
    {
        $YogaType = $_POST['YogaType'];

        $query = "DELETE FROM ytype WHERE YogaType='$YogaType'";
        $query_run = mysqli_query($connection, $query);

        if($query_run)
        {
            echo '<script> alert("Data Deleted"); </script>';
            header("Location:YTypeIndex.php");
        }
        else
        {
            echo '<script> alert("Data Not Deleted"); </script>';
        }
    }
?>