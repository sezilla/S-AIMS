<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css?family=Lato&display=swap" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css?family=Jua&display=swap" rel="stylesheet" />
    <title>Home</title>
    <link rel="icon" type="image/x-icon" href="bxs-calendar-check.svg">
    <link href="css/faculty.css" rel="stylesheet" type="text/css" >
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



    <!-- nandito yung prof at date-->
    <span class="header"> Welcome, Professor!
</span>
    <span class="rightalign"><br /><br />Date: June 05, 2023, Monday<br />Time: 9:50 PM</span>
    <!--hanggang dito-->

    <div class="nextclass">
        <span class="schedule">1:00 PM - 4:00 PM<br /><br />Computer Laboratory 1</span>
        <span class="subject">COSC 70 : Software Engineering</span>
        <span class="details">Computer Science<br />BSCS 2-1</span>


        <div class="icon">
            <img src="https://media.discordapp.net/attachments/1099939465830617171/1123186708754747504/arrow-right-circle-fill.png" />

        </div>
        <span class="next">Your next class:</span>

    </div>
    <a class="schedule">
        <!--input here the schedule (wip)-->
        <!--the icons-->
        <div class="label">
            <div class="today">
                <img src = "files/todaylabel.svg">
            </div>
            <div class="course">
                <img src = "files/courselabel.svg">
            </div>
            <div class="section">
                <img src = "files/sectionlabel.svg"> 
            </div>
        </div>
        <!--until here-->

        <div class="theLine"></div>
        <div class="theinvisiblelinea"></div>
        <div class="theinvisiblelineb"></div>
        <div class="theinvisiblelinec"></div>
        <div class="b"></div>
        <div class="c"></div>
        <div class="d"></div>
        <div class="e"></div>

    </a>
    <div class="megaphone"></div>
    <button class="open-button" onclick="openForm()">
        <img src="https://media.discordapp.net/attachments/1099939465830617171/1123203869846028329/Subtract.png" />
    </button>

    <div class="form-popup" id="myForm">
        <form action="/action_page.php" class="form-container">
            <button type="button" class="btn cancel" onclick="closeForm()">
                <img src="https://media.discordapp.net/attachments/1099939465830617171/1123203869846028329/Subtract.png" />
            </button>
            <div class="announcement"><h3>Announement</h3></div>
            <div class="anotherline"></div>
            <div class="aa"></div>
            <div class="bb"></div>
            <div class="cc"></div>


        </form>
    </div>


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
