<center> <h1 style="color: red;" >Файл жүктөө терезеси</h1></center>

<div class="content">

<div class="col-lg-12">
<form  method="post" action="index.php?tabl1=<? echo $_GET['tabl']; ?>&tabl=<? echo $_GET['tabl']; ?>&doc=1&view=menu" enctype="multipart/form-data">

<label>Файл жүктөңүз</label>

<input type="file" name="uploadDocfile" class="btn btn-primary mar" >
<br>

<input type="submit" class="btn btn-primary" value="Сактоо"></button>
</form>

<hr>

<table class="table datatable-button-html5-basic" style="background-color: white;">
									<thead>
										<tr>
											<th>#</th>
											<th>Макаланын темасы</th>
											<th>Макаланын тексти</th>
											
										</tr>
									</thead><tbody>
<?  




$url = 'http' . ((isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] != 'off') ? 's' : '') . '://';
$s=0;
$query = "SELECT * FROM documents ORDER BY  id DESC";
$res1 = mysqli_query($connection,$query);
while($row =mysqli_fetch_array($res1)){
$s++;
echo "
<tr>
<td>{$s}</td>
<td>{$url}{$_SERVER['HTTP_HOST']}/images/document/{$row['text']}</td>
<td>{$row['data']}</td>

</tr>
";
}

  ?>


									
										
										
									</tbody>
								</table>

<!DOCTYPE html>
<html lang="en">
<head>
	
	<!-- Core JS files -->
	<script type="text/javascript" src="assets/js/plugins/loaders/pace.min.js"></script>
	<script type="text/javascript" src="assets/js/core/libraries/jquery.min.js"></script>
	<script type="text/javascript" src="assets/js/core/libraries/bootstrap.min.js"></script>
	<script type="text/javascript" src="assets/js/plugins/loaders/blockui.min.js"></script>
	<!-- /core JS files -->

	<!-- Theme JS files -->
	<script type="text/javascript" src="assets/js/plugins/tables/datatables/datatables.min.js"></script>
	<script type="text/javascript" src="assets/js/plugins/forms/selects/select2.min.js"></script>
	<script type="text/javascript" src="assets/js/plugins/tables/datatables/extensions/jszip/jszip.min.js"></script>
	<script type="text/javascript" src="assets/js/plugins/tables/datatables/extensions/pdfmake/pdfmake.min.js"></script>
	<script type="text/javascript" src="assets/js/plugins/tables/datatables/extensions/pdfmake/vfs_fonts.min.js"></script>
	<script type="text/javascript" src="assets/js/plugins/tables/datatables/extensions/buttons.min.js"></script>

	<script type="text/javascript" src="assets/js/core/app.js"></script>
	<script type="text/javascript" src="assets/js/pages/datatables_extension_buttons_html5.js"></script>
	<!-- /theme JS files -->

</head>

</body>
</html>
