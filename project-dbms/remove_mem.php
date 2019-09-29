<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Remove Member</title>
     <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <link rel ="stylesheet" href="CSS/style.css">


</head>
<body>
    <?php 
        include('navbar.php');
    ?>
<form method = "post" action = "remove_mem.php">
        <div class="heading text-center mb-5 text-white">
          Remove User
        </div>
        <div class="row p-2 ml-5 container">
            <div class="form-group col-9 " >
            <label for="name">Id</label>
                <input type="text" name="id" class="form-control">
            <label for="search">Name</label>
                <input type="text" name="search" class="form-control"> 
            </div>
        <input type="submit" name="submit" class="btn btn-danger btn-sm" value="Remove Members">
        </div>
</form>
<?php
include('db.php');

if(isset($_POST['submit']))
    {
        $find = $_POST['search'];
        $id = $_POST['id'];
        
       
        $qry = "DELETE FROM `register` WHERE `id`='$id' AND `name`='$find'";
        
        $run = mysqli_query($db,$qry);

        if($run == TRUE)
        {
            ?>
            <script>
                
               window.alert('Remove Successful');    
               window.open('admin.php','_self') ;
            </script>
            <?php
                
        }
        else
        {
            echo "error";
        }
    }
    

   
?>
 
</body>
</html>