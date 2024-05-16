<?php
session_start();
?>
<?php
      $link = mysqli_connect("localhost", "root", "", "fc");

      $name = $_POST['registerName'];
      $user = $_POST['registerUser'];
      $pass = $_POST['registerPass'];

      $q = "insert into users (name, user_name, password,type) values ('$name','$user' , '$pass','')";

      if(mysqli_query($link,$q) === true){
        $_SESSION['state_login'] = true;
        $_SESSION['user'] = $user;
        $_SESSION['type'] = 'user';

        echo "<h1 style='color:green;text-align:center'>Register was successful <br/>
        Transferring to the site, please wait...</h1>
        <script>
        setInterval(() => {
            location.href = '../index.php';
        },3000)
        </script>";
      }
      mysqli_close($link);
