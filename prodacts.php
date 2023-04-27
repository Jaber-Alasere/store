<?php


$conn=mysqli_connect('localhost', 'root','','shop');

if(!$conn)
{
    echo 'no connect';
}

include 'navbar.php';
?>



<!DOCTYPE html>
<html lang="en">
<head>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    








<?php
//$query="SELECT * FROM prodact";
//$result=mysqli_query($conn,$query);
//
//if($result){
//
//while($row = mysqli_fetch_assoc($result)){
//
//echo  
//"<tr><td>" .$row['id'] . "</td><td>"  .$row['name'] .  "</td><td>". $row['price']. "</td><td>" . $row['image']. "</td><td>"."<br>";
// 
//
//}
//echo "</table>";
//
//
//
//}
//


?>






<br><br><br><br>





<center>



<form  action="incert.php" class="upload" method="POST" enctype="multipart/form-data" >
  <div class="form-group">
    <label for="exampleInputEmail1">اسم الصنف</label>
    <input type="text" class="form-control" id="exampleInputEmail1" name="name" aria-describedby="emailHelp" placeholder="" required>
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">السعر</label>
    <input type="text" class="form-control" name="price" id="exampleInputPassword1" placeholder="0.00$" required> 
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">تفاصيل المنتج</label>
    <input type="text" class="form-control" name="proddetil" id="exampleInputPassword1" placeholder="" required> 
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">الحجم </label>
    <input type="text" class="form-control" name="size" id="exampleInputPassword1" placeholder="" required> 
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">تاريخ صنع </label>
    <input type="text" class="form-control" name="data_make" id="exampleInputPassword1" placeholder="" required> 
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">رقم الموديل </label>
    <input type="text" class="form-control" name="model" id="exampleInputPassword1" placeholder="" required> 
  </div>
  <div class="form-check">
    <input type="file" name="image" class="form-control" id="exampleCheck1">
    <label class="form-check-label" for="exampleCheck1" required>صورة المنتج</label>
  </div>
  <button name="submit" class="btn btn-primary">Upload</button>
</form>


</center>

<style>
    form{
        width: 350px;
    
    }
</style>
</body>
</html>