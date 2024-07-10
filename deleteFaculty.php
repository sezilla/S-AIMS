<?php
include 'connection.php';
if(isset($_GET['deleteid'])){
    $id=$_GET['deleteid'];

    $sql="delete from `tbl_faculty` where employeeID=$id";
    $result=mysqli_query($con,$sql);
    if($result){
        //echo "Deleted Successfully";
        header('location:facultyRecords.php');
    }else{
        die(mysqli_error($con));
    }
}
?> 