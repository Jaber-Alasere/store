

<?php





$host="localhost";
$user="root";
$password=""; 
$dbName="test1";


$conn=mysqli_connect($host,$user,$password,$dbName);






if(isset($_POST['submit'])){

$txt=$_POST['txt'];

   
$txts =$_POST['txts'];

$myfile = fopen($txt, "w");
    $a=fwrite($myfile, $txts);


$name=$_FILES['myup']['name'];


$up=move_uploaded_file($_FILES['myup']['tmp_name'],'report/'.$_FILES['myup']['name']);

if($up){

    echo 'upload is done';
}else{
    echo 'upload is not done';
}


}










$path='report/*.png';

$img=glob($path);


foreach($img as $imgs)
{
echo "<img class='img' src='$imgs'/>" . "<br>";

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
    

<form action="" class="form-upload" method="POST" enctype="multipart/form-data" >

<input type="text" name="txt" id="">
<br><br>
<input type="text" name="txts" id="">

<input type="file" name="myup" id="">
<input type="submit" name="submit" id="">


</form>


<style>
    .img{
        width:150px;
        border:1px solid black;
        height:156px;
        overflow-y: scroll;

    }
    img{
        height:150px;
    }
</style>
</body>
</html>