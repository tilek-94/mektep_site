<!DOCTYPE html>
<html>
<head>
	<title></title>
<style type="text/css">
	/*============================*/
/* General
/*============================*/
html, body {
    background: #fff;
    font: 100% helvetica, arial, sans-serif;
    margin: 0;
    padding: 0;
}



#header {
    border-bottom: 1px solid #eee;            
    margin: 0 0 20px;
    overflow: hidden;
    padding: 0 0 10px;
}



h2 {
    color: #999;
    float: right;
    font-size: 11px;
    font-weight: normal;
    margin: 20px 0 0 0;
}

a {
    color: #111;
    font-weight: bold;
    text-decoration: none;
    -moz-transition: all 300ms ease-out;
    -webkit-transition: all 300ms ease-out; 
    -ms-transition: all 300ms ease-out; 
    transition: all 300ms ease-out;
}

a:hover {
    color: #555;    
}

/*============================*/
/* Main Navigation
/*============================*/
#nav {            
    height: 50px;
    line-height: 50px;            
    width: 100%;
}

#nav ul {
    list-style: none;
    margin: 0;
    padding: 0;
}

#nav li {    
    background: #333;
    background-image: -o-linear-gradient(bottom, #222222 0%, #555555 100%);
    background-image: -moz-linear-gradient(bottom, #222222 0%, #555555 100%);
    background-image: -webkit-linear-gradient(bottom, #222222 0%, #555555 100%);
    background-image: -ms-linear-gradient(bottom, #222222 0%, #555555 100%);    
    background-image: -webkit-gradient(linear,left bottom,left top,color-stop(0, #222222),color-stop(1, #555555));    
    background-image: linear-gradient(bottom, #222222 0%, #555555 100%);
    float: left;
    position: relative;
    width: 12%;    
}

#nav li:first-child, #nav li:first-child a { 
    -webkit-border-radius: 3px 0 0 3px; 
    -moz-border-radius: 3px 0 0 3px; 
    border-radius: 3px 0 0 3px; 
}
#nav li:last-child, #nav li:last-child a { 
    -webkit-border-radius: 0 3px 3px 0; 
    -moz-border-radius: 0 3px 3px 0; 
    border-radius: 0 3px 3px 0; 
}

#nav a {                
    border-right: 1px solid #222;
    border-left: 1px solid #555;
    color: #ccc;
    display: block;
    font-size: 14px;
    height: 50px;
    overflow: hidden;
    text-align: center;
    text-shadow: 0 -1px 0 #000;    
    -webkit-box-shadow: inset 0 0 10px transparent;
    -moz-box-shadow: inset 0 0 10px transparent;
}

#nav a:after {
    background: rgba(255,255,255,.07);
    content: "";
    height: 25px;
    left: 0;
    position: absolute;
    width: 100%;
}

#nav li:hover > a {
    background: #333;
    border-left-color: #222;
    color: #fff;
    text-shadow: 0 1px 0 #000;
    -webkit-box-shadow: inset 0 0 10px #111;
    -moz-box-shadow: inset 0 0 10px #111;
    box-shadow: inset 0 0 10px #111;
}
#nav span {
    position: relative;    
}

#nav a:active span {
    color: #ffd;
    position: relative;
    top: 1px;
}

#nav li:first-child a {
    border-left: none;    
}

#nav li:last-child a {
    border-right: none;    
}

.dropdown > a span:after {
    border-top: 5px solid transparent;
    border-bottom: 5px solid transparent;
    border-left: 5px solid #ccc;
    content: "";
    right: -13px;
    position: absolute;
    top: 3px;
}

.dropdown:hover > a span:after {
    border-left: 5px solid transparent;
    border-right: 5px solid transparent;
    border-top: 5px solid #fff;
    content: "";
    right: -15px;
    position: absolute;
    top: 6px;
}

/*============================*/
/* Sub Navigation
/*============================*/
#nav ul ul {
    opacity: 0;
    position: absolute;
    top: 50px;
    visibility: hidden;
    width: 0;
    -moz-transition: all 300ms ease-out;
    -webkit-transition: all 300ms ease-out; 
    -ms-transition: all 300ms ease-out; 
    transition: all 300ms ease-out;
}

#nav ul li:hover ul {
    opacity: 1;
    visibility: visible;
    width: 100%;
}

#nav ul ul li {
    background: #f3f3f3;
    float: none;    
    line-height: 0;
    width: 100%;            
}

#nav ul ul li:nth-child(odd) {
    background: #eee;    
}

#nav ul ul li:first-child, #nav ul ul li:first-child a { 
    -webkit-border-radius: 0; 
    -moz-border-radius: 0; 
    border-radius: 0; 
}
#nav ul ul li:last-child, #nav ul ul li:last-child a { 
    -webkit-border-radius: 0 0 3px 3px; 
    -moz-border-radius: 0 0 3px 3px; 
    border-radius: 0 0 3px 3px; 
}

#nav ul ul li a {
    border-right: none;
    border-left: none;
    border-top: 1px solid #fff;
    color: #555;
    font-size: 12px;
    height: 36px;
    line-height: 36px;
    padding: 0 0 0 15px;
    text-align: left;
    text-shadow: 0 -1px 0 #eee;
}

#nav ul li ul li a:after {
    background: rgba(0,0,0,.02);
    content: "";
    height: 18px;
    left: 0;
    position: absolute;
    top: 19px;
    width: 100%;
}

#nav ul ul li a:hover {
    background: #ffd;
    color: #111;
    text-shadow: 0 1px 0 #fff;
    -webkit-box-shadow: none;
    -moz-box-shadow: none;
    box-shadow: none;
}

#nav ul ul a:active span {
    color: #111;
    position: relative;
    top: 1px;
}
.sc1{
	margin-left: 2%;
}


</style>

</head>
<body>

    
    <div id="nav">
        <ul>
    <?
$query = "SELECT * FROM menu";
$res1 = mysqli_query($connection,$query);
while($row =mysqli_fetch_array($res1)):
$cat1=$row['name'];
            ?>
            <li class="dropdown">
<a href="index.php?tabl=menu_now&view=menu&cat1=<? echo $row['name']; ?>">

            <span><? echo $row['name']; ?></span></a>
<? 
$rtp=$row['name'];

$query2 = "SELECT * FROM pod_menu WHERE name='$rtp'";
$res2 = mysqli_query($connection,$query2);
while($row2 =mysqli_fetch_array($res2)){
$prov=$row2['name'];
}

if ($prov==$rtp):
	
            ?>



        

        <ul>        
<?
$query3 = "SELECT * FROM pod_menu WHERE name='$prov'";
$res3 = mysqli_query($connection,$query3);
while($row3 =mysqli_fetch_array($res3)):
$cat1=$row['pod_name'];
            ?>

              
<li><a href="index.php?tabl=menu_now&view=menu&cat1=<? echo $row3['pod_name']; ?>"><span><? echo $row3['pod_name']; ?></span></a></li>
                    
<? endwhile; ?>
</ul> 
            </li>
            <? 
endif;
            endwhile; ?>



        </ul>
    </div>
<br>









<div class="sc1">

<form  method="post" action="index.php?tabl1=<? echo $_GET['tabl']; ?>&tabl=<? echo $_GET['tabl']; ?>&view=menu&cat1=<? echo $cat1=$_GET['cat1']; ?>" enctype="multipart/form-data">

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

				






</body>
</html>




<table class="table table-bordered table-framed">
									<thead>
										<tr>
											<th>#</th>
											<th>Макаланын темасы</th>
											<th>Макаланын каталогу</th>
											<th>Макаланын тексти</th>
											<th>Сүрөт</th>
											<th>Өчүрүү</th>
										</tr>
									</thead><tbody>
<?   $tabl=$_GET['tabl'];
$s=0;
$query = "SELECT * FROM $tabl ORDER BY id DESC";
$res1 = mysqli_query($connection,$query);
while($row =mysqli_fetch_array($res1)){
$s++;
echo "
<tr>
<td>{$s}</td>
<td>{$row['title']}</td>
<td>{$row['kat']}</td>
<td>{$row['text']}</td>
<td><a href='index.php?view=izmenit&tabl={$_GET['tabl']}&izmenit={$row['id']}'> <img width='50px' src='../images/red2.png'></a></td>

<td> <img width='100px' src='../images/{$row['img']}'></td>
<td><a href='index.php?tabl1={$_GET['tabl']}&tabl={$_GET['tabl']}&udal={$row['id']}&view=menu'> <img width='50px' src='../images/udalit.jpg'></a></td>
</tr>
";
}

  ?>


									
										
										
									</tbody>
								</table>