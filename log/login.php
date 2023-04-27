<?php

// include '\xmapp\htdocs\hospetl/page/nav/nav_log.php';
$host="localhost";
$user="root";
$password="";
$dbName="shop";


$conn=mysqli_connect($host,$user,$password,$dbName);

?> 



<?php

if(isset($_POST['submit']))
{
    $username= ($_POST['username']);
    $password= ($_POST['password']);
    $repass= ($_POST['repass']);
    $phone= ($_POST['phone']);



    $username=mysqli_real_escape_string($conn , $_POST['username']);
    $password=mysqli_real_escape_string($conn , $_POST['password']);
    $passhash=password_hash($password , PASSWORD_BCRYPT);







$sql="INSERT INTO users (username,password,repass ,phone) VALUES('$username','$passhash','$repass','$phone')";




    if(empty($username)){
        echo '<p class="alert alert-danger">username فارغ </P>';
    }elseif(empty($password)){
        echo '<p class="alert alert-danger">password فارغ </P>';
    }elseif(strlen($username)  < 5){

echo 'the username is short !!';

    }elseif(!preg_match("/^[a-zA-Z0-9]*$/",$username)){
        
        echo "يجب ان يحتوي اسم المستخدم   على احرف و ارقام فقط";

    }elseif(!preg_match("/^[a-zA-Z0-9]*$/",$password)){
        
        echo "يجب ان تحتوي كلمة المرور على احرف و ارقام فقط";
    }else{

        $username=mysqli_real_escape_string($conn , $_POST['username']);
        $password=mysqli_real_escape_string($conn , $_POST['password']);
        if(mysqli_query($conn , $sql)){
            echo '<center>
            <p class="alert alert-success"> تم التسجيل  <img src="\hospetl\src\dones.png" alt="">
            </P></center>';
           



$sql = "CREATE TABLE $username(
                id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
                firstname VARCHAR(30) NOT NULL,
                lastname VARCHAR(30) NOT NULL,
                email VARCHAR(50),
                reg_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
                )";
                
                if ($conn->query($sql) === TRUE) {
                  echo "Table MyGuests created successfully";
                } else {
                  echo "Error creating table: " . $conn->error;
                }

        }else{
            echo '<center>
            <p class="alert alert-danger">err404   لم يتم التسجيل </P></center>';
        

        }







    }


}

?>


<!DOCTYPE html>
<html lang="ar">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>
   <center>
<br><br><br>
<form action="" method="POST" autocomplete="off" class="form-outline mt=5     form">

<div class="form-outline mb-4">
<label for="form1Example1" class="form-label">username</label>
<input type="text" id="" class="form-control inputs" placehholder="اسم المستخدم " name="username" value="" required>
</div>

<div class="form-outline mb-4">
<label for="form1Example1" class="form-label">password</label>
<input type="password" id="" class="form-control inputs" placehholder="كلمة المرور  " name="password" value="" required>
</div>
<div class="form-outline mb-4">
    
<label for="form1Example1" class="form-label">   رقم الجوال</label>
<input type="phone" id="" class="form-control inputs" placehholder="      05123123123 " name="phone" value="" required>
</div>

<div class="form-outline mb-4">

<label for="form1Example1" class="form-label">رمز استعادة</label>
<input type="number" id="" class="form-control inputs" placehholder="   رمز استعادة " name="repass" value="" required>
</div>





<input type="submit" class="btn-outline-primary text-dark" name="submit" value="sign in">



</form>

</center>




<style>
    .form{
  text-align: center;
  width:50%; 
  
}

.inputs{
  text-align: center;

}
</style>


</body>
</html>


