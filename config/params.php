<?php

return [
    'adminEmail' => 'admin@camiflexkids.com',
    'user.passwordResetTokenExpire' => 3600,
    'mainSlider' => json_encode(
            [
                ['file' => 'image', 'urlFile' => 'img/content/slides/11.jpg', 'desc' => 'MIRA NUESTROS PRODUCTOS<br>CAMIFLEXKIDS PERU', 'urlRedirect' => 'site/products', 'labelUrlRedirect' => 'Mirar Productos'],
                ['file' => 'image', 'urlFile' => 'img/content/slides/5.jpg', 'desc' => 'DISEÑA TU ESPACIO<br>USA TU CREATIVIDAD', 'urlRedirect' => 'site/products', 'labelUrlRedirect' => 'Comprar'],
                ['file' => 'image', 'urlFile' => 'img/content/slides/10.jpg', 'desc' => 'USALO EN CUALQUIER LUGAR<br>PARA CUALQUIER ESPACIO', 'urlRedirect' => 'site/products', 'labelUrlRedirect' => 'Comprar'],
                ['file' => 'video', 'urlFile' => 'media/video/video-3.mp4', 'desc' => 'DISEÑOS PERSONALIZADOS <br> CONSULTANOS!', 'urlRedirect' => 'site/simulator', 'labelUrlRedirect' => 'Ve al simulador'],
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
    'team' => json_encode(
            [
                ['urlImg' => 'img/content/team/team10.jpg', 'name' => 'Luigui', 'position' => '', 'desc' => '', 'facebook' => '', 'linkedin' => ''],
                ['urlImg' => 'img/content/team/team9.jpg', 'name' => 'Luigui', 'position' => '', 'desc' => '', 'facebook' => '', 'linkedin' => ''],
                ['urlImg' => 'img/content/team/team7.jpg', 'name' => 'Luigui', 'position' => '', 'desc' => '', 'facebook' => '', 'linkedin' => ''],
                ['urlImg' => 'img/content/team/team11.jpg', 'name' => 'Luigui', 'position' => '', 'desc' => '', 'facebook' => '', 'linkedin' => ''],
    ]),
    'clients' => json_encode(
            [
                ['urlImg' => 'img/content/client-logos/logo1.jpg'],
                ['urlImg' => 'img/content/client-logos/logo2.jpg'],
                ['urlImg' => 'img/content/client-logos/logo3.jpg'],
                ['urlImg' => 'img/content/client-logos/logo4.jpg'],
                ['urlImg' => 'img/content/client-logos/logo5.jpg'],
                ['urlImg' => 'img/content/client-logos/logo6.jpg'],
                ['urlImg' => 'img/content/client-logos/logo7.jpg'],
                ['urlImg' => 'img/content/client-logos/logo8.jpg'],
                ['urlImg' => 'img/content/client-logos/logo9.jpg'],
                ['urlImg' => 'img/content/client-logos/logo10.jpg'],
                ['urlImg' => 'img/content/client-logos/logo11.jpg'],
    ]),
];
