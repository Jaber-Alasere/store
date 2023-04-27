<?php
include 'connect.php';
include 'navbar.php';

$query="SELECT *  FROM cards";

$result=mysqli_query($conn,$query);

if(isset($_POST['DELETE']))
{
   
$querys="DELETE FROM cards";
$results=mysqli_query($conn,$querys); 
if($results)
{
    echo '<p class="alert alert-success">تم افراغ السلة</p>';
    header('Location:mycard.php');
}else{
    echo '<p class="alert alert-danger"> حدث خطأ ما !!</p>';

}
}


?>



<form action="" method="POST">
<button  class="btn btn-danger" name="DELETE">DELETE </button>
</form>

<center>

<div class="container">

<table class="table table-hover">
<thead>
<br><br><br>
<p class=" col-12 bg-warning text-light">  السلة <img src="\store\images\cart.png" alt=""> </p>

<tr>

  <th scope="">الاجمالي</th>
  <th scope="">الكمية</th>
  <th scope="">المنتج</th>
</tr>
</thead>
<tbody>
<?php
if($result){
while($row = mysqli_fetch_assoc($result))

{
?>
<tr>
<td> <?php   echo $row['totle'] ;  ?></td>    
<td> <?php   echo $row['pices'];   ?></td>    
<td> <?php   echo $row['NameOrder'];   ?></td>    



</tr>

</tbody>

<?php
} 
}else{
echo 'v';  
}
?>


</table>

<form  action="add-to-card.php" class="upload bg-light " method="GET"  >
  <button name="submit" class="btn btn-outline-primary text-light" type="submit"> <a href="invoic.php">ادفع</a>  </button>


  </div>
<br><br><br><br>




<br><br>

</center>

<style>
    td{
        text-align: center;

    }
    p{
        text-align: center;

    }
    table{
        text-align: center;

    }
    form{
        position: relative;
        top: 25px;
        left: 50px;
    }
    button{
        box-shadow:1px 1px 1px 1px gray;
        border-radius:0px;

    }
    button:hover{
        box-shadow:1px 5px 5px 1px gray;
        padding-left:15px;
        border-radius:8px;


    }
</style>