<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/table.css">
    <title>Donor History </title>
    
</head>
<body>

    <?php include 'header.php'?>
    <div class="title">
        <h1>Donor History</h1>
    </div>
    
    <center>
    <table class="content-table">
        <thead>
            <tr>
                <th>S.N</th>
                <th>Name</th>
                <th>Email</th>
                <th>Age</th>
                <th>Gender</th>
                <!-- <th>BloodGroup</th> -->
                <!-- <th>Contact</th> -->
                <th>Address</th>
            </tr>
        </thead>
    

    <?php
    include "connection/config.php";

    error_reporting(E_ERROR | E_PARSE);    

    // $data_per_page = 3;

    // if(isset($_GET['pages'])){
    //     $page = $_GET["pages"];
    // }else{
    //     $page = 1;
    // }

    // $start_form = ($pages-1)*$data_per_page;//

    $selectQuery = "SELECT * FROM `donorHistory`";

    // $selectQuery = "SELECT * FROM `donorHistory` limit $start_form,$data_per_page";

    $result = mysqli_query($conn, $selectQuery);  //

    if(mysqli_num_rows($result)){
        // $id = 1;
        $i = 1;
        // if(isset($_GET['pages'])){
        //     $i = (($_GET['pages']-1)*10)+1;
        // }else{
        //         $i=1;
        // }
        while($row = mysqli_fetch_assoc($result)){
        

?>
    <tbody>
    <tr>
        <td><?php echo $i;?></td>
        <td><?php echo $row ['Name']?></td>
        <td><?php echo $row ['Email']?></td>
        <td><?php echo $row ['Age']?></td>
        <td><?php echo $row ['Gender']?></td>
        <!-- <td><?php echo $row ['BloodGroup']?></td> -->
        <!-- <td><?php echo $row ['Contact']?></td> -->
        <td><?php echo $row ['Address']?></td>
    </tr>
        <?php
        $i++;
        }
    }
        ?>
    </tbody>
    </table>

    <!-- <?php    

        // $sql = "select * from `donorhistory`";
        // $result = mysqli_query($conn,$sql);
        $total_data = mysqli_num_rows($result);
        // echo $total_data;
        $total_pages = ceil($total_data/$data_per_page);
        // echo $total_pages;


        for($i=1;$i<=$total_pages;$i++){


            echo '<a style="font-size:12px;color:red;padding: 5px;bottom:0;" href="admindonorHistory.php?pages='.$i. '">'.$i.'</a>';
        }
        
    ?> -->

    </center>   
</body>
</html>