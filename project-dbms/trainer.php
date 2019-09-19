<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Trainer Details</title>


    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</head>
<body>
<?php 
    include('navbar.php');
?>
    <div class="container-flueid">
      
        <header class="bg-dark text-white text-center">
            <h3>Trainer Details</h3>
        </header>
        
    <div class="row">
        <div class="col-3">
            <div class="list-group text-center">
                <a href="register.html" class="list-group-item active bg-success">Trainer</a>
                <a href="trainer_details.php" class="list-group-item ">Product</a>
                <a href="package.php" class="list-group-item">Package details</a>
                <a href="payment.php" class="list-group-item">Payments</a>
            </div>
        </div>
        
    </div>
    <div class="row">

            <div class="col-3">
                <div class="list-group text-center">
                  <a href="register.html" class="list-group-item active bg-success">Gallery</a>
                  <a href="trainer_details.php" class="list-group-item ">Tips </a>
                  <a href="package.php" class="list-group-item">Rules & Guidlines</a>
                 
                </div>
    </div>
    </div>
    </div>
<?php 
    include('footer.php');
?> 
</body>
</html>