<?php
session_start();
?>

<?php
$link = mysqli_connect('localhost','root','','fc');

if(isset($_GET['id'])){
    $code = $_GET['id'];
}

$q = "select * from products where code='$code' ";
$result = mysqli_query($link,$q);

$row = mysqli_fetch_array($result);

if($row){
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $row['title']?></title>
    <style>
        @font-face {
            font-family: inter;
            src: url("../fonts/inter/Inter-VariableFont.ttf");
        }
        *{
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            text-decoration: none;
        }
        #product-prof{
            background-image: url("../images/kala/<?php echo $row['image'] ?>");
            background-repeat: no-repeat;
            background-size: cover;
            height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
            & #container{
                width: 500px;
                min-width: 320px;
                background-color: rgba(255, 255, 255, 0.8);
                border-radius: 10px;
                padding: 30px 20px;
                font-family: inter;
                word-break: break-all;
            }
            & #btn-Buy-Container{
                display: flex;
                justify-content: center;
            }
            & #btn-Buy{
                width: 80%;
                background-color: rgb(0, 60, 255);
                color: white;
                border: none;
                outline: none;
                cursor: pointer;
                border-radius: 15px;
                height: 40px;
                font-family: inter;
                font-size: 20px;
                letter-spacing: 8px;
                transition: all .3s;
                border: 1px solid blue;
            }
            & #btn-Buy:hover{
                background-color: rgb(0, 150, 255);
                color: rgb(0, 10, 255);
            }
        }
    </style>
</head>
<body>
    <div id='product-prof'>
       <div id='container'>
            <h1><?php echo $row['title'] ?></h1>
            <br>
            <h3><?php echo $row['description'] ?></h3>
            <br>
            <h4><?php echo $row['hour'] ?></h4>
            <br>
            <h4 class="price"><?php echo $row['price'] ?></h4>
            <br>
            <?php
                if((isset($_SESSION['state_login']) && $_SESSION['state_login'] === true)){
                ?>
                    <a id='btn-Buy-Container' href="buy.php?id=<?php echo $row['code'] ?>" target='_blank'>
                        <button id='btn-Buy'>Buy</button>
                    </a>
                <?php
                }
            ?>

            <?php
                if(!(isset($_SESSION['state_login']) && $_SESSION['state_login'] === true)){
                ?>
                    <a id='btn-Buy-Container' href="../index.php" >
                        <button id='btn-Buy'>Register</button>
                    </a>
                <?php
                }
            ?>
       </div>
    </div>
    <script>

        let price = document.querySelectorAll(".price")
        price.forEach(element => {
            let number = numberWithCommas(element.innerHTML);
            element.innerHTML = number
        });

        function numberWithCommas(x) {
            return x.toString().replace(/\B(?=(\d{3})+(?!\d))/g, ",");
        } 
    </script>
</body>
</html>

<?php
}
?>