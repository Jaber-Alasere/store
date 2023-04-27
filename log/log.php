

<?php
session_start();
include '\xmapp\htdocs\hospetl/page/nav/nav_log.php';






?>

<?php

if(isset($_POST['submit']))
{
   $user=htmlspecialchars($_POST['username']);
   $pass=htmlspecialchars($_POST['password']);

    $username=mysqli_real_escape_string($conn,$_POST['username']);
    $password=mysqli_real_escape_string($conn,$_POST['password']);




    $req="SELECT * FROM users WHERE username='$username'";
    $query=mysqli_query($conn , $req);
    $sel_user=mysqli_fetch_object($query);
    @$pass=$sel_user->password;

    $num=mysqli_num_rows($query);



    if(empty($username)){
        echo '<p class="alert alert-danger">username فارغ </P>';
    }elseif(empty($password)){
        echo '<p class="alert alert-danger">password فارغ </P>';
    }else{

          
             if($num == 1){

                echo '<style>
                
                .form-outline{
                    display:none;}
                
                .loader{
                    display:block;}
                
            
                
                </style>';




                if(password_verify($password,$pass)){
                    echo '<center>
                    </P></center>';
                    echo '<script>
const element = document.getElementById("demo");
setInterval(function() {location.href = "/store/home.php"}, 2000);

</script>';

echo '<center> <br><br><br>   <div class="loader"></div> </center>';

$_SESSION['username']=$_POST['username'];



                }
             }else{
                echo '<p class="alert alert-danger">هنالك خطأ تأكد من المدخلات</P>';

             }
        







    }


}


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
   <h3>تسجيل الدخول</p>
<form action="" method="POST" autocomplete="off" class="form-outline mt=5 btn btn-outline-light">

<div class="form-outline mb-4">
<label for="form1Example1" class="form-label">اسم المستخدم</label>
<input type="text" id="" class="form-control" placehholder="اسم المستخدم " name="username" value="" required>
</div>

<div class="form-outline mb-4">
<label for="form1Example1" class="form-label">الرقم السري أو رقم الاستعادة  </label>
<input type="password" id="" class="form-control" placehholder="اسم المستخدم " name="password" value="" required>

</div>





<input type="submit" class="btn btn-dark text-light" name="submit" value="دخول"> </input><br>
<a class="repass" href="repass.php">استعادة كلمة المرور</a>



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