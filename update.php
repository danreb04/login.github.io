<?php
require 'connection.php';

if (isset($_GET['id'])) {
    $id = $_GET['id'];

   
    $query = "SELECT * FROM stu_table WHERE ID = $id";
    $result = mysqli_query($conn, $query);
    $data = mysqli_fetch_assoc($result);

    
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
       
        $name = $_POST['name'];
        $age = $_POST['age'];
        $course = $_POST['course'];
        $address = $_POST['address'];
        $gender = $_POST['gender'];

        // Update the data in the database
        $updateQuery = "UPDATE stu_table SET Name = '$name', Age = '$age', Course = '$course', Address = '$address', Gender = '$gender' WHERE ID = $id";
        $updateResult = mysqli_query($conn, $updateQuery);

        if ($updateResult) {
           
           echo "<h2>Record updated successfully."; 
        } else {
           
            echo "Error updating record: " . mysqli_error($conn);
        }
    }
 }
?>

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
            width: 400px;
            margin: 0 auto;
            padding: 20px;
            background-color: whitesmoke;
            border-radius:20px;
           }
        h2 {
            text-align: center;
            margin-bottom: 20px;
        }

        form label {
            display: inline-block;
            width: 100px;
            font-weight: bold;
        }

        input[type="text"] {
            width: 250px;
            padding: 5px;
            margin-bottom: 10px;
            border-radius: 10px;
        }

        input[type="submit"] {
            padding: 8px 16px;
            background-color: #000000;
            color: #fff;
            border: none;
            border-radius: 10px;
            cursor: pointer;
        }

        input[type="submit"]:hover {
            background-color: #333333;
        }

        .backbtn {
            display: inline-block;
            padding: 5px 10px;
            background-color: #000000;
            color: #fff;
            text-decoration: none;
            border-radius: 10px;
        }

        .backbtn:hover {
            background-color: #333333;
        }

   </style>
</head>
<body>
    <div class="container">
        <h2>Update Student Information</h2>
        <form action="" method="POST">
            <label for="name">Name:</label>
            <input type="text" id="name" name="name" value="<?php echo $data['Name']; ?>" required><br><br>

            <label for="age">Age:</label>
            <input type="text" id="age" name="age" value="<?php echo $data['Age']; ?>" required><br><br>

            <label for="section">Course:</label>
            <input type="text" id="course" name="course" value="<?php echo $data['Course']; ?>" required><br><br>

            <label for="address">Address:</label>
            <input type="text" id="address" name="address" value="<?php echo $data['Address']; ?>" required><br><br>

            <label for="gender">Gender:</label>
            <input type="text" id="gender" name="gender" value="<?php echo $data['Gender']; ?>" required><br><br>

            <input type="submit" value="Update"> 
            <br> 

            <a href="view.php" class="backbtn">Back</a>
        </form>
    </div>
</body>
</html>
