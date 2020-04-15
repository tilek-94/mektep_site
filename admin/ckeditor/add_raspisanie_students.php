<?php
    define("fmit2017", true);
    session_start();
    if ($_SESSION['auth_admin'] == "yes_auth")
{

    if (isset($_GET["logout"]))
    {
        unset($_SESSION['auth_admin']);
        header("Location: login.php");
    }

    include ("includes/connect.php");

?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="img/fmit-ico.png">

    <title>ФМИТ башкаруу панели</title>

     <!-- Bootstrap CSS -->    
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <!-- bootstrap theme -->
    <link href="css/bootstrap-theme.css" rel="stylesheet">
    <!--external css-->
    <!-- font icon -->
    <link href="css/elegant-icons-style.css" rel="stylesheet" />
    <link href="css/font-awesome.min.css" rel="stylesheet" />    
    <!-- Custom styles -->
    <link href="css/style.css" rel="stylesheet">
    <link href="css/style-responsive.css" rel="stylesheet" />
    <!-- HTML5 shim and Respond.js IE8 support of HTML5 -->
    <!--[if lt IE 9]>
      <script src="js/html5shiv.js"></script>
      <script src="js/respond.min.js"></script>
      <script src="js/lte-ie7.js"></script>
    <![endif]-->
  </head>

  <body>
  <!-- container section start -->
  <section id="container" class="">

<?php 
include ("includes/header.php");
include ("includes/sidebar-menu.php");
?> 
      <!--main content start-->
      <section id="main-content">
          <section class="wrapper"> 
            <div class="row">
                <div class="col-lg-12">
                    <h3 class="page-header "><i class="fa fa-laptop"></i>Башкаруу панели</h3>
                    <ol class="breadcrumb">
                        <li><i class="fa fa-home"></i><a href="index.php">Башкы бет</a></li>
                        <li><a href="edit_raspisanie_students.php">Тайпалардын жадыбалын өзгөртүү</a></li>
                        <li><a style="color:#333;">Тайпалардын жадыбалын кошуу <i class="fa fa-plus"></i></a> </li>                         
                    </ol>
                </div>
            </div>           
            <div class="row">
            <div class="col-lg-12">
                   <?php 
                      if ($_SERVER ["REQUEST_METHOD"] == "POST")
                      {  
                          $group = $_POST["input_group"];                        
                          $gr = mysql_query("SELECT id FROM groups WHERE name = '$group'",$link);
                              if (mysql_num_rows($gr)>0)
                              {
                                 $groups = mysql_fetch_array($gr);
                              }

                          $text = $_POST['add_ras_students']; 

                              if ($text != "" && $groups["id"]!="")
                              {
                              
                                  $insert = mysql_query("INSERT INTO ras_students (text,group_id) 
                                   VALUES ('".$text."','".$groups["id"]."')",$link);  
                                        
                                echo '  <div class="alert alert-success"> 
                                          <h3 align="center" class="text-info">Жадыбал ийгиликтүү кошулду</h3>
                                        </div> 
                                     '; 
                              }else
                              {
                                echo '
                                        <div class="alert alert-danger">
                                           <h3 align="center" class="text-info"">Тайпаны тандаган жоксуз!</h3>
                                        </div>
                                     ';
                              }
                                
                      }     
                  ?>
                  <div id="raspisanieContent" class="tab-content">
                      <form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
                             <div class="form-group">
                                <select name="input_group" class="form-control">
                                   <option selected>Тайпаны тандаңыз</option>
                                  <?php 
                                       $result = mysql_query("SELECT * FROM groups ORDER BY name ASC",$link);
                                    if (mysql_num_rows($result) > 0)
                                    {
                                       $row = mysql_fetch_array($result); 
                                       do
                                       {
                                        echo '   
                                      <option>'.$row["name"].'</option>
                                             ';
                                       } while ($row = mysql_fetch_array($result)); 
                                      }
                                  ?> 
                                </select>
                            </div>
                            <?php
                                $result = mysql_query("SELECT text FROM ras_examples");
                                if (mysql_num_rows($result)>0)
                                {
                                  $row = mysql_fetch_array($result);
                                  echo '
                                          <div class="form-group">
                                             <textarea class="form-control" name="add_ras_students" id="add_ras">'.$row["text"].'</textarea>
                                          </div>
                                       ';
                                }
                            ?>
                             <div class="form-group" >
                                 <button class="btn btn-info">Кошуу</button>
                            </div>
                      </form>        
                  </div>
            </div>
            </div>
       </section>
      </section>
      <!--main content end-->
  </section>
  <!-- container section end -->

    <!-- javascripts -->
    <script src="js/jquery.js"></script>
    <script src="js/jquery-1.8.3.min.js"></script>
    <!-- bootstrap -->
    <script src="js/bootstrap.min.js"></script>
    <script src="ckeditor/ckeditor.js"></script> 
    <!-- nice scroll -->
    <script src="js/jquery.scrollTo.min.js"></script>
    <script src="js/jquery.nicescroll.js" type="text/javascript"></script>
    <script src="js/jquery.customSelect.min.js" ></script>
    <!-- nice scroll -->
    <script src="js/script.js"></script>
    <script src="js/jquery.autosize.min.js"></script>
    <script type="text/javascript">
           CKEDITOR.replace("add_ras_students");
    </script>
    
  </body>
</html>

<?php
}else
{
    header("Location: login.php");
}
?>