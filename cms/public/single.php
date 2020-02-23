  <?php $base_url = 'http://'.$_SERVER['SERVER_NAME'];?>
  <?php include('partial/header.php');?>
  <?php include('../database/connect.php');?>
  <?php include('../helper/function.php');?>
  <?php include('partial/top-nav.php');?>

  <?php
  extract($_GET);

  $post = get_post_by_id($id);
  extract($post);
  ?>

  <h2><?php echo $title;?></h2>
  <img src="uploads/<?php echo $image; ?>" />
  <p><?php echo $description;?></p>

  <?php include('partial/footer.php');?>
