<?php
if (isset($_POST["submit"])) {
    $name = $_POST['name'];
    $surname = $_POST['surname'];
    $email = $_POST['email'];
    $telephone = $_POST['telephone'];
    $company = $_POST['company'];
    $message = $_POST['message'];
    $checkbox = $_POST ['checkbox'];

    $to = 'info.sk@eulerhermes.com, Monika.Vrabelova@eulerhermes.com';
    $subject = $_POST['company'];

    $headers = "Content-Type: text/html; charset=UTF-8" . "\r\n";
    $headers .= "From: $email "."\r\n";

$body =" Dobrý deň Simplicity. Máte nový vyplnený formulár od:" . "<br /><br />". $name." ". $surname ."<br /> E-Mail:". $email."<br /> Telefón:". $telephone."<br />Spoločnosť:". $company ."<br /> $message <br /> Súhlas: Áno";


// Check if name has been entered
if (!$_POST['name']) {
/*$errName = 'Zadajte Vaše meno'*/;
}

if (!$_POST['surname']) {
/*$errSurname = 'Zadajte Vaše priezvisko'*/;
}

// Check if email has been entered and is valid
if (!$_POST['email'] || !filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
$errEmail = 'Zadajte Váš e-mail';
}

if (!$_POST['telephone']) {
/*$errTelephone = 'Zadajte Vaše telefónne číslo'*/;
}


if (!$_POST['company']) {
$errCompany = 'Zadajte Vašu preferenciu';
}

    if (!$_POST['message']) {
        ;
    }

    /*if (!$_POST['checkbox']) {
        $errCheckbox = 'Zadajte Vašu preferenciu';
    }*/

// If there are no errors, send the email
if (!$errEmail && !$errCompany) {
if (mail ($to, $subject, $body, $headers)) {
$result='<div class="alert alert-success">Formulár bol úspešne odoslaný.
    <br>Budeme Vás kontaktovať do 48 hodín.
    <br>Ďakujeme.</div>';
} else {
$result='<div class="alert alert-danger"> Niečo ste zadali nesprávne! Prosím, skontrolujte či máte povinné položky vyplnené.</div>';
}
}
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Global site tag (gtag.js) - Google Analytics -->

    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-122047660-1"></script>

    <script>

        window.dataLayer = window.dataLayer || [];

        function gtag(){dataLayer.push(arguments);}

        gtag('js', new Date());



        gtag('config', 'UA-122047660-1');

    </script>

    <meta name="google-site-verification" content="Bbdgdng1gvazVRhkMwq9xzuONjKtLZuVd_9z2nk4qSI" />
    <meta charset="UTF-8">
    <title>Simplicity</title>
    <meta name="description" content="Zákazníci Vám opäť nezaplatili Vaše faktúry? Najmä pre spoločnosti s ročným obratom do 5 miliónov eur sa to môže rýchlo stať existenčnou hrozbou. Riešením je SIMPLICITY.">
    <link rel="icon" type="image/x-icon" href="assets/eh-favicon.png"/>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://fonts.googleapis.com/css?family=Kadwa:400,700" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css" integrity="sha384-DNOHZ68U8hZfKXOrtjWvjxusGo9WQnrNx2sqG0tfsghAvtVlRW3tvkXWZh58N9jp" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="css/style.css">

</head>

<body>
    <div class="pre-navigation">
        <nav class="navbar navbar-light">
            <a target="_blank" href="http://www.eulerhermes.sk/sk/Pages/default.aspx" class="navbar-brand main-logo"><img src="assets/EH-logo.svg" width="216" height="50"></a>
            <form class="form-inline">
                <a class="btn btn-primary contact-btn" href="#kontakt">Kontaktujte nás</a>
                <a class="navbar-brand nav-item-1"><img src="assets/icon-lock.svg" width="25" height="25"></a>
                <a class="navbar-brand nav-item-2" target="_blank" href="https://eolis.eulerhermes.com/eolis/Main.jsp?urlid=authorization.SharePointLogin&spCrty=sk&bu-office=33">EOLIS</a>
            </form>
        </nav>
    </div>

    <div class="navigation">
        <nav class="navbar navbar-expand-lg navbar-light">
            <a class="navbar-brand" href="#"><img src="assets/icon-home.svg" width="23" height="23"></a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavDropdown">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link" href="#co-je-simplicity">Čo je SIMPLICITY<span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#vyhody-simplicity">Výhody SIMPLICITY</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#kontakt">Kontaktný formulár</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" target="_blank" href="http://www.eulerhermes.sk/sk/poistenie-pohladavok/Pages/bonita-3-odberatelov.aspx">Overte si bonitu 3 odberateľov zadarmo</a>
                    </li>
                </ul>
            </div>
        </nav>
    </div>

   <!--<div class="line">
        <div class="scroll-line"></div>
   </div>-->

    <div class="header">
        <div class="container">
            <div class="col-lg-10 offset-lg-1 header-bg">
                <a class="btn-success play" href="#vyhody-simplicity"><img src="assets/icon-play.svg" width="50" height="50"></a>
                <br><h1 class="h1"><b>SIMPLICITY</b></h1>
                <h2 class="h2">Zákazníci Vám opäť nezaplatili Vaše faktúry? Najmä pre spoločnosti s ročným obratom do 5 miliónov eur sa to môže rýchlo stať existenčnou hrozbou. Riešením je SIMPLICITY.</h2>
            </div>

            <div class="col-lg-10 offset-lg-1 header-btn">
                <a target="_blank" href="http://www.eulerhermes.sk/sk/poistenie-pohladavok/Pages/bonita-3-odberatelov.aspx" class="btn btn-danger">OVERTE SI BONITU 3 ODBERATEĽOV</a>
            </div>

            <div class="col-lg-10 offset-lg-1 header-btn-2">
                <a href="#kontakt" class="btn btn-primary">KONTAKTUJTE NÁS</a>
            </div>
        </div>
    </div>

    <div class="post-header" id="co-je-simplicity">
        <div class="container">
            <div class="row">
                <div class="col-lg-10 offset-lg-1">
                    <h2 class="h2">Čo je SIMPLICITY?</h2>
                    <p class="p">Možno ste si mysleli, že poistenie pohľadávok je zložitý produkt vhodný len pre veľké a nadnárodné spoločnosti. Naopak, môže sa stať užitočným nástrojom aj pri rozvoji menších podnikateľských aktivít a preto  sme teraz výhody poistenia pohľadávok rozšírili aj pre malé a stredné firmy.
                        <br><br>SIMPLICITY – jednoduchá a spoľahlivá istota pre malých a stredných podnikateľov s obratom do 5 mil Eur.</p>
                </div>
            </div>
        </div>
    </div>

    <div class="box-content">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-12 col-sm-12 box">
                    <img src="assets/icon-prehladne.svg" height="60" width="60">
                    <h3 class="h3">PREHĽADNE</h3>
                    <p class="p">Fixné poistné umožňuje ľahko pochopiť a spravovať poistenie pohľadávok.</p>
                </div>
                <div class="col-lg-4 col-md-12 col-sm-12 box">
                    <img src="assets/icon-jednoducho.svg" height="60" width="60">
                    <h3 class="h3">JEDNODUCHO</h3>
                    <p class="p">Nemáte žiadne ďalšie administratívne úkony a môžete sa plne sústrediť na svoje podnikanie.</p>
                </div>
                <div class="col-lg-4 col-md-12 col-sm-12 box">
                    <img src="assets/icon-rychlo.svg" height="60" width="60">
                    <h3 class="h3">RÝCHLO</h3>
                    <p class="p">Okamžité krytie dostane Vaše pohľadávky pod kontrolu.</p>
                </div>
            </div>
        </div>
    </div>

    <div class="main-wrapper" id="vyhody-simplicity">
        <div class="container">
            <div class="row">
                <div class="col-lg-5 col-md-12 col-sm-12 col-xs-10 left-content">
                    <h4 class="h4">Výhody SIMPLICITY</h4>
                    <br><p>•  štandardné 60% krytie celého portfólia</p>
                    <p>•  voliteľné navýšenie na 90% krytie</p>
                    <p>•  fixné poistné v závislosti od poistiteľného obratu</p>
                    <p>•  žiadny dotazník</p>
                    <p>•  žiadne preverovanie odberateľov</p>
                    <p>•  žiadne žiadosti o poistné limity</p>
                    <p>•  grade servis v cene (300 EUR admin. poplatok)</p>
                    <p>•  žiadne hlásenia obratu</p>
                    <p>•  automatická prolongácia</p>
                    <p>•  predchádzajúce škody sa neskúmajú</p>
                </div>

                <div class="col-lg-7 col-md-12 col-sm-12 col-xs-10 right-content">
                    <h4 class="h4">Ako SIMPLICITY funguje?</h4>
                    <br><iframe class="video" width="640" height="350" src="https://www.youtube.com/embed/AtFJgEeLt-4?rel=0&amp;controls=0&amp;showinfo=0" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
                </div>
            </div>
        </div>
    </div>

    <div class="forms" id="kontakt">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 text-center">
                    <h4>Kontaktný formulár</h4>
                    <br><p>Vyplňte tento krátky formulár a my Vás budeme kontaktovať.</p>
                    <p>V spoločnosti Euler Hermes si ceníme Váš čas a pokúsime sa odpovedať na Vašu otázku čo najskôr.</p>
                    <p>Odpoveď na niektoré otázky ale môže trvať trochu dlhšie, no budeme sa snažiť Vám odpovedať do 3 pracovných dní.</p>
                </div>
            </div>

            <div class="row">
                <div class="col-xs-10 col-sm-12 col-md-12 col-lg-10 offset-lg-1 col-md-0 col-sm-0 col-xs-0 form-section">
                    <p class="req">*povinné údaje</p>
                    <form id="contact-form" class="form" action="index.php#company" method="POST" role="form">
                        <div class="form-group">
                            <label class="form-label" for="name">Meno</label>
                            <input type="text" class="form-control" id="name" name="name" placeholder="Meno" tabindex="1" value="<?php echo htmlspecialchars($_POST['name']); ?>">
                        </div>
                        <div class="form-group">
                            <label class="form-label" for="name">Priezvisko</label>
                            <input type="text" class="form-control" id="surname" name="surname" placeholder="Priezvisko" tabindex="2" value="<?php echo htmlspecialchars($_POST['surname']); ?>">
                        </div>
                        <div class="form-group" id="company">
                            <label class="form-label" for="subject">*Spoločnosť</label>
                            <input type="text" class="form-control" id="subject" name="company" placeholder="*Spoločnosť" tabindex="3" value="<?php echo htmlspecialchars($_POST['company']); ?>" required>
                        </div>
                        <?php echo "<p class='text-danger'>$errCompany</p>";?>
                        <div class="form-group">
                            <label class="form-label" for="email">*E-mail</label>
                            <input type="email" class="form-control" id="email" name="email" placeholder="*E-mail" tabindex="4" value="<?php echo htmlspecialchars($_POST['email']); ?>" required>
                        </div>
                        <?php echo "<p class='text-danger'>$errEmail</p>";?>
                        <div class="form-group">
                            <label class="form-label" for="telephone">Telefón</label>
                            <input type="number" class="form-control" id="telephone" name="telephone" placeholder="Telefón" tabindex="5" value="<?php echo htmlspecialchars($_POST['telephone']); ?>">
                        </div>
                        <div class="form-group">
                            <label class="form-label" for="message">Vaša správa</label>
                            <textarea rows="5" cols="50" name="message" class="form-control" id="message" placeholder="Vaša správa..." tabindex="6"></textarea>
                        </div>
                        <div class="container">
                            <div class="row">
                                <div class="col-lg-4 check-grid">
                                    <div class="form-check">
                                        <input type="checkbox" class="form-control" id="checkbox" name="checkbox" value="<?php echo htmlspecialchars($_POST['checkbox']); ?>" required>
                                        <label for="checkbox">Súhlasím s podmienkami</label>
                                    </div>
                                </div>

                                <div class="col-lg-8 check-text">
                                    <p>Označením tohto políčka súhlasím so spracovaním osobných údajov spoločnosťou Euler Hermes
                                        na účely oslovenia s ponukou produktov a služieb v súlade s <a target="_blank" href="http://www.eulerhermes.sk/sk/Pages/Cookies.aspx">Vyhlásením o ochrane osobných údajov</a>.</p>
                                </div>
                            </div>

                        </div>

                        <div class="form-group submit" id="submit">
                            <input id="submit" name="submit" type="submit" value="Odoslať formulár" class="btn btn-primary">
                        </div>

                        <div class="container">
                            <div class="row">
                                <div class="col-lg-10 offset-lg-1">
                                    <div class="form-group">
                                        <div class="pop-up">
                                            <?php echo $result; ?>
                                        </div>

                                    </div>
                                </div>

                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <div class="contact-section">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-10 col-md-12 col-sm-12 col-xs-12 offset-lg-1 offset-md-0 offset-sm-0 offset-xs-0 contact-box">
                            <h4 class="h4">Zistite viac o našich produktoch a kontaktujte nás:</h4>
                            <div class="col-lg-10 col-md-12 col-sm-12 col-xs-12 offset-lg-1 offset-md-0 offset-sm-0 offset-xs-0 contact-btns">
                                <a href="mailto:INFO@EULERHERMES.SK" class="btn btn-danger btn-lg active btn-1" role="button" aria-pressed="true"><i class="fas fa-envelope"></i> info@eulerhermes.sk</a>
                                <br><br>
                                <a href="tel:+421258280911" class="btn btn-danger btn-lg active btn-2" role="button" aria-pressed="true"><i class="fas fa-phone"></i> +421 25828 0911</a>
                            </div>
                        </div>
                    </div>
                </div>
    </div>
    
    <div class="social-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h4 class="h4">Sledujte nás</h4>
                    <ul>
                        <li class="link"><a target="_blank" href="http://www.eulerhermes.sk"><i class="fas fa-link"></i></a></li>
                        <li class="linkedin"><a target="_blank" href="https://www.linkedin.com/company/euler-hermes/"><i class="fab fa-linkedin-in"></i></a></li>
                        <li class="youtube"><a target="_blank" href="https://www.youtube.com/user/eulerhermesgroup"><i class="fab fa-youtube"></i></a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    
    <div class="footer">
        <div class="container footer-1">
            <div class="row">
                <div class="col-lg-5 col-md-12 offset-lg-1 logo-ft">
                    <img src="assets/EH-logo-foot.svg" width="140" height="32">
                </div>
                
                <div class="col-lg-5 col-md-12 logo-ft-al">
                    <img src="assets/Allianz-logo-foot.svg" width="170" height="30">
                </div>
            </div>
        </div>

        <div class="container footer-2">
            <div class="row">
                <div class="col-lg-3 col-md-12 offset-lg-1 web">
                    <a target="_blank" href="http://www.eulerhermes.sk">www.eulerhermes.sk</a>
                </div>

                <div class="col-lg-4 col-md-12 copyright">
                    <p>© 2018 Euler Hermes. Všetky práva vyhradené.</p>
                </div>

                <div class="col-lg-3 col-md-12 privacy">
                    <a target="_blank" href="http://www.eulerhermes.sk/sk/Pages/Cookies.aspx">Privacy notice</a><span> | </span><a target="_blank" href="http://www.eulerhermes.sk/sk/Pages/legals.aspx">Legal information</a>
                </div>
            </div>
        </div>
    </div>

    <script src="js/jquery-3.2.1.min.js"></script>
    <script src="js/bootstrap.js"></script>
    <script src="js/script.js"></script>
</body>