<?php
$connection = mysqli_connect("localhost","root","");
$db = mysqli_select_db($connection, 'details');

if(isset($_POST['deletedata']))
{
    $trid = $_POST['trid'];

    $query = "DELETE FROM trainer WHERE trid='$trid'";
    $query_run = mysqli_query($connection, $query);

    if($query_run)
    {
        echo '<script> alert("Data Deleted"); </script>';
        header("Location:TrainerIndex.php");
    }
    else
    {
        echo '<script> alert("Data Not Deleted"); </script>';
    }
}

?>