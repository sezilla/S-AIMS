<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css?family=Lato&display=swap" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css?family=Jua&display=swap" rel="stylesheet" />
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/webrtc-adapter/3.3.3/adapter.min.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/vue/2.1.10/vue.min.js"></script>
    <script type="text/javascript" src="https://rawgit.com/schmich/instascan-builds/master/instascan.min.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
   
    <title>new attendance</title>
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
            <form action="#" class="gear-container">
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
        <form action="#" class="burger-container">
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
<div class= "outer-container">
    <div class="container">
            <div class="row">
                <div class="col-md-5">
                    <video id="preview"  style="  border-radius: 10px; width: 300px; height: 300px; object-fit: cover;"></video>
                </div>
                <div class="col-md-6">
                    <form action="insert1.php" method="post" class="form-horizontal">
                        <label>Scan QR Code</label>
                        <input type="text" name="text" id="text" readonyy="" placeholder="Student ID" class="form-control">
                        <!--<input name="studentID" id="studentID" readonyy="" placeholder="Student ID" class="form-control">

                        <input name="name" id="name" readonyy="" placeholder="Name" class="form-control">

                        <input name="timeIN" id="timeIN" readonyy="" placeholder="Time-in" class="form-control">-->
                    </form>
                <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Student ID</th>
                                <th>Name</th>
                                <th>Time-in</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                                $server = "localhost";
                                $username = "root";
                                $password = "";
                                $dbname = "db_saims";
                            
                                $conn = new mysqli($server,$username,$password,$dbname);
                            
                                if ($conn->connect_error){
                                    die("connection failed" .$conn->connect_error);
                                }

                                $sql = "SELECT No, studentID, name, timeIN FROM tbl_current";
                                $query = $conn->query($sql);
                                while ($row = $query->fetch_assoc()){
                            ?>
                                <tr>
                                <td><?php echo $row['No'];?></td>
                                    <td><?php echo $row['studentID'];?></td>
                                    <td><?php echo $row['name'];?></td>
                                    <td><?php echo $row['timeIN'];?></td>
                                </tr>
                                
                            <?php
                            
                            }
                            ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

    
        <script>
            let scanner = new Instascan.Scanner({ video: document.getElementById('preview')});
            Instascan.Camera.getCameras().then(function(cameras){
                if (cameras.length > 0){
                    scanner.start(cameras[0]);
                } else {
                    alert('No cameras found');
                }
            }).catch(function(e){
                console.error(e);
            });

            scanner.addListener('scan',function(c){
                document.getElementById('text').value=c;
                document.forms[0].submit();
            });

            //design the size of camera
            
            
            video.style.objectFit = 'cover';

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
