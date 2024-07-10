<?php
//session_start();

//include("connection.php");
//include("functions.php");
//include("adminPage.php")
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <link rel="icon" type="image/x-icon" href="bxs-calendar-check.svg">
    <link rel="stylesheet" href= "adminHome.css">
    <link rel="stylesheet" href="sidebar.css" />
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
      <!--<li>
        <a href="adminHome.html">
          <i class="bx bx-home"></i>
          <span class="link_name">Home</span>
        </a>
        <ul class="sub-menu blank">
          <li><a class="link_name" href="adminHome.html">Home</a></li>
        </ul>
      </li>
      <li>
        <div class="iocn-link">
          <a href="\adminPage\adminPage.html">
            <i class="bx bx-user-circle"></i>
            <span class="link_name">Admin</span>
          </a>
          <i class="bx bxs-chevron-down arrow"></i>
        </div>
        <ul class="sub-menu">
          <li><a class="link_name" href="\adminPage\adminPage.html">Admin</a></li>
          <li><a href="\facultyRecords\facultyRecords.html">Faculty Records</a></li>
          <li><a href="\studentRecords\studentRecords.html">Student Records</a></li>
        </ul>
      </li>
      <li>
        <div class="iocn-link">
          <a href="\addNewPage\addNewPage.html">
            <i class='bx bx-user-plus'></i>
            <span class="link_name">Add New</span>
          </a>
          <i class="bx bxs-chevron-down arrow"></i>
        </div>
        <ul class="sub-menu">
          <li><a id="addnew" class="link_name" href="\addNewPage\addNewPage.html">Add New</a></li>
          <li><a href="\addNewFaculty\addFaculty.html">Faculty</a></li>
          <li><a href="\addNewStudent\addStudent.html">Student</a></li>
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
    
      <li>
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
        </div>
      </li>
      </div><!--
    </ul>
  </div>-->
  <section class="home-section">
    <div class="home-content">
      <i class="bx bx-menu"></i>
      <a href="adminHome.php">
      <span class="text">Home</span>
      </a>
    </div>
    <div class="yellowbox">
      <span class="welcome">
        <span>Welcome, Admin!</span></span>
        </div>
      <div class="navcon">
          <!--admin-->
        <div class="admingrp">
            <a href="adminPage.php" class="nav-link">
              <i class="bx bx-user-circle"></i>
            </a>
            <span class="admintxt">
                <span>Admin</span></span>
            </a>
        </div>

          <!--management-->
        <div class="managementgrp">
            <div class="dropdown">
              <a href="addNewPage.php">
                <i class='bx bx-user-plus'></i>
                <span class="managementtxt">
                  <span>Add New</span>
                </span>
              </a>
                

              </div>
            </div>

          <!--settings-->
        <div class="reportsgrp">
              <a href="#">
                <i class="bx bx-folder"></i>

                <span class="reportstxt">
                  <span>Reports</span>
                </span>
              </a>
        </div>
      

      </div> <!-- end of navcon-->
    </div>
     <div class="profilecontainer">
      
      <div class="top">
        <div class="profilecon1">
          <a href="#">
            <img src="profile.svg" alt="profile" class="profileicon" />
          </a>
        </div>

        <div class="profilecon2">
          <a href="#">
            <img src="profile.svg" alt="profile" class="profileicon" />
          </a>
        </div>

        <div class="profilecon3">
          <a href="#">
            <img src="profile.svg" alt="profile" class="profileicon" />
          </a>
        </div>
      </div>
      <div class="bot">
        <div class="profilecon4">
          <a href="#">
            <img src="profile.svg" alt="profile" class="profileicon" />
          </a>
        </div>

        <div class="profilecon5">
          <a href="#">
            <img src="profile.svg" alt="profile" class="profileicon" />
          </a>
        </div>

        <div class="profilecon6">
          <a href="#">
            <img src="profile.svg" alt="profile" class="profileicon" />
          </a>
        </div>
      </div>
    </div>

    
    </section>
</body>
<script src="script.js"></script>
</html>
