<?
$connection=mysqli_connect('localhost','root','','admin_omk') or die('ne udalost');


$result=mysqli_set_charset($connection,'utf8'); $title=$_POST['title'];
 $info=$_POST['info'];
 $video=$_POST['video'];
 $raz=$_POST['raz'];
$tabl=$_GET['tabl1'];
$cat1=$_GET['cat1'];
$udal=$_GET['udal'];
$tabli=$_GET['tabli'];
$izmen=$_GET['izmenit'];
$idi=$_GET['idi'];


/*if (!empty($udal)) {
$sql="DELETE FROM $tabl WHERE id='$udal'";
$res = mysqli_query($connection,$sql);

}*/


if ($tabl=="video") {

	if (!empty($title) and !empty($info) ) {
$uploaddir = '../images/';
$uploadfile = $uploaddir.basename($_FILES['uploadfile']['name']);
// Копируем файл из каталога для временного хранения файлов:
if (copy($_FILES['uploadfile']['tmp_name'], $uploadfile))
{
//echo "<h3>Файл успешно загружен на сервер</h3>";
 $foto=$_FILES['uploadfile']['name'];
$sql="INSERT INTO $tabl (title,text,video,img) VALUES ('$title','$info','$video','$foto')";
$res = mysqli_query($connection,$sql);
}
else { echo "<h3>Ошибка! Не удалось загрузить файл на сервер!</h3>"; exit; }

}

}
elseif ($tabl=="list_now") {

if (!empty($title)) {
$sql="INSERT INTO $tabl (title) 
VALUES ('$title')";
$res = mysqli_query($connection,$sql);

}
	}

elseif (!empty($cat1)) {
if (!empty($title) and !empty($info) ) {
$uploaddir = '../images/';
$uploadfile = $uploaddir.basename($_FILES['uploadfile']['name']);
// Копируем файл из каталога для временного хранения файлов:
if (copy($_FILES['uploadfile']['tmp_name'], $uploadfile))
{
//echo "<h3>Файл успешно загружен на сервер</h3>";
 $foto=$_FILES['uploadfile']['name'];
$sql="INSERT INTO $tabl (title,text,img,kat,raz) 
VALUES ('$title','$info','$foto','$cat1','$raz')";
$res = mysqli_query($connection,$sql);
}
else { echo "<h3>Ошибка! Не удалось загрузить файл на сервер!</h3>"; exit; }

}
}elseif(!empty($tabl)){

if (!empty($title) and !empty($info) ) {
$uploaddir = '../images/';
$uploadfile = $uploaddir.basename($_FILES['uploadfile']['name']);
// Копируем файл из каталога для временного хранения файлов:
if (copy($_FILES['uploadfile']['tmp_name'], $uploadfile))
{
//echo "<h3>Файл успешно загружен на сервер</h3>";
 $foto=$_FILES['uploadfile']['name'];
$sql="INSERT INTO $tabl (title,text,img,raz) VALUES ('$title','$info','$foto','$raz')";
$res = mysqli_query($connection,$sql);
}
else { echo "<h3>Ошибка! Не удалось загрузить файл на сервер!</h3>"; exit; }

}

}


if ($tabl=="menu") {


$pod_men=$_POST['pod_men'];

if (!empty($title)) {
$sql="INSERT INTO $tabl (name) 
VALUES ('$title')";
$res = mysqli_query($connection,$sql);
}else{
	$title=$_POST['cat'];
}


if (!empty($pod_men)) {
	$sql="INSERT INTO pod_menu (name,pod_name) 
VALUES ('$title','$pod_men')";
$res = mysqli_query($connection,$sql);
}
}


//izmenit
if ($izmen=="izmen") {
	 
if (!empty($title) and !empty($info)) {
$uploaddir = '../images/';
$uploadfile = $uploaddir.basename($_FILES['uploadfile']['name']);
if (!empty($_FILES['uploadfile']['name'])) {
	

if (copy($_FILES['uploadfile']['tmp_name'], $uploadfile))
{
$foto=$_FILES['uploadfile']['name'];
 $sql="
UPDATE $tabli SET 
title='$title',text='$info', img='$foto', raz='$raz'  where id='$idi'
";
$res = mysqli_query($connection,$sql);
}

}else {
 $sql="
UPDATE $tabli SET 
title='$title',text='$info',  raz='$raz'  where id='$idi'
";
$res = mysqli_query($connection,$sql);


 }
}
}
