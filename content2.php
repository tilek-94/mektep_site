     <?
$tabl=$_GET['tabl'];
$cat=$_GET['cat'];
if ($tabl=="menu_now") {
   $query = "SELECT * FROM $tabl WHERE kat='{$cat}' ORDER BY id desc ";
$res1 = mysqli_query($connection,$query);
$row =mysqli_fetch_array($res1);
}else{

   $query = "SELECT * FROM $tabl WHERE id='{$cat}' ORDER BY id desc ";
$res1 = mysqli_query($connection,$query);
$row =mysqli_fetch_array($res1);
}


     ?> 
        

           <?
$tabl=$_GET['tabl'];
$cat=$_GET['cat'];
if ($tabl=="menu_now") {
   $query = "SELECT * FROM $tabl WHERE kat='{$cat}' ORDER BY id desc ";
$res1 = mysqli_query($connection,$query);
$row =mysqli_fetch_array($res1);
}else{

   $query = "SELECT * FROM $tabl WHERE id='{$cat}' ORDER BY id desc ";
$res1 = mysqli_query($connection,$query);
$row =mysqli_fetch_array($res1);
}


     ?> 
        

        <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="border-line mvt0"></div>
            </div>
        </div>
        <!-- end .row -->
    </div>
    <table><tr><td style="vertical-align: top;">

<div class="con1_l">
    
<h2 class="title" >
<? echo $row['kat']; ?>

 </h2>

 <div   >
<img style="width:<? echo $row['raz']; ?>px; " 
 src="images/<? echo $row['img']; ?>"  alt="Post image"/>
</div>

<h2 class="post-title">
 <? echo $row['title']; ?>
 </h2>

<? echo $row['text']; ?>

</div>
</td><td style="vertical-align: top;">
    

<?
$i=0;
   $query = "SELECT * FROM os_now ORDER BY id desc ";
$res1 = mysqli_query($connection,$query);
while($row =mysqli_fetch_array($res1)):
    $i++;
     ?> 


    <div class="con2">
    <div style="background-image: url(images/<? echo $row['img']; ?>);"  class="con21" >
        
    </div>
<h4><a href="index.php?id=content2&cat=<? echo $row['id']; ?>&tabl=os_now"> <? echo $row['title']; ?></a></h4>
</div>


<? 
if ($i==2) {
   break;
}

endwhile; ?>



<?
$i=0;
   $query = "SELECT * FROM now ORDER BY id desc ";
$res1 = mysqli_query($connection,$query);
while($row =mysqli_fetch_array($res1)):
    $i++;
     ?> 


    <div class="con2">
    <div style="background-image: url(images/<? echo $row['img']; ?>);"  class="con21" >
        
    </div>
<h4><a href="index.php?id=content2&cat=<? echo $row['id']; ?>&tabl=now"> <? echo $row['title']; ?></a></h4>
</div>


<? 
if ($i==2) {
   break;
}

endwhile; ?>

</td></tr></table>




























                                    

                                </div>
                                <!-- end .column -->
                            </div>
                            <!-- end .row -->
                        </div>
                        <!-- end .container -->


    </section>
    <!-- end .section-content -->

