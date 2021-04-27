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
                <article class="col-12 pr-lg-0">
                    <section class="documents">
                        <div class="row">
                            <div class="col-sm-6">
                                <h2 class="h2-header">Facturen</h2>
                                <div class="table-responsive">
                                    <table class="table table-condensed table-metal-silver" style="width: 100%">
                                        <thead>
                                            <tr>
                                                <th colspan="3">Datum</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>11/12/2018</td>
                                                <td><a href="#" target="_blank">Opslagkosten september 2020</a></td>
                                                <td class="text-right"><a href="#" class="btn btn-outline-primary btn-sm">Download</a></td>
                                            </tr>
                                            <tr>
                                                <td>11/12/2016</td>
                                                <td><a href="#" target="_blank">Opslagkosten augustus 2020</a></td>
                                                <td class="text-right"><button type="button" class="btn btn-outline-primary btn-sm">Download</button></td>
                                            </tr>
                                            <tr class="d-none">
                                                <td colspan="3"></td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                                <p class="mt-4">
                                    <a href="#" class="text-decoration-none" style="font-size: 14px">
                                        <img src="img/faq_icoon.svg" alt="">
                                        Hoe is mijn factuur opgebouwd (per periode en datum van inslag)?
                                    </a>
                                </p>
                            </div>
                            <div class="col-sm-6">
                                <h2 class="h2-header">Jaaroverzichten</h2>
                                <p class="position-absolute text-center bron">
                                    <input class="custom-checkbox" type="checkbox" id="inhouse">
                                    <label class="form-check-label" for="inhouse">
                                        Inclusief edelmetalen ‘In eigen beheer’.
                                    </label>
                                </p>
                                <div class="table-responsive">
                                    <table class="table table-condensed table-metal-silver" style="width: 100%">
                                        <thead>
                                        <tr>
                                            <th class="text-right" colspan="2">
                                                <a href="#" style="color: #074975">Download alles</a>
                                            </th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        <tr>
                                            <td><a href="#" target="_blank">Jaaroverzicht 2019</a></td>
                                            <td class="text-right"><button type="button" class="btn btn-outline-primary btn-sm">Download</button></td>
                                        </tr>
                                        <tr>
                                            <td><a href="#" target="_blank">Jaaroverzicht 2018</a></td>
                                            <td class="text-right"><button type="button" class="btn btn-outline-primary btn-sm">Download</button></td>
                                        </tr>
                                        <tr>
                                            <td><a href="#" target="_blank">Jaaroverzicht 2017</a></td>
                                            <td class="text-right"><button type="button" class="btn btn-outline-primary btn-sm">Download</button></td>
                                        </tr>
                                        <tr>
                                            <td><a href="#" target="_blank">Jaaroverzicht 2016</a></td>
                                            <td class="text-right"><button type="button" class="btn btn-outline-primary btn-sm">Download</button></td>
                                        </tr>
                                        <tr class="d-none">
                                            <td colspan="2">&nbsp;</td>
                                        </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            <div class="col-12">
                                <h2 class="h2-header">Berichten</h2>
                                <div class="table-responsive">
                                    <table class="table table-condensed table-metal-silver" style="width: 100%">
                                        <thead>
                                        <tr>
                                            <th>Datum</th>
                                            <th>Tijd</th>
                                            <th>&nbsp;</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        <tr>
                                            <td>11/12/2018</td>
                                            <td>07:29</td>
                                            <td>
                                                <a href="#">
                                                    Uw edelmetalen zijn in opslag genomen op onze locatie in Zwitserland
                                                </a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>09/12/2018</td>
                                            <td>11:12</td>
                                            <td>
                                                <a href="#">
                                                    Uw edelmetalen zijn in opslag genomen op onze locatie in Zwitserland
                                                </a>
                                            </td>
                                        </tr>
                                        <tr class="d-none">
                                            <td colspan="3"></td>
                                        </tr>
                                        </tbody>
                                    </table>
                                </div>
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

    <?php include 'layouts/_footer.php'; ?>
</body>

</html>
