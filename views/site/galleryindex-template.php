<?php ?>
<div class="c-content-isotope-item <?= $data->type ?>">
    <div class="c-content-isotope-image-container">
        <img class="c-content-isotope-image" src="<?= $data->urlImg; ?>"/>
        <div class="c-content-isotope-overlay c-ilightbox-image-4"
             href="<?= $data->urlImg; ?>"
             data-options="thumbnail:'<?= $data->urlImg; ?>'"
             data-caption="<h4><?= $data->captionTitle ?></h4><p><?= $data->captionMessage ?></p>"
             >
            <div class="c-content-isotope-overlay-icon">
                <i class="fa fa-cog c-font-white"></i>
            </div>
        </div>
    </div>
</div>

