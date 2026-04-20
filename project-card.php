<?php $totalProjects = count($project); ?>

<div class="row animation-action-3">

<?php 
$count = 0;
foreach($project as $key => $p): 
if($count < 4):
?>

<div class="col-lg-6 col-md-6 paralax-image">

<div class="latest-portfolio-card-style-two image-box-hover tmponhover"
data-bs-toggle="modal"
data-bs-target="#projectModal-<?php echo $key; ?>">

<div class="portfoli-card-img">
<div class="img-box v2">
<img class="w-100" src="<?php echo $p['hero_img']; ?>">
</div>
</div>

<div class="portfolio-card-content-wrap">
<div class="content-left">
<h3 class="portfolio-card-title"><?php echo $p['title']; ?></h3>
<p style="font-size:14px;opacity:.8;"><?php echo $p['subtitle']; ?></p>
</div>
</div>

</div>

</div>

<?php 
$count++;
endif;
endforeach; 
?>

</div>

<?php if($totalProjects > 4): ?>

<!-- Hidden Projects -->
<div id="moreProjects" style="display:none;">
<div class="row">

<?php 
$count = 0;
foreach($project as $key => $p): 
if($count >= 4):
?>

<div class="col-lg-6 col-md-6 paralax-image">

<div class="latest-portfolio-card-style-two image-box-hover tmponhover"
data-bs-toggle="modal"
data-bs-target="#projectModal-<?php echo $key; ?>">

<div class="portfoli-card-img">
<div class="img-box v2">
<img class="w-100" src="<?php echo $p['hero_img']; ?>">
</div>
</div>

<div class="portfolio-card-content-wrap">
<div class="content-left">
<h3 class="portfolio-card-title"><?php echo $p['title']; ?></h3>
<p style="font-size:14px;opacity:.8;"><?php echo $p['subtitle']; ?></p>
</div>
</div>

</div>

</div>

<?php 
endif;
$count++;
endforeach; 
?>

</div>
</div>

<!-- Button -->
<div class="text-center mt-4" id="viewMoreBtn">
<button class="tmp-btn btn-border" onclick="showMore()">View More</button>
</div>

<?php endif; ?>

<script>
function showMore(){
 document.getElementById("moreProjects").style.display="block";
 document.getElementById("viewMoreBtn").style.display="none";
}
</script>
