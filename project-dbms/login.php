<?php
    include('db.php');
     // For Login purpose
     
if(isset($_POST['login']))
{
        $firstname = $_POST['uname'];
        $password = $_POST['pass'];
    $login = "SELECT * FROM `register` WHERE `name` = '$firstname' AND `pass` = '$password'";

    $result = mysqli_query($db,$login);

    $row = mysqli_num_rows($result);

    if($row < 1)
    {
        ?>
        <script>
            window.alert('Username and Password Not found !');
            window.open('index.php','_self');
        </script>

        <?php
    }
    else
    {
        $data = mysqli_fetch_assoc($result);
        session_start();
        $_SESSION['name'] = $data['name'];
        header('location:welcome.php');
    }
}

?>
