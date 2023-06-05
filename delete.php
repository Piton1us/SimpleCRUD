
<?php
require 'users/users.php';



if (!isset($_GET['id'])) {
   require "partials/not_found.php";
   exit;
}

$userid = $_GET['id'];
deleteUser($userid);

// $user = getUserById($userid);

// if (!$user) {
//    require "partials/not_found.php";
//    exit;
// }
header('Location: index.php');

?>



