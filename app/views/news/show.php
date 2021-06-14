<?php
if (!empty($data)) {
    foreach ($data as $row) :
        { ?>
            <main class="flex-lg-shrink-0">
                <div class="container">
                    <div>
                        <h2>post № <?=$row['id']?> </h2>
                    </div>
                    <div class="col-md bg-light p-4">
                        <div class="panel-heading">
                            <img src="<?=$row['img']?>" class="img-rounded w-25" alt="photo">
                            <div class="pull-right text-right">
                                <i class="fa fa-calendar"></i><br> 3 hours ago
                            </div>
                            <div><strong><?=$row['name']?></strong></div>
                            <div class="small"><i class="fa fa-map-marker"></i> Medellin, Colombia</div>
                        </div>
                        <div class="panel-body">
                            <blockquote>
                                <?=$row['text']?>
                            </blockquote>
                        </div>
                        <div class="panel-footer">
                            <label>
                                <input type="email" class="form-control" placeholder="Write a comment...">
                            </label>
                        </div>
                    </div>
                    <hr class="w-100">
                </div>
            </main>
        <?php }
    endforeach;
}?>