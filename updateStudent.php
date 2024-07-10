<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Update Student Data</title>
    <link rel="icon" type="image/x-icon" href="bxs-calendar-check.svg">
    <link rel="stylesheet" href="sidebar.css" type="text/css" />
    <link rel="stylesheet" href="updateStudent.css" type="text/css" />
    <link rel="stylesheet" href="studentform.css" type="text/css" />
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
        <a href="addStudent.php">
        <span class="text">Update Student Data</span>
        </a>
      </div>
      <div class="formcontainer">
        <div class="title">Update Student Information</div>
        <div class="content">
          <form action="#">
            <div class="user-details">
              <div class="input-box">
                <span class="details">Student ID</span>
                <input type="text" placeholder="Enter your student ID" required>
              </div>
              <div class="input-box">
                <span class="details">Full Name</span>
                <input type="text" placeholder="Enter your name" required>
              </div>
              <div class="input-box">
                <span class="details">Email</span>
                <input type="text" placeholder="Enter your email" required>
              </div>
              <div class="input-box">
                <span class="details">Program</span>
                <input type="text" placeholder="Enter your program" required>
              </div>
              <div class="input-box">
                <span class="details">Year and Section</span>
                <input type="text" placeholder="Enter your year and section" required>
              </div>
              
            </div>
           
            <div class="button">
              <input type="submit" value="Update">
            </div>
          </form>
        </div>
      </div>
      </section>
    <script src="script.js"></script>
  </body>
</html>
