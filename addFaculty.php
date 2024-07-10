<?php
session_start();
ini_set('display_errors','Off');
ini_set('error_reporting', E_ALL );
define('WP_DEBUG', false);
define('WP_DEBUG_DISPLAY', false);
    include("connection.php");
    include("functions.php");

    if($_SERVER['REQUEST_METHOD'] == "POST")//if something was posted
    {
        //we would need to collect the data from the $_POST variable
        //$employeeID = $_POST['employeeID'];
        $fullName = $_POST['fullName'];
        $email = $_POST['email'];
        $phoneNo = $_POST['phoneNo'];
        $department = $_POST['department'];
        $password = $_POST['password'];
        $gender = $_POST['gender']; 
        
        /*if (isset($_POST["dot-1"])) {
          $gender = "Male";
          //$query = "INSERT INTO tbl_faculty (gender) VALUES ('$gender')";
        } else if (isset($_POST["dot-2"])) {
          $gender = "Female";
        } else if (isset($_POST["dot-3"])) {
          $gender = "Prefer not to say";
        }*/

        if(/*!empty($employeeID) && */!empty($fullName) && !empty($email) && !empty($phoneNo) && !empty($department))
        {
            //save to database
            $query = "INSERT INTO tbl_faculty (employeeID,fullName,email,phoneNo,department,gender,password) 
            VALUES ('$employeeID','$fullName','$email','$phoneNo','$department','$gender', '$password')";

            mysqli_query($con,$query);
            ?><script>alert("Faculty information saved.")</script><?php
        } else {
          ?><script>alert("Invalid information. Please check your input");</script><?php
        }
    }
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Add New Faculty</title>
    <link rel="icon" type="image/x-icon" href="bxs-calendar-check.svg">
    <link rel="stylesheet" href="sidebar.css" type="text/css" />
    <link rel="stylesheet" href="addfaculty.css" type="text/css" />
    <link rel="stylesheet" href="facultyform.css" type="text/css" />
    <!-- Unicons CSS -->
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css">
    <!-- Boxiocns CDN Link -->
    <link
      href="https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css"
      rel="stylesheet"
    />

  </head>
  <body>
    <div class="sidebar close">
      <div class="logo-details">
        <i class='bx bxs-calendar-check' ></i>
        <span class="logo_name">S-AIMS</span>
      </div>
      <ul class="nav-links">
        <li>
          <a href="adminHome.php">
            <i class="bx bx-home"></i>
            <span class="link_name">Home</span>
          </a>
          <ul class="sub-menu blank">
            <li><a class="link_name" href="adminHome.php">Home</a></li>
          </ul>
        </li>
        <li>
          <div class="iocn-link">
            <a href="adminPage.php">
              <i class="bx bx-user-circle"></i>
              <span class="link_name">Admin</span>
            </a>
            <i class="bx bxs-chevron-down arrow"></i>
          </div>
          <ul class="sub-menu">
            <li><a class="link_name" href="adminPage.php">Admin</a></li>
            <li><a href="facultyRecords.php">Faculty Records</a></li>
            <li><a href="studentRecords.php">Student Records</a></li>
          </ul>
        </li>
        <li>
          <div class="iocn-link">
            <a href="addNewPage.php">
              <i class='bx bx-user-plus'></i>
              <span class="link_name">Add New</span>
            </a>
            <i class="bx bxs-chevron-down arrow"></i>
          </div>
          <ul class="sub-menu">
            <li><a id="addnew" class="link_name" href="addNewPage.php">Add New</a></li>
            <li><a href="addFaculty.php">Faculty</a></li>
            <li><a href="addStudent.php">Student</a></li>
          </ul>
        </li>
        
        <li>
          <div class="iocn-link">
            <a href="reports.php">
              <i class="bx bx-folder"></i>
              <span class="link_name">Reports</span>
            </a>
            <i class="bx bxs-chevron-down arrow"></i>
          </div>
          <ul class="sub-menu">
            <li><a class="link_name" href="reports.php">Reports</a></li>
            <!--<li><a href="#">Attendance</a></li>-->
          </ul>
        </li>

       <!-- <li>
          <a href="#">
            <i class="bx bx-cog"></i>
            <span class="link_name">Setting</span>
          </a>
          <ul class="sub-menu blank">
            <li><a class="link_name" href="#">Setting</a></li>
          </ul>
        </li>-->
        <li>
          <div class="profile-details">
            <a href="adminsignin.php">
              <i class="bx bx-log-out"></i>
              <span class="link_name">Log Out</span>
            </a>
            <ul class="sub-menu blank">
              <li><a class="link_name" href="adminsignin.php">Log Out</a></li>
            </ul>
          
        </li>
        </div>
      </ul>
    </div>
    <section class="home-section">
      <div class="home-content">
        <i class="bx bx-menu"></i>
        <a href="addFaculty.php">
        <span class="text">Add New Faculty</span>
        </a>
      </div>
      <div class="formcontainer">
        <div class="title">Add New Faculty</div>
        <div class="content">
        <form action="addFaculty.php" method="POST">
            <div class="user-details">
              <!--<div class="input-box">
                <span class="details">Employee ID</span>
                <input type="text" name="employeeID" placeholder="Enter Employee ID">
              </div>-->
              <div class="input-box">
                <span class="details">Full Name</span>
                <input type="text" name="fullName" placeholder="Enter Name" required>
              </div>
              <div class="input-box">
                <span class="details">Email</span>
                <input type="text" name="email" placeholder="Enter Email" required>
              </div>
              <div class="input-box">
                <span class="details">Phone Number</span>
                <input type="text" name="phoneNo" placeholder="Enter Number" required>
              </div>
              <div class="input-box">
                <span class="details">Department</span>
                <input type="text" name="department" placeholder="Enter Department" required>
              </div>
              <div class="input-box">
                <span class="details">Password</span>
                <input type="text" name="password" placeholder="Enter Password" required>
              </div>
              
            </div>
            <div class="gender-details">
              <input type="radio" name="gender" id="dot-1">
              <input type="radio" name="gender" id="dot-2">
              <input type="radio" name="gender" id="dot-3">
              <span class="gender-title">Gender</span>
              <div class="category">
                <label for="dot-1">
                <span class="dot one"></span>
                <span class="gender">Male</span>
              </label>
              <label for="dot-2">
                <span class="dot two"></span>
                <span class="gender">Female</span>
              </label>
              <label for="dot-3">
                <span class="dot three"></span>
                <span class="gender">Prefer not to say</span>
                </label>
              </div>
            </div>
            <div class="button">
              <input type="submit" value="Add">
            </div>
          </form>
        </div>
      </div>
      </section>
    <script src="script.js"></script>
  </body>
</html>
