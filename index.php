<?php
require 'assets/config/bootstrap.php';
include 'assets/inc/header.php';
$page_title = 'TchernoByLegassov - Administrateur';


?>
<main class="container">

	<section class="section">
			<video poster="assets/images/poster.jpg" muted  autoplay loop class="bgvid" >
				<source src="assets/videos/intro.mp4" type="video/mp4">
			</video>

			<button class="vidpause">Pause</button>

			<button class="scroll">scroll</button>

	</section>

	<section class="section section--horizontal">
  <div class="section__inner">
    <div class="products">
      <div class="products__product">
        Product 1
      </div>
      <div class="products__product">
        Product 2
      </div>
      <div class="products__product">
        Product 3
      </div>
    </div>
  </div>
	</section>

</main>







<?php include 'assets/inc/footer.php'; ?>
