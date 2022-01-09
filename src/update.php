<?php
   
   $ma = $_GET['id'];
   $conn = mysqli_connect('localhost','root','','1951060617_libraries');
   if(!$conn){
       die("Kết nối thất bại. Vui lòng kiểm tra lại các thông tin máy chủ");
   }

   $sql = "SELECT * FROM docgia where madg='$ma'";

   $result = mysqli_query($conn,$sql);

   if(mysqli_num_rows($result) > 0){
     $row = mysqli_fetch_assoc($result);
   
      }

mysqli_close($conn);

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>library</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>

<body>
<div class="container">
        <h5 class="text-center text-primary mt-5">Sửa thông tin </h5>
        <form action="process_update.php" method="post">
        <div class="form-group">
                <label for="textmadg">Mã đọc giả</label>
                <input type="text" class="form-control" readonly id="textmadg" name="textmadg" placeholder="Nhập mã đọc giả" value="<?php echo $row['madg']; ?>">
            </div>
            <div class="form-group">
                <label for="texthoten">Họ và tên</label>
                <input type="text" class="form-control" id="texthoten" name="texthoten" placeholder="Nhập họ tên" value="<?php echo $row['hovaten']; ?>"> 
            </div>
            <div class="form-group">
                <label for="textgioitinh">Giới tính</label>
                <input type="text" class="form-control" id="textgioitinh" name="textgioitinh" placeholder="Nhập giới tính" value="<?php echo $row['gioitinh']; ?>"> 
            </div>
            <div class="form-group">
                <label for="datenamsinh">Năm Sinh</label>
                <input type="date" class="form-control" id="datenamsinh" name="datenamsinh" placeholder="Nhập năm sinh" value="<?php echo $row['namsinh']; ?>">
            </div>
            
            <div class="form-group">
                <label for="textnghenghiep">Nghề Nghiệp</label>
                <input type="text" class="form-control" id="textnghenghiep" name="textnghenghiep" placeholder="Nhập nghề nghiệp"value="<?php echo $row['nghenghiep']; ?>">
            </div>

            <div class="form-group">
                <label for="datengaycapthe">Ngày cấp thẻ</label>
                <input type="date" class="form-control" id="datengaycapthe" name="datengaycapthe" value="<?php echo $row['ngaycapthe']; ?>">
            </div>
            <div class="form-group">
                <label for="datengayhethan">Ngày hết hạn</label>
                <input type="date" class="form-control" id="datengayhethan" name="datengayhethan"value="<?php echo $row['ngayhethan']; ?>" >
                
            </div>
            <div class="form-group">
                <label for="textdiachi">Địa chỉ</label>
                <input type="text" class="form-control" id="textdiachi" name="textdiachi" placeholder="Nhập địa chỉ"value="<?php echo $row['diachi']; ?>">
               
            </div>
            <button type="submit" class="btn btn-primary mt-3">Thêm</button>
        </form>
    </div> 
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>  
</body>
</html>