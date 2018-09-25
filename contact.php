<!DOCTYPE HTML>
<html>
<head>
	<meta charset="UTF-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta http equiv="X-UA-Compatible" content="IE=edge,chrome=1" />

	<title>Kontakt - Hubert Kostka</title>

	<meta name="description" content="Opis w google" />
	<meta name="keywords" content="Terapia manualna, Kinesiotaping, Dry Needling, Suche igłowanie, Rehabilitacja ortopedyczna, Strzelin"
	/>
	<?php include('head.php'); ?>
</head>

<body>
	<?php include('menu.php'); ?>
  <main>
    <div class="container" id="contact">
      <div class="row">
        <div class="col-12 col-sm-6" id="contact-details">
          <h2>Kontakt</h2>
          <h3>mgr Hubert Kostka</h3>
          <h3>Telefon: </h3>
          <h3>email</h3>
          <h4>Adres: Strzelin ul. Dzierżoniowka 16b</h4>
          <h4>Godziny otwarcia:</h4>
          <h5>Poniedziałek 10:00-18:00</h5>
          <h5>Wtorek 10:00-18:00</h5>
          <h5>Środa 10:00-18:00</h5>
          <h5>Czwartek 10:00-18:00</h5>
          <h5>Piątek 10:00-18:00</h5>
          <h5>Sobota 10:00-14:00</h5>
         
        </div>
        <div class="col-12 col-sm-6" id="email-form">
					<form action="kontakt/" method="post" role="form">
				    <div class="form-group">
					    <label for="form1">Imię i nazwisko</label>
					    <input type="text" name="name" class="form-control" id="form1" maxlength="50" required="">
				    </div>
				    <div class="form-group">
					    <label for="form1">Telefon</label>
					    <input type="text" name="tel" class="form-control" id="form1" maxlength="50" required="">
				    </div>
				    <div class="form-group">
					    <label for="form1">Email:</label>
					    <input type="email" name="email" class="form-control" id="form1" maxlength="50" required="">
				    </div>
				    <div class="form-group">
				    	<label for="form2">Treść:</label>
					    <textarea type="text" name="tresc" style="height:265px;" class="form-control" id="form2" required=""></textarea>
			    	</div>
				    <button class="btn btn-primary" type="submit" value="Wyślij">   	Wyślij				</button>
			    </form>
        </div>
        <div class="col-sm-5 offset-sm-1 embed-responsive  embed-responsive-16by9" id="map">
        <iframe class="embed-responsive-item" id="google-map" src="https://www.google.com/maps/embed?pb=!1m21!1m12!1m3!1d907.5790199914874!2d17.061015922958852!3d50.78241230337173!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m6!3e6!4m0!4m3!3m2!1d50.7823201!2d17.060413999999998!5e1!3m2!1spl!2spl!4v1537868642889"allowfullscreen></iframe>        </div>
        <div class="col-sm-4 offset-sm-1" id="entrance-photo">
            <figure>
              <img class="img-fluid" id="entrance-door" src="img/gallery/drzwi.jpg" alt="Drzwi wejsciowe" /> 
            </figure>
        </div>
      </div>
    </div>
  </main>
	
  <?php include('footer.php'); ?>

  <script src="js/bootstrap.min.js"></script>
</body>
</html>