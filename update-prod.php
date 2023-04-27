<?php


$conn=mysqli_connect('localhost', 'root','','shop');


include 'navbar.php';





if(isset($_POST['update']))
{

    $id=$_POST['id'];
$name=$_POST['name'];
$price=$_POST['price'];
$image=$_FILES['image'];
//موقع الصورة في المجلد 
$image_location=$_FILES['image']['tmp_name'];
$image_name=$_FILES['image']['name'];
$image_up='images/'.$image_name;

$update="UPDATE prodact SET name='$name', price='$price' , image='$image_up' WHERE id=$id";
mysqli_query($conn , $update);

if(move_uploaded_file($image_location,'images/'. $image_name))
{
    echo "<script>alert('تم رفع المنتجات')</script>";
}else{
    echo "<script>alert('لم يتم رفع المنتجات')</script>";
}


}
?>