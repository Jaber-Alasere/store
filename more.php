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
<div class="container-sm">

<br><br>

<br><br><br>
<div class="page1">
<center>
    <table class="bg-light pl-5"  border="1">
    <th class="bg-primary">
        <p> المنتج </p>
        </th>
        <th class="bg-primary">
        <p>سعر المنتج </p>
        </th>
        <th class="bg-primary">
        <p>تفاصيل المنتج </p>
        </th>
        <th class="bg-primary">
        <p> size </p>
        </th>
        <th class="bg-primary">
        <p> model </p>
        </th>
        <th class="bg-primary">
        <p> image </p>
        </th>
        <tr>
        <td>
<p><?php  echo $data['name']     ?></p>
</td>
<td>
<p><?php  echo $data['price']     ?></p>
</td>  
        <td>
<p><?php  echo $data['proddetil']     ?></p>
</td>
<td>
<p><?php  echo $data['size']     ?></p>
</td>
<td>
<p><?php  echo $data['model']     ?></p>
</td>

<td>
<p><?php

$result=mysqli_query($conn , "SELECT * FROM prodact WHERE id=$id");

while($row =mysqli_fetch_array($result))
{
    echo "
    <center>
    <div class='container'>

    <main>
<div class='card' style='width: 18rem;'>
  <img src='$row[image]' class='card-img-top' >
  </div>
</div>
</div>
</main>
    </center>
    <br>
    ";}?>    </p>
</td>

</tr>
</table>
</center>
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
    width:100%;
    height:150px;
    text-align:center;
    position: relative;

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