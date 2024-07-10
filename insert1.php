<?php
   $server = "localhost";
   $username = "root";
   $password = "";
   $dbname = "db_saims";

   $conn = new mysqli($server,$username,$password,$dbname);
   
   if ($conn->connect_error){
    die("connection failed" .$conn->connect_error);

   }
   if (isset($_POST['text'])) {
    $text = $_POST['text'];
    $sql = "SELECT fullName FROM tbl_students WHERE studentID = '$text'";
    $query = $conn->query($sql);
    while ($row = $query->fetch_assoc()) {
        $name = $row['fullName'];
    }
    // Rest of the code...
    if (isset($_POST['text'])) {
        $text = $_POST['text'];
    
        // Fetch the name from the database
        $sql = "SELECT fullName FROM tbl_students WHERE studentID = '$text'";
        $query = $conn->query($sql);
        while ($row = $query->fetch_assoc()) {
            $name = $row['fullName'];
        }
    
        // Define other variables for the insert query
        //$No = 1; // Replace with the appropriate value
        $timeIN = date("Y-m-d H:i:s"); // Replace with the appropriate value
    
        // Insert the data into tbl_qr
        $sql = "INSERT INTO tbl_current(studentID, name, timeIN) VALUES ('$text', '$name', '$timeIN')";
        //increment no
        //$No++;
        if ($conn->query($sql) === TRUE) {
            echo "Successfully inserted.";
        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }
    
        header("location: new_attendance.php");
    }
}
    $conn->close();
?>    