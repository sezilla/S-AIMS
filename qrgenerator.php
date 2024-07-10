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
    <title>QR Code Generator</title>
    <link rel="icon" type="image/x-icon" href="bxs-calendar-check.svg">
    <link rel="stylesheet" href="sidebar.css" type="text/css" />
    <link rel="stylesheet" href="qrgenerator.css" />
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css">
    <!-- Boxiocns CDN Link -->
    <link
      href="https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css"
      rel="stylesheet"
    />
    <link href="css/attendance.css" rel="stylesheet" type="text/css" >
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
        <span class="text">QR Code Generator</span>
      </a>
      </div>

   
    <div class="container">
      <p>Enter Student ID</p>
      <input type="text" placeholder="Student ID" id="qrText" />

      <div id="imgBox">
        <img src="" id="qrImage" />
      </div>
      <button onclick="generateQR()">Generate QR Code</button>
    </div>

    </section>
    
    <script src="script.js"></script>

    <script>
      let imgBox = document.getElementById("imgBox");
      let qrImage = document.getElementById("qrImage");
      let qrText = document.getElementById("qrText");
      let input = document.querySelector("input");
      let generatebtn = document.querySelector("generate");
      let downloadbtn = document.querySelector("download");

      function generateQR() {
        if (qrText.value.length > 0) {
          qrImage.src =
            " https://api.qrserver.com/v1/create-qr-code/?size=150x150&data=" +
            qrText.value;
          imgBox.classList.add("show-img");
        } else {
          qrText.classList.add("error");
          setTimeout(() => {
            qrText.classList.remove("error");
          }, 1000);
        }
      }
      downloadbtn.addEventListener("click", async () => {
        let response = await fetch(qrImage.src.replace("150x150", "300x300"));
        let blob = await response.blob();
        let downloadLink = document.createElement("a");
        downloadLink.href = URL.createObjectURL(blob);
        downloadLink.download = "qrImage.jpg";
        downloadLink.click();
      });
    </script>
    
  </body>
</html>
