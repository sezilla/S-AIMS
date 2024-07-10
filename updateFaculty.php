<?php
include ('connection.php');
//$id=$_GET['updateid'];

//$id = isset($_GET['updateid']) ? $_GET['updateid'] : '';


//$row=mysqli_fetch_assoc($result);
//$fullName=$row['fullName'];
//$email=$row['email'];
//$phoneNo=$row['phoneNo'];
//$department=$row['department'];
//solve this error Undefined variable $fullName in C:\xampp\htdocs\s-aims-admin-php update\connected\updateFaculty.php on line 169

//$fullName = isset($fullName) ? $fullName : '';
//$email = isset($email) ? $email : '';
//$phoneNo = isset($phoneNo) ? $phoneNo : '';
//$department = isset($department) ? $department : '';

//solve this Undefined array key "updateid" in C:\xampp\htdocs\s-aims-admin-php update\connected\updateFaculty.php on line 22

//when i click the update button it will go to updateFaculty.php but the data is not showing in the input field
//i think the problem is in the updateFaculty.php

/*if(isset($_POST['submit'])){
    $fullName=$_POST['fullName'];
    $email=$_POST['email'];
    $phoneNo=$_POST['phoneNo'];
    $department=$_POST['department'];

    $sql="update `tbl_faculty` set employeeID=$id,fullName='$fullName',email='$email',
    phoneNo='$phoneNo',department='$department'
    where employeeID=$id";
    $result=mysqli_query($con,$sql);
    if($result){
        //echo "Updated successfully";
        header('location:facultyRecords.php');
    }else{
        die(mysqli_error($con));
    }
}*/


$id=$_GET['updateid'];

$sql="Select * from `tbl_faculty` where employeeID=$id";
$result=mysqli_query($con,$sql);

$row=mysqli_fetch_assoc($result);
$fullName=$row['fullName'];
$email=$row['email'];
$phoneNo=$row['phoneNo'];
$department=$row['department'];

if(isset($_POST['submit'])){
    $fullName=$_POST['fullName'];
    $email=$_POST['email'];
    $phoneNo=$_POST['phoneNo'];
    $department=$_POST['department'];

    $sql="update `tbl_faculty` set employeeID=$id,fullName='$fullName',email='$email',
    phoneNo='$phoneNo',department='$department'
    where employeeID=$id";
    $result=mysqli_query($con,$sql);
    if($result){
        //echo "Updated successfully";
        header('location:facultyRecords.php');
    }else{
        die(mysqli_error($con));
    }
}

/*
$id = isset($_GET['updateid']) ? $_GET['updateid'] : '';

if (!empty($id)) {
    $sql = "SELECT * FROM `tbl_faculty` WHERE employeeID='$id'";
    $result = mysqli_query($con, $sql);
    $row = mysqli_fetch_assoc($result);

    if ($row) {
        $fullName = $row['fullName'];
        $email = $row['email'];
        $phoneNo = $row['phoneNo'];
        $department = $row['department'];

        if (isset($_POST['submit'])) {
            // Update the variables here

            $sql = "UPDATE `tbl_faculty` SET fullName='$fullName', email='$email',
                phoneNo='$phoneNo', department='$department'
                WHERE employeeID='$id'";
            $result = mysqli_query($con, $sql);

            if ($result) {
                header('location:facultyRecords.php');
                exit;
            } else {
                die(mysqli_error($con));
            }
        }
    } else {
        die('Invalid employee ID');
    }
} else {
    die('Missing employee ID');
}
*/
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Update Faculty Data</title>
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
            <a href="#">
              <i class="bx bx-folder"></i>
              <span class="link_name">Reports</span>
            </a>
            <i class="bx bxs-chevron-down arrow"></i>
          </div>
          <ul class="sub-menu">
            <li><a class="link_name" href="#">Reports</a></li>
            <li><a href="#">Attendance</a></li>
          </ul>
        </li>

        <!--<li>
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
        <span class="text">Update Faculty Data</span>
        </a>
      </div>
      <div class="formcontainer">
        <div class="title">Update Faculty Information</div>
        <div class="content">
          <form action="updateFaculty.php" method="POST">
            <!--FORM-->
            <div class="user-details">
              <div class="input-box">
                <span class="details">Employee ID</span>
                <input type="text" required placeholder="Employee ID"
                  name="employeeID" autocomplete="off"
                  value=<?php echo $id; ?>>
              </div>
              <div class="input-box">
                <span class="details">Full Name</span>
                <input type="text" required placeholder="Enter your full name"
                  name="fullName" autocomplete="off"
                  value=<?php echo $fullName; ?>>
              </div>
              <div class="input-box">
                <span class="details">Email</span>
                <input type="text" required placeholder="Enter your email"
                  name="email" autocomplete="off"
                  value=<?php echo $email; ?>>
              </div>
              <div class="input-box">
                <span class="details">Phone Number</span>
                <input type="text" required placeholder="Enter your number" 
                  name="phoneNo" autocomplete="off"
                  value=<?php echo $phoneNo; ?>>
              </div>
              <div class="input-box">
                <span class="details">Department</span>
                <input type="text" required placeholder="Enter your department"
                  name="department" autocomplete="off"
                  value=<?php echo $department; ?>>
              </div>
              
            </div>
            
            <div class="button">
              <input type="submit" value="Update" name="submit">

            </div>
          </form>
        </div>
      </div>
      </section>
    <script src="script.js"></script>
  </body>
</html>