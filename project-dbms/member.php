<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Member Details</title>

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
<br><br>
    
        <h2 class="heading text-white text-center">
            Member Details
        </h2>
        <form  method="post" action="member.php">
        <div class="row p-2 ml-5 container">
            <div class="form-group col-9 " >
                <input type="text" name="search" class="form-control"> 
            </div>
        <input type="submit" name="submit" class="btn btn-danger btn-sm" value="Search Members">
        </div>
        </form>
        <br><br>
<?php 
   // include('navbar.php');
    include('db.php');

if(isset($_POST['submit']))
{
    $find = $_POST['search'];
   $qry = "SELECT * FROM `register` WHERE `name` = '$find'";
   $run = mysqli_query($db,$qry);

   if($run->num_rows>0)
   {
       ?>
       <table class="table table-striped container">
  <thead class="thead-dark">
    <tr>
      <th scope="col">Id</th>
      <th scope="col">Name</th>
      <th scope="col">Email</th>
      <th scope="col">Mobile</th>
      <th scope="col">Age</th>
      <th scope="col">DOB</th>
      <th scope="col">zip</th>
      <th scope="col">address</th>
      <th scope="col">Image</th>

    </tr>
  </thead>
  <?php 
  while($row = $run->fetch_assoc())
  {
        echo "<tbody>";
        echo "<tr>";
            echo "<th scope='row'>".$row["id"]."</th>";
                echo "<td>".$row["name"]."</td>";
                echo "<td>".$row["email"]."</td>";
                echo "<td>".$row["mobile"]."</td>";
                echo "<td>".$row["age"]."</td>";
                echo "<td>".$row["dob"]."</td>";
                echo "<td>".$row["zip"]."</td>";
                echo "<td>".$row["address"]."</td>";
                echo "<td>".$row["image"]."</td>";

            echo" </tr>";
  }
        echo" </tbody>";
        echo"</table>";
  

    }
    else
    {
        ?>

        <script>window.alert('No Record Found');</script>
        <?php
    }
}



?>

</body>
</html>