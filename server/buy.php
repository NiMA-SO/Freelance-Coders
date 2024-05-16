<?php
session_start()
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
    <title><?php echo $row['title'] ?></title>
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
            font-family: inter;
            list-style-type: none;
        }
        body{
            height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
            background-image: url("../images/kala/<?php echo $row['image'] ?>");
            background-attachment: fixed;
            background-repeat: no-repeat;
            background-size: cover;
        }
        #buy-container{
            width: 500px;
            min-width: 320px;
            background-color: rgba(255, 255, 255, 0.9);
            border-radius: 20px;
            padding: 30px 20px;
            & .around{
                display: flex;
                justify-content: space-between;
                margin: 20px 0;
                & input{
                    border: none;
                    outline: none;
                    width: 200px;
                    height: 30px;
                    border-radius: 10px;
                    min-width: none;
                    max-width: none;
                    padding: 5px 10px;
                }
            } 
        }
        label{
            color: #b400ff;
        }
        #submit{
            display: flex;
            justify-content: center;
            text-align: center;
            margin-top: 30px;
            & input{
                width: 250px;
                height: 30px;
                border-radius: 10px;
                border: none;
                outline: none;
                cursor: pointer;
                color: white;
                background-color: #b400ff;
                transition: scale .5s , rotate .1s , color .3s, background-color .3s, box-shadow .3s;
                &:hover{
                    background-color: white;
                    transition: scale .5s , rotate .1s , color .3s, background-color .3s, box-shadow .3s;
                    box-shadow: 0 0 5px #9e00ff;
                    color: #b400ff;
                    animation: rotate 1s  1;
                }
            }
        }
        @keyframes rotate {
            0%{
                transform: rotate(0deg);
            }
            30%{
                transform: rotate(-5deg);
            }
            60%{
                transform: rotate(5deg);
            }
            100%{
                transform: rotate(0deg) scale(1.01) ;
            }
        }
        textarea{
            border: none;
            outline: none;
            width: 200px;
            height: 50px;
            border-radius: 10px;
            min-width: 200px;
            max-width: 200px;
            min-height: 50px;
            max-height: 100px;
            padding: 5px 10px;
        }

    </style>
</head>
<body>
    <div id="buy-container">
        <form action="action.buy.php?id=<?php echo $row['code'] ?>" method="post" >
            <ul>
                <li class="around">
                    <label for="">Title :</label>
                    <input type="text" name="title" value="<?php echo $row['title'] ?>" readonly>
                </li>
                <li class="around">
                    <label for="">Price :</label>
                    <input type="text" class="price" name="price" value="<?php echo $row['price'] ?>" readonly>
                </li>
                <li class="around">
                    <label for="">Description :</label>
                    <textarea name="description"  readonly><?php echo $row['description'] ?></textarea>
                </li>
                <li class="around">
                    <label for="">Hour :</label>
                    <input type="text" name="hour" value="<?php echo $row['hour'] ?>" readonly>
                </li>
                <li class="around">
                    <label for="">user name :</label>
                    <input type="text" name="user" value="<?php echo  $_SESSION['user'] ?>" readonly>
                </li>
                <hr>
                <li id='submit'>
                    <input type="submit" value="the payment" >
                </li>
            </ul>
        </form>
        <script>

        let price = document.querySelectorAll(".price")
        price.forEach(element => {
            let number = numberWithCommas(element.value);
            element.value = number
        });

        function numberWithCommas(x) {
            return x.toString().replace(/\B(?=(\d{3})+(?!\d))/g, ",");
        } 
        </script>
    </div>
</body>
</html>
<?php
}
?>