<?php

session_start();
$s_user=$_SESSION['username'];

if( !isset($s_user) ){
    header("location:/store/log/log.php");

 
    }

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
<center>
<div class="container">

<div class="row col-lg-3"  style="width:18rem;">

<form  action="add-to-card.php" class="upload" method="GET" enctype="multipart/form-data" >
  <div class="title-form bg-success text-light "><p >تحديد الكمية    </p></div>
<br><br>
  <div class="form-group">

  <input type="number" placeholder="1,2,3,4,.." name="pices" id="id" class="bg-light pices text-dark" value="1"  >
  <label for="id">الكمية</label><br><br>

    <label for="exampleInputEmail1">اسم الصنف</label>
    <input type="text" placeholder="" name="name" id="id" class="bg-light pices text-dark d-none"  value="<?php  echo $data['name']     ?>" ></input>

  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">سعر القطعة </label>
    <input type="text" class="form-control d-none"  type="text" name="price" id="" value="<?php  echo $data['price']     ?>" id="exampleInputPassword1" placeholder="0.00$" required> <?php  echo $data['price']     ?></input>
  </div>

  <button name="submit" class="btn btn-outline-success" type="submit"> اضافة للسلة </button>

  </div>

<br><br>
</form>
</div>
</center>
<br><br>

</div>
<br><br><br><br><br>

</div>




















<style>
    div{
    
    }
    form{
        width: 350px;
    border:1px solid black;
    border-radius:10px;
    transition-delay: 800ms;
    transition-timing-function: ease-in-out;


    }

    
    .title-form{
        border-radius:10px;

    padding-top:10px;
    padding-bottom:5px;

    }

    .pices{
        width:80px;
        border-radius:10px;
        text-align:center;
    }
table{
    width:500px;
    height:150px;
    text-align:center;
  
}
    td{
        border:1px solid black;
        width:100%;
    }
    th{
        border:1px solid black;
    }
</style>




<script>



</script>






<?php



?>






</form>
</body>
</html>