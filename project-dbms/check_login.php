<?php 
    include('db.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Validate</title>
</head>
<body>
    <?php
        if(isset($_POST['submit']))
        {
            $username = $_POST['uname'];
            $pass = $_POST['pass'];
            $query=mysql_query("SELECT * FROM login WHERE username='$username' AND password='$pass'");  
            $numrows=mysql_num_rows($query);  
            if($numrows!=0)  
            {  
                while($row=mysql_fetch_assoc($query))  
                {  
                    if($orw)
                    {
                        header('dashboard.php');
                        echo "LLlll";
                    }
                    else{
                        echo "error";
                    }
                }  
            
            }
        }   
        else{
            echo "sdjgjdsjdag";
        }

    ?>
</body>
</html>