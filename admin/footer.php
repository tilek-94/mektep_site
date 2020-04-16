<div class="content">

<div class="col-lg-12">

<form  method="post" action="index.php?tabl1=<? echo $_GET['tabl']; ?>&tabl=<? echo $_GET['tabl']; ?>&view=footer" enctype="multipart/form-data">

<label >Окуу жайдын толук аталышы:</label>
<input type="text" class="form-control"  name="at">
<br>
<label >Кыскартылган аталышы:</label>
<input type="text" class="form-control"  name="ka">
<br>

<label >Түзүлгөн жыл: </label>
<input type="text" class="form-control"  name="tj">
<br>

<label >Юридикалык дареги:</label>
<input type="text" class="form-control"  name="yd">
<br>

<label >Телефоны:</label>
<input type="text" class="form-control"  name="tel">
<br>

<label >E – mail:</label>
<input type="text" class="form-control"  name="mail">
<br>

<label >Сайт: </label>
<input type="text" class="form-control"  name="site">
<br>
<label >Директор:</label>
<input type="text" class="form-control"  name="dir">
<br>
			<input type="submit" class="btn btn-primary" value="Сактоо"></button>
</form>
			</div>			

					</div>


<table class="table table-bordered table-framed">
									<thead>
										<tr>
											<th>#</th>
											<th>Макаланын темасы</th>
											
											<th>Өчүрүү</th>
										</tr>
									</thead><tbody>
<?   $tabl=$_GET['tabl'];
$s=0;
$query = "SELECT * FROM $tabl ORDER BY id DESC ";
$res1 = mysqli_query($connection,$query);
while($row =mysqli_fetch_array($res1)){
$s++;
echo "
<tr>
<td>{$s}</td>
<td>{$row['title']}</td>
<td><a href='index.php?tabl1={$_GET['tabl']}&tabl={$_GET['tabl']}&udal={$row['id']}&view=footer'><img width='50px' src='../images/admin/udalit.jpg'></a></td>
</tr>
";
}

  ?>


										
		</tbody>
	</table>
			
									