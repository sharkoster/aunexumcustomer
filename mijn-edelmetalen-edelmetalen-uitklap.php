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
                <h5 class="modal-title transform-none">Edelmetaal verkopen</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form class="modal-body pt-3" method="post">
                <p class="mb-4">Wilt u de volgende edelmetalen verkopen aan Goudstandaard?</p>
                <label for="" class="font-weight-bold mb-3">Gouden Maple Leaf 1 t/oz</label>
                <div class="table-responsive mb-3">
                    <table class="table table-borderless mapletbl">
                        <tr style="width: 22px">
                            <td class="pl-0">
                                <input class="custom-checkbox" type="checkbox" id="collumn-1">
                                <label class="form-check-label" for="collumn-1"></label>
                            </td>
                            <td><a href="#">Sealbagnr: #90860530</a></td>
                            <td><a href="#">Aankoopwaarde: € 1.392,94</a></td>
                            <td class="text-right">
                                <a href="#">Verkoopprijs: € 1.500,00 <img src="/img/icons/arrow/arrow_down_black.svg" alt="" class="ml-2"></a>
                            </td>
                        </tr>
                        <tr class="expanded">
                            <td> </td>
                            <td colspan="3" class="pb-1">
                                <p>Locatie: Aunexum Safe Nederland</p>
                                <p>Locatie: Aunexum Safe Nederland</p>
                                <p>Baarnummer: n.v.t.</p>
                            </td>
                        </tr>
                        <tr>
                            <td class="pl-0">
                                <input class="custom-checkbox" type="checkbox" id="collumn-2">
                                <label class="form-check-label" for="collumn-2"></label>
                            </td>
                            <td><a href="#">Sealbagnr: #90860530</a></td>
                            <td><a href="#">Aankoopwaarde: € 1.392,94</a></td>
                            <td class="text-right">
                                <a href="#">Verkoopprijs: € 1.500,00 <img src="/img/icons/arrow/arrow_down_black.svg" alt="" class="ml-2"></a>
                            </td>
                        </tr>
                        <tr>
                            <td class="pl-0">
                                <input class="custom-checkbox" type="checkbox" id="collumn-3">
                                <label class="form-check-label" for="collumn-3"></label>
                            </td>
                            <td><a href="#">Sealbagnr: #90860530</a></td>
                            <td><a href="#">Aankoopwaarde: € 1.392,94</a></td>
                            <td class="text-right">
                                <a href="#">Verkoopprijs: € 1.500,00 <img src="/img/icons/arrow/arrow_down_black.svg" alt="" class="ml-2"></a>
                            </td>
                        </tr>
                        <tr>
                            <td class="pl-0">
                                <input class="custom-checkbox" type="checkbox" id="collumn-4">
                                <label class="form-check-label" for="collumn-4"></label>
                            </td>
                            <td><a href="#">Sealbagnr: #90860530</a></td>
                            <td><a href="#">Aankoopwaarde: € 1.392,94</a></td>
                            <td class="text-right">
                                <a href="#">Verkoopprijs: € 1.500,00 <img src="/img/icons/arrow/arrow_down_black.svg" alt="" class="ml-2"></a>
                            </td>
                        </tr>
                    </table>
                </div>

                <p class="gold16 text-right">U ontvangt € 6.000,00</p>
                <p class="text-right mb-5">Winst/verlies <span class="green-portfolio">+ € 428,24 (+8%)</span></p>

                <p>Het te ontvangen bedrag wordt binnen 5 dagen teruggestort op:</p>
                <p class="mb-5"><b>NL 12 ABNA 0123 456 78</b> t.n.v. <b>P. de Vries</b></p>
                <p>Voer uw telefoonnummer in om de bevestigingscode te ontvangen:</p>

                <div class="d-flex flex-wrap align-items-center mb-4">
                    <!-- Phone SMS -->
                    <div class="iti iti--allow-dropdown">
                        <div class="iti__flag-container">
                            <div class="iti__selected-flag" role="combobox" aria-owns="country-listbox" tabindex="0" title="Nederland: +31">
                                <div class="iti__flag iti__nl"></div>
                                <div class="iti__arrow"></div>
                            </div>
                            <ul class="iti__country-list iti__hide" id="country-listbox" aria-expanded="false" role="listbox" aria-activedescendant="iti-item-nl">
                                <li class="iti__country iti__standard iti__active" tabindex="-1" id="iti-item-nl" role="option" data-dial-code="31" data-country-code="nl" aria-selected="true">
                                    <div class="iti__flag-box">
                                        <div class="iti__flag iti__nl"></div>
                                    </div>
                                    <span class="iti__country-name">Nederland</span><span class="iti__dial-code">+31</span></li>
                            </ul>
                        </div>
                        <input type="tel" class="form-control" id="phonesms" name="confirm-phone" autocomplete="off" data-intl-tel-input-id="0" value="06 12345678"><input type="hidden" name="phonesms">
                    </div>
                    <!-- End Phonesms -->
                    <button type="button" id="" class="ml-3 btn btn-outline-primary">Opslaan</button>
                </div>

                <button type="submit" class="btn btn-warning">Verkoop</button>

            </form>
        </dialog>
    </div>
</section>

    <?php include 'layouts/_footer.php'; ?>
</body>

</html>
