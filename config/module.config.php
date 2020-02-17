<?php

/**
 * Melis Technology (http://www.melistechnology.com]
 *
 * @copyright Copyright (c] 2015 Melis Technology (http://www.melistechnology.com]
 *
 */

return [
    'router' => [
        'routes' => [
            'melis-backoffice' => [
                'child_routes' => [
                    'application-MelisToolCreatorSymfony' => [
                        'type'    => 'Literal',
                        'options' => [
                            'route'    => 'MelisToolCreatorSymfony',
                            'defaults' => [
                                '__NAMESPACE__' => 'MelisToolCreatorSymfony\Controller',
                            ],
                        ],
                        'may_terminate' => true,
                        'child_routes' => [
                            'default' => [
                                'type'    => 'Segment',
                                'options' => [
                                    'route'    => '/[:controller[/:action]]',
                                    'constraints' => [
                                        'controller' => '[a-zA-Z][a-zA-Z0-9_-]*',
                                        'action'     => '[a-zA-Z][a-zA-Z0-9_-]*',
                                    ],
                                    'defaults' => [],
                                ],
                            ],
                        ],
                    ],
                ],
            ],
        ],
    ],
    'translator' => [
        'locale' => 'en_EN',
    ],
    'service_manager' => [
        'aliases' => [
            'translator' => 'MvcTranslator',
        ],
    ],
    'controllers' => [
        'invokables' => [

        ],
    ],
    'view_manager' => [
        'display_not_found_reason' => true,
        'display_exceptions'       => true,
        'doctype'                  => 'HTML5',
        'template_map' => [

        ],
        'template_path_stack' => [

        ],
        'strategies' => [
            'ViewJsonStrategy',
        ],
    ],
];
