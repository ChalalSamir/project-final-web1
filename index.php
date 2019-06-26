<?php
require 'assets/config/bootstrap.php';
include 'assets/inc/header.php';
$page_title = 'TchernoByLegassov - Administrateur';


?>
<main class="container body">

<section class="section section--horizontal" id="chapterOne">
<div class="chapter chapter--art2" id="chapter">
          <div class="line">
            <div class="line line__in" id="line__in"></div>
            <div class="round is--in">
            <p class="round--title" id="roundOne">Un génie nucléaire</p>
            </div>
            <div class="round">
            <p class="round--title">Tchernobyl</p>
            </div>
            <div class="round">
              <p class="round--title">Un rapport alarmant</p>
            </div>
            <div class="round">
              <p class="round--title">Politique</p>
          </div>
          <div class="round">
              <p class="round--title">La mort de Legasov</p>
          </div>
          </div>
        </div>
      </div>
	<div class="section__inner">
		<div class="products" id="productList">
			<!-- home page -->
			<div class="products__product section--horizontal">
				<div class="home__text">
					<h1 class="product__author"><span class="v">V</span>alerie Legasov</h1>
					<h2 class="product__date">1936 - 1938</h2>
					<h2 class="product__title" id="firstArticle">L'envers du décor</h2>
					<div class="next"><a href="#one"><img src="assets/images/arrow.svg" alt="arrowNext"></a></div>
				</div>
				<div class="blocHome"></div>
      </div>
      
      <!-- end homepage -->
			<div class="products__product section--horizontal">
				<div class="article--one" id="one">
					<div class="triangle">
						<img src="assets/images/triangle1.svg" alt="">
						<p class="triangle--text">
							<span class="bold">Valery Legasov</span> fut parmis les initiateurs du programme nucléaire soviétique.
						</p>
					</div>
			</div>
		</div>

	</div>
</section>


<div class="article--two">
      <div class="right">
    <h2 id="date"></h2>
    <p id="paragraphOne"></p>
  </div>
        
<!-- 2 -->
<div class="article--two bg2">
      <div class="postit" id="postit">
          <div class="postit__in">
          </div>
      </div>
      <div class="postit postit--open hidden" id="postitTwo">
        <i id="close">X</i>
         <p id="paragraphTwo" >
         </p>
      </div>
</div>
<!-- 3 -->
<div class="article--two bg3">
       <div class="notes close" id="notes">
       <p id="notes--text">
         </p>
       </div>
</div>
  </main>


</main>

<?php include 'assets/inc/footer.php'; ?>
