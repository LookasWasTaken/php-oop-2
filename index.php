<?php
require_once __DIR__ . "/Models/Computer.php";
require_once __DIR__ . "/Models/Desktop.php";
require_once __DIR__ . "/Models/Laptop.php";
include __DIR__ . "/db.php"
?>

<!DOCTYPE html>
<html lang="en">

<?php include __DIR__ . "./Views/Layout/head.php" ?>

<body class="bg-dark">

    <div class="container py-5">
        <h1 class="text-center text-warning">PC DETAILS</h1>
        <div class="row py-4">
        <?php include __DIR__ . "./Views/Partials/col.php" ?>
        </div>
    </div>

    <!-- EXTERNAL BOOTSTRAP JS CDN -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap/dist/js/bootstrap.bundle.min.js"></script>

</body>

</html>