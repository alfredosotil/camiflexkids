
<?php
// put your code here

?>
<div class="c-content-person-1 c-option-2">
    <div class="c-caption c-content-overlay">
        <!--        <div class="c-overlay-wrapper">
                    <div class="c-overlay-content">
                        <a class="team-gallery" href="<?= $data->urlImg; ?>" data-lightbox="fancybox" data-fancybox-group="gallery-2">
                            <i class="icon-magnifier"></i>
                        </a>
                    </div>
                </div>-->
        <img src="<?= $data->urlImg; ?>" class="img-responsive c-overlay-object" alt="">
    </div>
    <div class="c-body">
        <div class="c-head">
            <div class="c-name c-font-uppercase c-font-bold"><?= $data->name; ?></div>
            <!--            <ul class="c-socials c-theme-ul">
                            <li><a href="<?= $data->facebook; ?>" target="_blank"><i class="icon-social-facebook"></i></a></li>
                            <li><a href="<?= $data->linkedin; ?>" target="_blank"><i class="icon-social-linkedin"></i></a></li>
                        </ul>-->
        </div>
        <div class="c-position">
            <?= $data->position; ?>
        </div>
        <p>
            <?= $data->desc; ?>
        </p>
    </div>
</div>