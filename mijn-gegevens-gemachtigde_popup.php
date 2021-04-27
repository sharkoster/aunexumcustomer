<!DOCTYPE html>
<html lang="en">

<head>

    <?php include 'layouts/_header.php'; ?>

</head>

<body>

<?php include 'layouts/_navbar.php'; ?>

    <main class="d-flex" id="wrapper">
        <?php include 'layouts/_sidebar.php'; ?>

        <!-- Page Content -->
        <div class="container-fluid" id="page-content-wrapper">

            <div class="row-fluid">
                <!-- most important content article --->
                <article class="col-12  pr-0">
                    <h2 class="h2-header">Mijn gegevens</h2>
                    <section class="big-tabs">

                        <ul class="nav nav-tabs d-flex justify-content-center justify-content-sm-between" id="product">
                            <li class="nav-item">
                                <a class="nav-link active" data-toggle="tab" href="#personal-data">
                                    <div class="tab-img personal-data clearfix">&nbsp;</div>
                                    Persoonsgegevens<br>
                                    (95%)
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" data-toggle="tab" href="#company-details">
                                    <div class="tab-img company-details clearfix">&nbsp;</div>
                                    Bedrijfsgegevens<br>
                                    (25%)
                                </a>
                            </li>
                            <!-- Disabled tab -->
                            <li class="nav-item">
                                <a class="nav-link" data-toggle="tab" href="#authorized-representative">
                                    <!--  <a class="nav-link disabled" href="#authorized-representative" tabindex="-1" aria-disabled="true"> -->
                                    <div class="tab-img authorized-representative clearfix">&nbsp;</div>
                                    Gemachtigde<br>
                                    <u>Voeg toe</u>
                                </a>
                            </li>
                            <!-- end Disabled tab -->
                            <li class="nav-item">
                                <a class="nav-link" data-toggle="tab"  href="#financial-details">
                                    <div class="tab-img financial-details clearfix">&nbsp;</div>
                                    Financiële gegevens<br>
                                    (0%)
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" data-toggle="tab"  href="#billing">
                                    <div class="tab-img billing clearfix">&nbsp;</div>
                                    Facturatie<br>
                                    Compleet
                                </a>
                            </li>
                        </ul>

                        <div class="tab-content p-3">
                            <div class="tab-pane fade show active" id="personal-data">
                                <h4><a href="#">Wijzig gegevens</a></h4>
                                <div class="row px-3 mb-4">
                                    <div class="col-sm-6 col-md-4"><span class="gold22">Persoonsgegevens</span></div>
                                    <div class="col-sm-6 col-md-4 offset-md-4"><b style="font-size: 18px">Klantnummer:</b> 123456 </div>
                                </div>
                                <div class="row px-3 mb-4">
                                    <div class="col-sm-6 col-md-4">
                                        <b>Aanhef</b><br>
                                        Meneer
                                    </div>
                                    <div class="col-sm-6 col-md-4">
                                        <b>Naam</b><br>
                                        Piet de Vries
                                    </div>
                                    <div class="col-sm-6 col-md-4"></div>
                                    <div class="d-none d-md-block mb-md-4 col-md-12"> </div>
                                    <div class="col-sm-6 col-md-4">
                                        <b>Adres</b><br>
                                        Stationsstraat 1
                                    </div>
                                    <div class="col-sm-6 col-md-4">
                                        <b>Postcode en Woonplaats</b><br>
                                        1023 AB Abcoude
                                    </div>
                                    <div class="col-sm-6 col-md-4">
                                        <b>Land</b><br>
                                        Nederland
                                    </div>
                                    <div class="d-none d-md-block mb-md-4 col-md-12"> </div>
                                    <div class="col-12">
                                        <h3 class="blue18 text-md-left">Contactgegevens</h3>
                                    </div>
                                    <div class="col-sm-6 col-md-4">
                                        <b>E-mail adres</b><br>
                                        pietdevries@gmail.com
                                    </div>
                                    <div class="col-sm-6 col-md-4">
                                        <b>Telefoonnummer 1</b><br>
                                        012 345 67 89
                                    </div>
                                    <div class="col-sm-6 col-md-4">
                                        <b>Telefoonnummer 2</b><br>
                                        06 123 456 78
                                    </div>
                                    <div class="d-none d-md-block mb-md-4 col-md-12"> </div>
                                    <div class="col-sm-6 col-md-4">
                                        <b>Wachtwoord</b><br>
                                        ••••••••••
                                    </div>
                                    <div class="d-none d-md-block mb-md-4 col-md-12"> </div>
                                    <div class="col-12">
                                        <input class="custom-checkbox" type="checkbox" id="submit-1">
                                        <label class="form-check-label" for="submit-1">
                                            Ik ga akkoord met de &nbsp;<a href="#">Algemene Voorwaarden van AunexumSafe</a>
                                        </label>
                                    </div>
                                </div>
                            </div>
                            <!-- next Tab content -->
                            <div class="tab-pane fade" id="company-details">
                                <h4><a href="#">Wijzig</a></h4>
                                <div class="row px-3 mb-4">
                                    <div class="col-12"><span class="gold22">Bedrijfsgegevens</span></div>
                                    <div class="d-none d-md-block mb-md-4 col-md-12"> </div>
                                    <div class="col-sm-6 col-md-4">
                                       <b>Juridische naam</b><br>
                                        Piet de Vries BV
                                    </div>
                                    <div class="col-sm-6 col-md-4">
                                        <b>KVK nummer</b><br>
                                        12345678
                                    </div>
                                    <div class="col-sm-6 col-md-4">
                                        <b>BTW nummer</b><br>
                                        NL.0011.123.01.B01
                                    </div>
                                    <div class="d-none d-md-block mb-md-4 col-md-12"> </div>
                                    <div class="col-sm-6 col-md-4">
                                        <b>Correspondentieadres</b><br>
                                        Stationsstraat 1
                                    </div>
                                    <div class="col-sm-6 col-md-4">
                                        <b>Postcode en Woonplaats</b><br>
                                        1023 AB Abcoude
                                    </div>
                                    <div class="col-sm-6 col-md-4">
                                        <b>Land</b><br>
                                        Nederland
                                    </div>
                                    <div class="d-none d-md-block mb-md-4 col-md-12"> </div>
                                    <div class="col-sm-6 col-md-4">
                                        <b>Statutair bestuurder(s)</b><br>
                                        Petra de Vries<br>
                                        <a href="#">Voeg legitimatie toe +</a>
                                    </div>
                                    <div class="col-8 d-flex flex-wrap align-items-center">
                                        <input class="custom-checkbox" type="checkbox" id="submit-2">
                                        <label class="form-check-label" for="submit-2">
                                            Akkoord met&nbsp;<a href="#">Algemene Voorwaarden</a>
                                        </label>
                                    </div>
                                    <div class="d-none d-md-block mb-md-4 col-md-12"> </div>
                                    <div class="col-12">
                                        <button type="button" class="btn btn-warning">Voeg extra bestuurder toe + </button>
                                    </div>
                                    <div class="d-none d-md-block mb-md-4 col-md-12"> </div>
                                    <div class="col-12">
                                        <span class="gold22">Documentatie</span><br>
                                        … (reden waarom deze documentatie nodig is…<br>
                                        …
                                    </div>
                                    <div class="d-none d-md-block mb-md-4 col-md-12"> </div>
                                    <div class="col-sm-6 col-md-4">
                                        <b>Kopie actueel uittreksel KVK</b><br>
                                        <a href="#">Voeg toe +</a>
                                    </div>
                                    <div class="col-8">
                                        <b>Kopie van de statuten / akte van oprichting</b><br>
                                        <a href="#" class="form-check-label" target="_blank">Akte van oprichting Piet de Vries BV 2020.pdf</a>
                                    </div>
                                </div>
                            </div>
                            <!-- next Tab content -->
                            <div class="tab-pane fade" id="authorized-representative">
                                <p class="text-center">Soms kan iemand (tijdelijk) niet zelf beschikken over zijn/haar edelmetalen. Zo kan het zijn dat u een tijd in het buitenland verblijft of dat er onverhoopt iets met u gebeurt. Het is dan handig als er al iets geregeld is.   De persoon die u machtigt kan -alleen met uw toestemming- makkelijker zaken regelen.</p>
                                <form class="container pb-2">
                                    <div class="row">
                                        <div class="col-12">
                                            <p class="gold22">Financiële gegevens Beleggingen</p>
                                        </div>
                                        <div class="col-sm-6 col-md-4">
                                            <p class="mb-2"><b>Aanhef</b></p>
                                            <div class="d-flex justify-content-between">
                                                <input class="custom-radio" type="radio" name="gender" id="man" value="man">
                                                <label  for="man">De heer</label>
                                                <input class="custom-radio" type="radio" name="gender" id="woman" value="woman">
                                                <label for="woman">Mevrouw</label>
                                            </div>
                                        </div>
                                        <div class="col-sm-6 col-md-4">
                                            <div class="form-group mb-4">
                                                <label for="username" class="font-weight-bold">Naam</label>
                                                <input type="text" class="form-control" id="username" placeholder="...">
                                            </div>
                                        </div>
                                        <div class="col-sm-6 col-md-4">
                                        </div>
                                        <div class="col-sm-6 col-md-4">
                                            <div class="form-group mb-4">
                                                <label for="addres" class="font-weight-bold">Adres</label>
                                                <input type="text" class="form-control" id="addres" placeholder="...">
                                            </div>
                                        </div>
                                        <div class="col-sm-6 col-md-4">
                                            <div class="form-group mb-4">
                                                <label for="zipcode" class="font-weight-bold">Postcode en Woonplaats</label>
                                                <input type="text" class="form-control" id="zipcode" placeholder="...">
                                            </div>
                                        </div>
                                        <div class="col-sm-6 col-md-4">
                                            <div class="form-group mb-4">
                                                <label for="region" class="font-weight-bold">Land</label>
                                                <input type="text" class="form-control" id="region" placeholder="...">
                                            </div>
                                        </div>
                                        <div class="col-sm-6 col-md-4">
                                            <div class="form-group mb-4">
                                                <label for="date" class="font-weight-bold">Geboortedatum</label>
                                                <input type="date" class="form-control" id="date" placeholder="dd/mm/jjjj">
                                            </div>
                                        </div>
                                        <div class="col-sm-6 col-md-4">
                                            <div class="form-group mb-4">
                                                <label for="nation" class="font-weight-bold">Nationaliteit</label>
                                                <input type="text" class="form-control" id="nation" placeholder="...">
                                            </div>
                                        </div>
                                        <div class="col-sm-6 col-md-4">
                                            <p class="mb-2"><b>Legitimatie</b></p>
                                            <a href="#">Voeg toe +</a>
                                        </div>
                                        <div class="col-12">
                                            <h3 class="blue18 text-md-left">Contactgegevens</h3>
                                        </div>
                                        <div class="col-sm-6 col-md-4">
                                            <div class="form-group mb-4">
                                                <label for="usermail" class="font-weight-bold">E-mail adres</label>
                                                <input type="email" class="form-control" id="usermail" placeholder="...">
                                            </div>
                                        </div>
                                        <div class="col-sm-6 col-md-4">
                                            <div class="form-group mb-4">
                                                <label for="phone1" class="font-weight-bold">Telefoonnummer 1</label>
                                                <input type="tel" class="form-control" id="phone1" placeholder="...">
                                            </div>
                                        </div>
                                        <div class="col-sm-6 col-md-4">
                                            <div class="form-group mb-4">
                                                <label for="phone2" class="font-weight-bold">Telefoonnummer 2</label>
                                                <input type="tel" class="form-control" id="phone2" placeholder="...">
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <h3 class="blue18 text-md-left">Rechten gemachtigde</h3>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-check form-check-inline">
                                                <input class="custom-radio" type="radio" name="only-view" id="only-view1" value="1">
                                                <label for="only-view1">Account alleen inzien</label>
                                            </div>
                                        </div>
                                        <div class="col-md-8">
                                            <div class="form-check form-check-inline">
                                                <input class="custom-radio" type="radio" name="only-view" id="only-view0" value="0">
                                                <label for="only-view0">Volledige bevoegdheid (o.a. verkopen en gegevens aanpassen)</label>
                                            </div>
                                        </div>
                                    </div>
                                    <input type="submit" class="btn btn-warning mt-4" value="Bevestigen">
                                </form>

                            </div>
                            <!-- next Tab content -->
                            <div class="tab-pane fade" id="financial-details">
                                <p class="text-center">Wij zijn verplicht door de AFM om u vragen te stellen over uw financiële situatie.<br>
                                    U bent <b>niet</b> verplicht deze vragen in te vullen. </p>
                                <p class="font-weight-bolder text-center">Wilt u inzicht geven waarom u investeert/belegt in edelmetalen?</p>
                                <div class="row">
                                    <div class="col-3 offset-md-4 d-flex justify-content-between">
                                        <div class="form-check form-check-inline">
                                            <input class="custom-radio" type="radio" name="provide" id="provide1" value="yes">
                                            <label  for="provide1">Ja</label>
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <input class="custom-radio" type="radio" name="provide" id="provide2" value="no">
                                            <label for="provide2">Nee</label>
                                        </div>
                                    </div>
                                </div>
                                <form class="px-3 mb-4" id="finantion-data-invest">
                                <section class="row">
                                    <div class="col-12">
                                        <p class="gold22">Financiële gegevens Beleggingen</p>
                                    </div>
                                    <div class="col-sm-6 col-md-4">
                                        <p class="mb-2"><b>Doelstelling</b></p>
                                        <div class="form-check pl-0">
                                            <input class="custom-radio" type="radio" name="purpose" id="purpose1" value="1">
                                            <label  for="purpose1">Behoud vermogen</label>
                                        </div>
                                        <div class="form-check pl-0">
                                            <input class="custom-radio" type="radio" name="purpose" id="purpose2" value="2">
                                            <label for="purpose2">Rendement op vermogen</label>
                                        </div>
                                        <div class="form-check pl-0">
                                            <input class="custom-radio" type="radio" name="purpose" id="purpose3" value="3">
                                            <label for="purpose3">Anders, namelijk</label>
                                        </div>
                                        <div class="form-check">
                                            <textarea class="form-control" id="purpose-textarea" rows="4">...</textarea>
                                        </div>
                                    </div>
                                    <div class="col-sm-6 col-md-4">
                                        <p class="mb-2"><b>Risicoprofiel van uw belegging</b></p>
                                        <div class="form-check pl-0">
                                            <input class="custom-radio" type="radio" name="risk" id="risk1" value="1">
                                            <label  for="risk1">Defensief</label>
                                        </div>
                                        <div class="form-check pl-0">
                                            <input class="custom-radio" type="radio" name="risk" id="risk2" value="2">
                                            <label for="risk2">Matig defensief</label>
                                        </div>
                                        <div class="form-check pl-0">
                                            <input class="custom-radio" type="radio" name="risk" id="risk3" value="3">
                                            <label for="risk3">Neutraal</label>
                                        </div>
                                        <div class="form-check pl-0">
                                            <input class="custom-radio" type="radio" name="risk" id="risk4" value="4">
                                            <label for="risk4">Offensief</label>
                                        </div>
                                        <div class="form-check pl-0">
                                            <input class="custom-radio" type="radio" name="risk" id="risk5" value="5">
                                            <label for="risk5">Matig offensief</label>
                                        </div>
                                    </div>
                                    <div class="col-sm-6 col-md-4">
                                        <div class="form-group mb-4">
                                            <label for="horizon" class="font-weight-bold">Beleggingshorizon</label>
                                            <input type="text" class="form-control" id="horizon" placeholder="Bijv. 10 jaar ">
                                        </div>
                                        <div class="form-group">
                                            <label for="capital" class="font-weight-bold" style="line-height: normal;">
                                                Voor beleggen <br> beschikbaar vermogen
                                            </label>
                                            <input type="text" class="form-control" id="capital" placeholder="Bijv. €5.000">
                                        </div>
                                    </div>
                                    <div class="d-none d-md-block mb-md-4 col-md-12"> </div>
                                    <div class="col-12">
                                        <p class="mb-2"><b>Herkomst vermogen belegging</b><br>
                                            (meerdere antwoorden mogelijk)</p>
                                    </div>
                                    <div class="col-sm-6 col-md-4">
                                        <div class="form-check pl-0">
                                            <input class="custom-radio" type="radio" name="investment" id="investment1" value="1">
                                            <label  for="investment1">Oud geld</label>
                                        </div>
                                        <div class="form-check pl-0">
                                            <input class="custom-radio" type="radio" name="investment" id="investment2" value="2">
                                            <label for="investment2">Schenking</label>
                                        </div>
                                    </div>
                                    <div class="col-sm-6 col-md-4">
                                        <div class="form-check pl-0">
                                            <input class="custom-radio" type="radio" name="investment" id="investment3" value="3">
                                            <label  for="investment3">Inkomsten uit arbeid</label>
                                        </div>
                                        <div class="form-check pl-0">
                                            <input class="custom-radio" type="radio" name="investment" id="investment4" value="4">
                                            <label for="investment4">Pensioenkapitaal</label>
                                        </div>
                                    </div>
                                    <div class="col-sm-6 col-md-4">
                                        <div class="form-check pl-0">
                                            <input class="custom-radio" type="radio" name="investment" id="investment5" value="3">
                                            <label  for="investment5">Erfenis</label>
                                        </div>
                                        <div class="form-check pl-0">
                                            <input class="custom-radio" type="radio" name="investment" id="investment6" value="4">
                                            <label for="investment6">Sparen</label>
                                        </div>
                                    </div>
                                    <div class="d-none d-md-block mb-md-4 col-md-12"> </div>
                                    <div class="col-12">
                                        <p class="gold22">Financiële gegevens</p>
                                    </div>
                                    <div class="col-sm-6 col-md-4">
                                        <p class="mb-2"><b>Jaarlijkse bruto inkomsten</b></p>
                                        <div class="form-check pl-0">
                                            <input class="custom-radio" type="radio" name="bruto" id="bruto1" value="1">
                                            <label  for="bruto1">€ 0 - € 25.000</label>
                                        </div>
                                        <div class="form-check pl-0">
                                            <input class="custom-radio" type="radio" name="bruto" id="bruto2" value="2">
                                            <label for="bruto2">€ 25.000 - € 50.000</label>
                                        </div>
                                        <div class="form-check pl-0">
                                            <input class="custom-radio" type="radio" name="bruto" id="bruto3" value="3">
                                            <label for="bruto3">€ 50.000 - € 100.000</label>
                                        </div>
                                        <div class="form-check pl-0">
                                            <input class="custom-radio" type="radio" name="bruto" id="bruto4" value="4">
                                            <label for="bruto4">&gt; € 100.000</label>
                                        </div>
                                    </div>
                                    <div class="col-sm-6 col-md-4">
                                        <p class="mb-2"><b>Inkomsten uit</b></p>
                                        <div class="form-check pl-0">
                                            <input class="custom-radio" type="radio" name="inkom" id="inkom1" value="1">
                                            <label  for="inkom1">Beroep</label>
                                        </div>
                                        <div class="form-check pl-0">
                                            <input class="custom-radio" type="radio" name="inkom" id="inkom2" value="2">
                                            <label for="inkom2">Verhuren</label>
                                        </div>
                                        <div class="form-check pl-0">
                                            <input class="custom-radio" type="radio" name="inkom" id="inkom3" value="3">
                                            <label for="inkom3">Sparen</label>
                                        </div>
                                        <div class="form-check pl-0">
                                            <input class="custom-radio" type="radio" name="inkom" id="inkom4" value="4">
                                            <label for="inkom4">Winst uit onderneming</label>
                                        </div>
                                        <div class="form-check pl-0">
                                            <input class="custom-radio" type="radio" name="inkom" id="inkom5" value="4">
                                            <label for="inkom5">Anders, namelijk</label>
                                        </div>
                                        <div class="form-group">
                                            <input type="text" class="form-control" id="adresss"  placeholder="...">
                                        </div>
                                    </div>
                                    <div class="col-sm-6 col-md-4">
                                        <p class="mb-2"><b>Ervaring met beleggen</b></p>
                                        <div class="form-check pl-0">
                                            <input class="custom-radio" type="radio" name="experience" id="experience1" value="1">
                                            <label  for="experience1">Geen</label>
                                        </div>
                                        <div class="form-check pl-0">
                                            <input class="custom-radio" type="radio" name="experience" id="experience2" value="2">
                                            <label for="experience2">Tussen 0-5 jaar</label>
                                        </div>
                                        <div class="form-check pl-0">
                                            <input class="custom-radio" type="radio" name="experience" id="experience3" value="4">
                                            <label for="experience3">&gt; 5 jaar</label>
                                        </div>
                                    </div>
                                    <div class="d-none d-md-block mb-md-4 col-md-12"> </div>
                                    <div class="col-sm-6 col-md-4">
                                        <p class="mb-2"><b>Ervaring met producten</b><br>
                                            (meerdere antwoorden mogelijk)</p>
                                        <div class="form-check pl-0">
                                            <input class="custom-checkbox" type="checkbox" id="share">
                                            <label class="form-check-label" for="share">Aandelen</label>
                                        </div>
                                        <div class="form-check pl-0">
                                            <input class="custom-checkbox" type="checkbox" id="funds">
                                            <label class="form-check-label" for="funds">Beleggingsfondsen</label>
                                        </div>
                                        <div class="form-check pl-0">
                                            <input class="custom-checkbox" type="checkbox" id="debentures">
                                            <label class="form-check-label" for="debentures">Obligaties</label>
                                        </div>
                                        <div class="form-check pl-0">
                                            <input class="custom-checkbox" type="checkbox" id="derivatives">
                                            <label class="form-check-label" for="derivatives">Opties en derivaten</label>
                                        </div>
                                        <div class="form-check pl-0">
                                            <input class="custom-checkbox" type="checkbox" id="precious-metals">
                                            <label class="form-check-label" for="precious-metals">Edelmetalen</label>
                                        </div>
                                        <div class="form-check pl-0">
                                            <input class="custom-checkbox" type="checkbox" id="real-estate">
                                            <label class="form-check-label" for="real-estate">Vastgoed</label>
                                        </div>
                                    </div>
                                    <div class="col-sm-6 col-md-4">
                                        <p class="mb-2"><b>Verwachting korte termijn</b><br>
                                            Inkomen zal sterk:</p>
                                        <div class="form-check pl-0">
                                            <input class="custom-radio" type="radio" name="expectation" id="expectation1" value="1">
                                            <label  for="expectation1">Sterk dalen</label>
                                        </div>
                                        <div class="form-check pl-0">
                                            <input class="custom-radio" type="radio" name="expectation" id="expectation2" value="2">
                                            <label for="expectation2">Dalen</label>
                                        </div>
                                        <div class="form-check pl-0">
                                            <input class="custom-radio" type="radio" name="expectation" id="expectation3" value="4">
                                            <label for="expectation3">Gelijk blijven</label>
                                        </div>
                                        <div class="form-check pl-0">
                                            <input class="custom-radio" type="radio" name="expectation" id="expectation4" value="4">
                                            <label for="expectation4">Stijgen</label>
                                        </div>
                                    </div>
                                    <div class="col-sm-6 col-md-4">
                                        <div class="form-group">
                                            <label for="finantion" class="font-weight-bold" style="line-height: normal;">
                                                Financiële verplichtingen<br> (per jaar)
                                            </label>
                                            <input type="text" class="form-control" id="finantion" placeholder="Bijv. €5.000">
                                        </div>
                                        <div class="form-group">
                                            <label for="withdrawals" class="font-weight-bold" style="line-height: normal;">
                                                Verwachte toekomstige<br>  onttrekkingen
                                            </label>
                                            <input type="text" class="form-control" id="withdrawals" placeholder="Bijv. €5.000">
                                        </div>
                                        <div class="form-group">
                                            <label for="additions" class="font-weight-bold" style="line-height: normal;">
                                                Verwachte toekomstige<br>  onttrekkingen
                                            </label>
                                            <input type="text" class="form-control" id="additions" placeholder="Bijv. €5.000">
                                        </div>
                                    </div>

                                    <input type="submit" class="btn btn-warning mt-4 mx-auto" value="Bevestigen">
                                    </section>
                                </form>
                            </div>
                            <!-- next Tab content -->
                            <div class="tab-pane fade" id="billing">
                                <div class="container">
                                    <p class="px-3">Hoe wilt u dat wij uw opslagkosten en kosten voor in- en uitslag aan u factureren?</p>
                                    <div class="row px-3">
                                        <div class="col-sm-6">
                                            <input class="custom-radio" type="radio" name="incasso" id="incasso1" value="0">
                                            <label for="incasso1">Automatische incasso</label>
                                        </div>
                                        <div class="col-sm-6">
                                            <input class="custom-radio" type="radio" name="incasso" id="incasso2" value="1">
                                            <label for="incasso2" class="ml-3 mb-0">Zelf overmaken per bankoverschrijving</label><br>
                                            <p class="blue18" style="margin-left: 3em; margin-top: -10px">NL78 INGB 0007 0478 00</p>
                                        </div>
                                    </div>
                                <form class="row px-3 mb-4" id="incasso-form">
                                    <div class="col-12">
                                        <p class="gold22">Automatisch incasso </p>
                                        <p>Machtigen kan gemakkelijk zijn; u vergeet nooit te betalen. U kunt het automatisch incasso op elk gewenst moment weer intrekken bij de incassant. Bent u het niet eens met de afschrijving dan heeft u 56 dagen (8 weken) de tijd om uw bank opdracht te geven het bedrag terug te boeken.</p>
                                    </div>
                                    <div class="col-12">
                                        <p class="blue18">Automatisch incasso </p>
                                    </div>
                                    <div class="col-sm-6 col-md-4">
                                        <b>Naam bank</b><br>
                                        ABN Amro
                                    </div>
                                    <div class="col-sm-6 col-md-4">
                                        <b>Tenaamstelling</b><br>
                                        012 345 67 89
                                    </div>
                                    <div class="col-sm-6 col-md-4">
                                        <b>IBAN</b><br>
                                        NL 12 ABNA 0123 456 78
                                    </div>
                                    <div class="col-12">
                                        <p class="mt-md-3">Hierbij verleen ik/verlenen wij tot wederopzegging een doorlopende machtiging aan incassant AunexumSafe B.V. aan de Arcadialaan 16B, 1813 KN, Alkmaar, Nederland, om van de hieronder genoemde bankrekening bedragen af te schrijven wegens verschuldigd bewaarloon en in-/uitslagkosten voor opgeslagen edelmetalen bij AunexumSafe B.V. De incassering zal plaats vinden zeven (7) dagen na factuurdatum.</p>
                                    </div>
                                    <div class="d-none d-md-block mb-md-4 col-md-12"> </div>
                                    <div class="col-8 col-lg-6">
                                        <span class="blue18">Naam rekeninghouder</span>
                                        <p>Petra de Vries</p>
                                        <p class="mt-3">Machtiging <a href="/mijn-gegevens.php">getekend op 19/11/2020. </a>&emsp;
                                            <a href="#"><img src="/img/delete_goud.svg" alt=""></a>
                                        </p>
                                    </div>
                                </form>
                            </div>

                        </div>


                    </section>

                </article>

                <!--- Right section -->
                <!--- end right section -->

            </div>

        </div>
    <!-- /#page-content-wrapper -->

    </main>
  <!-- /#wrapper -->

<!-- HTML-код модального окна -->
<section class="modal fade" data-backdrop="static" id="myModalBox" tabindex="-1" role="dialog">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <dialog class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Gemachtigde aanwijzen</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <p>U heeft {naam gemachtigde} aangewezen als gemachtigde. Om zeker te weten dat u zelf een machtiging heeft ingesteld vragen wij om:</p>
                <p>1. Uw telefoonnummer in te voeren zodat u d.m.v. bevestigingscode de machtiging kunt bevestigen:</p>

                <div class="row">
                    <div class="col-5">
                        <!-- Phone SMS -->
                        <div class="iti iti--allow-dropdown">
                            <div class="iti__flag-container">
                                <div class="iti__selected-flag" role="combobox" aria-owns="country-listbox" tabindex="0"
                                     title="Nederland: +31">
                                    <div class="iti__flag iti__nl"></div>
                                    <div class="iti__arrow"></div>
                                </div>
                                <ul class="iti__country-list iti__hide" id="country-listbox" aria-expanded="false"
                                    role="listbox" aria-activedescendant="iti-item-nl">
                                    <li class="iti__country iti__standard iti__active" tabindex="-1" id="iti-item-nl"
                                        role="option" data-dial-code="31" data-country-code="nl" aria-selected="true">
                                        <div class="iti__flag-box">
                                            <div class="iti__flag iti__nl"></div>
                                        </div>
                                        <span class="iti__country-name">Nederland</span><span
                                        class="iti__dial-code">+31</span></li>
                                </ul>
                            </div>
                            <input type="tel" class="form-control" id="phonesms" name="confirm-phone"  autocomplete="off"
                                   data-intl-tel-input-id="0" value="06 12345678"><input type="hidden" name="phonesms">
                        </div>
                        <!-- End Phonesms -->
                    </div>
                    <div class="col-7">
                        <button type="button" id="save-phone-btn" class="btn btn-outline-primary">Opslaan</button>
                    </div>
                </div>

                <p class="mt-3">2. Hieronder op ‘Bevestigen’ te klikken.<br>
                    Hierna ontvangt u het bovenstaande nummer een bericht.</p>

                <button class="btn btn-warning mt-2">Bevestigen</button>

                <p class="mt-4"><b>Liever op een andere manier machtigen?</b><br>
                    Download het machtigingsformulier en mail deze naar info@aunexumsafe.nl of bel +31(0)88-4688456. </p>

            </div>
            <!--
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary">Save changes</button>
            </div>
            -->
        </dialog>
    </div>
</section>

    <?php include 'layouts/_footer.php'; ?>
</body>

</html>
