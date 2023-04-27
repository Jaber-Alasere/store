<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>مركز خدمات التربية الخاصة</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js" integrity="sha384-cuYeSxntonz0PPNlHhBs68uyIAVpIIOZZ5JqeqvYYIcEL727kskC66kF92t6Xl2V" crossorigin="anonymous"></script>

<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Almarai&family=Fuzzy+Bubbles:wght@700&family=Gideon+Roman&family=Laila&family=Lemonada:wght@300&family=Lobster&family=Markazi+Text:wght@600&family=Pacifico&family=Purple+Purse&family=Readex+Pro:wght@200&family=Roboto+Slab:wght@300;500&family=Ubuntu:wght@300&display=swap" rel="stylesheet">
<link rel="stylesheet" href="style.css">

</head>
<body>
   <?php
   
$querys="SELECT * FROM  cards ";
$results=mysqli_query($conn,$querys);


$rowcount = mysqli_num_rows( $results);

   


   ?>
<center>
<nav class="navbar navbar-expand-lg navbar-light bg-dark">
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
    <li class="nav-item text-light">
        <a class="nav-link text-light" href="mycard.php"> السلة <?php  if($rowcount > 0){ echo '<p class=" bg-danger card-count">'.$rowcount.'</p>'; }; ?>
        </a>
      </li>
      <li class="nav-item text-light">
        <a class="nav-link text-light" href="prodacts.php">اضافة المنتجات</a>
      </li>
      <li class="nav-item text-light">
        <a class="nav-link text-light" href="store.php">تعديل  </a>
      </li>
      <li class="nav-item active">
        <a class="nav-link text-light" href="home.php">الرئيسية </a>
      </li>
   
    </ul>
    <a class="navbar-brand text-light  " href="home.php">   المتجر السحابي</a>

  </div>
</nav>

</center>


<style>
  ul{
position: relative;
right: -150px;

}
.navbar-brand{
  position: relative;
left: 400px;
}
.card-count{
  width: 25px;
  height: 15px;
  border-radius:50%;
  position: relative;
  top:-30px;
  left: -20px;
  font-size:small;
}
</style>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html>