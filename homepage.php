<?php
session_start();
include("connect.php");
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <link rel="stylesheet" href="homepage.css">
</head>

<body>

    <p class="greeting">
        Hello  <?php 
       if(isset($_SESSION['email'])){
        $email=$_SESSION['email'];
        $query=mysqli_query($conn, "SELECT users.* FROM `users` WHERE users.email='$email'");
        while($row=mysqli_fetch_array($query)){
            echo $row['firstName'].' '.$row['lastName'];
        }
       }
       ?>
       :)
    </p>

   
    <div class="dashboard-container">
        <h1>Member Dashboard</h1>

        
        <nav>
            <ul>
                <li><a href="gallery.html">Member's Gallery</a></li>
                <li><a href="courses.html">Courses</a></li>
                <li><a href="google.php">Google Sheet</a></li>
                <li><a href="chart.php">Gantt Chart</a></li>
            </ul>
        </nav>

      
        <a href="index.php" class="logout-btn">Logout</a>
    </div>
</body>


</html>