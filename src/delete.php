<?php
   
    $madocgia = $_GET['madg'];

    // B1: Kết nối Database 
    $conn = mysqli_connect('localhost','root','','1951060617_libraries');
    if(!$conn){
        die("Kết nối thất bại.");
    }
    // B02: Thực hiện truy vấn
    $sql = "DELETE FROM docgia where madg='$madocgia'";

    $number = mysqli_query($conn,$sql);

    if($number > 0){
        header("location: index.php");
    }else{
        header("location: error.php");
    }
?>