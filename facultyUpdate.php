<?php
include 'connect.php';
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
?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css">

    <title>Crud operation</title>
    <link rel="icon" type="image/x-icon" href="bxs-calendar-check.svg">
  </head>
  <body>
    <div class="container my-5">
    <form method="post">
        <div class="form-group">
            <label>Name: <?php echo $name; ?></label>
            <input type="text" class="form-control"
            placeholder="Enter your name"
            name="name" autocomplete="off"
            value=<?php echo $name; ?>>
        </div>
        <div class="form-group">
            <label>Email</label>
            <input type="email" class="form-control"
            placeholder="Enter your email"
            name="email" autocomplete="off"
            value=<?php echo $email; ?>>
        </div>
        <div class="form-group">
            <label>Mobile</label>
            <input type="text" class="form-control"
            placeholder="Enter your mobile number"
            name="mobile" autocomplete="off"
            value=<?php echo $mobile; ?>>
        </div>
        <div class="form-group">
            <label>Password</label>
            <input type="password" class="form-control"
            placeholder="Enter your password"
            name="password" autocomplete="off"
            value=<?php echo $password; ?>>
        </div>
        <button type="submit" 
        class="btn btn-primary" name="submit">Update</button>
</form>
    </div>


  </body>
</html>