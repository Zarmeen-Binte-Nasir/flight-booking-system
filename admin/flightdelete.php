<?php
$id=$_GET['id'];
require '../helpers/init_conn_db.php';

$delete_cancel="DELETE FROM Flight WHERE flight_id='$id'";
    $delete_cancel_run=mysqli_query($conn,$delete_cancel);
    if(!$delete_cancel_run){
        echo "<script>
        window.location.href = 'all_flights.php?id=$id';
        alert('Flight is not deleted successfully');
    </script>";
    }else {
        echo "<script>
        window.location.href = 'all_flights.php?id=$id';
        alert('Flight deleted successfully');
    </script>";
    }
?>