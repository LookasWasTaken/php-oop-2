<?php
require_once __DIR__ . "/Models/Computer.php";
require_once __DIR__ . "/Models/Desktop.php";
require_once __DIR__ . "/Models/Laptop.php";
include __DIR__ . "/db.php"
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PC LIST</title>

    <!-- EXTERNAL BOOTSTRAP CSS CDN -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">

</head>

<body class="bg-dark">

    <div class="container py-5">
        <h1 class="text-center text-warning">PC DETAILS</h1>
        <div class="row py-4">
            <?php foreach ($computers as $pc) : ?>
                <div class="col-6 mx-auto">
                    <div class="card m-4">
                        <div class="card-header bg-dark">
                            <h4 class="text-center text-warning"><?php echo $pc->getParam("brand") ?> - <?php echo $pc->getParam("model") ?></h4>
                        </div>
                        <div class="card-body">
                            <ul class="list-unstyled">
                                <li>
                                    <h6><?php echo $pc->getParam("brand") ?> Model  <?php echo $pc->getParam("model") ?></h6>
                                </li>
                                <li>
                                    <h6>Type: ph</h6>
                                    <hr>
                                </li>
                                <li>
                                    <h6>Motherboard: <?php echo $pc->getParam("mobo") ?></h6>
                                </li>
                                <li>
                                    <h6>Operating System: <?php echo $pc->getParam("os") ?></h6>
                                </li>
                                <li>
                                    <h6>Random Access Memory: <?php echo $pc->getParam("ram") ?></h6>
                                </li>
                                <li>
                                    <h6>Central Processing Unit: <?php echo $pc->getParam("cpu") ?></h6>
                                </li>
                                <li>
                                    <h6>Graphics Processing Unit: <?php echo $pc->getParam("gpu") ?></h6>
                                </li>
                                <li>
                                    <h6>Storage: <?php echo $pc->getParam("storage") ?></h6>
                                </li>
                                <li>
                                    <h6>Case: <?php echo $pc->getParam("case") ?></h6>
                                </li>
                                <li>
                                    <h6>Power Supply Unit: <?php echo $pc->getParam("psu") ?></h6>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            <?php endforeach ?>
        </div>
    </div>

    <!-- EXTERNAL BOOTSTRAP JS CDN -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap/dist/js/bootstrap.bundle.min.js"></script>

</body>

</html>