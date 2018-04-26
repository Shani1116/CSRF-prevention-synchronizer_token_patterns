<?php
session_start();
include 'csrf.class.php';
 
$csrf = new csrf();
$token_id = $csrf->get_token_id();
$token_value = $csrf->get_token($token_id);

if($csrf->check_valid('post')):
   var_dump($_POST[$token_id]);
else:
 echo 'Not Valid';
endif;
?>
