<?php require "partials/header.php" ?>

<?php
require 'users/users.php';


$user = [

   'id' => '',
   'name'=>'',
   'username'=>'',
   'email'=>'',
   'phone'=>'',
   'website'=>'',

];

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
   $user = createUser($_POST);

   
   uploadImage($_FILES['picture'], $user);
   

   header('Location index.php');
}



?>


   <?php require 'form.php' ?>
    






<?php require "partials/footer.php" ?>