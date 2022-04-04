<?php
    include('../connection/config.php');

    $id = $_GET["requestId"];
    $status = $_GET["status"];
    


    $sql = "update `donor` set Status = '$status' where Id= $id";
    mysqli_query($conn, $sql);

    header("location: ../admin/donorInfo.php");

?>