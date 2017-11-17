<?php include 'includes/header.php'; ?>
<?php
  
  $userid = $_GET['userid'];

  $db=new Database();

  $query = "SELECT * FROM users WHERE userid = ".$userid;

  $post = $db->select($query)->fetch_assoc();

  $query = "SELECT * FROM users";

  $users = $db->select($query);
?>
<?php 

  $db=new Database();

  if(isset($_POST['submit'])){
    $username = mysqli_real_escape_string($db->link, $_POST['username']);
    $password = mysqli_real_escape_string($db->link, $_POST['password']);

    if($username == '' || $password == '' ){

       $error = 'Please Fill Out All Required Fields.';
    }else{

       $query = "UPDATE users SET username='$username' , password='$password' WHERE userid =".$userid;

       $update_row = $db->update($query);
    }
  }
?>
<?php 
  if(isset($_POST['delete'])){
     $query= "DELETE FROM users WHERE userid = ".$userid;
     $delete_row = $db->delete($query);
  }
?>
<form role="form" method="post" action="edit_password.php?userid=<?php echo $userid; ?>">
  <div class="form-group">
    <label>Category Name</label>
    <input name="username" type="text" class="form-control" placeholder="Enter Username" value="<?php echo $post['username']; ?>">
    <input name="password" type="text" class="form-control" placeholder="Enter Password" value="<?php echo $post['password']; ?>">
  </div>

<div>
  <input name="submit" type="submit" class="btn btn-primary" value="Submit"/>
  <a href="index.php" class="btn btn-default">Cancel</a>
  <input name="delete" type="submit" class="btn btn-danger" value="Delete"/>
</div><br>
</form> 

<?php include 'includes/footer.php'; ?>