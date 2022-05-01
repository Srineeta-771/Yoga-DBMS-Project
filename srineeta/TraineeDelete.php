<?php
$connection = mysqli_connect("localhost","root","");
$db = mysqli_select_db($connection, 'details');

if(isset($_POST['deletedata']))
{
    $tid = $_POST['tid'];

    $query = "DELETE FROM trainee WHERE tid='$tid'";
    $query_run = mysqli_query($connection, $query);

    if($query_run)
    {
        echo '<script> alert("Data Deleted"); </script>';
        header("Location:TraineeIndex.php");
    }
    else
    {
        echo '<script> alert("Data Not Deleted"); </script>';
    }
}

?>