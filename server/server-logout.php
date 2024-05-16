<h1 style="color:red; text-align:center;">Log Out</h1>
<?php
session_start();
session_unset();
session_destroy()
?>

<script>
    location.href = '../index.php';
</script>