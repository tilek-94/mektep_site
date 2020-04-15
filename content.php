
<div class="content-area pvt0">
    <div class="container">

       <!--  
        <div class="row">
 -->


<? 
$query = "SELECT * FROM now ORDER BY id DESC";
$res1 = mysqli_query($connection,$query);
$row =mysqli_fetch_array($res1);
   
?>

 <div style="background-image: url(images/<? echo $row['img']; ?>);
 background-size: cover;
background-position: center;
ba
width: 100%;
height: 400px;
 " >
     

   </div>
       <hr style="height: 3px; background-color: black;">
        <!-- end .row -->
        
<div class="row">
<div class="col-sm-12">
<div class="news-block parallax-columns-container">
<div class="row">

<div class="col-sm-3 col-md-4 parallax-col-wrap">
<div class="parallax-column">
<h3 class="title-middle title-border text-center">Жаңылыктар</h3>
<div class="category-block articles trending row">

<? 
$i=0;
$query = "SELECT * FROM left_now ORDER BY id DESC";
$res1 = mysqli_query($connection,$query);
while($row =mysqli_fetch_array($res1)):
   $i++;
?>


<div class="col-xs-6 col-sm-12">
<div class="post hover-light" >
<span class="fancy-number"></span>
<a href="">
<div  class="im1" style="background-image: url(images/<? echo $row['img'];?>">


</div>
</a>
<h5 ><a href="index.php?id=content2&cat=<? echo $row['id']; ?>
&tabl=left_now">
<? echo $row['title']; ?></a></h5>
</div>
</div>
<? 
if ($i==6) {
    break;
}
endwhile; ?>
<form action="index.php?tabl=left_now&id=content3"  method="post">

<input type="submit" value="Кененирээк">
</form>
<hr>
</div>
</div>


</div>
                    <!-- end .col-4 -->

<div class="col-sm-6 col-md-8">

<div class="parallax-content">









<div class="row">
<? $t=0;
$f1=0;
$query = "SELECT * FROM os_now ORDER BY id DESC";
$res1 = mysqli_query($connection,$query);
while($row =mysqli_fetch_array($res1)):
   $f1++;
   $t++;
if ($t==1):
?>


<div class="col-md-6">
<div class="category-block articles">
<div class="post first hover-dark">
<a href="">
<div class="image" data-src="images/<? echo $row['img']; ?>">
<img src="images/5x3.png" alt="Proportion"/>
</div>
</a>
<div class="meta">
</div>
<h4 style="font-size:1em;"><a href="
index.php?id=content2&cat=<? echo $row['id']; ?>
&tabl=os_now
">
<? echo substr ($row['title'], 0,250)."..."; ?>


</a></h4>
<p>

</p>
</div>
      <? 
else:
  $t=0;

      ?>                                  
<div class="post first hover-dark">
 <a href="">
<div class="image" data-src="images/<? echo $row['img']; ?>">
<img src="images/5x3.png" alt="Proportion"/>
</div>
</a>
<div class="meta">

</div>
<h4 style="font-size:1em;"><a href="index.php?id=content2&cat=<? echo $row['id']; ?>
&tabl=os_now">
<? echo substr ($row['title'], 0,150)."..."; ?>
</a></h4>
<p>

</p>
</div>
</div>




<?
echo "</div>"; 
endif;
if ($f1==4) {
    break;
}
endwhile; 
if ($t==1) {
   echo"</div>"; 

}
?>





</div>
<form action="index.php?tabl=os_now&id=content3"  method="post">

<input type="submit" value="Калган маалыматтар">
</form>
<hr>







<div class="row">
<div class="col-sm-12 mv3 mvt0">
<a href="#">
<img src="img/545456446546.JPG" alt="banner" class="full-size">
</a>
</div>
</div>


<div class="row">
<?
$tf=0;
$query = "SELECT * FROM video ORDER BY id DESC";
$res1 = mysqli_query($connection,$query);
while($row =mysqli_fetch_array($res1)):
    $tf++;
$foto= $row['img'];
$title= $row['title'];
$text= $row['text'];
$video1= $row['video'];
if($tf==1):
?>
<div class="category-block articles">
<div class="col-xs-6 col-sm-6 col-md-3">
<div class="post hover-light">
<div class="image video-frame" data-src="images/<? echo $foto; ?>"> <!-- https://www.youtube.com/watch?v=AJtDXIazrMo -->
<img src="images/1x1.png" alt="Proportion"/>
<a class="video-player video-player-small video-player-inside" href="<? echo $video1; ?>"></a>
</div>
</div>
</div>

<?
elseif ($tf==2):
?>


<div class="col-xs-6 col-sm-6 col-md-3">
<div class="post hover-light">
<div class="image video-frame" data-src="images/<? echo $foto; ?>">
<img src="images/1x1.png" alt="Proportion"/>
<a class="video-player video-player-small video-player-inside" href="<? echo $video1; ?>"></a>
</div>
</div>
</div>

<?
elseif ($tf==3):
?>

<div class="col-xs-6 col-sm-6 col-md-3">
<div class="post hover-light">
<div class="image video-frame" data-src="images/<? echo $foto; ?>">
<img src="images/1x1.png" alt="Proportion"/>
<a class="video-player video-player-small video-player-inside" href="<? echo $video1; ?>"></a>
</div>
</div>
</div>
            <?
elseif ($tf==4):
?>                        
                                                                        <div class="col-xs-6 col-sm-6 col-md-3">
<div class="post hover-light">
<div class="image video-frame" data-src="images/<? echo $foto; ?>">
<img src="images/1x1.png" alt="Proportion"/>
<a class="video-player video-player-small video-player-inside" href="<? echo $video1; ?>"></a>
</div>
</div>
</div>
</div>
</div>
<?
elseif ($tf==5):
?>

<div class="row">
<div class="category-block articles">
<div class="col-md-12">
<div class="post first text-bigger hover-dark">
<div class="image video-frame" data-src="images/<? echo $foto; ?>">
<img src="images/5x3.png" alt="Proportion"/>
<a class="video-player video-player-center video-player-large" href="<? echo $video1; ?>"></a>
</div>
<div class="meta font16">
<span class="author"></span>
<span class="date"></span>
</div>
<h4><a href=""><? echo $title; ?></a></h4>
<p>
    <? echo $text; ?>

</p>
</div>
</div>
</div>
</div>
<?
endif;
endwhile;
?>
<form action="index.php?id=video"  method="post">

<input type="submit" value="Башка видеолор">
</form>
<hr>
</div>
                     <!-- end .parallax-column -->

                    </div>
                    <!-- end .col-8 -->



 

<hr>                   <!-- end .col-4 -->


                    <div class="col-sm-12">
                        <div class="border-line mv3"></div>
                    </div>

                </div>
                <!-- end row -->
            </div>
            <!-- end .news-block -->
        </div>

    </div>
