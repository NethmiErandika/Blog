<?php include 'includes/header.php'; ?>
<?php
  
  $id = $_GET['id'];

  $db=new Database();

  $query = "SELECT * FROM categories WHERE id = ".$id;

  $category = $db->select($query)->fetch_assoc();

  $query = "SELECT * FROM categories";

  $categories = $db->select($query);
?>
<?php 

  $db=new Database();

  if(isset($_POST['submit'])){
    $name = mysqli_real_escape_string($db->link, $_POST['name']);

    if($name == ''){

       $error = 'Please Fill Out All Required Fields.';
    }else{

       $query = "UPDATE categories SET name='$name' WHERE id =".$id;

       $update_row = $db->update($query);
    }
  }
?>
<?php 
  if(isset($_POST['delete'])){
     $query= "DELETE FROM categories WHERE id = ".$id;
     $delete_row = $db->delete($query);
  }
?>
<form role="form" method="post" action="edit_category.php?id=<?php echo $id; ?>">
  <div class="form-group">
    <label>Category Name</label>
    <input name="name" type="text" class="form-control" placeholder="Enter Category" value="<?php echo $category['name']; ?>">
  </div>

<div>
  <input name="submit" type="submit" class="btn btn-primary" value="Submit"/>
  <a href="index.php" class="btn btn-default">Cancel</a>
  <input name="delete" type="submit" class="btn btn-danger" value="Delete"/>
</div><br>
</form> 

<?php include 'includes/footer.php'; ?>