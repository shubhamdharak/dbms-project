<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Registration</title>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<?php 
    include('navbar.php');
?>

 <img src="images/2.jpg" style="width:100%;height:600px; ">
 <h2 class="bg-dark text-white text-center"> Registration Form</h1>

    <div class="container-fluid">
      <div class="row">
        <div class="form-group container col-sm-6 ml-auto jumbotron">
            <form method='post' action="check_login.php" enctype="multipart/form-data" class="form md-6">
                    <label for="fname">First Name</label>
                      <input type="text" class="form-control" name= 'fname' id="fname" required><br>
                      <label for="pass" >Password</label>
                      <input type="password" class="form-control" name="pass" required><br>
                      <label for="email">Email</label>
                      <input type="email" name="email" class="form-control" required><br>
                      <label for="mobile">Mobile No</label>
                      <input type="text" name="mobile" class="form-control" required><br>
                      <label for="age">Age</label>
                      <input type="text" name="age" class="form-control" required><br>
                      <label for="dob">DOB</label>
                      <input type="date" name="dob" class="form-control" required><br>
                      <label for="zip">Pin Code</label>
                      <input type="text" name="zip" class="form-control" required><br>
                      <label for="img">Image</label><br>
                      <input type="file" name="img" id="img" required><br><br>
                      <label for="address">Address</label><br>
                      <textarea row ="4" cols="50" class='addr' name='addr' required></textarea><br><br>
                      <input type="submit" name="submit" id="btn" value="Join Now" class="btn btn-primary">
                      <p class="text-right"><a href="index.html">Login Here</a></p>
                  </form>
         </div>
    </div>
<?php 
    include('footer.php');
    require('check_login.php');
?>
</body>
</html>