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
          <div class="cursor" id="cursor"></div>
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
<section class="section section--horizontal">
	<div class="section__inner">
		<div class="products" id="productList">
			<!-- home page -->
			<div class="products__product1 section--horizontal">
        <div class="notes close" id="notes">
        <p id="notes--text">
          </p>
        </div>
      </div>

			<div class="products__product2 section--horizontal">
        <div class="articleTwo">
        <h1 class="articleTwo__title">Tchernobyl</h1>
        <div class="titleContainer"></div>
        </div>
			</div>

		</div>
	</div>
</section>


<div class="articleTwo__page2">
      <h1 class="page2__title">Tchernobyl</h1>
      <div class="page2__titleContainer"></div>
        <div class="typrewritter">
        <p class="css-typing">
        Le 26 avril 1986 à 1h23 du matin,
        </p>
        </div>
  </div>

<div class="articleTwo__page3">

    <div class="page3__video"></div>

    <div class="page3__text">
        
        <div class="text__1">
            <p>Le réacteur n°4 de la centrale nucléaire de Tchernobyl explose</p>
            <div class="chemin2"></div>
        </div>

        <div class="text__2">
            <p>suite à un test du système de refroidissement de secours</p>
            <div class="chemin1"></div>
        </div>
        
        
    </div>
</div>

<div class="articleTwo__page4">

  <div class="page4__cheminContaint">
    <div class="chemin3"></div>
    <div class="chemin4"></div>
    <div class="chemin5"></div>
    <div class="chemin6"></div>
    <div class="chemin7"></div>

  </div>

  <div class="page__article4">
    <img src="assets/images/article2-p4.png" alt="" class="article4__img">
    <div class="article4__text">
      <p> 12 heures après l’explosion de la  
          centrale,  M. Legasov a été nommé à la commission   
          spéciale du gouvernement </p>

      <p>Les 2 premiers jours aucune information n’est communiquée  au gouvernement de l’URSS, alors paralysé dans ses décisions
</p>
    </div>
  </div>
  
</div>



</main>

<?php include 'assets/inc/footer.php'; ?>
