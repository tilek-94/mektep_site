<div class="content">

<div class="col-lg-12">

<form  method="post" action="index.php?tabl1=<? echo $_GET['tabl']; ?>&tabl=<? echo $_GET['tabl']; ?>&view=menu_cr" enctype="multipart/form-data">
<label >Каталог түзүү</label>
<input type="text" class="form-control"  name="title">
<br>
<label >Под каталог түзүү үчүн каталогду тандоо</label>
<select class="form-control" name="cat">
<option></option>
	<?

$query = "SELECT * FROM menu";
$res1 = mysqli_query($connection,$query);
while($row =mysqli_fetch_array($res1)){
echo "<option>{$row['name']}</option>";
}
	?>

	
	
	</select>
<br>


<label >Под катологду түзүңүз</label>
<input type="text" class="form-control"  name="pod_men">
<br>

			<input type="submit"  class="btn btn-primary" value="Сактоо"></button>
<a href="index.php?tabl=menu&view=menu_cr" class="btn btn-primary">Жаңылоо</a>

</form>
			</div>			

					</div>


					<table class="table table-bordered table-framed">
									<thead>
										<tr>
											<th>#</th>
											<th>Меню</th>
											<th>Өчүрүү</th>
										</tr>

									</thead><tbody>

<?  
$tabl=$_GET['tabl'];
$s1=0;
$query = "SELECT * FROM menu";
$res1 = mysqli_query($connection,$query);
while($row =mysqli_fetch_array($res1)){
$s1++;
echo "
<tr>
<td id='vb'>$s1</td>
<td id='vb'>{$row['name']}</td>
<td id='vb'><a href='index.php?tabl1={$_GET['tabl']}&tabl=menu&udal={$row['id']}&view=menu_cr'> <img width='50px' src='../images/admin/udalit.jpg'></a></td>
</tr>
";

$w=$row['name'];

$query1 = "SELECT * FROM pod_menu WHERE name='$w'";
$res2 = mysqli_query($connection,$query1);
while($row1 =mysqli_fetch_array($res2)){

echo "
<tr>
<td>-</td>
<td>
&nbsp;&nbsp;&nbsp;
&nbsp;&nbsp;&nbsp;
&nbsp;&nbsp;&nbsp;
&nbsp;&nbsp;&nbsp;
&nbsp;&nbsp;&nbsp;

{$row1['pod_name']}</td>
<td><a href='index.php?tabl1=pod_menu&tabl={$_GET['tabl']}&udal={$row1['id']}&view=menu_cr'> <img width='50px' src='../images/admin/udalit.jpg'></a></td>
</tr>
";
}}

  ?>


									
										
										
									</tbody>
								</table>