<!DOCTYPE html>
<?php
session_start();
include 'csrf.class.php';
 
$csrf = new csrf();
  
// Generate Token Id and Valid
$token_id = $csrf->get_token_id();
$token_value = $csrf->get_token($token_id);
 
?>

<html>
    <head>
        <meta charset="UTF-8">
        <title>CSRF demo</title>
    </head>
    <body>
        
        <form action="submit.php" method="post">
        <input type="hidden" name="<?= $token_id; ?>" value="<?= $token_value; ?>" />
        Username : <input type="text" name="<?= $form_names['user']; ?>" value="User123" /><br/><br/>
        Password : <input type="password" name="<?= $form_names['password']; ?>" value="1234"/><br/><br/>
        <input type="submit" value="Login"/>
        </form>
    </body>
</html>
