<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Admin Login</title>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="CSS/style.css">
    <link href="https://fonts.googleapis.com/css?family=Oswald&display=swap" rel="stylesheet"> 
    
</head>
<body>
<?php 
    include('navbar.php');
?>
<form method = "post" action = "admin_login.php">
    <div class="container center-div shadow">
        <div class="heading text-center mb-5 text-white">
            Admin Login
        </div>
        <div class=" container row d-flex flex-row justify-content-center mb-5 ">
            <div class="form-group container shadow p2">
               <strong> <label for="user">UserName</label></strong>
                <input type="text" class="form-control" name="name"><br>
                <strong><label for="pass">Password</label></strong>
                <input type="password" class="form-control" name="pass"><br><br>
                <input type="submit" class="btn btn-success " name ="submit" value="Login"><br><br>
            </div>
        </div>
    </div>   
<div>

</div>
</form>
<?php 
    include('db.php');

    if(isset($_POST['submit']))
    {
        $a_name = $_POST['name'];
        $a_pass = $_POST['pass'];

        $qry = "SELECT * FROM `admin` WHERE `name` = '$a_name' AND `password` ='$a_pass'";
                
        $run = mysqli_query($db,$qry);
        $row = mysqli_num_rows($run);

        if($row < 1)
        {
            ?>
            <script>
                window.alert('Invalid Credintial (;');
            </script>
            <?php
        }
        else
        {
            $data = mysqli_fetch_assoc($run);
            session_start();
            $_SESSION['name'] = $data['name'];
            header('location:admin.php');
        }
    }
?>
</body>
</html>