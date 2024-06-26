<?php require_once("templates/header.php"); ?>

<body style="background-image: url('imgs/<?php if (!isMobile()) print("desktop.jpg"); else print("mobile.jpg")?>'); background-position: center; background-size: cover;">
<div class="container py-3" style="min-height: 90vh;">
    <div>
        <h1 class="display-3 text-center text-kolping-orange">Impressum</h1>
        <h5 class="mb-1">Angaben gemäß § 5 Telemediengesetz (TMG):</h5>
        <p class="mb-3">
            Jan Schniebs<br>
            c/o IP-Management #12901<br>
            Ludwig-Erhard-Str. 18<br>
            20459 Hamburg<br>
            E-Mail: <a href="mailto:info@hochwasser-rmk.de" class="text-kolping-orange">info@hochwasser-rmk.de</a><br>
            Telefon: +49 163 6165704
        </p>
        <h5 class="mb-1">Inhaltlich verantwortlich i.S.v. §55 Abs. 2 RStV:</h5>
        <p class="mb-3">
            Jan Schniebs<br>
            c/o IP-Management #12901<br>
            Ludwig-Erhard-Str. 18<br>
            20459 Hamburg<br>
            E-Mail: <a href="mailto:info@hochwasser-rmk.de" class="text-kolping-orange">info@hochwasser-rmk.de</a><br>
            Telefon: +49 163 6165704<br>
            <br>
        </p>
    </div>
</div>
<?php require_once("templates/footer.php"); ?>