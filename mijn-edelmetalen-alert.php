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
                    <h2 class="h2-header">Mijn edelmetalen</h2>
                    <section class="big-border">
                        <div class="row">
                            <div class="col-12">
                                <p class="font-weight-normal mb-4">Hieronder ziet u uw persoonlijk overzicht met de door u opgeslagen edelmetalen. </p>

                                <p class="font-weight-normal"><span class="price16 mr-4"><img src="/img/goud.svg" alt="">Goud</span>
                                <a href="/mijn-portfolio.php">Koersdoel alert instellen</a></p>

                                <div class="table-responsive mb-3">
                                    <table class="table table-condensed table-metal-gold" style="width: 100%">
                                        <thead>
                                        <tr>
                                            <th>Product</th>
                                            <th>Aantal</th>
                                            <th>Aangekocht voor</th>
                                            <th>Actuele waarde*</th>
                                            <th>Winst/verlies</th>
                                            <th>Baarnummer</th>
                                            <th>Opslaglocatie</th>
                                            <th>Datum in opslag name</th>
                                            <th>&nbsp;</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        <tr>
                                            <td><a href="mijn-edelmetalen-uitklap-goud.php">Gouden Maple Leaf 1 t/oz</a></td>
                                            <td><a class="expand" href="mijn-edelmetalen-uitklap-goud.php">4</a></td>
                                            <td>€ 5571,96</td>
                                            <td>€ 6.430,20</td>
                                            <td class="c-green">+ € 860,- (+15%)</td>
                                            <td>n.v.t.</td>
                                            <td>Aunexum Safe: <img src="/img/vlag-nederland.svg"></td>
                                            <td><a href="#">Toon alle data</a></td>
                                            <td><button type="button" class="btn btn-outline-warning btn-sm">Verkoop</button></td>
                                        </tr>
                                        <tr>
                                            <td><a href="#">C. Hafner 1 t/oz goudbaar</a></td>
                                            <td><span class="expand">2</span></td>
                                            <td>€ 2.595.46</td>
                                            <td>€ 3.215,10</td>
                                            <td  class="c-green">+ € 620.- (+23,9%)</td>
                                            <td><a href="#">Toon alles</a></td>
                                            <td><a href="#">Toon alle locaties</a></td>
                                            <td>
                                                <a href="#">Toon alle data</a>
                                                <a href="#" class="ml-3"><img src="/img/wijzig-goud.svg"></a>
                                                <a href="#"><img src="/img/delete_goud.svg"></a>
                                            </td>
                                            <td><button type="button" class="btn btn-outline-warning btn-sm">Verkoop</button></td>
                                        </tr>
                                        <tr>
                                            <td>Totaal</td>
                                            <td>€ 8.167,22</td>
                                            <td>€ 9645,30</td>
                                            <td  class="c-green">+ € 1480,- (+18,1%)</td>
                                            <td>&nbsp;</td>
                                            <td>&nbsp;</td>
                                            <td>&nbsp;</td>
                                            <td>&nbsp;</td>
                                            <td>&nbsp;</td>
                                        </tr>
                                        </tbody>
                                    </table>
                                </div>

                                <p class="font-weight-normal"><span class="price16 mr-4"><img src="/img/zilver.svg" alt="">Zilver</span>
                                    <a href="/mijn-portfolio.php">Koersdoel alert: €26 (t/oz)</a></p>

                                <div class="table-responsive">
                                    <table class="table table-condensed table-metal-silver" style="width: 100%">
                                        <thead>
                                        <tr>
                                            <th>Product</th>
                                            <th>Aantal</th>
                                            <th>Aangekocht voor</th>
                                            <th>Actuele waarde*</th>
                                            <th>Winst/verlies</th>
                                            <th>Baarnummer</th>
                                            <th>Opslaglocatie</th>
                                            <th>Datum in opslag name</th>
                                            <th>&nbsp;</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        <tr>
                                            <td><a href="#">Gouden Maple Leaf 1 t/oz</a></td>
                                            <td>1</td>
                                            <td>€ 2.100,-</td>
                                            <td>€ 2.328,81</td>
                                            <td class="c-green">+ € 228,81 (+10,9%)</td>
                                            <td>#A7623</td>
                                            <td>Aunexum Safe: <img src="/img/vlag_zwitserland.svg"></td>
                                            <td>11/12/2018</td>
                                            <td><button type="button" class="btn btn-outline-warning btn-sm">Verkoop</button></td>
                                        </tr>
                                        <tr>
                                            <td><a href="#">Zilveren Brittania 1 t/oz</a></td>
                                            <td><span class="expand">2</span></td>
                                            <td>€ 57,50</td>
                                            <td>€ 53,50</td>
                                            <td class="c-red">- € 4,- (-7%)</td>
                                            <td>n.v.t.</td>
                                            <td>In eigen beheer</td>
                                            <td>
                                                <a href="#">Toon alle data</a>
                                                <a href="#" class="ml-3"><img src="/img/wijzig-goud.svg"></a>
                                                <a href="#"><img src="/img/delete_goud.svg"></a>
                                            </td>
                                            <td><button type="button" class="btn btn-outline-warning btn-sm">Verkoop</button></td>
                                        </tr>
                                        <tr>
                                            <td>Totaal</td>
                                            <td>€ 2157,50</td>
                                            <td>€ 2381,50</td>
                                            <td class="c-green">+ € 224,81(+10,4%)</td>
                                            <td>&nbsp;</td>
                                            <td>&nbsp;</td>
                                            <td>&nbsp;</td>
                                            <td>&nbsp;</td>
                                            <td>&nbsp;</td>
                                        </tr>
                                        </tbody>
                                    </table>
                                </div>

                            </div>

                        </div>

                        <p class="text-center precios-note mt-3"><span class="c-gold">Tip!:</span> U kunt ook <a href="#">edelmetalen toevoegen</a> die NIET bij Aunexum Safe opgeslagen liggen. Hierdoor heeft u een compleet overzicht.</p>
                        <p class="text-center precios-note font-weight-bolder">* Wij tonen de actuele koers van het betreffende edelmetaal. U ziet dus NIET een specifieke productwaarde (geen premium).</p>

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
<script>
    $(document).ready(function() {
        var myModal = new ModalApp.ModalProcess({
            id: 'myModal',
            title: 'Verkocht',
            body: '<p class="text-center">U heeft de geselecteerde edelmetalen\n' +
            'succesvol verkocht. </p>' +
            '\n' +
            '<p class="text-center">Het verkoopbedrag staat binnen\n' +
            '5 dagen op uw rekening</p>'
        });
        myModal.init();
        myModal.showModal();
    });
</script>
</body>

</html>
