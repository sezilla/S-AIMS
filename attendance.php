
<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css?family=Lato&display=swap" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css?family=Jua&display=swap" rel="stylesheet" />
    <title>Attendance</title>
    <link rel="icon" type="image/x-icon" href="bxs-calendar-check.svg">
    <link href="css/attendance.css" rel="stylesheet" type="text/css" >
    <!--try-->

    <!--try-->
</head>

<body>
    <nav class="navbar">
        <a href="facultyhomepage.php">
            <div class="navbar__logo">
            <img src="files/logo.png" width ="85%" height = "auto">
            </div>
        </a>
        <div class="gear">
            <a class="gear-icon" onclick="gearopen()">
                <img src="https://media.discordapp.net/attachments/1099939465830617171/1123531526454399068/Union_1.png" />
            </a>
        </div>

        <div class="gear-popup" id="mygear">
            <form action="/action_page.php" class="gear-container">
                <button type="button" class="gear cancel" onclick="gearclose()">
                    <img src="https://media.discordapp.net/attachments/1099939465830617171/1123531526454399068/Union_1.png" />
                </button>
                <button class="logout">
                    <a style="color:black" href="index.php">Sign out</a>
                </button>

            </form>
        </div>
    </nav>
    <button class="burger" onclick="burgeropen()">
        <img src="https://media.discordapp.net/attachments/1099939465830617171/1123197730039275681/Frame_22_-_button.png" />
    </button>

    <div class="burger-popup" id="settings">
        <form action="/action_page.php" class="burger-container">
            <button type="button" class="burger cancel" onclick="burgerclose()">
                <img src="https://media.discordapp.net/attachments/1099939465830617171/1123197730039275681/Frame_22_-_button.png" />
            </button>

            <div class="allmenu">
                <a href="faculty schedule.html">
                    <div class="schedule-menu">
                        <img src= "files/schedulemenu.svg">
                    </div>
                </a>
                <a href="faculty calendar.html">
                    <div class="calendar-menu">
                        <img src=  "files/calendarmenu.svg">
                    </div>
                </a>
                <a href="attendance.php">
                    <div class="attendance-menu">
                        <img src = "files/attendancemenu.svg">
                    </div>
                </a>
            </div>
        </form>
    </div>

<!--haahahahhahahahhahahhahahhahahhahahhahahhahahahhahhahahhahahhhahahhahahhahhahhahhahahhahha-->
<span class="header"> Attendance</span>
    <div class="attendance">
        <span class="subject1">COSC 70 : Software Engineering</span>
        <span class="details1">Computer Science BSCS 2-1</span>
        <div class="icon1">
            <img src="https://media.discordapp.net/attachments/1099939465830617171/1123186708754747504/arrow-right-circle-fill.png" />
            </div>
            <span class="next1">Attendance</span>

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
 

<a class = "scanner" href = "new_attendance.php">
    <img src = "files/scan.svg" width= "65px" height= "auto" color= "#e6b800" margin-left="40px">
</a>

  <script>
        function openForm() {
            document.getElementById("myForm").style.display = "block";
        }
        function closeForm() {
            document.getElementById("myForm").style.display = "none";
        }

        function burgeropen() {
            document.getElementById("settings").style.display = "block";
        }
        function burgerclose() {
            document.getElementById("settings").style.display = "none";
        }

        function gearopen() {
            document.getElementById("mygear").style.display = "block";
        }
        function gearclose() {
            document.getElementById("mygear").style.display = "none";
        }

  </script>
</body>
</html>
