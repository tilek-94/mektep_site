<? include "db.php"; ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=no">
    <title>ОШ МЕДИЦИНАЛЫК КОЛЛЕДЖИ</title>
    <meta name="keywords" content="HTML5,CSS3,HTML,Template,Themeton" >
    <meta name="description" content="Tana - Blog, News and Magazine HTML Template">
  

    
    
    
    <!-- Bootstrap -->
    <link rel="stylesheet" type="text/css" href="vendors/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="vendors/bootstrap/css/bootstrap-theme.min.css">

    <!-- Fontawesome -->
    <link rel="stylesheet" type="text/css" href="vendors/font-awesome/css/font-awesome.min.css">

    <!-- Animate -->
    <link rel="stylesheet" type="text/css" href="vendors/animate.css">

    <!-- Swiper -->
    <link rel="stylesheet" type="text/css" href="vendors/swiper/css/swiper.min.css">

    <!-- Magnific-popup -->
    <link rel="stylesheet" type="text/css" href="vendors/magnific-popup/magnific-popup.css">

    <!-- Base MasterSlider style sheet -->
    <link rel="stylesheet" href="vendors/masterslider/style/masterslider.css" />
    
    <!-- Master Slider Skin -->
    <link href="vendors/masterslider/skins/default/style.css" rel='stylesheet' type='text/css'>

    
        
    <!-- Stylesheet -->
    <link rel="stylesheet" type="text/css" href="style.css">
    <link rel="stylesheet" type="text/css" href="style/menu_style.css">
    <link rel="stylesheet" type="text/css" href="st.css">

<style type="text/css">
    #con3{
        width: 800px;
      height: 400px;
    }

    #con3 img{
         height: 400px;
    }
    #vid{
      margin-left: 10%; 
    }
    
</style>


</head>

<body class="news-content">
<!--
    <div class="tana-loader">
        <div class="loader-content">
            <div class="loader-circle"></div>
            <div class="loader-line-mask">
                <div class="loader-line"></div>
            </div>
        </div>
    </div>-->
    <div class="wrapper">
        
        <header id="header" class="header-news">
            <div class="panel-header">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-12">
                            













                            <div class="header-wrapper">
<img src="images/f1.png"  width="150px" height="100px" style="margin-left:-40px;">
                                   
                                <div class="site-branding">

                                    <!-- image logo -->
<a href="index.php" rel="home" class="custom-logo-link" style="font-family: Arial;  letter-spacing: 5px;" >
                                     
&nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
&nbsp; &nbsp; &nbsp; 
 

                                  <b>    ОШ МЕДИЦИНАЛЫК КОЛЛЕДЖИ </b>

 </a>                                 <!-- text logo -->
                                    <!--
                                    <a href="index.html" rel="home" class="logo-text-link">Development Fruit</a>
                                    <p class="site-description">The Awesome WordPress Theme</p>
                                    -->
                                </div>

                                <div class="right-content">
                                    <div class="user-profile">
                                        

<a href="javascript:;" class="user-avatar">
<img src="images/admin/jelek.jpg" alt="user avatar">
</a>

                                    </div>
                                </div>

                            </div>

                        </div>
                    </div>
                </div>
            </div>
            <!-- <table>
<tr><td>
           <div   class="missia">
     <center>
            <div class="div_l" >
<b>МИССИЯ: «Окуучулардын жөндөмдүүлүгүн жана талантын өстүрүү аркылуу, инновация 
жана чыгармачылыкты өнүктүрүү менен сапаттуу билим берүүнү камсыздап, 
адептик баалуулуктарга ээ болгон, эмгек базарында керектелген, өлкөнүн 
өнүгүшүнө өзүнүн салымын кошо алган квалификациялуу жумушчу кадрларды 
даярдоо»</b>

  </div>
  <div class="div_v" ><hr class="hr_v"></div>

  <div class="div_l">
<b>МИССИЯ: «Обеспечивая качественное образование через инновации 
и развитие творчества, исходя из способностей и таланта учащихся,
 подготовка квалифицированных рабочих кадров, обладающих нравственными 
 ценностями, востребованных на рынке труда и умеющих внести свой вклад в 
 развитие страны» </b> 
  </div>
</center>
           </div>
       </td><tr>
       <tr><td><hr id="hr1"></td></tr>
</table> -->




<hr style="height: 1px; background-color: red;">


                          <div class="div_menu">
                    
                           
                                <ul class="menu">


<? $y=0;
$query = "SELECT * FROM menu";
$res1 = mysqli_query($connection,$query);
while($row =mysqli_fetch_array($res1)):
$cat1=$row['name'];
            $y++;
if ($y==1): 

            ?>

            <li class="">
<a href="index.php">
<? else: ?>
<li >
<a href="index.php?id=content2&cat=<? echo $row['name']; ?>
&tabl=menu_now">
<?endif; ?>
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

              
<li><a href="
index.php?id=content2&cat=<? echo $row3['pod_name']; ?>
&tabl=menu_now
"><span><? echo $row3['pod_name']; ?></span></a></li>
                    
<? endwhile; ?>
</ul> 
            </li>
            <? 
endif;
            endwhile; ?>


                                </ul>

                            </nav>                        
                        </div>
<hr style="height: 1px; background-color: red;">
                    <!--  -->
        </header>



<?  
$id=$_GET['id'];
if (empty($id)) {
   include "content.php";
}else{
    include $id.".php";
}

 ?>














        
                
    </div>
    <!-- end .container -->
</div>

<!-- .content-area -->


    <div class="clearfix"></div>

    <footer id="footer" class="footer-news ">
        
        <div class="container">


            





           
        </div>

            <div class="sub-footer">
                <div class="container">

                   <div class="missia1">
                       <div class="div_l1">
                        <table style="color: white;" ><tr><td style="width:37%;">
Полное наименование:     </td><td >_  </td></tr>
<tr><td>
Сокращённое название:  </td><td>   _ </td></tr><tr><td>
Год создания:            </td><td>             _</td></tr><tr><td>
Юридический адрес:     </td><td>        _         <br></td></tr>
</table>
                       </div>
                       
                        <div class="div_l1">
<table style="color: white;" ><tr><td style="width:20%;">
Телефоны:</td><td > _</td></tr><tr><td>
E – mail: </td><td >_</td></tr><tr><td>
Сайт:    </td><td > omk.kbb.kg</td></tr><tr><td>
Учредитель: </td><td >_

</td></tr>
            </table>           </div>

                   </div>
                    
                    
                    
                </div>
            </div>
    </footer>    </div>
    <!-- end .wrapper -->


    <!-- Include jQuery and Scripts -->
    <script type="text/javascript" src="js/jquery.min.js"></script>
    <script type="text/javascript" src="vendors/bootstrap/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="vendors/jquery.waypoints.min.js"></script>
    <script type="text/javascript" src="vendors/isotope.pkgd.min.js"></script>
    <script type="text/javascript" src="vendors/typed.min.js"></script>
    <script type="text/javascript" src="vendors/theia-sticky-sidebar.js"></script>
    <script type="text/javascript" src="vendors/circles.min.js"></script>
    <script type="text/javascript" src="vendors/jquery.stellar.min.js"></script>
    <script type="text/javascript" src="vendors/jquery.parallax.columns.js"></script>
    <script type="text/javascript" src="vendors/svg-morpheus.js"></script>

    <!-- Swiper -->
    <script type="text/javascript" src="vendors/swiper/js/swiper.min.js"></script>

    <!-- Magnific-popup -->
    <script type="text/javascript" src="vendors/magnific-popup/jquery.magnific-popup.min.js"></script>
    
    <!-- Master Slider -->
    <script src="vendors/masterslider/jquery.easing.min.js"></script>
    <script src="vendors/masterslider/masterslider.min.js"></script>
    
        
    <script type="text/javascript" src="js/scripts.js"></script>


</body>
</html>