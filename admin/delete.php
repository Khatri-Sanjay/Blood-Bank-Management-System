<?php
    session_start();

    include "../connection/config.php";

    $id = $_GET['id'];

    $deleteQuery = "DELETE FROM donorhistory WHERE id='$id'";

    echo $deleteQuery;

    if(mysqli_query($conn,$deleteQuery)){

        header("location:admindonorHistory.php");

        $_SESSION['success'] = "--- Donor Information deleted succedfully ---";
        // echo "delete";

    } else{

        $_SESSION['success'] = "Unable to delete data";
        // echo "unable to delete";
    }


?>