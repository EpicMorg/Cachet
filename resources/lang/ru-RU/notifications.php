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
                'subject' => 'Создано Новое Расписание',
                'content' => ':name было запланировано на :date',
                'title'   => 'Было создано новое плановое техническое обслуживание.',
                'action'  => 'Просмотр',
            ],
            'slack' => [
                'title'   => 'Создано Новое Расписание!',
                'content' => ':name было запланировано на :date',
            ],
            'sms' => [
                'content' => ':name было запланировано на :date',
            ],
        ],
    ],
    'subscriber' => [
        'verify' => [
            'mail' => [
                'subject' => 'Проверьте Свою Подписку',
                'content' => 'Нажмите, чтобы подтвердить подписку :app_name на сайте.',
                'title'   => 'Подтвердите свою подписку :app_name на сайте.',
                'action'  => 'Подтвердить',
            ],
        ],
        'manage' => [
            'mail' => [
                'subject' => 'Управление Подпиской',
                'content' => 'Нажмите, чтобы управлять подпиской :app_name на сайте.',
                'title'   => 'Нажмите, чтобы управлять подпиской :app_name на сайте.',
                'action'  => 'Управление Подпиской',
            ],
        ],
    ],
    'system' => [
        'test' => [
            'mail' => [
                'subject' => 'Привет от Cachet!',
                'content' => 'Это тестовое уведомление от Cachet!',
                'title'   => '🔔',
            ],
        ],
    ],
    'user' => [
        'invite' => [
            'mail' => [
                'subject' => 'Ваше приглашение внутри...',
                'content' => 'Вы были приглашены присоединиться к :app_name на сайте.',
                'title'   => 'Вы были приглашены присоединиться к :app_name.',
                'action'  => 'Принять',
            ],
        ],
    ],
];
