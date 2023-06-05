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



if ($_SERVER['REQUEST_METHOD'] === 'POST') {

   $user = updateUser($_POST, $userid);

   
      
      uploadImage($_FILES['picture'],$user);

      
   

   header('Location: index.php');
}


 
?>

         <?php require 'form.php' ?>
    



<?php require "partials/footer.php" ?>