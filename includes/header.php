<?php include 'config/config.php'; ?>
<?php include 'libraries/Database.php'; ?>
<?php include 'helpers/format_helper.php'; ?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">


    <title>Welcome Pium'S Blog</title>

    <link href="css/bootstrap.css" rel="stylesheet">

    <link href="css/custom.css" rel="stylesheet">
  </head>

  <body>

    <div class="blog-masthead">
      <div class="container">
        <nav class="nav">
          <a class="nav-link active" href="index.php">Home</a>
          <a class="nav-link" href="posts.php">All Posts</a>
          <a class="nav-link" href="add_post.php">Add Post</a>
          <?php
            session_start(); 
            if(isset($_SESSION['username']))
            {
               echo "Login As : ".$_SESSION['username'];
            }
          ?>
          <a style="padding-left:500px" class="nav-link" href="logout.php" padding-left:50p;>Logout</a>
          <?php
            if(!empty($_GET['logout_btn']))
            {
                session_destroy();
                header("Location:login.php");
            }
          ?>
        </nav>
      </div>
    </div>

    <div class="blog-header">
      <div class="container">
      <div class="logo"><img src="images/logo.png"></div>
        <h1 class="blog-title">The Pium'S Blog</h1>
        <p class="lead blog-description">News,Events,Education,Etc.</p>
      </div>
    </div>

    <div class="container">

      <div class="row">

        <div class="col-sm-8 blog-main">