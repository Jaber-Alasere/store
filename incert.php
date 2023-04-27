<?php


$conn=mysqli_connect('localhost', 'root','','shop');

if($conn)
{
    echo 'done connect correct';
}else{
    echo 'no connect';
}





if(isset($_POST['submit']))
{


$name=$_POST['name'];
$price=$_POST['price'];
$detil=$_POST['proddetil'];
$model=$_POST['model'];

$size=$_POST['size'];

$data_make=$_POST['data_make'];

$image=$_FILES['image'];
//موقع الصورة في المجلد 
$image_location=$_FILES['image']['tmp_name'];
$image_name=$_FILES['image']['name'];
$image_up='images/'.$image_name;

$insert="INSERT INTO prodact (name , price , image ,proddetil ,size,data_make,model) VALUES ('$name' ,'$price','$image_up','$detil','$size','$data_make','$model')";

mysqli_query($conn , $insert);

if(move_uploaded_file($image_location,'images/'. $image_name))
{
    echo "<script>alert('تم رفع المنتجات')</script>";
}else{
    echo "<script>alert('لم يتم رفع المنتجات')</script>";
}
header("Location:prodacts.php");

}
?>