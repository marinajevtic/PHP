<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Dancing+Script:wght@400;500;600;700&display=swap" rel="stylesheet">

    <title>Moj planer putovanja</title>

    <link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">

    <link rel="stylesheet" type="text/css" href="assets/css/font-awesome.css">

    <link rel="stylesheet" href="assets/css/templatemo-klassy-cafe.css">

    <link rel="stylesheet" href="assets/css/owl-carousel.css">

    <link rel="stylesheet" href="assets/css/lightbox.css">

    </head>
    
    <body style="background-color: #EBECF0">

    
    <div id="preloader">
        <div class="jumper">
            <div></div>
            <div></div>
            <div></div>
        </div>
    </div>

    <header class="header-area header-sticky" style="background-image: url(11.jpg)">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <nav class="main-nav">
                        <ul class="nav">
                            <li class="scroll-to-section"><a href="#pretraga" class="active">Planovi</a></li>
                            <li class="scroll-to-section"><a href="#novaDestinacija">Nova destinacija</a></li>
                            <li class="scroll-to-section"><a href="#noviPlan">Novi plan</a></li>
                            <li class="scroll-to-section"><a href="#izmenaCene">Izmeni cenu plana</a></li>
                            <li class="scroll-to-section"><a href="#brisanjePlana">Brisanje plana</a></li>
                        </ul>        
                        <a class='menu-trigger'>
                            <span>Menu</span>
                        </a>
                    </nav>
                </div>
            </div>
        </div>
    </header>

    <section class="section" id="pretraga" style="padding-top: 100px">
        <div class="container" style="margin-top: 20px">
            <div class="row">
                <div class="col-lg-4 offset-lg-4 text-center">
                    <div class="section-heading">
                        <h6>Moj planer putovanja</h6>
                        <h2>Pretraga planova</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-6">
                    <label for="destinacijePretraga">Pretraga po destinacijama</label>
                    <select class="form-control" id="destinacijePretraga">

                    </select>
                </div>
                <div class="col-lg-6">
                    <label for="sortiranje">Sortiranje po ceni</label>
                    <select class="form-control" id="sortiranje">
                        <option value="asc">Od najmanje ka najvecoj</option>
                        <option value="desc">Od najvece ka najmanjoj</option>
                    </select>
                </div>
                <br/><br/>
                <div class="col-lg-12" style="padding-top: 10px">
                    <button class="btn btn-primary" style="background-color: #FD6555" onclick="pretraga()">Pronadji planove</button>
                </div>
            </div>
            <div class="row" id="rezultat" style="padding-top: 10px">

            </div>
        </div>
    </section>

    <section class="section" id="novaDestinacija" style="margin-top: 100px">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 offset-lg-4 text-center">
                    <div class="section-heading">
                        <h6>Moj planer putovanja</h6>
                        <h2>Unos destinacije</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <label for="destinacijaUnos">Destinacija</label>
                    <input type="text" id="destinacijaUnos" class="form-control">
                    <label for="zemljaUnos">Zemlja</label>
                    <select class="form-control" id="zemljaUnos">

                    </select>
                    <hr/>
                    <button class="btn btn-primary" style="background-color: #FD6555" onclick="unesiDestinaciju()">Unesi destinaciju</button>
                </div>
                <div class="section-heading">
                    <h2 id="porukaUnosDestinacije"></h2>
                </div>
            </div>
        </div>
    </section>

    <section class="section" id="noviPlan" style="margin-top: 270px">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 offset-lg-4 text-center">
                    <div class="section-heading">
                        <h6>Moj planer putovanja</h6>
                        <h2>Unos plana</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <label for="destinacijaId">Destinacija</label>
                    <select class="form-control" id="destinacijaId">

                    </select>
                    <label for="opis">Opis</label>
                    <textarea id="opis" class="form-control" rows="5"></textarea>
                    <label for="cenaUnos">Cena</label>
                    <input type="number" class="form-control" id="cenaUnos">
                    <hr/>
                    <button class="btn btn-primary" style="background-color: #FD6555" onclick="unesiPlan()">Unesi plan</button>
                </div>
                <div class="section-heading">
                    <h2 id="porukaUnosPlana"></h2>
                </div>
            </div>
        </div>
    </section>

    <section class="section" id="izmenaCene" style="margin-top: 100px">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 offset-lg-4 text-center">
                    <div class="section-heading">
                        <h6>Moj planer putovanja</h6>
                        <h2>Izmena cene plana</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <label for="planIzmena">Plan</label>
                    <select class="form-control" id="planIzmena">

                    </select>
                    <label for="cenaIzmena">Cena</label>
                    <input type="number" class="form-control" id="cenaIzmena">
                    <hr/>
                    <button class="btn btn-primary" style="background-color: #FD6555" onclick="izmeniCenuPlana()">Izmeni cenu plana</button>
                </div>
                <div class="section-heading">
                    <h2 id="porukaIzmenaPlana"></h2>
                </div>
            </div>
        </div>
    </section>

    <section class="section" id="brisanjePlana" style="margin-top: 266px">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 offset-lg-4 text-center">
                    <div class="section-heading">
                        <h6>Moj planer putovanja</h6>
                        <h2>Brisanje plana</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <label for="planBrisanje">Plan</label>
                    <select class="form-control" id="planBrisanje">

                    </select>
                    <hr/>
                    <button class="btn btn-primary" style="background-color: #FD6555" onclick="obrisiPlan()">Obrisi plan</button>
                </div>
                <div class="section-heading">
                    <h2 id="porukaBrisanjePlana"></h2>
                </div>
            </div>
        </div>
    </section>

    <footer>
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-xs-12">
                    <div class="right-text-content">
                            <ul class="social-icons">
                                <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                                <li><a href="#"><i class="fa fa-instagram"></i></a></li>
                            </ul>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="logo">
                        <a href="index.php"><span style="color: #fafafa;"> Moj planer putovanja</span></a>
                    </div>
                </div>
                <div class="col-lg-4 col-xs-12">
                    <div class="left-text-content">
                        <p>© Copyright Marina Jevtic
                        
                        <br>Design: PlanerPutovanja</p>
                    </div>
                </div>
            </div>
        </div>
    </footer>

    <script src="assets/js/jquery-2.1.0.min.js"></script>

    <script src="assets/js/popper.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>

    <script src="assets/js/owl-carousel.js"></script>
    <script src="assets/js/accordions.js"></script>
    <script src="assets/js/datepicker.js"></script>
    <script src="assets/js/scrollreveal.min.js"></script>
    <script src="assets/js/waypoints.min.js"></script>
    <script src="assets/js/jquery.counterup.min.js"></script>
    <script src="assets/js/imgfix.min.js"></script> 
    <script src="assets/js/slick.js"></script> 
    <script src="assets/js/lightbox.js"></script> 
    <script src="assets/js/isotope.js"></script> 
    
    <script src="assets/js/custom.js"></script>

    <script>
        function popuniDestinacije() {
            $.ajax({
                url: 'server_destinacije.php',
                success: function (data) {
                    let destinacijePretraga = "<option value='SVE'>Sve destinacije</option>" + data;
                    $("#destinacijePretraga").html(destinacijePretraga);
                    $("#destinacijaId").html(data);
                    pretraga();
                }
            })
        }

        function popuniZemlje() {
            $.ajax({
                url: 'server_zemlje.php',
                success: function (data) {
                    $("#zemljaUnos").html(data);
                }
            })
        }

        function popuniPlanove() {
            $.ajax({
                url: 'server_planovi.php',
                success: function (data) {
                    $("#planIzmena").html(data);
                    $("#planBrisanje").html(data);
                }
            })
        }

        popuniDestinacije();
        popuniZemlje();
        popuniPlanove()

        function pretraga() {
            let pretragaDestinacija = $("#destinacijePretraga").val();
            let sortiranje = $("#sortiranje").val();

            $.ajax({
                url: 'server_pretraga.php',
                data: {
                    destinacija: pretragaDestinacija,
                    sortiranje: sortiranje
                },
                success: function (data) {

                    $("#rezultat").html(data);
                }
            })
        }

        function unesiDestinaciju() {
            let destinacija = $("#destinacijaUnos").val();
            let zemlja = $("#zemljaUnos").val();

            $.ajax({
                url: 'server_unos_destinacije.php',
                method: 'post',
                data: {
                    destinacija: destinacija,
                    zemlja: zemlja
                },
                success: function (data) {

                    $("#porukaUnosDestinacije").html(data);
                    popuniDestinacije();
                }
            })
        }

        function unesiPlan() {
            let destinacija = $("#destinacijaId").val();
            let opis = $("#opis").val();
            let cena = $("#cenaUnos").val();
            $.ajax({
                url: 'server_unos_plana.php',
                method: 'post',
                data: {
                    destinacija: destinacija,
                    opis: opis,
                    cena: cena
                },
                success: function (data) {

                    $("#porukaUnosPlana").html(data);
                    pretraga();
                    popuniPlanove();
                }
            })
        }

        function izmeniCenuPlana() {
            let plan = $("#planIzmena").val();
            let cena = $("#cenaIzmena").val();
            $.ajax({
                url: 'server_izmena_plana.php',
                method: 'post',
                data: {
                    plan: plan,
                    cena: cena
                },
                success: function (data) {

                    $("#porukaIzmenaPlana").html(data);
                    pretraga();
                    popuniPlanove();
                }
            })
        }

        function obrisiPlan() {
            let plan = $("#planBrisanje").val();
            $.ajax({
                url: 'server_brisanje_plana.php',
                method: 'post',
                data: {
                    plan: plan,
                },
                success: function (data) {

                    $("#porukaBrisanjePlana").html(data);
                    pretraga();
                    popuniPlanove();
                }
            })
        }


    </script>

  </body>
</html>