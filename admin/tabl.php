<table class="table table-bordered table-framed">
									<thead>
										<tr>
											<th>#</th>
											<th>Макаланын темасы</th>
											<th>Макаланын тексти</th>
											<th>Сүрөт</th>
											<th>Өчүрүү</th>
										</tr>
									</thead><tbody>
<?  
if (empty($_GET['tabl'])) {
$tabl="now";	
}else{
 $tabl=$_GET['tabl'];
 }
$s=0;
$query = "SELECT * FROM $tabl";
$res1 = mysqli_query($connection,$query);
while($row =mysqli_fetch_array($res1)){
$s++;
echo "
<tr>
<td>{$s}</td>
<td>{$row['title']}</td>
<td>{$row['text']}</td>
<td> <img width='100px' src='../images/{$row['img']}'></td>
<td><a href='index.php?view=izmenit&tabl={$_GET['tabl']}&izmenit={$row['id']}'> <img width='50px' src='../images/red2.png'></a></td>
<td><a href='index.php?tabl1={$_GET['tabl']}&tabl={$_GET['tabl']}&udal={$row['id']}'> 
<img width='50px' src='../images/admin/udalit.jpg'></a></td>
</tr>
";
}

  ?>


									
										
										
									</tbody>
								</table>