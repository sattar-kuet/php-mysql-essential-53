<?php

function pr($arr){
	echo '<pre>';
	print_r($arr);
	echo '</pre>';
}

function set_flush_message($msg,$alert){

	$_SESSION['flash_message'] = $msg;
	$_SESSION['alert'] = $alert;
}

function show_flush_message(){

	extract($_SESSION);

    unset($_SESSION['flash_message']);
    unset($_SESSION['alert']);
    $message = '';
    if(isset($flash_message)){ 

        $message = '<div class="alert '. $alert.'">'. $flash_message.'</div>';
    }
    echo $message;         
}

function get_all_posts(){
    global $connection;
    $sql = "SELECT id,title,description,image FROM posts ORDER BY id DESC";
    $result = mysqli_query($connection, $sql);

    $posts = mysqli_fetch_all($result,MYSQLI_ASSOC);
    return $posts;
}

function get_post_by_id($id){
  global $connection;
  $sql ="SELECT id,title,description,image FROM posts WHERE id=$id";
  $result = mysqli_query($connection,$sql);
  $post = mysqli_fetch_assoc($result);
  return $post;
}

?>