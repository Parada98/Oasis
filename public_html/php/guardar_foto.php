<?php
session_start();
$host="localhost";
$user="id16521943_angel";
$password="3w3@Ip62Y^hZ5b>-";
$databasename="id16521943_oasis";
$con=mysqli_connect($host,$user,$password,$databasename);

$filename =  time() . '.jpg';
$filepath = 'images/';
if(!is_dir($filepath))
	mkdir($filepath);
if(isset($_FILES['webcam'])){
	$image = addslashes(file_get_contents($_FILES['webcam']['tmp_name']));
	$sql="Update Usuario set fotografia = '$image' where id_usuario =".$_SESSION['id_usuario'];
	$result=mysqli_query($con,$sql);
	echo $filepath.$filename;
}
?>
