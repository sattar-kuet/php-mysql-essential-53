<?php
session_start();
include('../../database/connect.php');
include('../../helper/function.php');

extract($_POST);


$sql ="UPDATE posts SET title='$title', description = '$description' WHERE id = $id";
$status = mysqli_query($connection,$sql);

if($status){
	$msg = 'Post Edited Successfully!';
	$alert = 'alert-success';
}else{
	$msg = 'Problem in SQL Query';
	$alert = 'alert-danger';
}

set_flush_message($msg,$alert);
header("Location:../edit_post.php?id=$id");
?>