<?php require_once("templates/header.php"); ?>

<body style="background-image: url('imgs/<?php if (!isMobile()) print("desktop.jpg"); else print("mobile.jpg")?>'); background-position: center; background-size: cover;">
    <div class="container-fluid" style="min-height: 90vh;">
        <?php if (!isMobile()): ?>
        <!-- Desktop -->
        <div class="container-fluid py-3">
            <h2 class="text-center text-kolping-orange">Petition</h2>
            <h1 class="display-4 text-center">Forderung and die Regierung den Hochwasseropfern<br>in Rudersberg & Umgebung zu helfen</h1>
            <div class="row py-3">
                <div class="col-3"></div>
                <div class="col-3"></div>
                <div class="col-3"><img src="imgs/petition-qrcode.png" alt="QR-Code zu der Petition" class="img-fluid"><span><a href="https://chng.it/BLv9tWxcYH" class="clink text-size-x-large text-center">https://chng.it/BLv9tWxcYH</a></span></div>
                <div class="col-3"></div>
            </div>
        </div>
        <?php else: ?>
        <!-- Mobile -->
        <div class="container-fluid pt-3">
            <h2 class="text-center text-kolping-orange">Petition</h2>
            <h1 class="display-4 text-center">Forderung and die Regierung den Hochwasseropfern<br>in Rudersberg & Umgebung zu helfen</h1>
            <div class="row py-3">
                <div class="col-1"></div>
                <div class="col-10"><img src="imgs/petition-qrcode.png" alt="QR-Code zu der Petition" class="img-fluid"><span><a href="https://chng.it/BLv9tWxcYH" class="clink text-size-x-large text-center">https://chng.it/BLv9tWxcYH</a></span></div>
                <div class="col-1"></div>
            </div>
        </div>
        <?php endif; ?>
    </div>

<?php require_once("templates/footer.php"); ?>