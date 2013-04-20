<?php
namespace Skar\Mandango;

return [
    'controllers' => [
        'invokables' => [
            'Skar\Mandango\Console' => 'Skar\Mandango\Controller\ConsoleController',
        ],
    ],

    'console' => [
        'router' => [
            'routes' => [
                'skar_mandango_mondator_process' => [
                    'options' => [
                        'route'    => 'mandango mondator process',
                        'defaults' => [
                            'controller' => 'Skar\Mandango\Console',
                            'action'     => 'mondator-process',
                        ],
                    ],
                ],
            ],
        ],
    ],
];
