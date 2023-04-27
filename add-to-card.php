<?php



$conn=mysqli_connect('localhost', 'root','','shop');

if(!$conn)
{

    echo 'no connect';
}
include 'navbar.php';




if(isset($_GET['submit']))
{

    $name=$_GET['name'];
    $price=$_GET['price'];
    $pices=$_GET['pices'];
    @$totle=$price * $pices;


$insert="INSERT INTO cards(NameOrder , price , pices ,totle  ) VALUES ('$name','$price' , '$pices' ,'$totle')";

$res=mysqli_query($conn , $insert);
if(!$res)
{

    echo 'لم يتم اضافة المنتج!!';
}



}



?>


<br><br><br>
<center>
<div class="container ">

<div class="row col-lg-6"  style="width:25rem;">

<form  action="add-to-card.php" class="upload bg-dark" method="GET" enctype="multipart/form-data" >
<br>

  <button name="submit" class="btn btn-outline-light" type="submit"> <a href="mycard.php">ادفع</a>   </button>
  <button name="submit" class="btn btn-outline-light" type="submit"><a href="home.php"> متابعة التسوق</a></button>


  </div>

<br><br>
</form>
</div>
</center>


<style>
    body{
        background-image: url("/store/images/22.jpg");
    }
    form{
        background-color:white;
        border-bottom:1px solid black;
        border-left:1px solid black;
        border-right:1px solid black;
        border-radius:10px;
        box-shadow:1px 5px 5px black;
        height: 95px;
        
    }
    button{
        margin-left:20px;
    }
</style>