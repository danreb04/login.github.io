<html>
<head>
    <link rel="stylesheet" href="css/style.css">
</head>

<div class="loader">
    <svg viewBox="0 0 80 80">
        <circle id="test" cx="40" cy="40" r="32"></circle>
    </svg>
</div>

<div class="loader triangle">
    <svg viewBox="0 0 86 80">
        <polygon points="43 8 79 72 7 72"></polygon>
    </svg>
</div>

<div class="loader">
    <svg viewBox="0 0 80 80">
        <rect x="8" y="8" width="64" height="64"></rect>
    </svg>
</div>

<body>
  <style>
.loader {
  --path: #2f3545;
  --dot: #5628ee;
  --duration: 3s;
  width: 44px;
  height: 44px;
  position: relative;
}

.loader:before {
  content: '';
  width: 6px;
  height: 6px;
  border-radius: 50%;
  position: absolute;
  display: block;
  background: var(--dot);
  top: 37px;
  left: 19px;
  transform: translate(-18px, -18px);
  animation: dotRect var(--duration) cubic-bezier(0.785, 0.135, 0.15, 0.86) infinite;
}

.loader svg {
  display: block;
  width: 100%;
  height: 100%;
}

.loader svg rect, .loader svg polygon, .loader svg circle {
  fill: none;
  stroke: var(--path);
  stroke-width: 10px;
  stroke-linejoin: round;
  stroke-linecap: round;
}

.loader svg polygon {
  stroke-dasharray: 145 76 145 76;
  stroke-dashoffset: 0;
  animation: pathTriangle var(--duration) cubic-bezier(0.785, 0.135, 0.15, 0.86) infinite;
}

.loader svg rect {
  stroke-dasharray: 192 64 192 64;
  stroke-dashoffset: 0;
  animation: pathRect 3s cubic-bezier(0.785, 0.135, 0.15, 0.86) infinite;
}

.loader svg circle {
  stroke-dasharray: 150 50 150 50;
  stroke-dashoffset: 75;
  animation: pathCircle var(--duration) cubic-bezier(0.785, 0.135, 0.15, 0.86) infinite;
}

.loader.triangle {
  width: 48px;
}

.loader.triangle:before {
  left: 21px;
  transform: translate(-10px, -18px);
  animation: dotTriangle var(--duration) cubic-bezier(0.785, 0.135, 0.15, 0.86) infinite;
}

@keyframes pathTriangle {
  33% {
    stroke-dashoffset: 74;
  }

  66% {
    stroke-dashoffset: 147;
  }

  100% {
    stroke-dashoffset: 221;
  }
}

@keyframes dotTriangle {
  33% {
    transform: translate(0, 0);
  }

  66% {
    transform: translate(10px, -18px);
  }

  100% {
    transform: translate(-10px, -18px);
  }
}

@keyframes pathRect {
  25% {
    stroke-dashoffset: 64;
  }

  50% {
    stroke-dashoffset: 128;
  }

  75% {
    stroke-dashoffset: 192;
  }

  100% {
    stroke-dashoffset: 256;
  }
}

@keyframes dotRect {
  25% {
    transform: translate(0, 0);
  }

  50% {
    transform: translate(18px, -18px);
  }

  75% {
    transform: translate(0, -36px);
  }

  100% {
    transform: translate(-18px, -18px);
  }
}

@keyframes pathCircle {
  25% {
    stroke-dashoffset: 125;
  }

  50% {
    stroke-dashoffset: 175;
  }

  75% {
    stroke-dashoffset: 225;
  }

  100% {
    stroke-dashoffset: 275;
  }
}

.loader {
  display: inline-block;
  margin: 0 16px;
}

 
  </style>
    </body>



</html>

<?php
$conn = mysqli_connect("localhost", "root", "", "student");

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

if (isset($_POST["submit"])) {
    $name = $_POST["name"];
    $age = $_POST["age"];
    $course = $_POST["course"];
    $address = $_POST["address"];
    $gender = $_POST["gender"];

    $insertQuery = "INSERT INTO stu_table (Name, Age, Course, Address, Gender) VALUES ('$name', '$age', '$course', '$address', '$gender')";

    if (mysqli_query($conn, $insertQuery)) {
        echo "Record inserted successfully.";
    } else {
        echo "Error inserting record: " . mysqli_error($conn);
    }
    
    header("Location: view.php");
 } 

mysqli_close($conn);
?>

<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="style.css">
   <style>
 
     body{
    background-image: url(pic.png);
    background-size: cover;
    margin:50px 0px; padding: 55px;
    text-align:-webkit-center;
    align:center;
} 

.dan { 

   position: relative;
          width: 400px;
          height: 310px;
          background: transparent;
          border: 2px solid rgba(255, 255, 255, 0.56);
          backdrop-filter:  blur(5px);
          border-radius: 20px;
          display: center;
          align-items: center;
          justify-content: center;
          transition: 0.7s;


 }

.h {
    display: inline-block;
    width: 80px;
    text-align: right;
    margin-right: 10px;
}

#txt,
.number {
    margin-bottom: 10px;
    border-radius:100px;
}

.submit {
    padding: 8px 16px;
    background-color: #000000;
    color: #fff;
    border: none;
    border-radius: 100px;
    cursor: pointer;
}

.submit:hover {
  background-color: #006f9e;

}

.btn1 {
    padding: 5px 5px;
    background-color: #000000;
    color: #fff;
    border: none;
    border-radius: 100px;
    cursor: pointer;
}

.btn1:hover {
    background-color: #006f9e;
} 


table {
    width: 100%;
    border-collapse: collapse;
}

table th, table td {
    padding: 8px;
    border: 1px solid #ccc;
    text-align: center;
}

.btn-back {
    display: inline-block;
    padding: 5px 10px;
    background-color: #000000;
    color: #fff;
    text-decoration: none;
    border-radius: 20px;
}

.btn-back:hover {
    background-color: #006f9e;
}
.btn-delete, .btn-update {
    display: inline-block;
    padding: 5px 10px;
    background-color: #000000;
    color: #fff;
    text-decoration: none;
    border-radius: 20px;
    margin-left: 5px;
}

.btn-delete:hover, .btn-update:hover {
    background-color: #006f9e;
}

 </style>   
</head>
<body>
    <div class="dan">
    <h2 class="student">STUDENT INFORMATION SYSTEM</h2>

    <form class="frm" method="post">
        <label class="h">Name</label>
        <input id="txt" name="name" value="" required> 
        <br>
        <label class="h">Age</label>
        <input class="number" name="age" value="" required>
        <br>
        <label class="h">Course</label>
        <input id="txt" name="course" value="" required> 
        <br>
        <label class="h">Address</label>
        <input class="number" name="address" value="" required>
        <br>
        <label class="h">Gender</label>
        <select name="gender" required>
            <option value="boy">Boy</option>
            <option value="girl">Girl</option>
        </select>
        <br>
        <button class="submit" name="submit">Submit</button> 
        <br>
       
    </form>

    <a href="view.php">
        <button class="btn1">View Data</button>
    </a>
  </div>

</body>
</html>
