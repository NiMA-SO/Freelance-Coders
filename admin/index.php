<?php
session_start();
?>

<?php
if(!(isset($_SESSION['state_login']) && $_SESSION['state_login'] === true && $_SESSION['type'] === 'admin')){
    ?>
    <script>
        location.href = "../index.php";
    </script>
    <?php
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Management</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="admin-css.css">
</head>
<body>
    <header>
        <div class="home">
            <a href="../index.php">
                <div>
                    <i class="fa-solid fa-house"></i>
                </div>
            </a>
        </div>
    </header>
    <div class="mangement-container">
        <aside>
            <ul>
                <li><i class="fa-solid fa-list-check"></i> Product management</li>
            </ul>
        </aside>
        <section id="index-product">
            <form action="server.product.php" enctype="multipart/form-data" id="form" method="post">
                <ol>
                    <li>
                        <label for="">Title :</label>
                        <input type="text" id="title" name='title'>
                    </li>
                    <li>
                        <label for="">Description :</label>
                        <textarea id="description" name='description' ></textarea>
                    </li>
                    <li>
                        <label for="">Hour Learn :</label>
                        <input type="time" id='hourse' name='hour'>
                    </li>
                    <li>                     
                        <label for="">Price :</label>
                        <input type="number" id='price' name='price'>
                    </li>
                    <li>                     
                        <label for="filInp">Image :</label>
                        <input name='file'  type="file" id='filInp' accept=".jpg ,.jpeg,.png,.gif">
                    </li>
                    <p style="margin: 0 auto; font-weight: bold;" id="messagePost"></p>
                    <li>
                        <input type="reset">
                        <input type="button" value='Add' id='addProducts'>
                    </li>
                </ol>
            </form>
        </section>
    </div>
    <script>

        const addProducts = document.getElementById('addProducts')
        const title = document.getElementById('title')
        const description = document.getElementById('description')
        const hourse = document.getElementById('hourse')
        const price = document.getElementById('price')
        const image = document.getElementById('filInp')
        const message = document.getElementById('messagePost')
        const form =document.getElementById('form')

        console.log(message)
        console.log(title)
        addProducts.addEventListener('click',()=>{
            if(title.value != '' && description.value != '' && hourse.value != '' && price.value != '' && image.value != '' ){
                message.style.color = 'green';
                message.innerHTML = 'Product Is Add';
                console.log(message)
                setInterval(() => {
                    form.submit();
                },3000)
            }else{
                message.style.color = 'red';
                message.innerHTML = 'All fields must be filled'
            }
        });
    </script>
</body>
</html>