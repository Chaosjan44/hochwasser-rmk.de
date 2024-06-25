<?php 
$crdate = "2024";
?>

<?php if (!isMobile()): ?>
    <footer class="container-fluid py-3">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-2 text-start">
                    <ul class="px-0">
                        <li>
                            <i class="bi bi-chevron-right"></i>
                            <a href="/" class="ctext ps-2">Start</a>
                        </li>
                    </ul>
                </div>
                <div class="col-2 text-start">
                    <ul class="px-0">
                        <li>
                            <i class="bi bi-chevron-right"></i>
                            <a href="/impressum.php" class="ctext ps-2">Impressum</a> 
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="row align-items-center">
            <div class="col-4 text-start"><a href="https://github.com/chaosjan44/hochwasser-rmk.de" target="#" class="me-2"><i class="bi ctext text-size-x-large bi-github"></i></a></div>
            <div class="col-4 text-center ctext light">&copy; <?=$crdate?> Jan Schniebs</div>
        </div>
    </footer>
<?php else: ?>
    <footer class="container-fluid py-3">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-6 text-start ps-2">
                    <ul class="px-0">
                        <li>
                            <i class="bi bi-chevron-right"></i>
                            <a href="/" class="ctext ps-2">Start</a>
                        </li>
                    </ul>
                </div>
                <div class="col-6 text-start ps-2">
                    <ul class="px-0">
                        <li>
                            <i class="bi bi-chevron-right"></i>
                            <a href="/impressum.php" class="ctext ps-2">Impressum</a> 
                        </li>
                    </ul>
                </div>
                <div class="row justify-content-between align-items-center">
                    <div class="col-3 text-start px-0"><a href="https://github.com/chaosjan44/hochwasser-rmk.de" target="#" class="me-2"><i class="bi ctext text-size-x-large bi-github"></i></a></div>
                    <div class="col-6 ctext text-start light ps-0">&copy; <?=$crdate?> Jan Schniebs</div>
                </div>
            </div>
        </div>
    </footer>
<?php endif; ?>
</body>

<script src="/js/custom.js"></script>

</html>