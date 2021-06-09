<?php

$n = 0;
foreach ($data as $name => $text) :
    $n++; ?>
    <main class="flex-lg-shrink-0">
        <div class="container">
            <div>
                <h2>post № <?=$n?> </h2>
            </div>
            <div class="col-md bg-light p-4">
                <div class="panel-heading">
                    <img src="/images/<?=$n?>.jpg" class="img-rounded w-25" alt="photo">
                    <div class="pull-right text-right">
                        <i class="fa fa-calendar"></i><br> 3 hours ago
                    </div>
                    <div><strong><?=$name?></strong></div>
                    <div class="small"><i class="fa fa-map-marker"></i> Medellin, Colombia</div>
                </div>
                <div class="panel-body">
                    <blockquote>
                        <?=$text?>
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
<?php  endforeach; ?>
