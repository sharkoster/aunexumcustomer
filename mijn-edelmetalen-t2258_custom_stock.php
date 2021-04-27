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

<!-- HTML-код модального окна -->
<section class="modal fade" data-backdrop="static" id="myModalBox" tabindex="-1" role="dialog">
    <div class="modal-dialog modal-dialog-centered  modal-lg" role="document">
        <dialog class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title transform-none">Edelmetaal toevoegen (In eigen beheer)</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form class="modal-body pt-3" method="post">
                <p class="gold22 text-left">Soort edelmetaal</p>

                <div class="mb-1 mb-lg-3">
                    <input class="custom-radio" type="radio" name="metal" id="gold" value="gold">
                    <label for="gold">Goud</label>
                    <input class="custom-radio" type="radio" name="metal" id="silver" value="silver">
                    <label for="silver" class="ml-2 ml-lg-4">Zilver</label>
                    <input class="custom-radio" type="radio" name="metal" id="platinum" value="platinum">
                    <label for="platinum"  class="ml-2 ml-lg-4">Platina</label>
                    <input class="custom-radio" type="radio" name="metal" id="palladium" value="palladium">
                    <label for="palladium"  class="ml-lg-4">Palladium</label>
                    <input class="custom-radio" type="radio" name="metal" id="rhodium" value="rhodium">
                    <label for="rhodium" class="ml-0 ml-lg-4">Rhodium</label>
                </div>

                <div class="mt-3 mt-md-0 mb-3">
                    <input class="custom-radio" type="radio" name="paymethod" id="bank" value="bank">
                    <label for="bank">Baren</label>
                    <input class="custom-radio" type="radio" name="paymethod" id="cashe" value="cashe">
                    <label for="cashe" class="ml-2 ml-lg-4">Munten</label>
                </div>

                <div class="row">
                    <div class="col-6  palladium-border">
                        <div class="form-group">
                            <label for="metalweight" class="font-weight-bold">Selecteer</label>
                            <select class="form-control" id="metalweight">
                                <option>Krugerrand 1 t/oz</option>
                                <option>Krugerrand 2 t/oz</option>
                                <option>Krugerrand 3 t/oz</option>
                                <option>Krugerrand 5 t/oz</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="form-group mb-4">
                            <label for="yourself" class="font-weight-bold">Voer zelf in</label>
                            <input type="text" class="form-control" id="yourself" placeholder="Bijv. Krugerrand">
                        </div>
                        <div class="form-group">
                            <label for="weight" class="font-weight-bold">Gewicht</label>
                            <input type="text" class="form-control" id="weight" placeholder="Bijv. 250">
                        </div>
                        <div class="mt-2">
                            <input class="custom-radio" type="radio" name="measure-weight" id="ounce" value="ounce">
                            <label for="ounce">t/oz</label>
                            <input class="custom-radio" type="radio" name="measure-weight" id="gram" value="gram">
                            <label for="gram" class="ml-2 ml-lg-4">gram</label>
                            <input class="custom-radio" type="radio" name="measure-weight" id="kilogram" value="kilogram">
                            <label for="kilogram"  class="ml-2 ml-lg-4">kilo</label>
                        </div>
                    </div>
                </div>

                <p class="gold22 text-left">Overige gegevens</p>

                <div class="row">
                    <div class="form-group col-sm-6 col-md-4">
                        <label for="purchased" class="font-weight-bold">Aangekocht voor €</label>
                        <input type="text" class="form-control" id="purchased" placeholder="Bijv. 29,29">
                    </div>
                    <div class="form-group col-sm-6 col-md-4">
                        <label for="purchase-date" class="font-weight-bold">Datum aankoop</label>
                        <input type="text" class="form-control" id="purchase-date" placeholder="Bijv. 29/07/2020">
                    </div>
                    <div class="form-group col-sm-6 col-md-4">
                        <label for="b-nummer" class="font-weight-bold">Baarnummer</label>
                        <input type="text" class="form-control" id="b-nummer" placeholder="Bijv. 11234">
                    </div>
                    <div class="form-group col-sm-6 col-md-4">
                        <label for="amount" class="gold22">Aantal</label>
                        <input type="text" class="form-control" id="amount" placeholder="Bijv. 1">
                    </div>
                </div>


                <button type="submit" class="btn btn-warning mt-3">Voeg toe aan portfolio +</button>

            </form>
        </dialog>
    </div>
</section>

    <?php include 'layouts/_footer.php'; ?>
</body>

</html>
