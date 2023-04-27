<!DOCTYPE html>
<html lang="en">
<head>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>المتجر</title>
</head>
<body>
    

<?php
$conn=mysqli_connect('localhost', 'root','','shop');


include 'navbar.php';

?>

<center>



<?php



$result=mysqli_query($conn , "SELECT * FROM prodact");

while($row =mysqli_fetch_array($result))
{
    echo "
    <center>
    <div class='container'>

    <main>
<div class='card' style='width: 18rem;'>
  <img src='$row[image]' class='card-img-top' >
  <div class='card-body'>
    <h5 class='card-title'>$row[name]</h5>
    <p class='card-text'>$row[price]</p>
    <a href='update.php ? id=$row[id]' class='btn btn-primary'>تعديل المنتج</a>
    <a href='delet.php? id=$row[id]' class='btn btn-danger'>حذف المنتج</a>

  </div>
</div>
</div>

</main>

    </center>
    <br>
    ";

}


?>



<style>
    .card{
        display:block;
        margin-top:20px;
        margin-left:10px;

        margin-right:10px;


    }


    .card img{
        height:100px;
        width:100%;
        border:1px solid black;
    }


    .card img:hover{
        position: relative;
        height:200px;
        width:100%;
        border:1px solid black;
        transition-duration: 500ms;
    transition-timing-function: ease-in-out;
    }
    div{
        padding-top:50px;
        padding-right:5px;

        padding-left:5px;
      

    }
</style>





<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html>