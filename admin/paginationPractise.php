    <?php  

    include ('../connection/config.php');

    $limit = 10;  
    if (isset($_GET["page"])) {
        $page  = $_GET["page"]; 
        } 
        else{ 
        $page=1;
        };  
    $start_from = ($page-1) * $limit;  
    $result = mysqli_query($conn,"SELECT * FROM donorHistory ORDER BY Id ASC LIMIT $start_from, $limit");
    ?>
    <!DOCTYPE html>
    <html lang="en">
    <head>
    <title>Bootstrap Example</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script> -->
    </head>
    <body>
    <table class="table table-bordered table-striped">  
    <thead>  
    <tr>  
                    <th>S.N</th>
                    <!-- <th>Id</th> -->
                    <th>Name</th>
                    <th>Email</th>
                    <th>Age</th>
                    <th>Gender</th>
                    <th>BloodGroup</th>
                    <th>History</th>
                    <th>Contact</th>
                    <th>Address</th>
                    <th>Action</th> 
    </tr>  
    <thead>  
    <tbody>  
    <?php  
    while ($row = mysqli_fetch_array($result)) {
        $i = 1;  
    ?>  
    <tr>
        <td><?php echo $i;?></td>
        <!-- <td><?php echo $row ['Id'];?></td> -->
        <td><?php echo $row ['Name']?></td>
        <td><?php echo $row ['Email']?></td>
        <td><?php echo $row ['Age']?></td>
        <td><?php echo $row ['Gender']?></td>
        <td><?php echo $row ['BloodGroup']?></td>
        <td><?php echo $row ['History']?></td>
        <td><?php echo $row ['Contact']?></td>
        <td><?php echo $row ['Address']?></td>
        <td>   
            <button class="edit">
                <a href="edit.php?id=<?php echo $row['Id'];?>">Edit</a>
            </button> 
            <button class="delete">
                <a href="delete.php?id=<?php echo $row['Id'];?>" onclick="return confirm('Do you want to delete ?')";>Delete</a>
            </button>
        </td>
    </tr>
    <?php 
     $i++; 
    };  
    ?>  
    </tbody>  
    </table>  
    <?php  

    $result_db = mysqli_query($conn,"SELECT COUNT(Id) FROM donorHistory"); 
    $row_db = mysqli_fetch_row($result_db);  
    $total_records = $row_db[0];  
    $total_pages = ceil($total_records / $limit); 
    /* echo  $total_pages; */
    $pagLink = "<ul class='pagination'>";  
    for ($i=1; $i<=$total_pages; $i++) {
                $pagLink .= "<li class='page-item'><a class='page-link' href='pagination.php?page=".$i."'>".$i."</a></li>";	
    }
    echo $pagLink . "</ul>";  
    ?>

    </body>
    </html>