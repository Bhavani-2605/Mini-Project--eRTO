<?php
include 'connectpolice.php';
if(isset($_GET['deleteid'])){
    $id=$_GET['deleteid'];
    $sql="delete from dl where ll_no='$id'";
    $result= mysqli_query($con,$sql);
    if($result){
        header('location:adddriver.php');

    }else{
        die(mysqli_error($con));
    }
}
?>