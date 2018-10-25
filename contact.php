<!DOCTYPE HTML>
<html>
<head>
	<meta charset="UTF-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta http equiv="X-UA-Compatible" content="IE=edge,chrome=1" />

	<title>Kontakt - Hubert Kostka</title>

	<meta name="description" content="Gabinet Fizjoterapeutyczny Fizjoterapia Hubert Kostka zaprasza na zabiegi z terapii manualnej, masaże, fizykoterapii oraz rehabilitacji sportowej." />
	<meta name="keywords" content="Terapia manualna, Kinesiotaping, Dry Needling, Suche igłowanie, Rehabilitacja ortopedyczna, Strzelin"
	/>
	<?php include('head.php'); ?>
</head>

<body>
	<?php include('menu.php'); ?>
  <main>
    <section>
      <a href="#" class="scrollup"></a>
      <div class="container" id="contact">
        <div class="row">
          <div class="col-12 col-md-6" id="contact-details">
            <div class="container">
              <div class="row">
                <div class="col-12">
                  <h2>Kontakt</h2>
                  <h3>mgr Hubert Kostka</h3>
                </div> 
                <div class="col-12" id="phone-box">
                      <i class="icon-call"></i> <span id="phone-contact">884 675 003</span>
                </div>
                <div class="col-12" id="email-box">
                  <i class="icon-gmail"></i><span id="email-contact">kostkahubert@gmail.com</span>
                </div>
                <div class="col-12" id="facebook-box">
                  <a href="https://www.facebook.com/pages/Fizjoterapia-Hubert-Kostka/812366052134141?timeline_context_item_type=intro_card_work&timeline_context_item_source=100003308671106&fref=tag" target="_blank">
                  <i class="icon-facebook-official"></i><span id="email-contact">facebook/Fizjoterapia-Hubert-Kostka</span></a>
                </div>
                <div class="col-12" id="adress">
                  <h4>Adres: Strzelin ul. Dzierżoniowka 16b</h4>
                </div>
                <div class="col-12" id="open-hours">
                  <h4>Godziny otwarcia:</h4>
                  <h5>Poniedziałek 10:00-19:00</h5>
                  <h5>Wtorek 10:00-19:00</h5>
                  <h5>Środa 10:00-19:00</h5>
                  <h5>Czwartek 10:00-19:00</h5>
                  <h5>Piątek 10:00-19:00</h5>
                </div> 
                <div class="col-12" id="time-box">
                  <div id="time" style="color:black"></div>
                </div>
              </div>
            </div> 
          </div>
          <div class="col-10 offset-1 col-sm-8 offset-sm-2 col-md-6 offset-md-0" id="email-form">
            <form action="mail.php" method="post" role="form" id="formContact">
              <div class="form-group">
                <label for="inputName">Imię i nazwisko</label>
                <input type="text" name="name" class="form-control" id="inputName" maxlength="50" required="">
              </div>
              <div class="form-group">
                <label for="inputPhone">Telefon</label>
                <input type="text" name="phone" class="form-control" id="inputPhone" maxlength="50" required="">
              </div>
              <div class="form-group">
                <label for="inputEmail">Email</label>
                <input type="email" name="email" class="form-control" id="inputEmail" maxlength="50" required="">
              </div>
              <div class="form-group">
                <label for="inputMessage">Treść</label>
                <textarea type="text" name="message" rows ="6" maxlength="4000"  class="form-control" id="inputMessage" required=""></textarea>
              </div>
              <button class="btn btn-primary" type="submit" value="Wyślij">   	Wyślij				</button>
            </form>
          </div>
          <div class="col-8 offset-2 col-sm-8 offset-sm-2 col-md-4 offset-md-1 " id="entrance-photo">
              <figure>
                <img class="img-fluid" id="entrance-door" src="img/contact/door.jpg" alt="Drzwi wejsciowe" /> 
              </figure>
          </div>
          <div class="col-10 offset-1 col-sm-10 offset-sm-1 col-md-6 offset-md-1 embed-responsive  embed-responsive-16by9" id="map">
            <iframe class="embed-responsive-item" src="https://www.google.com/maps/embed?pb=!1m21!1m12!1m3!1d907.5790199914874!2d17.061015922958852!3d50.78241230337173!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m6!3e6!4m0!4m3!3m2!1d50.7823201!2d17.060413999999998!5e1!3m2!1spl!2spl!4v1537868642889"allowfullscreen></iframe>
          </div>      
        </div>
      </div>
    </div>  
  </main>
  <div class="container">
    <div class="row">
      <div class="col-12" id="copyright">
        <i class="icon-copyright">2018 Piotr Zięcina Wszelkie prawa zastrzeżone</i>
      </div>
    </div>
  </div>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/jquery.fancybox.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/jquery-validation@1.17.0/dist/jquery.validate.js"></script>
</body>
</html>