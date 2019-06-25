<?php
require 'assets/config/bootstrap.php';
include 'assets/inc/header.php';
$page_title = 'TchernoByLegassov - Administrateur';


?>
<main class="container body">

<section class="section section--horizontal">
	<div class="section__inner">
		<div class="products" id="productList">
			<!-- home page -->
			<div class="products__product section--horizontal">
				<div class="home__text">
					<h1 class="product__author"><span class="v">V</span>alerie Legasov</h1>
					<h2 class="product__date">1936 - 1938</h2>
					<h2 class="product__title"><a href="#two">L'envers du décor</a></h2>
					<a href="test.php">clique</a>
					<h2 class="product__title" id="firstArticle">L'envers du décor</h2>
					<div class="next"><a href="#two">></a></div>
				</div>
				<div class="blocHome"></div>
			</div>
			<div class="products__product section--horizontal" id="two">
				<div class="article--one">
					<div class="triangle">
						<img src="assets/images/triangle1.svg" alt="">
						<p class="triangle--text">
							<span class="bold">Valery Legasov</span> fut parmis les initiateurs du programme nucléaire soviétique.
						</p>
					</div>
					
					<div class="chapter">
					<div class="chapter chapter--relative">
						<div class="line">
							<div class="round">
								<p class="round--title">Un génie nucléaire</p>
							</div>
							<div class="round"></div>
							<div class="round is--in"></div>
							<div class="round"></div>
						</div>
						<div class="title--chapter">
							<p>Un génie du nucléaire</p>
						</div>
					</div>
				</div>
			</div>

		


		</div>

	</div>
</section>


</main>

<?php include 'assets/inc/footer.php'; ?>
