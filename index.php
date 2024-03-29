<?php
require 'assets/config/bootstrap.php';
include 'assets/inc/header.php';
?>

<main class="container body">
  <section class="section section--horizontal" id="chapterOne">
        <div class="cursor" id="cursor"></div>

        <div class="sound" id="sound">
          <div class="sound__stop">
              <span><img src="assets/images/sound.svg" alt="soundMute"></span>
          </div>
        </div>

        <div class="chapter chapter--art2" id="chapter">
            <div class="line">
              <!-- <div class="line line__in" id="line__in"></div> -->
              <div class="round" id="round__one">
                <a href="#one"><p class="round--title" id="roundOne"></p></a>
              </div>
              <div class="round" id="round__two">
                <a href="#two"><p class="round--title" id="roundTwo"></p></a>
              </div>
              <div class="round" id="round__three">
                <a href="#three"> <p class="round--title" id="roundThree"></p></a>
              </div>
              <div class="round" id="round__four">
                <a href="#four"><p class="round--title" id="roundFour"></p></a>
              </div>
              <div class="round" id="round__five">
                <a href="#five"><p class="round--title" id="roundFive"></p></a>
              </div>

          </div>
        </div>

        <div class="section__inner">
          <div class="products" id="productList">
            <!-- home page -->
            <div class="products__product section--horizontal">
              <div class="home__text">
                <h1 class="product__author"><span class="v">V</span>aleri Legassov</h1>
                <h2 class="product__date">1936 - 1988</h2>
                <h2 class="product__title" id="firstArticle">L'envers du décor</h2>
                <div class="next"><a href="#one"><img src="assets/images/arrow.svg" alt="arrowNext"></a></div>
              </div>
              <div class="blocHome"></div>
            </div>
        
        <!-- end homepage -->

        <!-- DEBUT ARTCILE 1 -->
          <div class="products__product section--horizontal">
            <div class="article--one" id="one">
              <div class="triangle">
                <img src="assets/images/triangle1.svg" alt="">
                <p class="triangle--text">
                  <span class="bold">Valeri Legassov</span> est l’un des initiateurs du programme nucléaire soviétique.
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

<!-- FIN ARTCILE 1 -->


<!--  DEBUT ARTCILE 2 -->

<!-- 3 -->
<section class="section section--horizontal">
	<div class="section__inner" id="two">
		<div class="products" id="productList">
			<!-- home page -->
			<div class="products__product1 section--horizontal">
        <div class="notes close" id="notes">
        <p id="paragraphThree"></p>
        </div>
      </div>

			<div class="products__product2 section--horizontal" id="teddy">
        <div class="article_Two">
        <h1 class="articleTwo__title" id="titleArticleTwo"></h1>
        <div class="titleContainer"></div>
        </div>
			</div>

		</div>
	</div> 
</section>

<div class="articleTwo__page2">
      <div class="page2__titleContainer"></div>
        <div class="typrewritter">
        <p class="css-typing" id="dateArticleTwo"></p>
        </div>
</div>

<div class="articleTwo__page3">

    <div class="page3__video">
      <video class="article2__video1" controls>
        <source src="assets/videos/article2-video1.mp4" type="video/mp4">

      </video>
    </div>

    <div class="page3__text">
        <div class="text__1">
            <p id="paragraphOneArticleTwo"></p>
            <div class="chemin chemin2"></div>
        </div>
        <div class="text__2">
            <p id="paragraphTwoArticleTwo"></p>
            <div class="chemin chemin1"></div>
        </div>
    </div>
</div>

<div class="articleTwo__page4">
  <div class="page4__cheminContaint">
    <div class="chemin chemin3"></div>
    <div class="chemin chemin4"></div>
    <div class="chemin chemin5"></div>
    <div class="chemin chemin6"></div>

  </div>

  <div class="page__article4">

    <img src="assets/images/article2-p4.png" alt="" class="article4__img">

    <div class="article4__text">
      <p id="paragraphThreeArticleTwo"> </p>

      <p id="paragraphFourArticleTwo"></p>

    </div>

  </div>
  
</div>

<section class="section section--horizontal">
	<div class="section__inner">
		<div class="products" id="productList">
    <div class="chemin chemin8"></div>
			<!-- home page -->
			<div class="products__product3 section--horizontal">
        <div class="typrewritter--1">
          <p class="css-typing--1" id="paragraphFiveArticleTwo"></p>
        </div>

       
      </div>

			<div class="products__product3 section--horizontal">
        <div class="page3__video">
        <video controls width="950" poster="./assets/images/poster1.png">

          <source src="./assets/videos/article2-video2.mp4" type="video/mp4">
        </video>
        </div>
      </div>

		</div>
	</div> 
</section>

<div class="articleTwo__page6">
  <div class="chemin chemin9"></div>
  <div class="chemin chemin10"></div>
  <div class="chemin chemin11"></div>
  <div class="chemin chemin12"></div>
    <div class="page6Container">

    <img src="assets/images/page6__image.png" alt="" class="page6__image">

    <div class="page6__text">
      <p id="paragraphSixArticleTwo"></p>

      <p id="paragraphSevenArticleTwo"></p>
    </div>
    </div>
  </div>
</div>

<div class="articleTwo__page7">
  <div class="chemin chemin13"></div>
  <div class="chemin chemin14"></div>

  <p class="page7__text" id="paragraphEightArticleTwo">

  </p>

</div>
<section class="section section--horizontal">
	<div class="section__inner">
		<div class="products" id="productList">

			<div class="products__product3 section--horizontal">
        <div class="articleTwo__page8">
          <div class="chemin chemin15"></div>
          <p id="paragraphNineArticleTwo"></p>  
        </div>    
      </div>
<!-- FIN ARTICLE 2 -->

      <div class="products__product5 section--horizontal">
        <div class="first_title">
          <h1 id="titleArticleThree"></h1>
          <div></div>
        </div>
      </div>

    </div>
  </div>     
</section>

  <section class="second">
    <div class="second__image">
      <div class="second__text">
        <p id="contentArticleThree"></p>
        <p id="dateArticleThree"></p>
      </div>
        <img src="assets/images/image1.png" alt="image"/>
    </div>
  </section>

  <section class="three">
    <div class="three_text">
      <p id="paragraphOneArticleThree"></p>
      <p id="paragraphTwoArticleThree" class="three_text--second"></p>
      <div></div>
    </div>
  </section>

  <section class="foor">
    <div class="foor_circle">
    <p class="foor_circle_number">1</p>
    </div>
    <h1 id="paragraphThreeArticleThree"></h1>
    <div class="foor__image">
    <img src="assets/images/image 2.png" alt="image" />
    <div class="foor_text">
    <p id="paragraphFourArticleThree"></p>
    <p id="paragraphFiveArticleThree"></p>
    </div>
    </div>
  </section>

  <section class="section section--horizontal">
      <div class="section__inner">
        <div class="products" id="productList">

        <div class="products__product3 section--horizontal">
          
            <div class="five_circle">
              <h1 class="five_circle_number">2</h1>
            </div>

            <p class="five_title" id="paragraphSixArticleThree"></p>

            <h2 class="five__subtitle" id="paragraphSevenArticleThree"></h2>

            <ul class="five__containt">
              <li id="paragraphEightArticleThree"></li>
              <li id="paragraphNineArticleThree"></li>
              <li id="paragraphTenArticleThree"></li>
              <li id="paragraphElevenArticleThree"></li>
              <li id="paragraphTwelveArticleThree"></li>
            </ul>
        </div>

        <div class="products__product6 section--horizontal">
          <div class="first_div"> 
            <h1 id="titleArticleFour"></h1>
            <div></div>
          </div>
        </div>

      </div>
    </div> 
  </section>

  <section class="second">
    <div class="second_div">
    <p id="contentArticleFour"></p>
    </div>
  </section>


  <section class="section section--horizontal" style="width: 500vw;">
      <div class="section__inner" style="width: 500vw;">
        <div class="products" id="productList">

        <div class="products__product7 section--horizontal">
          <section class="three">
            <div class="three_div">
            <p class="three_text-first" id="dateArticleFour"></p>

            <p class="three_text-second" id="paragraphOneArticleFour"></p>

            <p class="three_text-three" id="paragraphTwoArticleFour"></p>
            </div>
          </section> 
        </div>

        <div class="products__product6 section--horizontal">
          <img class="section4__image" src="assets/images/rectangle3.png" alt="">
          <p class="section4__text" id="paragraphThreeArticleFour">
          
          </p>
        </div>

        <div class="products__product6 section--horizontal">
          <img class="section5__image" src="assets/images/rectangle4.png" alt="">
          <p class="section5__text" id="paragraphFourArticleFour">
          
          </p>
          <img src="assets/images/article4--image1.png" alt="" class="section5__image1">
          <p class="section5__text1" id="paragraphFiveArticleFour">
          </p>
        </div>

        <div class="products__product6 section--horizontal">
          <img class="section6__image" src="assets/images/rectangle3.png" alt="">
          <p class="section6__text" id="paragraphSixArticleFour">
          </p>

          <img src="assets/images/article4--image2.png" alt="" class="section6__image1">
          <img src="assets/images/article4--image3.png" alt="" class="section6__image2">
          <div class="textContaint">
            <p class="textContaint__text" id="paragraphSevenArticleFour"></p>
          </div>
        </div>

        <div class="products__product6 section--horizontal">
          <div class="product--video">
          <video id="bgvid" src="./assets/videos/liquidateurs_1.mp4" controls loop></video>
          </div>
        </div>

      </div>
    </div> 
  </section> 

  <section class="section7">

<div class="itemsContaint">
<div class="section7__items">
  <h1 class="items__title1">Ukraine</h1>
  <p class="numbers1">360.000</p>
</div>
<div class="section7__items">
<h1 class="items__title2">Autres</h1>
  <p class="numbers2">90.000</p>
</div>
<div class="section7__items">
<h1 class="items__titl3">Liquidateurs</h1>
  <p class="total">Total</p>
  <p class="numbers3">830.000</p>
</div>
<div class="section7__items">
<h1 class="items__title4">Russie</h1>
  <p class="numbers4">250.000</p>
</div>
<div class="section7__items">
<h1 class="items__title5">Biélorussie</h1>
  <p class="numbers5">130.O00</p>
</div>
</div>
</section>

<section class="section section--horizontal">
  <div class="section__inner">
    <div class="products" id="productList">

      <div class="products__product9 section--horizontal">
        <section class="section7__page2">
          <div class="page2__containt">

            <h1 class="page2__title1">KGB</h1>
            <div class="page2_text1">
              <p id="paragraphEightArticleFour"></p>
            </div>
            <div class="page2_text2">
              <p id="paragraphNineArticleFour"></p>
            </div>
            <div class="page2_text3">
              <p id="paragraphTenArticleFour"></p>
            </div>
          </div>
          <div class="page2__images">
            <img src="assets/images/section7--image1.png" alt="" class="page2__image1">
            <img src="assets/images/section7--image2.png" alt="" class="page2__image2">
          </div>
          
        </section>
    </div>

    <div class="products__product8 section--horizontal">
      <section class="articleFive_first">
        <div class="articleFive_first_div">
        <h1><span class="articleFive_first_margin">Mort de</span> Legassov</h1>
        </div>
      </section>
    </div>

    </div>
  </div> 
</section>

<section class="articleFive_for">
  <div class="articleFive_for_div">
  <p>Il enregistre alors un testament dans
      lequel il dévoile toute la <span class="span_font-articleFive">vérité sur Tchernobyl</span>.</p>
  </div>
</section>

<section class="articleFive_five">
    <div class="articleFive_five_div">
    <p><span class="span_font_size">le 22 avril 1988,<br></span> Le scientifque s’est donné la mort à son domicile,
    <span class="span_font-articleFive">deux ans</span> après la plus grande catastrophe nucléaire de l’histoire.</p>
    <img src="assets/images/article5--image1.png" alt="image" class="article5-image1">
    </div>
</section>

    <section class="articleFive_six">
    <div class="articleFive_six_div">
    <h1>Le 20 Septembre <span class="span_font-articleFive">1996,</span></h1>
    <p><span class="first_letter">V</span><span class="name_size">alery Legassov</span> reçoit 
    le titre de <span class="span_font-articleFive">“Héros de la Fédération de Russie”</span>.
     Bien que peu avare de récompenses de son vivant,
     celui ci est enfin reconnu par l’union soviétique pour <span class="span_font-articleFive">son travail,
    mais surtout son investissement dans l’affaire Tchernobyl</span>.</p>
    
    </div>
    </section>


<?php include 'assets/inc/footer.php'; ?>
