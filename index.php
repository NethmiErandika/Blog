<?php include 'includes/header.php'; ?>
<?php
  if(!isset($_SESSION['username']))
  {
     header("location:login.php");
  }
?>
<?php
  $db=new Database();

  $query = "SELECT * FROM posts ORDER BY id DESC";

  $posts = $db->select($query);

  $query = "SELECT * FROM categories";

  $categories = $db->select($query);
?>
<?php
header("Refresh:30; url=index.php");
?>
<?php if($posts) : ?>
   <?php while($row = $posts->fetch_assoc()) : ?>


<div class="blog-post">
            <h2 class="blog-post-title"><?php echo $row['title']; ?></h2>
            <p class="blog-post-meta"><?php echo formatDate($row['date']); ?><a href="#"><?php echo $row['author']; ?></a></p>
            
            <?php echo shortenText($row['body']); ?>

            <a class="readmore" href="post.php?id=<?php echo urlencode($row['id']); ?>">Read More</a>
            
          </div><!-- /.blog-post -->
  <?php endwhile; ?>        
<?php else : ?>
   <p>There are no posts yet.</p>
<?php endif; ?>  

<?php include 'includes/footer.php'; ?>
