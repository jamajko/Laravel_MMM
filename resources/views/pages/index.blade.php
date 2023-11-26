<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>MMM Čakáreň</title>
  <meta name="description" content="Free Bootstrap Theme by BootstrapMade.com">
  <meta name="keywords" content="free website templates, free bootstrap themes, free template, free bootstrap, free website template">

  <link rel="stylesheet" type="text/css" href="css/font.css">
  <link rel="stylesheet" type="text/css" href="css/font-awesome.min.css">
  <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="css/style.css">
  <link rel="shortcut icon" type="image/x-icon" href="img/favicon3.png">
</head>
<body id="myPage" data-spy="scroll" data-target=".navbar" data-offset="60">
  <!--banner-->
  <section id="banner" class="banner">
    <div class="bg-color">
      <nav class="navbar navbar-default navbar-fixed-top">
        <div class="container">
          <div class="col-md-12">
            <div class="navbar-header">
              <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
				        <span class="icon-bar"></span>
				        <span class="icon-bar"></span>
				        <span class="icon-bar"></span>
				      </button>
              <div class="logo"><a class="navbar-brand" href="#"><img src="img/logo2.png" alt="..." class="img-responsive" style="margin-top: -16px;"></a></div>
            </div>
            <div class="collapse navbar-collapse navbar-right" id="myNavbar">
              <ul class="nav navbar-nav">
                <li class="active"><a href="#banner">Hlavná stránka</a></li>
                <li class=""><a href="#service">Naše služby</a></li>
                <li class=""><a href="#about">Výhody nášho systému</a></li>
                <li class=""><a href="#contact">Kontakt</a></li>
                  @guest
                      @if (Route::has('login'))
                          <li><a class="login" href="loginlekar">Prihlásenie pre lekára</a></li>
                      @endif
                  @else
                      <li><a href="#">{{ Auth::user()->name }}</a></li>
                      <li>
                          <a href="{{ route('logout') }}" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">Odhlásenie</a>
                          <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                              @csrf
                          </form>
                      </li>
                  @endguest

              </ul>
            </div>
          </div>
        </div>
      </nav>
      <div class="container">
        <div class="row">
          <div class="banner-info">
            <div class="banner-logo text-center">
              <img src="img/logo2.png" alt="..." class="img-responsive" style="height: 150px;">
            </div>
            <div class="banner-text text-center">
              <h1 class="white">Elektronická online čakáreň </h1>
              <p>Zabudnite na preplnené čakárňe. <br>Zaraďťe sa do poradia kdekoľvek ste.</p>
              <a href="#vyhladanie" class="btn btn-appoint">Vyhľadajte si lekára</a>
            </div>
            <div class="overlay-detail text-center">
              <a href="#service"><i class="fa fa-angle-down"></i></a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!--/ banner-->
  <!--SLUŽBY-->
  <section id="service" class="section-padding">
    <div class="container">
      <div class="row">
        <div class="col-md-4 col-sm-4">
          <h2 class="ser-title">Naše služby</h2>
          <hr class="botm-line">
          <p>Nájdite si svojho lekára a jedným kliknutím sa zaradíte do poradia.<br>Jednoduchá registrácia.</p>
        </div>
        <div class="col-md-4 col-sm-4">
          <div class="service-info">
            <div class="icon">
              <i class="fa fa-stethoscope"></i>
            </div>
            <div class="icon-info">
              <h4>Pre pacientov</h4>
              <p>Po vyplnení registračného formuláru si môžete vyhľadať svôjho lekára a prihlásiť sa do poradovníka pre jeho čakáreň.</p>
            </div>
          </div>
		  <a href="registerpacient" class="btn btn-appoint">Registračný formulár</a>
        </div>
        <div class="col-md-4 col-sm-4">
          <div class="service-info">
            <div class="icon">
              <i class="fa fa-user-md"></i>
            </div>
            <div class="icon-info">
              <h4>Pre lekárov</h4>
              <p>Môžete si sledovať svojich pacientov v čakárni a privolajte pacienta jedným kliknutím.</p>
            </div>
          </div>
		  <br><a href="registerlekar" class="btn btn-appoint">Registrácia pre lekára</a>
        </div>
      </div>
    </div>
  </section>
  <!--/ SLUŽBY-->
  <!--Výhody-->
  <section id="about" class="section-padding">
    <div class="container">
      <div class="row">
        <div class="col-md-3 col-sm-4 col-xs-12">
          <div class="section-title">
            <h2 class="head-title lg-line">Výhody systému MMM čakáreň</h2>
            <hr class="botm-line">
            <p class="sec-para">Výhody ktoré poskytuje MMM čakáreň pre pacientov a lekárov.</p>
          </div>
        </div>
        <div class="col-md-9 col-sm-8 col-xs-12">
          <div style="visibility: visible;" class="col-sm-9 more-features-box">
            <div class="more-features-box-text">
              <div class="more-features-box-text-icon"> <i class="fa fa-angle-right" aria-hidden="true"></i> </div>
              <div class="more-features-box-text-description">
                <h3>Výhody pre pacientov</h3>
                <p>1. Nečakáte zbytočne v čakárni<br />
                   2. Môžete si sledovať kedy budete na rade<br />
                   3. Nečakáte na výsledky vyšetrení</p>
              </div>
            </div>
            <div class="more-features-box-text">
              <div class="more-features-box-text-icon"> <i class="fa fa-angle-right" aria-hidden="true"></i> </div>
              <div class="more-features-box-text-description">
                <h3>Výhody pre lekárov</h3>
                     <p>1. Všetci čakajúci prehľadňe na jednom mieste.<br />
                        2. Jednoduché použivanie zaručí maximálnu produktivitu.<br />
                        3. Spokojní pacienti.</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!--/ Výhody-->
  <!--Doktori-->
  <section id="doctor-team" class="section-padding">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <h2 class="ser-title">Naši doktori</h2>
          <hr class="botm-line">
        </div>
        <div class="col-md-3 col-sm-3 col-xs-6">
          <div class="thumbnail">
            <img src="img/lekarka.jpg" alt="..." class="team-img">
            <div class="caption">
              <h3>Erika Nová</h3>
              <p>Očná lekárka - Bratislava</p>
            </div>
          </div>
        </div>
        <div class="col-md-3 col-sm-3 col-xs-6">
          <div class="thumbnail">
            <img src="img/lekar.jpg" alt="..." class="team-img">
            <div class="caption">
              <h3>František Buksanto</h3>
              <p>Chirurg - Trnava</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!--/ Doktori-->
  <!--vyhladanie-->
  <section id="vyhladanie" class="section-padding">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <h2 class="ser-title">Vyhľadajte si lekára</h2>
          <hr class="botm-line">
        </div>
        <div class ="vyhľadanie">
		<form>
		<label for ="name"> Meno lekára:</label>
		<input type ="text" name ="fullname" placeholder="Zadajte meno lekára">
		<label for ="mesto"> Mesto:</label>
		<select id ="mesto">
		<option value ="mesto"> Vyberte mesto</option>
		<option value ="bratislava"> Bratislava</option>
		<option value ="trnava"> Trnava</option>

		</select>
		<label for ="specializacia"> Špecializácia:</label>
		<select id ="specializacia">
		<option value ="specializacia"> Vyberte špecializáciu</option>
		<option value ="chirurgia"> chirurgia</option>
		<option value ="ocna"> očná ambulancia</option>
		<option value ="kardio"> kardiológia</option>

		</select>
		<input type ="submit" value ="Vyhľadať">
		</form>
		</div>
		</div>
    </div>
  </section>
  <!--/ vyhladanie-->
  <!--Kontakt-->
  <section id="contact" class="section-padding">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <h2 class="ser-title">Kontaktujte nás</h2>
          <hr class="botm-line">
        </div>
        <div class="col-md-4 col-sm-4">
          <h3>Kontaktné informácie</h3>
          <div class="space"></div>
          <p><i class="fa fa-map-marker fa-fw pull-left fa-2x"></i>Námestie Jozefa Herdu 577/2<br> 917 01 Trnava</p>
          <div class="space"></div>
          <p><i class="fa fa-envelope-o fa-fw pull-left fa-2x"></i>tornoci1@ucm.sk</p>
          <div class="space"></div>
          <p><i class="fa fa-phone fa-fw pull-left fa-2x"></i>XXX/XXX XX XX</p>
        </div>
        <div class="col-md-8 col-sm-8 marb20">
          <div class="contact-info">
            <h3 class="cnt-ttl">Potrebujete poradiť?</h3>
            <div class="space"></div>
            <div id="sendmessage">Správa bola odoslaná.</div>
            <div id="errormessage"></div>
            <form action="contact" method="post" class="contactForm">
              <div class="form-group">
                <input type="text" name="name" class="form-control br-radius-zero" id="name" placeholder="Vaše meno" data-rule="minlen:4" data-msg="Prosím zadajte meno a priezvisko" />
                <div class="validation"></div>
              </div>
              <div class="form-group">
                <input type="email" class="form-control br-radius-zero" name="email" id="email" placeholder="Váš email" data-rule="email" data-msg="Prosím zadajte funkčný email" />
                <div class="validation"></div>
              </div>
              <div class="form-group">
                <input type="text" class="form-control br-radius-zero" name="subject" id="subject" placeholder="Predmet" data-rule="minlen:4" data-msg="Prosím zadajte predmet" />
                <div class="validation"></div>
              </div>
              <div class="form-group">
                <textarea class="form-control br-radius-zero" name="message" rows="5" data-rule="required" data-msg="Niečo napíšte" placeholder="Správa"></textarea>
                <div class="validation"></div>
              </div>

              <div class="form-action">
                <button type="submit" class="btn btn-form">Odošlite</button>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!--/ Kontakt-->
  <!--footer-->
  <script src="js/jquery.min.js"></script>
  <script src="js/jquery.easing.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/custom.js"></script>
  <script src="contactform/contactform.js"></script>

</body>

</html>
