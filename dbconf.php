<?php
$con = new mysqli("127.0.0.1", "admin", "admin123", "users");
if ($con -> connect_error){
    die("Database Not Congigured Properly");
}
else{
   // echo ("DB connection is established sir");
}
?>
