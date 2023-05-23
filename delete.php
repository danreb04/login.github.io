<?php
require 'connection.php';

if (isset($_GET['id'])) {
    $id = $_GET['id'];

    
    $conn = mysqli_connect("localhost", "root", "", "student");

   
    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }

  
    $deleteQuery = "DELETE FROM stu_table WHERE ID = $id";
    $deleteResult = mysqli_query($conn, $deleteQuery);

    if ($deleteResult) {
        // Deletion successful
        echo "Record deleted successfully.";
    } else {
        // Deletion failed
        echo "Error deleting record: " . mysqli_error($conn);
    }

    // Close the database connection
    mysqli_close($conn); 
}
?> 

<html>
    
  <head>
<style>
.btn1 {
            padding: 5px 10px;
            background-color: #000000;
            color: #fff;
            text-decoration: none;
            border-radius: 5px;
        }

        .btn1:hover {
            background-color: #333333;
        }

</style>

  </head>
 
     <a href="view.php">
        <button class="btn1">Back</button>
    </a>


</html>
