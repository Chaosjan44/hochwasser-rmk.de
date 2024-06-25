<?php require_once("templates/header.php"); ?>

<body style="background-image: url('imgs/<?php if (!isMobile()) print("desktop.jpg"); else print("mobile.jpg")?>'); background-position: center; background-size: cover;">
    <div class="container-fluid" style="min-height: 90vh;">
        <?php if (!isMobile()): ?>
        <!-- Desktop -->
        <div class="position-absolute top-50 start-50 translate-middle">
            <h1 class="display-1 text-center">Work in Progress</h1>
        </div>
        <?php else: ?>
        <!-- Mobile -->
        <div class="position-absolute top-50 start-50 translate-middle">
            <h1 class="display-1 text-center">Work in Progress</h1>
        </div>
        <?php endif; ?>
    </div>

<?php require_once("templates/footer.php"); ?>