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
                                    <h6>Type: <?php echo $pc->getType() ?></h6>
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
                                <?php if($pc instanceof Desktop) : ?>
                                <li>
                                    <h6>Case: <?php echo $pc->getParam("case") ?></h6>
                                </li>
                                <?php else : ?>
                                <li>
                                    <h6>Power Supply Unit: <?php echo $pc->getParam("psu") ?></h6>
                                </li>
                                <?php endif ?>
                                <li>
                                    <h6><?php echo $pc->setPortable($pc) ?></h6>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            <?php endforeach ?>