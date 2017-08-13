<header class="masthead">
  <div id="carousel" class="carousel slide" data-ride="carousel">
    <div class="carousel-inner" role="listbox">
      <?php
        $dir    = './img/banners/';
        $banners = array_diff(scandir($dir), array('..', '.'));
        if (sizeof($banners) > 0){
          foreach ($banners as $key => $banner) {
            if ($key == 2){
              echo '<div class="carousel-item active">';
            } else{
              echo '<div class="carousel-item">';
            }
            echo '<img class="d-block img-fluid" src="img/banners/' . $banner . '">';
            echo '</div>';
          }
        }
      ?>
    </div>
    <a class="carousel-control-prev" onclick="$('#carousel').carousel('prev')">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" onclick="$('#carousel').carousel('next')">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>
</header>
