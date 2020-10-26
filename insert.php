<?php $connect = mysqli_connect("127.0.0.1","root","","Store");
	$ins = "INSERT INTO items (title,opis,img,price) VALUES ('".$_GET["title"]."','".$_GET["opisanie"]."','".$_GET["img"]."','".$_GET["price"]."')";

	mysqli_query($connect,$ins);
	header('Location: index.php'); ?>