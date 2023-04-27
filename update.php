<?php


$conn=mysqli_connect('localhost', 'root','','shop');

if(!$conn)
{

    echo 'no connect';
}
include 'navbar.php';


$id=$_GET['id'];
$up=mysqli_query($conn , "SELECT * FROM prodact WHERE id=$id");

$data=mysqli_fetch_array($up);
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    



<br><br><br><br><br>

<center>


<form  action="update-prod.php" class="upload" method="POST" enctype="multipart/form-data" >
  <div class="form-group">

  <input type="text" name="id" id="id" class="bg-danger text-dark"    value="<?php  echo $data['id']     ?>  " display="none">
  <label for="id">رقم الصنف</label><br><br>

    <label for="exampleInputEmail1">اسم الصنف</label>
    <input type="text" class="form-control" id="exampleInputEmail1"  type="text" name="name"  id="" value="<?php  echo $data['name']     ?>" aria-describedby="emailHelp" placeholder="" required>
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">السعر</label>
    <input type="text" class="form-control"  type="text" name="price" id="" value="<?php  echo $data['price']     ?>" id="exampleInputPassword1" placeholder="0.00$" required> 
  </div>
  <div class="form-check">
    <input type="file" type="file" name="image" id="" value="<?php  echo $data['image']     ?>" class="form-control" id="exampleCheck1">
    <label class="form-check-label" for="exampleCheck1" required>صورة المنتج</label>
  </div>
  <button name="update" class="btn btn-primary"type="submit">تعديل المنتجات</button>
</form>

</center>





<style>
    form{
        width: 350px;
    
    }
</style>












<?php
$query="UPDATE prodact SET `id`=[value-1],`name`=[value-2],`price`=[value-3],`image`=[value-4] WHERE 1";
$result=mysqli_query($conn,$query);

if($result){

while($row = mysqli_fetch_assoc($result)){

echo  
"<tr><td>" .$row['id'] . "</td><td>"  .$row['name'] .  "</td><td>". $row['price']. "</td><td>" . $row['image']. "</td><td>"."<br>";
 

}
echo "</table>";



}



?>






</form>
</body>
</html>