<?php
session_start();

include("connection.php");
include("functions.php");
include("deleteFaculty.php");
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Faculty Records</title>
    <link rel="icon" type="image/x-icon" href="bxs-calendar-check.svg">
    <link rel="stylesheet" href="table.css" type="text/css">
    <link rel="stylesheet" href="facultyRecords.css" type="text/css" />
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
            <li><a class="link_name" href="addNewPage.php">Add New</a></li>
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
        <a href="facultyRecords.php">
        <span class="text">Faculty Records</span>
      </a>
      </div>
      <div class="content">    
        <p>
            Accumulated data of all college instructors at Engineering, Technology, and Innovation Vocational Academic College (ETIVAC).
        </p>
      </div>

<div class="addbtn">
  <button class="btn"><a href="addFaculty.php">Add New Faculty</a></button>
  <div class="input-box">
    <input type="text" placeholder="Search Faculty">
    <span class="icon">
        <i class="uil uil-search search-icon"></i>
    </span>
    <i class="uil uil-times close-icon"></i>
</div>
<script>
  let inputBox = document.querySelector(".input-box"),
      searchIcon = document.querySelector(".icon"),
      closeIcon = document.querySelector(".close-icon");
  searchIcon.addEventListener("click", () => inputBox.classList.add("open"));
  closeIcon.addEventListener("click", () => inputBox.classList.remove("open"));
</script>

</div>
<!--Table-->
<main class="table">
  <section class="table__header">
      <h1>Faculty Records</h1>
     
  </section>
  <section class="table__body">
      <table>
      <thead>
                <tr>
                <th scope="col">Employee ID</th>
                <th scope="col">Full Name</th>
                <th scope="col">Email</th>
                <th scope="col">Phone Number</th>
                <th scope="col">Department</th>
                <th scope="col">Password</th>
                <th scope="col">Action</th>
                </tr>
            </thead>
            <tbody>
          <?php
                $sql="Select * from `tbl_faculty`";
                $result=mysqli_query($con,$sql);
                if($result){
                    while($row=mysqli_fetch_assoc($result)){
                        $id=$row['employeeID'];
                        $fullName=$row['fullName'];
                        $email=$row['email'];
                        $phoneNo=$row['phoneNo'];
                        $department=$row['department'];
                        $password=$row['password'];
                        echo '<tr>
                        <th scope="row">'.$id.'</th>
                        <td>'.$fullName.'</td>
                        <td>'.$email.'</td>
                        <td>'.$phoneNo.'</td>
                        <td>'.$department.'</td>
                        <td>'.$password.'</td>
                        <td>
                                <a class="btn btn-danger" href="deleteFaculty.php?
                                deleteid='.$id.'" class="text-light">
                                Archive</a>
                        </td>
                        </tr>';
                    }
                }

            ?>

          <!--tbody>
              <tr>
                  <td> 202110391 </td>
                  <td> Johanna Marie Dino </td>
                  <td> johannamarie@gmail.com </td>
                  <td> 09123456789 </td>
                  <td> Computer Studies </td>
                  <td><a href="updateFaculty.php?
                                updateid='.$id.'"><i class='bx bx-edit-alt' ></i></a></td>
              </tr>
            <a href="updateFaculty.php?
                                updateid='.$id.'" class="text-light">
                                Update</a>
            -->


          <tbody>
      </table>
  </section>
</main>
    </section>
    
  <script src="table.js"></script>
    <script src="script.js"></script>
  </body>
</html>
