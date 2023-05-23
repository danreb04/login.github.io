<html> 
<body>
<div class="container">
    <h2>Student Information</h2>
  



<?php
$conn = mysqli_connect("localhost", "root", "", "student");

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

$query = "SELECT * FROM stu_table";
$result = mysqli_query($conn, $query);

if (mysqli_num_rows($result) > 0) {
    echo "<table>";
    echo "<tr><th>ID</th><th>Name</th><th>Age</th><th>Course</th><th>Address</th><th>Gender</th><th colspan='2'>Actions</th></tr>";
    while ($row = mysqli_fetch_assoc($result)) {
        echo "<tr>";
        echo "<td>" . $row['id'] . "</td>";
        echo "<td>" . $row['Name'] . "</td>";
        echo "<td>" . $row['Age'] . "</td>";
        echo "<td>" . $row['Course'] . "</td>";
        echo "<td>" . $row['Address'] . "</td>";
        echo "<td>" . $row['Gender'] . "</td>";
        
        echo "<td><a href='delete.php?id=" . $row['id'] . "' class='btn-delete'>Delete</a></td>";
        echo "<td><a href='update.php?id=" . $row['id'] . "' class='btn-update'>Update</a></td>";
        echo "</tr>";
    }
    echo "</table>";
} else {
    echo "No records found.";
}

mysqli_close($conn);
?>



</body>

</html>

<!DOCTYPE html>
<html>
<head>
    <style> 


     



        body{

            background-image: url(pic.png);
             background-size: cover;
          margin:50px 0px; padding: 55px;
       text-align:-webkit-center;
         align:center;
        }
 
        .container {
            max-width: 550px;
            margin: 0 auto;
            padding: 20px;
            background-color: #ffffff;
            border-radius: 20px;

        }

        .container h2 {
            text-align: center;
            margin-bottom: 20px;
        }
        
        table {
            width: 70%;
            border-collapse: collapse;
            background-color: #fff;
            border: 1px solid #ccc;
          background-position: center;
        }

        table th, table td {
            padding: 8px;
            border: 1px solid #ccc;
            text-align: center;
        }

        th {
            font-weight: bold;
            text-align: left;
            background-color: #006f9e;
            color: #fff;
        }

        .btn-delete,
        .btn-update,
        .btn-back {
            display: inline-block;
            padding: 5px 10px;
            background-color: #000000;
            color: #fff;
            text-decoration: none;
            border-radius: 20px;
            margin: 5px;
        }

        .btn-delete:hover,
        .btn-update:hover,
        .btn-back:hover {
            background-color: #006f9e;
        }
    </style>
</head>
<body>
    <a href="index.php">
        <button class="btn-back">Back</button>
    </a>
</body>
</html>
