<?php


$conn=mysqli_connect('localhost', 'root','','shop');


$id=$_GET['id'];






mysqli_query($conn ,"DELETE FROM prodact WHERE id=$id");


header('Location:store.php');







?>