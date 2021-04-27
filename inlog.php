<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Modal popups with CSS3 without Javascript</title>

    <!-- Phone SMS -->
    <link rel="stylesheet" href="/css/intlTelInput.css">

<style type="text/css">
    .header, .navbar, .content, .footer, .sidebar {
        box-sizing: border-box;
        padding: 10px;
        margin: 4px;
    }
    .header {
        width: 100%;
        height: 120px;
        background-color: #002A92;
    }
    .main {
        width: 100%;
    }
    .navbar {
        background-color: #2563FF;
        text-align: center;
    }
    .navbar a {
        color: #ffffff;
    }
    .footer {
        width: 100%;
        height: 50px;
        background-color: #002A92;
    }
    .sidebar.left {
        background-color: #002A92;
    }
    .sidebar.right {
        background-color: #002A92;
    }
    .content {
        background-color: #7BA0FF;
    }

    /* flexbox code*/
    html {
        display: -webkit-flex;
        display: flex;
        flex-direction: column;
        min-height: 100%;
    }
    body {
        display: -webkit-flex;
        display: flex;
        flex-direction: column;
        flex: auto;
    }
    .header {
        display: -webkit-flex;
        display: flex;
    }
    .main {
        flex: auto;
        display: -webkit-flex;
        display: flex;
    }
    .inner {
        width: 100%;
        display: -webkit-flex;
        display: flex;
    }
    .header, .footer, .navbar {
        /* flex: 1 1 100%; */
    }
    .sidebar {
        flex: 0 0 200px;
        display: -webkit-flex;
        display: flex;
        flex-wrap: wrap;
    }
    .content {
        min-height: 300px;
        flex: 1 1 360px;
        display: -webkit-flex;
        display: flex;
        flex-wrap: wrap;
    }


/*** /////////////////////////////////// |||||||||||||||||||||||||||||||||||||| \\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\ ***/
/******************** Modal windows in pure CSS, no javascript  **********************************/
/*** \\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\ |||||||||||||||||||||||||||||||||||||| /////////////////////////////////// ***/

    *, ::after, ::before {
        box-sizing: border-box;
    }

    .auxlogin-overlay {
        top: 0;
        right: 0;
        bottom: 0;
        left: 0;
        z-index: 9999;
        visibility: hidden;
        background-color: rgba(255, 255, 255, 0.7);
        opacity: 0;
        position: fixed;
        cursor: default;
    }
    .auxlogin-overlay:target {
        visibility: visible;
        opacity: 1;
        transition: all 0.6s;
    }

    .auxlogin-popup {
        top: 0;
        left: 50%;
        font-size: 16px;
        color: #454545;
        font-family: 'Avenir', Arial, sans-serif;
        z-index: 9999;
        margin: 0 auto;
        width: 100%;
        min-width: 300px;
        max-width: 430px;
        position: fixed;
        padding: 30px 40px;
        border: 2px solid #EFEFEF;
        border-radius: 20px;
        background-color: #FFFFFF;
        box-shadow: 0 15px 20px rgba(0,0,0,.22),0 19px 60px rgba(0,0,0,.3);
        transform: translate(-50%, -150%);
    }
    .auxlogin-overlay:target+.auxlogin-popup {
        top: 50%;
        transform: translate(-50%, -50%);
        transition: transform 0.6s ease-out;
    }

    .auxlogin-popup p {
        margin: 0;
        padding: 10px;
    }

    @media only screen and (min-width: 768px) and (max-width: 959px) {
        .auxlogin-popup {
            width: 95%;
        }
    }

    @media only screen and (min-width: 320px) and (max-width: 767px) {
        .auxlogin-popup {
            width:85%;
        }
    }

    .auxlogin-popup img {
        border: none;
        height: auto;
        margin-right: 10px;
    }

    .auxlogin-popup .auxgroup{
        margin-bottom: 16px;
        position: relative;
    }

    .auxlogin-popup label {
        display: block;
        margin: 12px 74px 2px 0;
        font-size: 14px;
        font-weight: lighter;
        color: #454545;
        font-family: 'Avenir-Roman', Arial, sans-serif;
    }

    .auxlogin-popup  .phonesmswrap {
        display: -ms-flexbox;
        display: flex;
        -ms-flex-wrap: wrap;
        flex-wrap: wrap;
        -ms-flex-align: center;
        align-items: center;
    }

    #phonesms {
        font-family: "Avenir-Demi", sans-serif;
        color: #7F7679;
        box-shadow: inset 0 1px 5px 0 #EFEFEF;
        resize: none;
        display: block;
        width: 170px;
        height: 42px;
        font-size: 16px;
        font-weight: 400;
        line-height: 1.5;
        background-color: #fff;
        background-clip: padding-box;
        border: 1px solid #ced4da;
        border-radius: .25rem;
        transition: border-color .15s ease-in-out,box-shadow .15s ease-in-out;
        overflow: visible;
    }

    .auxlogin-popup .btn:not(:disabled){
        cursor: pointer;
        display: inline-block;
        font-weight: 400;
        text-align: center;
        vertical-align: middle;
        -ms-user-select: none;
        user-select: none;
        padding: .375em 1.25em;
        font-size: 16px;
        border: 2px solid transparent;
        line-height: 1.5;
        border-radius: .25rem;
        text-decoration: none;
        font-family: "Avenir-Medium", sans-serif;
        transition: color .15s ease-in-out,background-color .15s ease-in-out,border-color .15s ease-in-out,box-shadow .15s ease-in-out;
    }

    .auxlogin-popup .btn-outline-blue {
        color: #074975;
        border-color: #074975 !important;
        background-color: white;
        margin-left: 15px;
    }
    .auxlogin-popup  .btn-outline-blue:hover {
        background-color: #074975;
        color: white;
    }
    .auxlogin-popup  .btn-gold {
        background-color: #b88e2d;
        color: white;
        border-color: #b88e2d !important;
        margin-right: 15px;
        width: 110px;
    }
    .auxlogin-popup  .btn-gold:hover {
        background-color: silver;
        color: black;
    }
    .auxlogin-popup  .gold-text,
    .auxlogin-popup  .blue-text {
        font-size: 14px;
        font-weight: bolder;
    }
    .auxlogin-popup  .gold-text{
        color: #b88e2d;
        text-decoration: none;
    }
    .auxlogin-popup  .gold-text:hover{
        text-decoration: underline;
    }
    .auxlogin-popup  .blue-text {
        color: #074975;
        justify-content: center;
    }
    .auxlogin-popup .form-popup {
        font-size: 16px;
        font-weight: 400;
        line-height: 1.5;
        width: 100%;
        padding: 6px 0;
        box-sizing: border-box;
        border: 0;
        outline: none;
        border-bottom-color: #b7b8b6;
        border-bottom-width: 2px;
        border-bottom-style: solid;
        transition: border-color .15s ease-in-out;
    }
    .auxlogin-popup .form-popup:focus {
        border-bottom-color: #b88e2d;
    }
    .auxlogin-popup .form-popup::placeholder {
        font-size: 16px;
        color: darkgray;
     }

    .auxlogin-popup .password-control {
        position: absolute;
        top: 27px;
        right: 1px;
        display: inline-block;
        width: 20px;
        height: 20px;
        filter: alpha(Opacity=50);
        opacity: 0.5;
        background: url('img/icons/onboarding/view.svg') 0 0 no-repeat;
    }
    .auxlogin-popup  .password-control.view {
        background-image: url("img/icons/onboarding/no-view.svg");
    }

/*** /////////////////////////////////// |||||||||||||||||||||||||||||||||||||| \\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\ ***/
/******************** end Modal windows in pure CSS, no javascript  *******************************/
/*** \\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\ |||||||||||||||||||||||||||||||||||||| /////////////////////////////////// ***/

</style>


</head>

<body>

<div class="header">I'm Header</div>
<div class="navbar">
    <a href="/mijn-portfolio.php">Home</a>
    <a href="/mijn-edelmetalen.php">Products</a>
    <a href="/safe-contact.php">Contacts</a>
</div>
<div class="main">
    <div class="inner">
        <div class="sidebar left">I'm Left sidebar</div>
        <div class="content">
            <p><span>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusantium animi autem, blanditiis culpa deserunt, dolorem eligendi enim eum id ipsa iste laborum molestias necessitatibus optio perspiciatis recusandae, sed totam voluptate.</span><span>Explicabo inventore molestias neque repudiandae sed sunt voluptatem. Accusamus corporis doloremque ea enim expedita sapiente? Amet assumenda dolorem doloremque ipsam maxime, officia quas? Ab commodi eos fugiat iure praesentium. Laboriosam!</span></p>
            <h1 style="margin: 0 auto"><a href="#win1" class="button button-green">Open window 1</a></h1>
            <p><span>Lorem ipsum dolor sit amet, consectetur adipisicing elit. At autem deserunt eos eveniet exercitationem illo impedit in magni, neque nesciunt nisi nostrum quae, quibusdam rem repudiandae vel veniam voluptatem! Minus?</span><span>Ab distinctio eligendi officia pariatur praesentium quibusdam quod sequi tenetur. Ab accusamus architecto at consectetur dolores, expedita ipsa, iste laborum magni minima non quam qui quo quod quos repellendus unde?</span><span>Asperiores incidunt ipsa libero nihil quae quod ratione tempore! Debitis dolore eveniet facilis hic modi nesciunt quae, recusandae veritatis? Aliquam aliquid aspernatur atque eveniet maiores modi quae saepe sequi voluptatem?</span><span>Assumenda eveniet ipsum libero odio quos reprehenderit vero voluptatum! Fugiat nam natus quae quas vero! Aliquam aliquid atque excepturi maiores maxime nobis placeat quam? Dolores ex minima neque qui sed!</span><span>Asperiores aspernatur consectetur excepturi ipsam ipsum nulla obcaecati odio perspiciatis ratione voluptate. Animi cupiditate, deleniti esse exercitationem explicabo, ipsa itaque magnam nam officiis optio praesentium reiciendis tempora tempore temporibus veniam.</span></p>
        </div>
        <div class="sidebar right">I'm Right sidebar</div>
    </div>
</div>

<div class="footer">I'm Footer</div>

<!-- modal window 1 -->
<a href="#x" class="auxlogin-overlay" id="win1"></a>
<div class="auxlogin-popup">
    <div>
        <img src="/img/aux-safe-logo.png" alt="aunexumsafe" style="width: 190px; height: auto">
    </div>
    <form method="post">
        <div class="auxgroup">
            <label for="login-email">E-mailadres</label>
            <input type="email" class="form-popup" id="login-email" placeholder="E-mailadres">
        </div>
        <div class="auxgroup" style="margin-bottom: 30px">
            <label for="password-input">Wachtwoord</label>
            <input type="password" class="form-popup" id="password-input">
            <a href="#" class="password-control" onclick="return show_hide_password(this);"></a>
        </div>

        <p style="margin-bottom: 20px; padding: 0">Voer uw telefoonnummer in om de bevestigingscode te ontvangen</p>

        <div class="phonesmswrap" style="margin-bottom: 30px">
            <!-- Phone SMS -->
            <div class="iti iti--allow-dropdown" style="width: 170px">
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
                <input type="tel" id="phonesms" name="confirm-phone" autocomplete="off" data-intl-tel-input-id="0" placeholder="06 12345678"><input type="hidden" name="phonesms">
            </div>
            <!-- End Phonesms -->
            <button type="button" id="" class="btn btn-outline-blue">Opslaan</button>
        </div>

        <div class="phonesmswrap" style="margin-bottom: 20px">
            <button type="submit" class="btn btn-gold">Inloggen</button>
            <a href="#" class="gold-text">Wachtwoord vergeten?</a>
        </div>

        <p class="phonesmswrap blue-text">
            <img src="img/icons/onboarding/lock_login.svg" alt="">
            Je logt veilig in op ons klantenportaal
        </p>
    </form>
</div>
<!-- end modal window 1 -->

<script>
    // Show / hide password without jQuery
function show_hide_password(target){
    var input = document.getElementById('password-input');
    if (input.getAttribute('type') == 'password') {
        target.classList.add('view');
        input.setAttribute('type', 'text');
    } else {
        target.classList.remove('view');
        input.setAttribute('type', 'password');
    }
    return false;
}
</script>

</body>

</html>
