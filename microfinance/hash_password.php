<?php
// Replace 'YourDesiredPassword' with the actual password you want to hash
$password = 'Fordapassword'; 
echo password_hash($password, PASSWORD_DEFAULT);
?>
