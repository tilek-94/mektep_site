     
        

            <!-- end .container -->

    <section class="section-content single">

        <div class="container">
            <div class="row">

            <?
$tabl=$_GET['tabl'];
$cat=$_GET['cat'];

   $query = "SELECT * FROM $tabl ORDER BY id desc ";
$res1 = mysqli_query($connection,$query);
while($row =mysqli_fetch_array($res1)):



     ?> 
                <div id="con3_1">
                                

                        <div class="post first text-bigger hover-dark entry-media">
           
                        
                        <div id="con3" >  
 <img  src="images/<? echo $row['img']; ?>" alt="Post image"/>
                                  </div>
                        </div>
<h3>
 <? echo $row['title']; ?>
 </h3>



                        <div class="row">

                            
                            <!-- end .entry-details -->

                            <div class="col-md-10 entry-content">

<? echo substr ($row['text'], 0, 1000)."..."; ?>
                            </div>
                            <!-- end .entry-details -->

                        </div>
                   </div>

                
                <!-- end .col-md-9 -->
                
<form action="index.php?id=content2&cat=<? echo $row['id']; ?>
&tabl=<? echo $tabl; ?>" method="post">
<input type="submit" value="Толук маалымат">    
</form>
<hr>
<? endwhile; ?>






































                                
                                <!-- end .column -->
                            </div>
                            <!-- end .row -->
                        </div>
                        <!-- end .container -->


    </section>
    <!-- end .section-content -->

