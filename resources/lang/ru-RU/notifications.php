<?php

/*
 * This file is part of Cachet.
 *
 * (c) Alt Three Services Limited
 *
 * For the full copyright and license information, please Просмотр the LICENSE
 * file that was distributed with this source code.
 */

return [
    'component' => [
        'status_update' => [
            'mail' => [
                'subject'  => 'Обновление статуса компонента',
                'greeting' => 'Статус компонента обновлен!',
                'content'  => ':name статус изменился со старого :old_status на новый :new_status.',
                'action'   => 'Просмотр',
            ],
            'slack' => [
                'title'   => 'Обновление статуса компонента',
                'content' => ':name статус изменился со старого :old_status на новый :new_status.',
            ],
            'sms' => [
                'content' => ':name статус изменился со старого :old_status на новый :new_status.',
            ],
        ],
    ],
    'incident' => [
        'new' => [
            'mail' => [
                'subject'  => 'Зарегестрирован новый инцидент',
                'greeting' => 'О новом инциденте было сообщено с помощью :app_name.',
                'content'  => 'Было сообщено об инциденте :name',
                'action'   => 'Просмотр',
            ],
            'slack' => [
                'title'   => 'Было сообщено об инциденте :name',
                'content' => 'О новом инциденте было сообщено с помощью :app_name',
            ],
            'sms' => [
                'content' => 'О новом инциденте было сообщено с помощью :app_name.',
            ],
        ],
        'update' => [
            'mail' => [
                'subject' => 'Инцидент Обновлен',
                'content' => 'Инцидент :name был обновлен',
                'title'   => ':name был обновлен, новый статус :new_status',
                'action'  => 'Просмотр',
            ],
            'slack' => [
                'title'   => ':name был обновлен',
                'content' => 'Инцидент :name был обновлен, новый статус :new_status',
            ],
            'sms' => [
                'content' => 'Инцидент :name был обновлен',
            ],
        ],
    ],
    'schedule' => [
        'new' => [
            'mail' => [
                'subject' => 'New Schedule Created',
                'content' => ':name was scheduled for :date',
                'title'   => 'A new scheduled maintenance was created.',
                'action'  => 'Просмотр',
            ],
            'slack' => [
                'title'   => 'New Schedule Created!',
                'content' => ':name was scheduled for :date',
            ],
            'sms' => [
                'content' => ':name was scheduled for :date',
            ],
        ],
    ],
    'subscriber' => [
        'verify' => [
            'mail' => [
                'subject' => 'Verify Your Subscription',
                'content' => 'Click to verify your subscription to :app_name status page.',
                'title'   => 'Verify your subscription to :app_name status page.',
                'action'  => 'Verify',
            ],
        ],
        'manage' => [
            'mail' => [
                'subject' => 'Manage Your Subscription',
                'content' => 'Click to manage your subscription to :app_name status page.',
                'title'   => 'Click to manage your subscription to :app_name status page.',
                'action'  => 'Manage subscription',
            ],
        ],
    ],
    'system' => [
        'test' => [
            'mail' => [
                'subject' => 'Ping from Cachet!',
                'content' => 'This is a test notification from Cachet!',
                'title'   => '🔔',
            ],
        ],
    ],
    'user' => [
        'invite' => [
            'mail' => [
                'subject' => 'Your invitation is inside...',
                'content' => 'You have been invited to join :app_name status page.',
                'title'   => 'You\'re invited to join :app_name status page.',
                'action'  => 'Accept',
            ],
        ],
    ],
];
