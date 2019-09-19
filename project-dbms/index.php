<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>BootStrap</title>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <link rel ="stylesheet" href="CSS/style.css">

    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">

    
</head>
<body>
<?php 
    include('navbar.php');
?>            
<!--Header image -->
<div class="hero-image">
    
    <div class="hero-text">
      <h1 style="font-size:50px">Welcome to Sanjivani Gym</h1>
      <p>Health is wealth</p>
      <a href="register.php" class="btn btn-light justify-content-center">Join Now</a>
    </div>
</div>

<br><br>

<!--Login Form Start here-->
<div class="row container-fluid">
    <div class="col-6"> 
        <div class="form-group  col-lg-9  shadow">
            <form method='post' action="dashboard.php" class="form md-6">
            <div class="heading text-center mb-5 text-white">
               Login
            </div>
            <div class=" container row d-flex flex-row justify-content-center">
                <div class="form-group container shadow p2 ">
                  <i class="fa fa-user-o" aria-hidden="true"></i>
                      <strong><label for="user">UserName</label></strong>
                    <input type="text" class="form-control" name="uname"><br>
                   <i class="fa fa-key" aria-hidden="true"></i> 
                        <strong><label for="pass">Password</label></strong>
                    <input type="password" class="form-control" name="pass"><br><br>
                    <input type="submit" class="btn btn-success" value="Login" name="submit"><br><br>
                </div>
            </div>
        </form>
        </div>
    </div>

        <section>
            <img src="images/gymbanner.png"  style="height:70%;margin-top:25px;">  <br>
            <blockquote class="blockquote text-right text-danger">
                <p class="mb-0">Definition of a really good workout:<br> " when you hate doing it, but you love finishing it. "</p>
                <footer class="blockquote-footer"> <cite title="Source Title">Fitness Queto</cite></footer>
            </blockquote>
        </section>
</div>

<?php 
    include('footer.php');
?> 


</body>
</html>