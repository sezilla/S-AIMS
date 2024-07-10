<?php
session_start();

include("connection.php");
include("functions.php");
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Reports</title>
    <link rel="icon" type="image/x-icon" href="bxs-calendar-check.svg">
    <link rel="stylesheet" href="sidebar.css" type="text/css" />
    <link rel="stylesheet" href="qrgenerator.css" />
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css">
    <!-- Boxiocns CDN Link -->
    <link
      href="https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css"
      rel="stylesheet"
    />
    <link href="reports.css" rel="stylesheet" type="text/css" >
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
        <a href="adminPage.php">
        <span class="text">Reports</span>
      </a>
      </div>
      <main class="table">
    <section class= "table__header"><h1>July</h1></section>
    <section class="table__body">
        <table>
            <thead>
                <tr>
                    <th>Student ID</th>
                    <th>Student Name</th>
                    <th>07/01/2023</th>
                    <th>07/02/2023</th>
                    <th>07/03/2023</th>
                    <th>07/04/2023</th>
                </tr>
            </thead>
                <tbody>
                
                            <?php
                            include "db_conn.php";

                            $sql= "SELECT Student_id, name, day1, day2, day3, day4 from Student_attendance" ;
                            $result = $conn-> query($sql);

                            if ($result-> num_rows > 0){
                                while ($row = $result-> fetch_assoc()){
                                    echo "<tr>
                                    <td>".$row["Student_id"] .      "</td>
                                    <td>".$row["name"] .            "</td>
                                    <td>".$row["day1"] .            "</td>
                                    <td>".$row["day3"] .            "</td>
                                    <td>".$row["day3"] .            "</td>
                                    <td>".$row["day4"] .            "</td>
                                    </tr>";
                                }
                                echo "</table>";
                            }
                            else {
                                echo "0 result";
                            }

                            $conn-> close();
                            ?>
                </tbody>
        </table>
    </section>
</main>
  
    
      </section>
  </body>
</html>
