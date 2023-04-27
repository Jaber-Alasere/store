


<?php


session_start();
include '\xmapp\htdocs\hospetl/page/nav/nav_log.php';

// include 'C:\xampp\htdocs\hospetl\page\nav\nav_log.php';

//coonect with Date base 
$host="localhost";
$user="root";
$password="";
$dbName="test1";


$conn=mysqli_connect($host,$user,$password,$dbName);




?>

<?php

if(isset($_POST['submit']))
{
   $phone=$_POST['phone'];

    $req="SELECT * FROM users WHERE phone='$phone'";
    $query=mysqli_query($conn , $req);



    if(empty($phone)){
        echo '<p class="alert alert-danger">username فارغ </P>';
    
    }else{
      


                    if($query){
                        while($row = mysqli_fetch_assoc($query)){
echo '<center>';
                echo '<div class="card w-25">';
                echo '<div class="card tital-card bg-primary p-5">';
echo    '<p>   استعادة كلمة المرور</p>';

                echo '<p>'.$row['username'].':اسم المستخدم</p>' ;
                echo '<p>'.$row['repass'].':رقم الاستعادة</p>' ;

               

                echo '<a class="btn btn-outline-light" href="/hospetl/page\log\log.php"  >عودة</a>';

                echo '</div>';
                echo '</div>';
                echo '</center>';
                echo '<style>
                
                .form-outline{
                    display:none;}
                
                .loader{
                    display:block;}
                
            
                
                </style>';


                
                }
                
                
            
                
            

            
        
            



            

            

        }else{
            echo '<p class="alert alert-danger">هنالك خطأ تأكد من المدخلات</P>';

         }
    
    }}
            
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
<form action="" method="POST" autocomplete="off" class="form-outline mt=5 btn btn-outline-light">

<div class="form-outline mb-4">
<label for="form1Example1" class="form-label">رقم الجوال</label>
<input type="text" id="" class="form-control" placehholder="   رقم الاستعادة " name="phone" value=""  >
</div>

 





<input type="submit" class="btn btn-primary text-light" name="submit" value="استعادة"> </input><br>
 



</form>
</center>



<style>
.loader {
  border: 16px solid #f3f3f3;
  border-radius: 50%;
  border-top: 16px solid #3498db;
  width: 120px;
  height: 120px;
  -webkit-animation: spin 2s linear infinite; /* Safari */
  animation: spin 2s linear infinite;
}

/* Safari */
@-webkit-keyframes spin {
  0% { -webkit-transform: rotate(0deg); }
  100% { -webkit-transform: rotate(360deg); }
}

@keyframes spin {
  0% { transform: rotate(0deg); }
  100% { transform: rotate(360deg); }
}
form{
  text-align: center;
  width:50%; 
  
}

input{
  text-align: center;

}

.repass{
  font-size: small;
}

</style>





</body>
</html>