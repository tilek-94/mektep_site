
<?   

if (empty($_GET['tabl'])) {
	?>
	<div class="admin1">
	<center>
<h1>Добро пожаловать</h1><h1> Административный блок сайта!</h1>
<h2>Выберите раздел для редактирования</h2>
<br>
</center>
</div>
	<?
}else{
 
?>
<div class="content">

<div class="col-lg-12">

<form  method="post" action="index.php?tabl1=<? echo $_GET['tabl']; ?>&tabl=<? echo $_GET['tabl']; ?>" enctype="multipart/form-data">

<label >Макаланын темасы</label>
<input type="text" class="form-control"  name="title">
<label>Сүрөт киргизиңиз</label>

<input type="file" name="uploadfile" class="btn btn-primary mar" accept="image/x-png,image/gif,image/jpeg">
<br>
<label >Сүрөттүн өлчөмү "px"</label>
<input type="text" style="width: 10%;" class="form-control" 
 name="raz">
<br>
<label>Жалпы маалымат</label>
<textarea name="info" >
	

</textarea><br>
			<input type="submit" class="btn btn-primary" value="Сактоо"></button>
</form>
			</div>			

					</div>
<hr>
<?
include "loadDoc.php"; 
					?>
<hr>

					<?
include "tabl.php"; 
					}?>

