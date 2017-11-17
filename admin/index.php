<?php include 'includes/header.php' ?>

<?php

$db = new Database;

$query = "SELECT posts.*, categories.name FROM posts
            INNER JOIN categories
              ON posts.category = categories.id
              ORDER BY posts.date DESC";

$posts = $db->select($query);

$query = "SELECT * FROM categories";
$categories = $db->select($query);

$query ="SELECT *FROM users";
$users = $db->select($query);

?><?php
header("Refresh:20; url=index.php");
?>

<table class="table table-striped">
    <tr>
       <th>Post ID#</th>
       <th>Post Title</th>
       <th>Post Category</th>
       <th>Post Author</th>
       <th>Post Date</th>
    </tr>
    
      <?php while($row = $posts->fetch_assoc()) : ?>
      <tr>  
        <td><?php echo $row['id']; ?></td>
        <td><a href="edit_post.php?id=<?php echo $row['id']; ?>"><?php echo $row['title']; ?></a></td>
        <td><?php echo $row['name']; ?></td>
        <td><?php echo $row['author']; ?></td>
        <td><?php echo formatDate($row['date']); ?></td>
      </tr>  
      <?php endwhile; ?>
    
</table>

<table class="table table-striped">
    <tr>
       <th>Category ID#</th>
       <th>Category Name</th>
    </tr>
    <?php while($row = $categories->fetch_assoc()) : ?>
      <tr>  
        <td><?php echo $row['id']; ?></td>
        <td><a href="edit_category.php?id=<?php echo $row['id']; ?>"><?php echo $row['name']; ?></a></td>
      </tr>  
      <?php endwhile; ?>
</table>

<table class="table table-striped">
    <tr>
       <th>User ID#</th>
       <th>Username</th>
       <th>Password</th>
    </tr>
    
      <?php while($row = $users->fetch_assoc()) : ?>
      <tr>  
        <td><?php echo $row['userid']; ?></td>
        <td><a href="edit_password.php?userid=<?php echo $row['userid']; ?>"><?php echo $row['username']; ?></a></td>
        <td><?php echo $row['password']; ?></td>
      </tr>  
      <?php endwhile; ?>
    
</table>

<?php include 'includes/footer.php' ?>