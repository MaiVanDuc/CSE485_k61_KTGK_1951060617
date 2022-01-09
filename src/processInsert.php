<?php
if(isset($_POST['texthoten'])){
$hoten = $_POST['texthoten'];
}
if(isset($_POST['textgioitinh'])){
    $gioitinh = $_POST['textgioitinh'];
    }
if(isset($_POST['datenamsinh'])){
    $namsinh = $_POST['datenamsinh'];
    }
if(isset($_POST['textnghenghiep'])){
    $nghenghiep = $_POST['textnghenghiep'];
    }
if(isset($_POST['datengaycapthe'])){
    $ngaycapthe = $_POST['datengaycapthe'];
    }
if(isset($_POST['datengayhethan'])){
    $ngayhethan = $_POST['datengayhethan'];
    }
if(isset($_POST['textdiachi'])){
    $diachi = $_POST['textdiachi'];
    }
$conn = mysqli_connect('localhost','root','','1951060617_libraries');
if(!$conn){
    die("ss");
}
$sql = "INSERT INTO docgia( hovaten, gioitinh, namsinh, nghenghiep, ngaycapthe, ngayhethan, diachi) 
VALUES('$hoten','$gioitinh','$namsinh','$nghenghiep','$ngaycapthe','$ngayhethan','$diachi')";
$result = mysqli_query($conn,$sql); 
if(!$result){
    header("location: error.php"); 
}else{
    header("location: index.php");
}

?>