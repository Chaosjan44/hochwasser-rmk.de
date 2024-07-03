<?php require_once("templates/header.php"); ?>
    <div class="container-fluid" style="min-height: 90vh;">
        <?php if (!isMobile()): ?>
        <!-- Desktop -->
        <div class="container-fluid py-3">
            <h2 class="text-center text-kolping-orange">Petition</h2>
            <h1 class="display-4 text-center">Fordern Sie die Regierung auf, den Hochwasseropfern<br> in Rudersberg & Umgebung zu helfen</h1>
            <div class="row py-3">
                <div class="col-2"></div>
                <div class="col-3"><img src="imgs/petition-qrcode.png" alt="QR-Code zu der Petition" class="img-fluid"><span><a href="https://chng.it/BLv9tWxcYH" class="text-kolping-orange text-size-x-large text-center">https://chng.it/BLv9tWxcYH</a></span></div>
                <div class="col-2"></div>
                <div class="col-3">
                    <div class="card cbg3 shadow1" style="opacity: 80%;">
                        <div class="card-body ctext">
                            <h3 class="card-title text-center">Unser Flyer</h3>
                            <div class="justify-content-center text-center">
                                <form method="get" action="files/Flyer_Petition_V2.pdf">
                                    <button class="btn btn-kolping mx-auto my-2" type="submit">
                                        <span class="card-text">Herunterladen</span>
                                        <i class="bi bi-download"></i>
                                    </button>
                                </form> 
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-2"></div>
            </div>
        </div>
        <?php else: ?>
        <!-- Mobile -->
        <div class="container-fluid pt-3">
            <h2 class="text-center text-kolping-orange">Petition</h2>
            <h1 class="display-4 text-center">Fordern Sie die Regierung auf, den Hochwasseropfern<br> in Rudersberg & Umgebung zu helfen</h1>
            <div class="row py-3">
                <div class="col-1"></div>
                <div class="col-10"><img src="imgs/petition-qrcode.png" alt="QR-Code zu der Petition" class="img-fluid"><span><a href="https://chng.it/BLv9tWxcYH" class="text-kolping-orange text-size-x-large text-center">https://chng.it/BLv9tWxcYH</a></span></div>
                <div class="col-1"></div>
            </div>
            <div class="row py-2">
                <div class="col-1"></div>
                <div class="col-10">
                    <div class="card cbg3 shadow1" style="opacity: 80%;">
                        <div class="card-body ctext">
                            <h3 class="card-title text-center">Unser Flyer</h3>
                            <div class="justify-content-center text-center">
                                <form method="get" action="files/Flyer_Petition_V2.pdf">
                                    <button class="btn btn-kolping mx-auto my-2" type="submit">
                                        <span class="card-text">Herunterladen</span>
                                        <i class="bi bi-download"></i>
                                    </button>
                                </form> 
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-1"></div>
            </div>
        </div>
        <?php endif; ?>
    </div>
<?php require_once("templates/footer.php"); ?>