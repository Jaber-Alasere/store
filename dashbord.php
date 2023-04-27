


<!DOCTYPE html>
<html lang="en">
<head>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div class="container">

<div class="pro">
    <div class="bg-dark">
    <?php

$conn=mysqli_connect('localhost', 'root','','prod');



$query="SELECT id FROM prodact ORDER BY id";
$query_run=mysqli_query($conn , $query);
$row=mysqli_num_rows($query_run);
echo "<center><div mr-5>";
echo "<p class='text-primary '>عدد المنتجات</p>"."<br>";
echo "<button class='btn btn-outline-light  mr-5'>".
$row."<br>pices<br>"."</button>";
echo "</center></div>";

?>
</div>
<div class="bg-dark">
    <?php

$conn=mysqli_connect('localhost', 'root','','prod');



$query="SELECT id FROM prodact ORDER BY id";
$query_run=mysqli_query($conn , $query);
$row=mysqli_num_rows($query_run);
echo "<center><div mr-5>";
echo "<p class='text-primary '>عدد المنتجات</p>"."<br>";

echo "</center></div>";

?>
</div>
</div>
    </div>
    <div class="card" style="width: 18rem;">
  <img src="images/pexels-cottonbro-3945673 (2) (1).jpg" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">عدد المنتجات</h5>
    <p class="card-text"><?php  echo "<button class='btn btn-outline-dark  mr-5' onclick='o()'>".
$row."<br>pices<br>"."</button>";?></p>
    <a href="#" class="btn btn-primary">Go somewhere</a>
  </div>
</div>
<?php





?>

    <style>
        .bg-dark{
            width:300px;
            height: 300px;
        }
        button{
            width: 100px;
            height: 70px;
            margin-left:70px;
        }
        .card-title{
            margin-left:70px;

        }
        .card{
            width:100px;
        }
        a{
            margin-left:50px;

        }
        .card-img-top{
            height: 90px;
        }
    </style>
</body>
</html>