<div class="content">

<div class="col-lg-12">
<!-- 
<form  method="post" action="index.php?tabl1=<? echo $_GET['tabl']; ?>&tabl=<? echo $_GET['tabl']; ?>&view=jsap" enctype="multipart/form-data">

<label >Макаланын темасы</label>
<input type="text" class="form-control"  name="title">
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
<?   /*$tabl=$_GET['tabl'];
$s=0;
$query = "SELECT * FROM $tabl";
$res1 = mysqli_query($connection,$query);
while($row =mysqli_fetch_array($res1)){
$s++;
echo "
<tr>
<td>{$s}</td>
<td>{$row['title']}</td>
<td><a href='index.php?tabl1={$_GET['tabl']}&tabl={$_GET['tabl']}&udal={$row['id']}&view=jsap'><img width='50px' src='../images/admin/udalit.jpg'></a></td>
</tr>
";
}
*/
  ?>


										
									</tbody>
								</table>

 -->
<center> <h1 style="color: red;" >Банер жүктөө терезеси</h1></center>

<div class="content">

<div class="col-lg-12">
<form  method="post" action="index.php?tabl1=<? echo $_GET['tabl']; ?>&tabl=<? echo $_GET['tabl']; ?>&view=jsap&file=1" enctype="multipart/form-data">

<label>Файл жүктөңүз</label>

<input type="file" name="uploadfile" class="btn btn-primary mar" >
<br>

<input type="submit" class="btn btn-primary" value="Сактоо"></button>
</form>


<hr>

<table class="table datatable-button-html5-basic">
									<thead>
										<tr>
											<th>#</th>
											
											<th>Сүрөт</th>
										
											<th>Өчүрүү</th>
										</tr>
									</thead><tbody>
<?  
$s=0;
$query = "SELECT * FROM baner ORDER BY  id DESC";
$res1 = mysqli_query($connection,$query);
while($row =mysqli_fetch_array($res1)){
$s++;

if(empty($row['foto'])){
$foto="../images/admin/no.png";
}else{
$foto="../images/{$row['foto']}";
}
echo "
<tr>
<td>{$s}</td>
<td> <img width='100px' src='{$foto}'></td>
<td><a href='index.php?tabl1=baner&tabl={$_GET['tabl']}&udal={$row['id']}&view=jsap'> 
<img width='50px' src='../images/admin/udalit.jpg'></a></td>
</tr>
";
}

  ?>


									
										
										
									</tbody>
								</table>
