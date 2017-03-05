<?php

use Cake\Core\Configure;

Configure::write('Resize', [
    'defaultSize' => [500, 500], //for invalid sizes
    'sizes' => [], //whitelist of sizes[[100,100], [200,200]],
    'maxSize' => [4000, 4000], //you can define a maxSize
]);

Configure::write('teste','hue br');
