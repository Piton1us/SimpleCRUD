<?php require "partials/header.php" ?>
<?php
require 'users/users.php';



if (!isset($_GET['id'])) {
   require "partials/not_found.php";
   exit;
}

$userid = $_GET['id'];

$user = getUserById($userid);
if (!$user) {
   require "partials/not_found.php";
   exit;
}
?>

<div class="container">
   <div class="card">
      <div class="card-header">
         <h3>View User: <b><?php echo $user['name'] ?></b></h3>
      </div>
      <div class="card-body">
         <a href="update.php?id=<?php echo $userid ?>" class="btn btn-secondary">Update</a>
         <a href="delete.php?id=<?php echo $userid ?>" class="btn btn-danger">Delete</a>
      </div>
      <table class="table">
         <tbody>
            <tr>
               <th>Name:</th>
               <td><?php echo $user['name'] ?></td>
            </tr>
            <tr>
               <th>Username:</th>
               <td><?php echo $user['username'] ?></td>
            </tr>
            <tr>
               <th>Email:</th>
               <td><?php echo $user['email'] ?></td>
            </tr>
            <tr>
               <th>Phone:</th>
               <td><?php echo $user['phone'] ?></td>
            </tr>
            <tr>
               <th>Website:</th>
               <td><a href="http://<?php echo $user['website'];  ?>"><?php echo $user['website'];  ?></a></td>
            </tr>
         </tbody>
      </table>
      
         
   </div>
</div>



<?php require "partials/footer.php"  ?>