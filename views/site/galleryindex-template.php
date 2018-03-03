<?php ?>
<div class="c-content-isotope-item <?= $data->type ?>">
    <div class="c-content-isotope-image-container">
        <img class="c-content-isotope-image" 
             src="<?= $data->urlImg; ?>" 
             href="<?= $data->urlImg; ?>" 
             data-lightbox-title="<?= $data->captionTitle ?>" 
             data-lightbox-content="<?= $data->captionMessage ?>" 
             data-lightbox-gallery="gallery"
             />
    </div>
</div>

