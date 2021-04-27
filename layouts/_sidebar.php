<?php
    $haystack = $_SERVER['REQUEST_URI'];;
?>
<!-- Sidebar -->
<aside class="border-right" id="sidebar-wrapper">
    <div class="d-flex align-items-start flex-column" style="height: 100%; width: 100%">
        <div class="list-group mt-2">
            <?php
                $needle   = 'mijn-portfolio';
                $pos = strripos($haystack, $needle);
            ?>
            <a href="/<?=$needle?>.php" class="list-group-item list-group-item-action <?php if ($pos) echo 'active'; ?>">
                <img src="/img/icons/menu/menu-mijnportfolio.svg" width="17" height="17" alt="">
                Mijn portfolio
            </a>
            <?php
                $needle   = 'mijn-edelmetalen';
                $pos = strripos($haystack, $needle);
            ?>
            <a href="/<?=$needle?>.php" class="list-group-item list-group-item-action <?php if ($pos) echo 'active'; ?>">
                <img src="/img/icons/menu/menu-mijn-edelmetalen<?php if ($pos) echo '-actief'; ?>.svg" <?php echo $pos ==true ? 'width="21" height="19"' : 'width="17" height="17"'; ?>  alt="">
                Mijn edelmetalen
            </a>
            <?php
                $needle   = 'mijn-gegevens';
                $pos = strripos($haystack, $needle);
            ?>
            <a href="/<?=$needle?>-gemachtigde.php" class="list-group-item list-group-item-action <?php if ($pos) echo 'active'; ?>">
                <img src="/img/icons/menu/menu-mijngegevens.svg" width="17" height="17" alt="">
                Mijn gegevens
            </a>
            <?php
                $needle   = 'documenten';
                $pos = strripos($haystack, $needle);
            ?>
            <a href="/<?=$needle?>.php" class="list-group-item list-group-item-action <?php if ($pos) echo 'active'; ?>">
                <img src="/img/icons/menu/menu-documenten.svg" width="17" height="17" alt="">
                Documenten
            </a>
            <?php
                $needle   = 'safe-tarieven';
                $pos = strripos($haystack, $needle);
            ?>
            <a href="/<?=$needle?>.php" class="list-group-item list-group-item-action <?php if ($pos) echo 'active'; ?>">
                <img src="/img/icons/menu/menu-tarieven.svg" width="17" height="17" alt="">
                Tarieven
            </a>
            <?php
                $needle   = 'safe-contact';
                $pos = strripos($haystack, $needle);
            ?>
            <a href="/<?=$needle?>.php" class="list-group-item list-group-item-action <?php if ($pos) echo 'active'; ?>">
                <img src="/img/icons/menu/menu-contact.svg" width="17" height="17" alt="">
                Contact
            </a>
        </div>

        <form id="quick-options" class="mt-4 mt-md-auto mb-4">
        <ul>
            <li>
                <img src="/img/icons/menu/menu_instellingen.svg" width="17" height="17" alt="">
                Instellingen
                <ul class="mt-1">
                    <li> <img src="/img/icons/menu/menu-currency.svg" width="12" height="12" alt="">
                        <select id="currency">
                            <option>Eurо</option>
                            <option>USD</option>
                            <option>GRN</option>
                        </select>
                    </li>
                    <li> <img src="/img/icons/menu/menu-gewicht.svg" width="12" height="12" alt="">
                        <select id="weight">
                            <option>Troy ounce</option>
                            <option>Gramm</option>
                            <option>Litr</option>
                        </select>
                    </li>
                </ul>
            </li>
        </ul>
        </form>
    </div>
</aside>
<!-- /#sidebar-wrapper -->