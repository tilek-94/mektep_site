<table class="table datatable-button-html5-basic">
									<thead>
										<tr>
											<th>#</th>
											<th>Макаланын темасы</th>
											<th>Макаланын тексти</th>
											<th>Сүрөт</th>
											<th>Өзгөртүү</th>
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
$query = "SELECT * FROM $tabl ORDER BY  id DESC";
$res1 = mysqli_query($connection,$query);
while($row =mysqli_fetch_array($res1)){
$s++;


if(empty($row['img'])){
$foto="../images/admin/no.png";
}else{
$foto="../images/{$row['img']}";
}
echo "
<tr>
<td>{$s}</td>
<td>{$Cl->cut_paragraph($row['title'])}</td>
<td width='300px'>{$Cl->cut_paragraph($row['text'])}...</td>
<td> <img width='100px' src='{$foto}'></td>
<td><a href='index.php?view=izmenit&tabl={$_GET['tabl']}&izmenit={$row['id']}'> <img width='50px' src='../images/admin/red2.png'></a></td>
<td><a href='index.php?tabl1={$_GET['tabl']}&tabl={$_GET['tabl']}&udal={$row['id']}'> 
<img width='50px' src='../images/admin/udalit.jpg'></a></td>
</tr>
";
}

  ?>


									
										
										
									</tbody>
								</table>