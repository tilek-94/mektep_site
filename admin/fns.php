<?
 $connection=mysqli_connect('localhost','root','','admin_omk') or die('ne udalost');
$result=mysqli_set_charset($connection,'utf8'); 

$title=$_POST['title'];
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

$Cl=new BasaKlass($connection,$result);

if (!empty($udal)) {
$Cl->AddVideos("DELETE FROM $tabl WHERE id='$udal'");
}elseif ($izmen=="izmen") {
if(empty($foto))
$foto=$Cl->AddFoto();
if (empty($title)) $title="0"; 
if (empty($info)) $info="0"; 
if (empty($foto)) $foto="0"; 
if (empty($raz)) $raz="0"; 

$Cl->AddVideos("
UPDATE $tabli SET 
title='$title',text='$info', img='$foto', raz='$raz'  where id='$idi'
");


} else{

if ($tabl=="video") {
$foto=$Cl->AddFoto();
if (empty($title)) $title="0"; 
if (empty($info)) $info="0"; 
if (empty($video)) $video="0"; 
if (empty($foto)) $foto="0"; 
	
$Cl->AddVideos("INSERT INTO $tabl (title,text,video,img) VALUES ('$title','$info','$video','$foto')");

}
elseif ($tabl=="list_now") {

if (!empty($title)) {

$Cl->AddVideos("INSERT INTO $tabl (title) VALUES ('$title')");

	}

}
elseif (!empty($cat1)) {

	$foto=$Cl->AddFoto();
if (empty($title)) $title="0"; 
if (empty($info)) $info="0"; 
if (empty($foto)) $foto="0"; 
if (empty($raz)) $raz="0"; 

$Cl->AddVideos("INSERT INTO $tabl (title,text,img,kat,raz) 
VALUES ('$title','$info','$foto','$cat1','$raz')");

}elseif(!empty($tabl)){


	$foto=$Cl->AddFoto();
if (empty($title)) $title="0"; 
if (empty($info)) $info="0"; 
if (empty($foto)) $foto="0"; 
if (empty($raz)) $raz="0"; 

$Cl->AddVideos("INSERT INTO $tabl (title,text,img,raz) VALUES ('$title','$info','$foto','$raz')");


}


if ($tabl=="menu") {


$pod_men=$_POST['pod_men'];

if (!empty($title)) {
	$Cl->AddVideos("INSERT INTO $tabl (name)VALUES ('$title')");

}else{
	$title=$_POST['cat'];
}


if (!empty($pod_men)) {
$Cl->AddVideos("INSERT INTO pod_menu (name,pod_name) 
VALUES ('$title','$pod_men')");


}
}
}






Class BasaKlass{

public $connection;
public $kodirovka;
function __construct($conekt,$kodir) {
    $this->connection = $conekt;
    $this->kodirovka = $kodir;

  }
	function AddReg($text){
           $res = mysqli_query($this->connection,$text);		
	}

	function AddVideos($text){
    $res = mysqli_query($this->connection,$text);

	}

	function AddFoto(){





$filename1 = $_FILES['uploadfile']['name'];
$ext = pathinfo($filename1, PATHINFO_EXTENSION);
if(!empty($ext)){
	$query = "SELECT * FROM foto_shot where id='1'";
$res1 = mysqli_query($this->connection,$query);
$row =mysqli_fetch_array($res1);
$s=$row['shot'];
$s+=1;
$sql="UPDATE foto_shot SET 
shot='$s' where id='1'";
$res = mysqli_query($this->connection,$sql);

}

$allowed_filetypes = array('.jpg','.JPG','.Jpg','.gif','.GIF','.Gif','.bmp','.BMP','.Bmp','.png','.PNG','.Png'); // допустимые форматы. 
$max_filesize = 524288; // Допустимый размер загружаемого файла. 
$upload_path = '../images/'; // Директория для загрузки. 
$new_name = $s; // Новое имя для файла.(типа получено динамически =) ) 
$filename =$new_name.".".$ext; 
$ext = substr($filename, strpos($filename,'.'), strlen($filename)-1); 
if(move_uploaded_file($_FILES['uploadfile']['tmp_name'],$upload_path . $filename))
return $filename;






/*

$uploaddir = '../images/';
$uploadfile = $uploaddir.basename($_FILES['uploadfile']['name']);
if(!empty($_FILES['uploadfile']['name'])){
       if (copy($_FILES['uploadfile']['tmp_name'], $uploadfile))
            {
 
                 return $foto=$_FILES['uploadfile']['name'];
 
            }

    }else{

    	return null;
    }*/
	                  }
  

}
?>