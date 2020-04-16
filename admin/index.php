<? session_start();

include "fns.php"; 

$log=$_POST['log'];
$pass=$_POST['pass'];
$hash = "test123";

if (!isset($_SESSION['parol'])) {
	
if ($pass==$hash && $log=='Admin') {
	$_SESSION['parol']='Admin';
}else{
	$_SESSION['parol']=null;
	echo "Tilek Umarov";
}
}
if ($_SESSION['parol']=='Admin') {


 ?>



<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Администратор</title>

	<!-- Global stylesheets -->
	<link href="https://fonts.googleapis.com/css?family=Roboto:400,300,100,500,700,900" rel="stylesheet" type="text/css">
	<link href="assets/css/icons/icomoon/styles.css" rel="stylesheet" type="text/css">
	<link href="assets/css/bootstrap.css" rel="stylesheet" type="text/css">
	<link href="assets/css/core.css" rel="stylesheet" type="text/css">
	<link href="assets/css/components.css" rel="stylesheet" type="text/css">
	<link href="assets/css/colors.css" rel="stylesheet" type="text/css">
	<link rel="stylesheet" type="text/css" href="st.css">
	<!-- /global stylesheets -->

	<!-- Core JS files -->
	<script type="text/javascript" src="assets/js/plugins/loaders/pace.min.js"></script>
	<script type="text/javascript" src="assets/js/core/libraries/jquery.min.js"></script>
	<script type="text/javascript" src="assets/js/core/libraries/bootstrap.min.js"></script>
	<script type="text/javascript" src="assets/js/plugins/loaders/blockui.min.js"></script>
	<!-- /core JS files -->

	<!-- Theme JS files -->
	<script type="text/javascript" src="assets/js/plugins/visualization/d3/d3.min.js"></script>
	<script type="text/javascript" src="assets/js/plugins/visualization/d3/d3_tooltip.js"></script>
	<script type="text/javascript" src="assets/js/plugins/forms/styling/switchery.min.js"></script>
	<script type="text/javascript" src="assets/js/plugins/forms/styling/uniform.min.js"></script>
	<script type="text/javascript" src="assets/js/plugins/forms/selects/bootstrap_multiselect.js"></script>
	<script type="text/javascript" src="assets/js/plugins/ui/moment/moment.min.js"></script>
	<script type="text/javascript" src="assets/js/plugins/pickers/r.js"></script>

	<script type="text/javascript" src="assets/js/core/app.js"></script>
	<script type="text/javascript" src="assets/js/pages/dashboard.js"></script>
	<!-- /theme JS files -->
<style type="text/css">
	
#vb{
	color: red;
	background-color: white;
	font-size: 1.2em;
}

</style>
</head>

<body>

	<!-- Main navbar -->
<div class="navbar navbar-inverse">
		<div class="navbar-header">
			<a class="navbar-brand" href="index.html"><img src="assets/images/logo_light.png" alt=""></a>

			<ul class="nav navbar-nav visible-xs-block">
				<li><a data-toggle="collapse" data-target="#navbar-mobile"><i class="icon-tree5"></i></a></li>
				<li><a class="sidebar-mobile-main-toggle"><i class="icon-paragraph-justify3"></i></a></li>
			</ul>
		</div>

		<div class="navbar-collapse collapse" id="navbar-mobile">
			<ul class="nav navbar-nav">
				<li><a class="sidebar-control sidebar-main-toggle hidden-xs"><i class="icon-paragraph-justify3"></i></a></li>









			</ul>

			<p class="navbar-text"><span class="label bg-success">Online</span></p>

			<ul class="nav navbar-nav navbar-right">
				<li class="dropdown language-switch">
					<a class="dropdown-toggle" data-toggle="dropdown">
						<img src="assets/images/flags/gb.png" class="position-left" alt="">
						English
						<span class="caret"></span>
					</a>

					<ul class="dropdown-menu">
						
						
						<li><a class="russian"><img src="assets/images/flags/ru.png" alt=""> Русский</a></li>
					</ul>
				</li>

				
			</ul>
		</div>
	</div>
	<!-- /main navbar -->


	<!-- Page container -->
	<div class="page-container">

		<!-- Page content -->
		<div class="page-content">

			<!-- Main sidebar -->
			<div class="sidebar sidebar-main">
				<div class="sidebar-content">

					<!-- User menu -->
					<div class="sidebar-user">
						<div class="category-content">
							<div class="media">
								<a href="#" class="media-left"><img src="assets/images/placeholder.jpg" class="img-circle img-sm" alt=""></a>
								<div class="media-body">
									<span class="media-heading text-semibold">Аминистратор</span>
									<div class="text-size-mini text-muted">
										<i class="icon-pin text-size-small"></i> &nbsp;Кыргызстан
									</div>
								</div>

								<div class="media-right media-middle">
									<ul class="icons-list">
										<li>
											<a href="#"><i class="icon-cog3"></i></a>
										</li>
									</ul>
								</div>
							</div>
						</div>
					</div>
					<!-- /user menu -->


					<!-- Main navigation -->
					<div class="sidebar-category sidebar-category-visible">
						<div class="category-content no-padding">
							<ul class="navigation navigation-main navigation-accordion">

								<!-- Main -->
<li class="navigation-header"><span>Категориялар</span> <i class="icon-menu" title="Main pages"></i></li>


<li class="active"><a href="index.php?tabl=now"><i class="icon-home4"></i> <span>Негизги слайд</span></a></li>
<li>
<li ><a href="index.php?tabl=list_now&view=jsap"><i class="icon-home4"></i> <span>Банер алмаштыруу</span></a></li>
<li>

<li ><a href="index.php?tabl=left_now"><i class="icon-home4"></i> <span>Сол панел</span></a></li>
<li>
<li><a href="index.php?tabl=os_now"><i class="icon-home4"></i> <span>Ортоңку панел</span></a></li>
<li>
<!-- <li ><a href="index.php?tabl=rigte_now"><i class="icon-home4"></i> <span>Оң панел</span></a></li> -->
<li>
<li ><a href="index.php?tabl=video&view=video"><i class="icon-home4"></i> 
<span>
Видеолор

</span>
</a></li>

<li ><a href="index.php?tabl=menu&view=menu_cr"><i class="icon-home4"></i> 
<span>
Меню түзүү

</span>
</a></li>

<li ><a href="index.php?tabl=menu_now&view=menu"><i class="icon-home4"></i> 
<span>
Жогорку меню

</span>
</a></li>


<li ><a href="index.php?tabl=footer&view=footer"><i class="icon-home4"></i> 
<span>
ФУТЕР

</span>
</a></li>




							</ul>
						</div>
					</div>
					<!-- /main navigation -->

				</div>
			</div>
			<!-- /main sidebar -->


			<!-- Main content -->
			<div class="content-wrapper">

				<!-- Page header -->
				<div class="page-header page-header-default">
					<div class="page-header-content">
						<div class="page-title">
							<h4><?

switch ($_GET['tabl']) {
	case 'list_now':
		echo "Бул панелден жүгүртмө сапка маалымат кийиребиз";
		$_SESSION['pr']=$_GET['tabl'];
		break;
case 'left_now':
		echo "Сол панелге маалымат жайгаштыруу";
		$_SESSION['pr']=$_GET['tabl'];
		break;
	case 'menu_now':
		echo "Менюга маалымат кийирүү";
		$_SESSION['pr']=$_GET['tabl'];
		break;

	case 'now':
		echo "Негизги слайдка маалымат кийирүү";
		$_SESSION['pr']=$_GET['tabl'];
		break;

	case 'rigte_now':
		echo "Оң панелге маалымат жайгаштыруу";
		$_SESSION['pr']=$_GET['tabl'];
		break;

	case 'os_now':
		echo "Ортоңку панелге маалымат жайгаштыруу";
		$_SESSION['pr']=$_GET['tabl'];
		break;
	case 'video':
		echo "Видеолор панелине маалымат жайгаштыруу";
		$_SESSION['pr']=$_GET['tabl'];
		break;
		case 'footer':
		echo "Футер";
		$_SESSION['pr']=$_GET['tabl'];
		break;
	
	default:
		# code...
		break;
}

							  


							 ?></h4>
						</div>

						
					</div>

					<div class="breadcrumb-line">
						<ul class="breadcrumb">
							<li><a href="index.html"><i class="icon-home2 position-left"></i> Home</a></li>
							<li class="active" style="color:red;">
<? 
echo $cat1=$_GET['cat1'];
?>

							</li>
						</ul>

						
					</div>
				</div>
				<!-- /page header -->


				<!-- Content area -->
				<? 
				$view=$_GET['view'];
if (empty($view)) {
	include "cont.php"; 
	}else{
		include $view.".php"; 
		
	}
				

				 ?>
					<!-- /dashboard content -->


					<!-- Footer -->
					
					<!-- /footer -->

				</div>
				<!-- /content area -->

			</div>
			<!-- /main content -->

		<!-- /page content -->

	<!-- /page container -->
<script src="ckeditor/ckeditor.js"></script> 
<script type="text/javascript">
           CKEDITOR.replace("info");
           
    </script>


</body>
</html>

<? }else{ ?>
<!DOCTYPE html>
<html>
<head>

	<meta charset="utf-8">
	<title></title>
	<link href="assets/css/bootstrap.css" rel="stylesheet" type="text/css">
	
	<link rel="stylesheet" type="text/css" href="style_author.css">
</head>
<body>
	<div class="div_author">
		<h1 style="margin-left: 15%;">Авторизация</h1>
<form action="index.php" method="post">
	<label>Логин:</label><br>
	<input type="text" class="form-control" name="log">
	<br>
	<label>Пароль:</label><br>
	<input type="password" class="form-control" name="pass"><br>
	<input type="submit"  class="btn btn-primary" value="Вход">
</form>
</div>
</body>
</html>
<?
}?>

