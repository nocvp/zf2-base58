<?php

return array (
    'zf-base58' => array (
        'alphabet' => '123456789abcdefghijkmnopqrstuvwxyzABCDEFGHJKLMNPQRSTUVWXYZ'
    ),
    'service_manager' => array(
        'factories' => array(
            'ZfBase58' => 'ZfBase58\Service\Factory\ZfBase58Factory'
        ),
    ),
);