<html>  

<head>  

<title> Pagination in PHP </title>  

</head>  

<body>   

<div class="main">
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
</div>

<?php  

    include ('../connection/config.php');

    // variable to store number of rows per page

    $limit = 5;  

    // query to retrieve all rows from the table Countries

    $getQuery = "select *from donorHistory";    

    // get the result

    $result = mysqli_query($conn, $getQuery);  

    $total_rows = mysqli_num_rows($result);    

    // get the required number of pages

    $total_pages = ceil ($total_rows / $limit);    

    // update the active page number

    if (!isset ($_GET['page']) ) {  

        $page_number = 1;  

    } else {  

        $page_number = $_GET['page'];  

    }    

    // get the initial page number

    $initial_page = ($page_number-1) * $limit;   

    // get data of selected rows per page    

    $getQuery = "SELECT *FROM donorHistory LIMIT " . $initial_page . ',' . $limit;  

    $result = mysqli_query($conn, $getQuery);       

    //display the retrieved result on the webpage  
    $i = 1;
    while ($row = mysqli_fetch_array($result)) {
          
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
    }  
    
    $i ++;

    // show page number with link   

    for($page_number = 1; $page_number<= $total_pages; $page_number++) {  

        echo '<a href = "index.php?page=' . $page_number . '">' . $page_number . ' </a>';  

    }    

?>  


</body>  

</html> 