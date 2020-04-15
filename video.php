
<?
$query = "SELECT * FROM video";
$res1 = mysqli_query($connection,$query);
while($row =mysqli_fetch_array($res1)):
  
$foto= $row['img'];
$title= $row['title'];
$text= $row['text'];
$video1= $row['video'];
?>

<div class="row" id="vid">
<div class="category-block articles">
<div class="col-md-7">
<div class="post first text-bigger hover-dark">
<div class="image video-frame" data-src="images/<? echo $foto; ?>">
<img src="images/5x3.png" alt="Proportion"/>
<a class="video-player video-player-center video-player-large" href="<? echo $video1; ?>"></a>
</div>
<a href="single.html"><? echo $title; ?></a>
<p>
    <? echo $text; ?>

</p>
</div>
</div>
</div>
</div>
<? endwhile; ?>