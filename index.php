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
    <title>PC Components</title>
    
    <!-- EXTERNAL BOOTSTRAP CSS CDN -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    
</head>
<body class="bg-dark">

    <div class="container py-5">
        <h1 class="text-center text-danger">PC COMPONENTS</h1>
        <div class="row py-4">
            <?php foreach ($components as $comp) : ?>
                <div class="col-8 mx-auto">
                    <div class="card m-4">
                        <div class="card-header bg-dark">
                            <h4 class="text-center text-success"><?php echo ($comp->name) ?></h4>
                        </div>
                        <div class="card-body">
                            <div>
                                <h6>Director: <?php echo ($comp->name) ?></h6>
                            </div>
                            <div>
                                <h6>Genre: <?php echo ($comp->name) ?></h6>
                            </div>
                            <div>
                                <h6>Duration: <?php echo ($comp->name) ?>min</h6>
                            </div>
                            <div>
                                <h6>Average Vote: <?php echo ($comp->name) ?> from IMDb</h6>
                            </div>
                            <div>
                                <h6>Language: <?php echo ($comp->name) ?></h6>
                            </div>
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