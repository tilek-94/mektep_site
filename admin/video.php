<div class="content">

					<!-- Main charts -->


						
							<!-- /support tickets -->


							<!-- Latest posts -->
				

<div class="col-lg-12">

<form  method="post" action="index.php?tabl1=<? echo $_GET['tabl']; ?>&tabl=<? echo $_GET['tabl']; ?>&view=video" enctype="multipart/form-data">

<label >Макаланын темасы</label>
<input type="text" class="form-control"  name="title">
<label >Видеонун сылкасын таштаңыз</label>
<input type="text" class="form-control"  name="video">
<label>Сүрөт киргизиңиз</label>

<input type="file" name="uploadfile" class="btn btn-primary mar" accept="image/x-png,image/gif,image/jpeg">
<br>
<label>Жалпы маалымат</label>
<textarea name="info" >
	

</textarea><br>
			<input type="submit" class="btn btn-primary" value="Сактоо"></button>
</form>
			</div>			

					</div>

<table class="table table-bordered table-framed">
									<thead>
										<tr>
											<th>#</th>
											<th>Маакланын темасы</th>
											<th>Видео</th>
											<th>Текст</th>
											<th>Өчүрүү</th>
										</tr>
									</thead><tbody>
<?   $tabl=$_GET['tabl'];
$s=0;
$query = "SELECT * FROM $tabl";
$res1 = mysqli_query($connection,$query);
while($row =mysqli_fetch_array($res1)){
$s++;
echo "
<tr>
<td>{$s}</td>
<td>{$row['title']}</td>
<td> <img width='100px' src='../images/{$row['img']}'></td>
<td>{$row['text']}</td>
<td><a href='index.php?tabl1={$_GET['tabl']}&tabl={$_GET['tabl']}&udal={$row['id']}&view=video'><img width='50px' src='../images/udalit.jpg'></a></td>
</tr>
";
}

  ?>


									
										
										
									</tbody>
								</table>