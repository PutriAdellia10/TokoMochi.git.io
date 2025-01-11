<?php 
include 'header.php';
?>
<!-- GALLERY -->
<div class="container">
    <h2 style="width: 100%; border-bottom: 4px solid #ff8680; margin-top: 20px;"><b>CIMOCHINYA KAKA</b></h2>
    
    
    <div class="row">
    <?php 
        $images = glob("image/produk/8.jpg");
        for ($i = 0; $i < 6; $i++) {
            if(isset($images[$i])) {
                echo '<div class="col-sm-3 col-md-3">';
                echo '<div class="thumbnail">';
                echo '<img src="' . $images[$i] . '" style="width: 100%;">';
                echo '</div>';
                echo '</div>';
            }
        }
        ?>
        <?php 
        $images = glob("image/produk/9.jpg");
        for ($i = 0; $i < 6; $i++) {
            if(isset($images[$i])) {
                echo '<div class="col-sm-3 col-md-3">';
                echo '<div class="thumbnail">';
                echo '<img src="' . $images[$i] . '" style="width: 100%;">';
                echo '</div>';
                echo '</div>';
            }
        }
        ?>
        <?php 
        $images = glob("image/produk/10.jpg");
        for ($i = 0; $i < 6; $i++) {
            if(isset($images[$i])) {
                echo '<div class="col-sm-3 col-md-3">';
                echo '<div class="thumbnail">';
                echo '<img src="' . $images[$i] . '" style="width: 100%;">';
                echo '</div>';
                echo '</div>';
            }
        }
        ?>
        <?php 
        $images = glob("image/produk/7.jpg");
        for ($i = 0; $i < 6; $i++) {
            if(isset($images[$i])) {
                echo '<div class="col-sm-3 col-md-3">';
                echo '<div class="thumbnail">';
                echo '<img src="' . $images[$i] . '" style="width: 100%;">';
                echo '</div>';
                echo '</div>';
            }
        }
        ?>
        <?php 
        $videos = glob("video/media2.mp4");
        for ($i = 0; $i < 4; $i++) {
            if(isset($videos[$i])) {
                echo '<div class="col-sm-3 col-md-3">';
                echo '<div class="thumbnail">';
                echo '<video controls style="width: 100%;">';
                echo '<source src="' . $videos[$i] . '" type="video/mp4">';
                echo 'Your browser does not support the video tag.';
                echo '</video>';
                echo '</div>';
                echo '</div>';
            }
        }
        ?>
        <?php 
        $videos = glob("video/media3.mp4");
        for ($i = 0; $i < 4; $i++) {
            if(isset($videos[$i])) {
                echo '<div class="col-sm-3 col-md-3">';
                echo '<div class="thumbnail">';
                echo '<video controls style="width: 100%;">';
                echo '<source src="' . $videos[$i] . '" type="video/mp4">';
                echo 'Your browser does not support the video tag.';
                echo '</video>';
                echo '</div>';
                echo '</div>';
            }
        }
        ?>
        <?php 
        $videos = glob("video/media4.mp4");
        for ($i = 0; $i < 4; $i++) {
            if(isset($videos[$i])) {
                echo '<div class="col-sm-3 col-md-3">';
                echo '<div class="thumbnail">';
                echo '<video controls style="width: 100%;">';
                echo '<source src="' . $videos[$i] . '" type="video/mp4">';
                echo 'Your browser does not support the video tag.';
                echo '</video>';
                echo '</div>';
                echo '</div>';
            }
        }
        ?>
        <?php 
        $videos = glob("video/media5.mp4");
        for ($i = 0; $i < 4; $i++) {
            if(isset($videos[$i])) {
                echo '<div class="col-sm-3 col-md-3">';
                echo '<div class="thumbnail">';
                echo '<video controls style="width: 100%;">';
                echo '<source src="' . $videos[$i] . '" type="video/mp4">';
                echo 'Your browser does not support the video tag.';
                echo '</video>';
                echo '</div>';
                echo '</div>';
            }
        }
        ?>
    </div>

    <h2 style="width: 100%; border-bottom: 4px solid #ff8680; margin-top: 40px;"><b>Testimoni</b></h2>
    <div class="row">
    <?php 
        $images = glob("image/testi/3.jpg");
        for ($i = 0; $i < 6; $i++) {
            if(isset($images[$i])) {
                echo '<div class="col-sm-3 col-md-3">';
                echo '<div class="thumbnail">';
                echo '<img src="' . $images[$i] . '" style="width: 100%;">';
                echo '</div>';
                echo '</div>';
            }
        }
        ?>
        <?php 
        $images = glob("image/testi/1.jpg");
        for ($i = 0; $i < 6; $i++) {
            if(isset($images[$i])) {
                echo '<div class="col-sm-3 col-md-3">';
                echo '<div class="thumbnail">';
                echo '<img src="' . $images[$i] . '" style="width: 100%;">';
                echo '</div>';
                echo '</div>';
            }
        }
        ?>
        <?php 
        $images = glob("image/testi/5.jpg");
        for ($i = 0; $i < 6; $i++) {
            if(isset($images[$i])) {
                echo '<div class="col-sm-3 col-md-3">';
                echo '<div class="thumbnail">';
                echo '<img src="' . $images[$i] . '" style="width: 100%;">';
                echo '</div>';
                echo '</div>';
            }
        }
        ?>
        <?php 
        $images = glob("image/testi/4.jpg");
        for ($i = 0; $i < 6; $i++) {
            if(isset($images[$i])) {
                echo '<div class="col-sm-3 col-md-3">';
                echo '<div class="thumbnail">';
                echo '<img src="' . $images[$i] . '" style="width: 100%;">';
                echo '</div>';
                echo '</div>';
            }
        }
        ?>
        <?php 
        $videos = glob("image/testi/vid1.mp4");
        for ($i = 0; $i < 4; $i++) {
            if(isset($videos[$i])) {
                echo '<div class="col-sm-3 col-md-3">';
                echo '<div class="thumbnail">';
                echo '<video controls style="width: 100%;">';
                echo '<source src="' . $videos[$i] . '" type="video/mp4">';
                echo 'Your browser does not support the video tag.';
                echo '</video>';
                echo '</div>';
                echo '</div>';
            }
        }
        ?>
        <?php 
        $videos = glob("image/testi/vid2.mp4");
        for ($i = 0; $i < 4; $i++) {
            if(isset($videos[$i])) {
                echo '<div class="col-sm-3 col-md-3">';
                echo '<div class="thumbnail">';
                echo '<video controls style="width: 100%;">';
                echo '<source src="' . $videos[$i] . '" type="video/mp4">';
                echo 'Your browser does not support the video tag.';
                echo '</video>';
                echo '</div>';
                echo '</div>';
            }
        }
        ?>
        <?php 
        $videos = glob("image/testi/vid3.mp4");
        for ($i = 0; $i < 4; $i++) {
            if(isset($videos[$i])) {
                echo '<div class="col-sm-3 col-md-3">';
                echo '<div class="thumbnail">';
                echo '<video controls style="width: 100%;">';
                echo '<source src="' . $videos[$i] . '" type="video/mp4">';
                echo 'Your browser does not support the video tag.';
                echo '</video>';
                echo '</div>';
                echo '</div>';
            }
        }
        ?>
        <?php 
        $videos = glob("image/testi/vid4.mp4");
        for ($i = 0; $i < 4; $i++) {
            if(isset($videos[$i])) {
                echo '<div class="col-sm-3 col-md-3">';
                echo '<div class="thumbnail">';
                echo '<video controls style="width: 100%;">';
                echo '<source src="' . $videos[$i] . '" type="video/mp4">';
                echo 'Your browser does not support the video tag.';
                echo '</video>';
                echo '</div>';
                echo '</div>';
            }
        }
        ?>
    </div>
</div>
<br><br>
<?php 
include 'footer.php';
?>
