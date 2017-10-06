<?php

return [
    'adminEmail' => 'admin@example.com',
    'mainSlider' => json_encode(
            [
                ['file' => 'image', 'urlFile' => 'img/content/slides/11.jpg', 'desc' => 'TAKE THE WEB BY<br>STORM WITH JANGO', 'urlRedirect' => 'site/shop', 'labelUrlRedirect' => 'Comprar'],
                ['file' => 'image', 'urlFile' => 'img/content/slides/5.jpg', 'desc' => 'JANGO IS OPTIMIZED<br>TO EVERY DEVELOPMENT', 'urlRedirect' => 'site/shop', 'labelUrlRedirect' => 'Comprar'],
                ['file' => 'image', 'urlFile' => 'img/content/slides/10.jpg', 'desc' => 'JANGO IS OPTIMIZED<br>TO EVERY DEVELOPMENT', 'urlRedirect' => 'site/shop', 'labelUrlRedirect' => 'Comprar'],
                ['file' => 'video', 'urlFile' => 'media/video/video-3.mp4', 'desc' => 'Let us show you <br>Unlimited possibilities', 'urlRedirect' => 'site/shop', 'labelUrlRedirect' => 'Comprar'],
    ]),
    'projects' => json_encode(
            [
                [],
    ]),
    'latestProjectSlider' => json_encode(
            [
                ['file' => 'image', 'urlFile' => 'img/content/slides/1.jpg'],
                ['file' => 'image', 'urlFile' => 'img/content/slides/4.jpg'],
                ['file' => 'image', 'urlFile' => 'img/content/slides/6.jpg'],
    ]),
];
