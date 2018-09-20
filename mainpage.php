<!DOCTYPE HTML>
<html>

<head>
	<?php include('head.php'); ?>
</head>

<body>
	<?php include('menu.php'); ?>

  <main>
      <section>
        
        <div class="container-fluid">
          <div class="row">
            <div class="col-sm-12 col-md-10 offset-md-1 slider">

              <div class="slidshow-container">
                <div class="slides fade">
                  <div class="number">1 / 3</div>
                  <div><img class="img-fluid slide" src="img/probnyslajd1.jpg"></div>
                </div>
                <div class="slides fade">
                  <div class="number">2 / 3</div>
                  <div><img class="img-fluid slide" src="img/probnyslajd2.jpg"></div>
                </div>
                <div class="slides fade">
                  <div class="number">3 / 3</div>
                  <div><img class="img-fluid slide" src="img/probnyslajd3.jpg"></div>
                </div>
                <a class="prev" onclick="plusIndex(-1)">&#10094</a>
                <a class="next" onclick="plusIndex(+1)">&#10095</a>
                <div class="dots">
                  <span class="dot" onclick="currentSlide(1)"></span>
                  <span class="dot" onclick="currentSlide(2)"></span>
                  <span class="dot" onclick="currentSlide(3)"></span>
                </div>
              </div>
              
            </div>

          </div>
        </div>
        </div>
        <div class="container">
          <div class="row" id="therapies">
            <figure class="col-8 offset-2 col-sm-8 offset-sm-2 col-lg-5 offset-lg-1">
              <a href="#"><img class="img-fluid tail" src="img/terapiamanu1.jpg" alt="Terapia manualna" /></a>
              <figcaption>Terapia manualna</figcaption>
            </figure>
            <figure class="col-8 offset-2 col-sm-8 offset-sm-2 col-lg-5 offset-lg-0">
              <a href="#"><img class="img-fluid tail" src="img/kinesiotaping1.jpg" alt="Kinesiotaping" /> </a>
              <figcaption>Kinesiotaping</figcaption>
            </figure>
            <figure class="col-8 offset-2 col-sm-8 offset-sm-2 col-lg-5 offset-lg-1">
              <a href="#"><img class="img-fluid tail" src="img/sucheIglowanie1.jpg" alt="Suche igłowanie" /> </a>
              <figcaption>Suche igłowanie</figcaption>
            </figure>
            <figure class="col-8 offset-2 col-sm-8 offset-sm-2 col-lg-5 offset-lg-0">
              <a href="#"><img class="img-fluid tail" src="img/rehabilitacjaorto1.jpg" alt="Rehabilitacja ortopedyczna" /> </a>
              <figcaption>Rehabilitacja ortopedyczna</figcaption>
            </figure>
          </div>
        </div>
      </section>
  </main>

  


  <!-- <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script> -->

  <!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script> -->

  <script src="js/bootstrap.min.js"></script>


</body>

</html>