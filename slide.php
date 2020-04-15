<div class="col-md-12">

                <!-- template -->
                <div class="news-slider news-block mv5 mvt0">

                    <!-- masterslider -->
                    <div class="master-slider ms-skin-default" id="masterslider1">

    


<? 

$query = "SELECT * FROM now ORDER BY id Desc";
$res1 = mysqli_query($connection,$query);
while($row =mysqli_fetch_array($res1)):
   
?>

<div class="ms-slide" data-delay="0">
<img src="vendors/masterslider/style/blank.gif" data-src="images/<? echo $row['img'];?>" alt="Image"/>
                            <div class="ms-thumb post hover-zoom">
                                <div class="image" data-src="images/<? echo $row['img'];?>"></div>
                                <div class="thumb-meta">
                                    <div class="meta">
                                        <span class="author"><? echo date("d-m-Y"); ?></span>
                                        <span class="date"></span>
                                    </div>
                                    <h4><? echo $row['title'];?></h4>
                                </div>
                            </div>
                            
<div class="ms-layer box" data-delay="0" data-effect="bottom(45)"
style="background-color: rgba(255,255,255,0.5); "
 data-duration="300" data-ease="easeInOut">

                                <div class="meta animate-element" data-anim="fadeInUp">
                                    <span class="author"><? echo $row['date'];?></span>
                                    
                                </div>
                                <h4 class="animate-element" data-anim="fadeInUp" style="font-size:2em;" >

                    <a href="index.php?id=content2&cat=<? echo $row['id']; ?>
&tabl=now"><? echo $row['title'];?></a></h4>
                                <p class="animate-element" data-anim="fadeInUp"></p>

                            </div>

                        </div>


<?  endwhile; ?>


                    <!-- end of masterslider -->

                </div>
                <!-- end of template -->

            </div>
            <!-- end col-md-12 -->

        </div>