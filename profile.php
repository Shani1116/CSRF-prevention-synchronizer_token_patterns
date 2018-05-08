<!doctype html>
<html>
    <head>
        <title>CSRF Demo</title>   
    </head>
    <body>
        <?php 
            if(isset($_COOKIE['session_cookie'])){
                echo "<a href='logout.php'>Logout</a>";
            }
        ?>
        
        <?php
            
            if(isset($_COOKIE['session_cookie'])){
                
                echo " <form method='POST' action='submit.php' onsubmit='submitForm(this)'> "
                . "<!--CSRF token-->"
                        . "<input type='hidden' name='CSRF_Token' id='CSRF_Token' value=''>"
                        . "Name : <input type='text' id='name' name='name'><br><br>"
                        . "Age : <input type='text' id='age' name='age'><br><br>"
                        . "Address : <input type='text' id='address' name='address'><br><br>"
                        . "<input type='submit' id='submit' name='submit'><br><br>"
                        . "</form>";
            }
        
        ?>
        
        <script>
            var request = "true";
            $.ajax({
                url:"csrf.class.php",
                method:"POST",
                data:{request:request},
                dataType:"JSON",
                success:function(data){
                    document.getElementById("CSRF_Token").value = data.token;
                }
            })
        </script>
        
    </body>
</html>

