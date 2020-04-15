<?
$id=$_GET['izmenit'];
$tabl=$_GET['tabl'];
$query = "SELECT * FROM $tabl where id='$id'";
$res1 = mysqli_query($connection,$query);
$row =mysqli_fetch_array($res1);
    
  ?>

   <div class="content">

<div class="col-lg-12">

<form  method="post" 
<?php if ($tabl=="menu_now"): ?>
	

action="index.php?tabli=<? echo $_GET['tabl']; ?>&tabl=<? echo $_GET['tabl']; ?>&izmenit=izmen&idi=<? echo $row['id']; ?>&view=menu" 
<?php else: ?>

action="index.php?tabli=<? echo $_GET['tabl']; ?>&tabl=<? echo $_GET['tabl']; ?>&izmenit=izmen&idi=<? echo $row['id']; ?>"

<?php endif ?>
enctype="multipart/form-data"
>

<label >Макаланын темасы</label>
<input type="text" class="form-control"  name="title" value="<? echo $row['title']; ?>"><br>
<label>Сүрөт</label> <b style="color:red;" > <? echo $row['img']; ?></b>

<input type="file" name="uploadfile" class="btn btn-primary mar" accept="image/x-png,image/gif,image/jpeg">
<br>
<label >Сүрөттүн өлчөмү "px"</label>
<input type="text" style="width: 10%;" class="form-control" 
 name="raz" value="<? echo $row['raz']; ?>">
<br>
<label>Жалпы маалымат</label>
<textarea name="info" >
	
<? echo $row['text']; ?>
</textarea><br>
			<input type="submit" class="btn btn-primary" value="Сактоо"></button>
</form>
			</div>			

					</div>       
