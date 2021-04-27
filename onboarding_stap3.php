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
    <div class="modal-dialog modal-dialog-centered" role="document" style="max-width: 700px">
        <dialog class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title"></h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form class="modal-body mt-3 pt-4">
                <div class="position-relative">
                    <img src="/img/onboarding/onboarding_gegevenscontroleren2.svg" alt="aunexumsafe" class="onboarding">
                </div>
                <div class="text-center my-4">
                    <img src="/img/icons/onboarding/scanpassport_step3.svg" alt="aunexumsafe" class="img-fluid">
                </div>

                <p class="gold22 text-center">Legitimeren per e-mail of post</p>
                <p class="text-center mb-4">Wij moeten u ook eenmalig -conform wetgeving- om een geldigelegitimatie vragen.</p>
                <div class="d-flex justify-content-center flex-wrap align-items-center mb-4">
                    <img src="uploads/portfolio/passport.png" width="39" height="27" alt="passport" />&nbsp;
                    <a href="#" class="d-block underline" style="margin-top: -8px">paspoort.jpg</a>&emsp;
                    <a href="#" title="bewerk"><img src="img/icons/onboarding/edit.svg" alt=""/></a>&nbsp;
                    <a href="#" title="verwijderen"><img src="img/icons/onboarding/delete.svg" alt=""/></a>
                </div>

                <div class="row mb-3">
                    <div class="col-md-6">
                        <div class="form-check pl-0">
                            <input class="custom-radio" type="radio" name="mail" id="mail1" value="1">
                            <label for="mail1">E-mail<br>
                                (info@aunexumsafe.nl)</label>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-check pl-0">
                            <input class="custom-radio" type="radio" name="mail" id="mail2" value="2">
                            <label for="mail2">Post<br>
                                Arcadialaan 16B (Victory building)<br>
                                1813 KN  Alkmaar</label>
                        </div>
                    </div>
                </div>

                <div class="text-center">
                <button type="submit" class="btn btn-warning" data-dismiss="modal">Bevestig</button>
                </div>
            </form>
            <div class="modal-footer">
                <a href="#" class="mx-auto palladium">Sla deze stap over en voeg later toe.</a>
            </div>
        </dialog>
    </div>
</section>

<?php include 'layouts/_footer.php'; ?>
</body>

</html>
