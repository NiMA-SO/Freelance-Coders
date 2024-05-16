<?php
session_start()
?>
<?php
$link = mysqli_connect('localhost','root','','fc');

if(isset($_GET['id'])){
    $code = $_GET['id'];
}
$user = $_SESSION['user'];

$q = "insert into buy(userName,coursesCode) values('$user','$code')";


if(mysqli_query($link,$q)){
?>
<script>
    location.href = "../index.php";
</script>


<?php
}
?>