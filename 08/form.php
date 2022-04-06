<?php
echo '<pre>';
$_SERVER['REQUEST_METHOD'] == 'POST';
$name = $_POST['fname'];
$surname = $_POST['lname'];
$fathername = $_POST['oname'];
$email = $_POST['email'];
$tel=$_POST['telefon'];
$message = $_POST['info'];

$skils = $_POST['fav_language'];
$english=$_POST['language'];


if(isset($_FILES['photo']['name'])&&$_FILES['photo']['size']>0){

    $photo_name=$_FILES['photo']['name'];

    $photo_tmp = $_FILES['photo']['tmp_name'];


    if(move_uploaded_file($photo_tmp, "../photo/{$photo_name}")){

        $path="http://localhost/form.php";

        $img_path=$path.'photo/'.$photo_name;

        $photo_img='<img src="'.$img_path.'" width="100px">';

        echo $photo_img;
    }else{

        echo 'Ошибка загрузки аватарки!';
    }

}else{

    echo 'Аватарка не загружена!';
}
echo 'Фамилия:'.$surname .PHP_EOL;
echo 'Имя:'.$name .PHP_EOL;
echo 'Отчество:'.$fathername .PHP_EOL;
echo 'Email:'.$email .PHP_EOL;
echo 'Телефон:'.$tel .PHP_EOL;
echo 'О себе:'.$message .PHP_EOL;
echo 'Skils'.$skils.PHP_EOL;
echo 'Английский:'.$english .PHP_EOL;

echo '</pre>';
?>
