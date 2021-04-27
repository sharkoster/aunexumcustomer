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

                                    <p class="font-weight-normal ml-3"><a href="/mijn-portfolio.php">Verdeling</a>&nbsp;|&nbsp;Historisch verloop</p>

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
                                    <div class="d-block" >
                                        <img src="/uploads/portfolio/big-wave.png" class="img-fluid" alt="">
                                    </div>
                                    <ul class="portfolio-buttons d-flex flex-wrap align-content-start mt-auto ">
                                        <li><button>1w</button></li>
                                        <li><button>1m</button></li>
                                        <li><button>3m</button></li>
                                        <li><button>6m</button></li>
                                        <li><button>1j</button></li>
                                        <li><button>5j</button></li>
                                    </ul>
                                </div>

                            </div>
                        </div>
                        <div class="text-center mt-2"><a href="#">Bekijk mijn edelmetalen in opslag ></a></div>
                    </section>

                    <h2 class="h2-header">GEOGRAFISCHE VERDELING</h2>

                    <div class="big-border pl-2 pr-0" >
                        <div class="table-responsive-xl">
                        <table class="table table-striped table-bordered table-condensed metal-list" style="border: 0" >
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

    <?php include 'layouts/_footer.php'; ?>
</body>

</html>
