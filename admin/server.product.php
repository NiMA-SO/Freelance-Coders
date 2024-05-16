<?php
session_start();
?>


<?php
$title = $_POST['title'];
$desc = $_POST['description'];
$hour = $_POST['hour'];
$price = $_POST['price'];

$fileName = basename($_FILES["file"]["name"]);
$targetImageDirectory = "../images/kala/";
$targetImageSave = $targetImageDirectory.$fileName;

$imageFileType = pathinfo($targetImageSave,PATHINFO_EXTENSION);

$uploadOk = true;


$link = mysqli_connect('localhost','root','','fc');


if (empty($_FILES['file']['name'])) {
    echo "هیچ فایلی برای آپلود انتخاب نشده است";
    $uploadOk = false;
  }


$checkImage = getimagesize($_FILES['file']['tmp_name']);
if($checkImage !== false){
    echo "<h1 style='text-align:center;'>تصویر انتخابی از نوع ".$checkImage['mime']."است"."</h1>";
    $uploadOk = true;
}
else{
    echo "پرونده انتخاب شده یک تصویر نیست";
    $uploadOk = false;
}

if(file_exists($targetImageSave)){
    echo "پرونده ای با همین نام قبلا ثبت شده است";
    $uploadOk = false;
}

if($_FILES['file']['size'] >= (500 * 1024)){
    echo "اندازه فایل انتخابی بیشتر از500 کیلوبایت است";
    $uploadOk = false;
}


$imageFileType != strtolower($imageFileType);
if($imageFileType != "jpg" && $imageFileType != "jpeg" && $imageFileType != "png" && $imageFileType != "gif" ){
    echo "فقط پسوند های jpg,jpeg,png,gif مجاز هستند";
    $uploadOk = false;
}

if($uploadOk == false){
    echo "پرونده انتخاب شده به سرویس دهنده میزبان ارسال نشد<br>";
}
else{
    if(move_uploaded_file($_FILES['file']['tmp_name'],$targetImageSave)){
        echo "پرونده".$_FILES['file']['name']."با موفقیت به سرویس دهنده میزبان ارسال انتقال یافت<br>";
    }else{
        echo "مشکلی رخ داد";
    }
}


if($uploadOk == true){

$q = "insert into products(title,description,hour,price,image) values('$title','$desc','$hour','$price','$fileName')";
    if(mysqli_query($link,$q) === true){
        echo "کالا به انبار اضافه شد";
    }else{
        echo "خطا در ثبت مشخصات کالا";
    }
}
else{
        echo "خطا در ثبت مشخصات کالا";
}

mysqli_close($link);
?>
