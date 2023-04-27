<?php
include 'connect.php';
include 'navbar.php';
$query="SELECT *  FROM cards";
$result=mysqli_query($conn,$query);


 
?>


<div class='container'>
<div class='row col-sm-12'>
<table class="table">
  <thead>
    <tr>


      <th scope="col">اجمالي السعر</th>
      <th scope="col">الكمية</th>
      <th scope="col">المنتج</th>
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

    }}

?>
<tr>
    <td>
    <?php
$query="SELECT SUM(totle) FROM cards ";
$result=mysqli_query($conn,$query);

while($row = mysqli_fetch_assoc($result))
    
{
 
echo '<h6 class="bg-warning">SR اجمالي الفاتورة:   '  .$row['SUM(totle)'].'    </h6>';

}

?>
    </td>
</tr>
<tr>
    <td>
    <?php
$query="SELECT SUM(totle) FROM cards ";
$result=mysqli_query($conn,$query);

while($row = mysqli_fetch_assoc($result))
    
{
 
echo '<p class="attintion"> شامل جميع التكاليف عدا الشحن *</p>';

}

?>
    </td>
</tr>
</table>



 </div>
 </div>

 <style>
    .attintion{
        font-size:x-small;
    }
 </style>