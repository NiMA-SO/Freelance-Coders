<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>login-server</title>
    <style>
        section{
            margin: 100px auto;
            width: 300px;
            height: 300px;
            background-color: #d2d9f8a8;
            border-radius: 30px;
            padding-top: 70px;
            box-sizing: border-box;
            font-family: inter;
            font-size: 25px;
        }
    </style>
</head>
<body>
    <section>
<?php
 $link = mysqli_connect("localhost", "root", "", "fc");

 $user = $_POST['loginUser'];
 $pass = $_POST['loginPass'];

 $q = "select * from users where user_name = '$user' and password = '$pass'";

 $result = mysqli_query($link, $q);

 $row = mysqli_fetch_array($result);

 if ($row) {
    $_SESSION['state_login'] = true;
     $_SESSION['user'] = $user;
     
     if($row['type'] == '0'){
         $_SESSION['type'] = 'user';
     }else{
         $_SESSION['type'] = 'admin';
     }
     
     echo "<h1 style='color: green; text-align: center'>Login Successful". " ".$row['name']." ".".</h1>
     <script>
     setInterval(() => {
         location.href = '../index.php';
     },2000)
     </script>";
     
 }
 else {
    echo $row."<h1 style='color: red; text-align: center'>Login Failed</h1>
    <script>
    setInterval(() => {
        location.href = '../index.php';
    },2000)
    </script>";
   
 }


 mysqli_close($link);
 ?>
 </section>
</body>
</html>