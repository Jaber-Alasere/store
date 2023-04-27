
<!DOCTYPE html>
<html lang="en">
<head>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js" integrity="sha384-cuYeSxntonz0PPNlHhBs68uyIAVpIIOZZ5JqeqvYYIcEL727kskC66kF92t6Xl2V" crossorigin="anonymous"></script>

  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <center>




<?php
?>
  </select>
  </form>
</center>

</body>
</html>


<?php
session_start();
if( isset($_SESSION["username"]) ){
echo $_SESSION['username'];

  }
include 'connect.php';
include 'navbar.php';

?>
<center>
<br><br><br>
<div class='container'>
<div class='row col-sm-12'>
<?php





$conn=mysqli_connect('localhost', 'root','','shop');


$result=mysqli_query($conn , "SELECT * FROM prodact");

while($row =mysqli_fetch_array($result))
{
    echo "

<div class='card' style='width: 15rem;'>
  <img src='$row[image]' class='card-img-top' >
  <div class='card-body'>
    <h5 class='card-title'>$row[name]</h5>
    <p class='card-text'>$row[price]</p>
    <a href='card.php ? id=$row[id]' class='btn btn-outline-warning'> <img src='/store\images\cart.png' alt=''></a>    <a href='more.php ? id=$row[id]' class='btn btn-primary'> تفاصيل المنتج</a>

    </div>
  </div>


</main>

    <br>
    ";

}


?>
</div>
</div>
</center>
<script>





</script>



<style>
  .card{
    margin:5px  ;

  }
  .card-img-top{
    width: 100%;
    height: 150px;
  }
</style>