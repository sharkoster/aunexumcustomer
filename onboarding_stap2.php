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
            <article class="col-xl-9">
                <h2 class="h2-header">MIJN PORTFOLIO</h2>
                <section class="big-border">
                    <div class="row">
                        <div class="col-md-6 col-lg-5 palladium-border">
                            <form id="portfolio">
                                <select class="form-control form-control-sm portfolio-select" >
                                    <option>Totaalwaarde portfolio</option>
                                    <option>Year-to-date (YTD)</option>
                                </select>
                            </form>
                            <p class="price28">€ 12.026,80</p>
                            <p><span class="green-portfolio">+17,8% <b>&#8593;</b></span>&emsp; (vanaf eerste aankoop)</p>
                            <p>Verdeling van uw porfolio</p>

                            <div class="table-responsive-xl">
                                <table class="table table-striped table-bordered table-condensed metal-list" style="width: 325px">
                                    <tbody>
                                    <tr>
                                        <td style="width: 135px">
                                            <img src="/img/goud.svg" alt=""> Goud
                                        </td>
                                        <td  style="width: 95px">€ 3.000,-</td>
                                        <td>2 t/oz</td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <img src="/img/zilver.svg" alt=""> Zilver
                                        </td>
                                        <td>€ 7.026,80</td>
                                        <td>2 t/oz</td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <img src="/img/platina.svg" alt=""> Platina
                                        </td>
                                        <td>-</td>
                                        <td>-</td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <img src="/img/palladium.svg" alt=""> Palladium
                                        </td>
                                        <td>-</td>
                                        <td>&nbsp;</td>
                                    </tr>
                                    <tr>
                                        <td class="border-bottom-0">
                                            <img src="/img/rhodium.svg" alt=""> Rhodium
                                        </td>
                                        <td class="border-bottom-0">-</td>
                                        <td class="border-bottom-0">-</td>
                                    </tr>
                                    </tbody>
                                </table>
                            </div>

                        </div>

                        <div class="col-md-6 col-lg-7">
                            <section class="d-flex flex-wrap justify-content-between position-relative">

                                <p class="font-weight-normal ml-3">Verdeling&nbsp;|&nbsp;<a href="/historisch-verloop.php">Historisch verloop</a></p>

                                <div class="btn-group position-absolute" style="right: 0; bottom: .5em">
                                    <button class="btn btn-sm dropdown-toggle" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        Edelmetalen
                                    </button>
                                    <div class="dropdown-menu">
                                        <p class="dropdown-item mb-0 pl-3">
                                            <input class="custom-checkbox" type="checkbox" id="goldCheck">
                                            <label class="form-check-label" for="goldCheck">
                                                Goud
                                            </label>
                                        </p>
                                        <p class="dropdown-item mb-0 pl-3">
                                            <input class="custom-checkbox" type="checkbox" id="silverCheck">
                                            <label class="form-check-label" for="silverCheck">
                                                Zilver
                                            </label>
                                        </p>
                                    </div>
                                </div>

                            </section>

                            <div class="d-flex flex-wrap align-content-start pt-3 pl-3">
                                <div class="d-inline-block" style="max-width: 236px">
                                    <img src="/uploads/portfolio/big-circle.png" class="img-fluid" alt="">
                                </div>
                                <ul class="vertical-legend">
                                    <li><img src="/img/goud.svg" alt=""> Goud (80,2%)</li>
                                    <li><img src="/img/zilver.svg" alt=""> Zilver (19,8%)</li>
                                    <li><img src="/img/platina.svg" alt=""> Platina (-%)</li>
                                    <li><img src="/img/palladium.svg" alt=""> Palladium (-%)</li>
                                    <li><img src="/img/rhodium.svg" alt=""> Rhodium (-%)</li>
                                </ul>
                            </div>

                        </div>
                    </div>
                    <div class="text-center mt-2"><a href="#">Bekijk mijn edelmetalen in opslag ></a></div>
                </section>

                <h2 class="h2-header">GEOGRAFISCHE VERDELING</h2>

                <div class="big-border pl-2 pr-0" >
                    <div class="table-responsive-md">
                        <table class="table table-striped table-bordered table-condensed metal-list" style="border: 0">
                            <thead class="thead-light">
                            <tr class="table-borderless">
                                <th style="width: 160px">&nbsp;</th>
                                <th class="price28 text-center" colspan="3">&nbsp;AunexumSafe locaties</th>
                                <th class="price28 text-center">Overig</th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr class="table-borderless thead-light">
                                <td>&nbsp;</td>
                                <td class="py-3"><img src="/img/nederland.svg" class="img-fluid" alt=""></td>
                                <td class="py-3"><img src="/img/zwitserland.svg" class="img-fluid" alt=""></td>
                                <td class="py-3"><img src="/img/singapore.svg" class="img-fluid" alt=""></td>
                                <td class="py-3"><img src="/img/eigen_beheer.svg" class="img-fluid" alt=""></td>
                            </tr>
                            <tr class="table-borderless thead-light">
                                <td>&nbsp;</td>
                                <td class="country20">Nederland<br>26%</td>
                                <td class="country20">Zwitserland<br>58%</td>
                                <td class="country20">Singapore<br>8%</td>
                                <td class="country20">Eigen beheer<br>8%</td>
                            </tr>
                            <tr>
                                <td class="thead-light border-0"><img src="/img/goud.svg" alt=""> Goud</td>
                                <td>€ 3.000,-</td>
                                <td>-</td>
                                <td>-</td>
                                <td>-</td>
                            </tr>
                            <tr>
                                <td class="thead-light border-0"><img src="/img/zilver.svg" alt=""> Zilver</td>
                                <td>-</td>
                                <td>€ 7.026,80</td>
                                <td>-</td>
                                <td>€ 1000,-</td>
                            </tr>
                            <tr>
                                <td class="thead-light border-0"><img src="/img/platina.svg" alt=""> Platina</td>
                                <td>-</td>
                                <td>-</td>
                                <td>-</td>
                                <td>-</td>
                            </tr>
                            <tr>
                                <td class="thead-light border-0"><img src="/img/palladium.svg" alt=""> Palladium</td>
                                <td>-</td>
                                <td>-</td>
                                <td>-</td>
                                <td>-</td>
                            </tr>
                            <tr>
                                <td class="thead-light border-0"><img src="/img/rhodium.svg" alt=""> Palladium</td>
                                <td>-</td>
                                <td>-</td>
                                <td>-</td>
                                <td>-</td>
                            </tr>
                            <tr class="font-weight-bold">
                                <td class="thead-light border-0">&nbsp;</td>
                                <td class="border-bottom-0">€ 3.000,-</td>
                                <td class="border-bottom-0">€ 7.026,80</td>
                                <td class="border-bottom-0">-</td>
                                <td class="border-bottom-0">€ 1000,-</td>
                            </tr>
                            </tbody>
                        </table>
                    </div>

                </div>

            </article>

            <!--- Right section -->
            <?php include 'layouts/_right_panel.php'; ?>
            <!--- end right section -->

        </div>

    </div>
    <!-- /#page-content-wrapper -->

</main>
<!-- /#wrapper -->

<!-- HTML-код модального окна -->
<section class="modal fade" data-backdrop="static" id="myModalBox" tabindex="-1" role="dialog">
    <div class="modal-dialog modal-dialog-centered" role="document" style="max-width: 840px">
        <dialog class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title"></h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body mt-3 pt-4">
                <div class="position-relative">
                    <img src="/img/onboarding/onboarding_gegevenscontroleren2.svg" alt="aunexumsafe" class="onboarding">
                </div>
                <div class="text-center my-4">
                    <img src="/img/icons/onboarding/check-data_step2.svg" alt="aunexumsafe" class="img-fluid">
                </div>

                <p class="gold22 text-center">Gegevens controleren</p>
                <p class="text-center mb-4">Wij hebben zoveel mogelijk gegevens van u in ons klantenportaal ingevoerd.<br>
                    Zo hoeft u alleen de gegevens in te vullen die wij niet van u hebben.
                </p>
                <p class="text-center font-weight-bold mt-3" style="font-size: 18px">
                    Controleer de onderstaande gegevens
                </p>
            </div>
            <form class="modal-footer">
                <div class="container mb-4">
                    <div class="row">
                        <div class="col-lg-6">
                            <p><span class="blue18">Persoonsgegevens</span> </p>
                            <div class="form-group row mb-0">
                                <label for="salutation" class="col-sm-5 col-form-label">Aanhef</label>
                                <div class="col-sm-7">
                                    <input type="text" readonly class="form-control-plaintext" id="salutation" value="Meneer">
                                </div>
                            </div>
                            <div class="form-group row mb-0">
                                <label for="username" class="col-sm-5 col-form-label">Naam</label>
                                <div class="col-sm-7">
                                    <input type="text" readonly class="form-control-plaintext" id="username" value="Piet de Vries">
                                </div>
                            </div>
                            <div class="form-group row mb-0">
                                <label for="addres" class="col-sm-5 col-form-label">Adres</label>
                                <div class="col-sm-7">
                                    <input type="text" readonly class="form-control-plaintext" id="addres" value="Stationsstraat 1">
                                </div>
                            </div>
                            <div class="form-group row mb-0">
                                <label for="zipcode" class="col-sm-5 col-form-label">Postcode</label>
                                <div class="col-sm-7">
                                    <input type="text" class="form-control" id="zipcode" placeholder="..." value="">
                                    <small><a href="#" class="text-golded">Bevestigen</a></small>
                                </div>
                            </div>
                            <div class="form-group row">
                            </div>
                            <div class="form-group row mb-0">
                                <label for="place" class="col-sm-5 col-form-label">Woonplaats</label>
                                <div class="col-sm-7">
                                    <input type="text" readonly class="form-control-plaintext" id="place" value="Abcoude">
                                </div>
                            </div>
                            <div class="form-group row mb-0">
                                <label for="region" class="col-sm-5 col-form-label">Land</label>
                                <div class="col-sm-7">
                                    <input type="text" readonly class="form-control-plaintext" id="region" value="Nederland">
                                </div>
                            </div>
                            <div class="form-group row">
                            </div>
                            <div class="form-group row mb-0">
                                <label for="date" class="col-sm-5 col-form-label">Geboren</label>
                                <div class="col-sm-7">
                                    <input type="text" readonly class="form-control-plaintext" id="date" value="29-02-1956">
                                </div>
                            </div>
                            <div class="form-group row mb-0">
                                <label for="nation" class="col-sm-5 col-form-label">Nationaliteit</label>
                                <div class="col-sm-7">
                                    <input type="text" readonly class="form-control-plaintext" id="nation" value="Nederlands">
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <p><span class="blue18">Contactgegevens</span>&emsp;<a href="#" class="palladium">Wijzig</a></p>
                            <div class="form-group row mb-0">
                                <label for="usermail" class="col-sm-5 col-form-label">E-mail adres</label>
                                <div class="col-sm-7">
                                    <input type="email" readonly class="form-control-plaintext" id="usermail" value="pietdevries@gmail.com">
                                </div>
                            </div>
                            <div class="form-group row mb-0">
                                <label for="phone1" class="col-sm-5 col-form-label">Tel. nr. 1</label>
                                <div class="col-sm-7">
                                    <input type="tel" readonly class="form-control-plaintext" id="phone1" value="012 345 67 89">
                                </div>
                            </div>
                            <div class="form-group row mb-0">
                                <label for="phone2" class="col-sm-5 col-form-label">Tel. nr. 2</label>
                                <div class="col-sm-7">
                                    <input type="tel" readonly class="form-control-plaintext" id="phone1" value="06 123 456 78">
                                </div>
                            </div>
                            <div class="form-group row">
                            </div>
                            <p><span class="blue18">Bankgegevens</span>&emsp;<a href="#" class="palladium">Wijzig</a></p>
                            <div class="form-group row mb-0">
                                <label for="phone1" class="col-sm-5 col-form-label">Naam bank</label>
                                <div class="col-sm-7 d-flex flex-wrap align-items-center">
                                    <a href="#" class="font-weight-normal underline">voeg toe +</a>
                                </div>
                            </div>
                            <div class="form-group row mb-0">
                                <label for="phone1" class="col-sm-5 col-form-label">Tenaamstelling</label>
                                <div class="col-sm-7 d-flex flex-wrap align-items-center">
                                    <a href="#" class="font-weight-normal underline">voeg toe +</a>
                                </div>
                            </div>
                            <div class="form-group row mb-0">
                                <label for="phone2" class="col-sm-5 col-form-label">IBAN</label>
                                <div class="col-sm-7">
                                    <input type="tel" readonly class="form-control-plaintext" id="phone1" value="NL 12 ABNA 0123 456 78">
                                </div>
                            </div>
                        </div>
                    </div>
                    </div>
                <button type="submit" class="btn btn-warning mx-auto" data-dismiss="modal">Bovenstaande gegevens zijn akkoord</button>
            </form>
        </dialog>
    </div>
</section>

<?php include 'layouts/_footer.php'; ?>
</body>

</html>