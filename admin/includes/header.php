<?php include '../config/config.php'; ?>
<?php include '../libraries/Database.php'; ?>
<?php include '../helpers/format_helper.php'; ?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">


    <title>Admin Area</title>


    <link href="../css/bootstrap_admin.css" rel="stylesheet">


    <link href="../css/customadmin.css" rel="stylesheet">
  </head>

  <body>

    <div class="blog-masthead">
      <div class="container">
        <nav class="nav">
          <a class="nav-link active" href="index.php">Dashboard</a>
          <a class="nav-link" href="add_post.php">Add Post</a>
          <a class="nav-link" href="add_category.php">Add Category</a>
          <a class="nav-link right" href="posts.php">Posts</a>
          <?php
            session_start(); 
            if(isset($_SESSION['username']))
            {
               echo "Login As : ".$_SESSION['username'];
            }
          ?>
          <a style="padding-left:400px" class="nav-link" href="logout.php" padding-left:50p;>Logout</a>
          <?php
            if(!empty($_GET['logout_btn']))
            {
                session_destroy();
            }
          ?>
        </nav>
      </div>
    </div>

    <div class="blog-header">
      <div class="container">
           <h2>Admin Area</h2>
      </div>
    </div>

    <div class="container">

      <div class="row">

        <div class="col-sm-12 blog-main">
        <?php if(isset($_GET['msg'])) : ?>

           <div class="alert alert-success">
               <?php echo htmlentities($_GET['msg']); ?>
           </div>

        <?php endif; ?>  