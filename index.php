<?php
require ('class/userclass.php');

$db = new mysqli("localhost", "root", "", "wielopolskilogowanie");
$user = new User("jkowalski"."tajnehaslo");
?>