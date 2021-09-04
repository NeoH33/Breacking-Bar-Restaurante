<?php
	require_once("views/header.php");

	?>

	<body style="background-color:#fafafa"><!--#393e46  #fafafa #3a4750 #e7e6e1 #f2f2f2-->
     <section>
          <div id="carouselExampleFade" class="carousel slide carousel-fade" data-bs-ride="carousel">
            <div class="carousel-inner" clas>
              <div class="carousel-item active">
                <img src="img/snipper-1.jpg" class="d-block w-100" alt="PLATILLOS">
              <div id="chef"></div>
              </div>
              <div class="carousel-item">
                <img src="img/snipper-2.jpg" class="d-block w-100" alt="BEBIDAS">
              <div id="chef"></div>
              </div>
              <div class="carousel-item">
                <img src="img/snipper-3.jpg" class="d-block w-100" alt="POSTRES">
              <div id="chef"></div>
              </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleFade" data-bs-slide="prev">
              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleFade" data-bs-slide="next">
              <span class="carousel-control-next-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Next</span>
            </button>
          </div>
    </section>
      <section>

    
      <div class="prueba"><p>Crispy Wrap</p></div>
      <div class="prueba2"><p>Carne de Res</p></div>

    <div class="container">
      <div class="item-p">
        <div class="subtitulos"><p class="fs-1">NUESTROS PLATILLOS</p></div>
          <img src="img/menu-logo.jpg" alt="" class="item-img">
      </div>
      <div class="item">
      <div class="item-d">
          
          <img src="img/menu-1.jpg" alt="" class="item-img">
      </div>
      <div class="item-e">
          <img src="img/menu-2.jpg" alt="" class="item-img">
      </div>
    </div>
  </div>
</section>

<section>

    
  <div class="prueba"><p>Blue Lagune</p></div>
  <div class="prueba2"><p>Bloode Mari</p></div>

<div class="container">
  <div class="item-p">
    <div class="subtitulos"><p class="fs-1">BEBIDAS</p></div>
      <img src="img/bebidas-logo.jpg" alt="" class="item-img">
  </div>
  <div class="item">
  <div class="item-d">
      
      <img src="img/bebidas-1.jpg" alt="" class="item-img">
  </div>
  <div class="item-e">
      <img src="img/bebidas-2.jpg" alt="" class="item-img">
  </div>
</div>
</div>
</section>

<section>

  <div class="prueba"><p>Tres Leches</p></div>
  <div class="prueba2"><p>Helado Tree</p></div>

<div class="container">
  <div class="item-p">
    <div class="subtitulos"><p class="fs-1">POSTRES</p></div>
      <img src="img/postres-logo2.png" alt="" class="item-img">
  </div>
  <div class="item">
  <div class="item-d">
      
      <img src="img/postres-1.jpg" alt="" class="item-img">
  </div>
  <div class="item-e">
      <img src="img/postres-2.jpg" alt="" class="item-img">
  </div>
</div>
</div>
</section>

	</body>


	<?php

	require_once("views/footer.php");

?>