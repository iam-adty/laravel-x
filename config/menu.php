<?php

return [
    'dashboard' => [
        'dashboard' => [
            'label' => 'Dashboard',
            'route' => 'dashboard.',
            'current' => 'dashboard.'
        ],
        'setting' => [
            'label' => 'Setting',
            'route' => 'dashboard.setting.',
            'current' => 'dashboard.setting.*',
            'child' => [
                'site' => [
                    'label' => 'Site',
                    'route' => 'dashboard.setting.site.index',
                    'current' => 'dashboard.setting.site.*'
                ],
                'user' => [
                    'label' => 'User',
                    'route' => 'dashboard.setting.user.index',
                    'current' => 'dashboard.setting.user.*'
                ],
                'team' => [
                    'label' => 'Team',
                    'route' => 'dashboard.setting.team.index',
                    'current' => 'dashboard.setting.team.*'
                ],
                'role' => [
                    'label' => 'Role',
                    'route' => 'dashboard.setting.role.index',
                    'current' => 'dashboard.setting.role.*'
                ],
                'permission' => [
                    'label' => 'Permission',
                    'route' => 'dashboard.setting.permission.index',
                    'current' => 'dashboard.setting.permission.*'
                ]
            ]
        ]
    ]
];
