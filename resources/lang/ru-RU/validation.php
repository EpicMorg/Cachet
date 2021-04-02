<?php

/*
 * This file is part of Cachet.
 *
 * (c) Alt Three Services Limited
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

return [

    /*
    |--------------------------------------------------------------------------
    | Validation Language Lines
    |--------------------------------------------------------------------------
    |
    | The following language lines contain the default error messages used by
    | the validator class. Some of these rules have multiple versions such
    | as the size rules. Feel free to tweak each of these messages here.
    |
    */

    'accepted'   => ':attribute должен быть принят.',
    'active_url' => ':attribute не является допустимым URL.',
    'after'      => ':attribute должно быть датой после :date.',
    'alpha'      => ':attribute может содержать только буквы.',
    'alpha_dash' => ':attribute может содержать только латинские буквы, цифры и дефис.',
    'alpha_num'  => ':attribute может содержать только буквы и цифры.',
    'array'      => ':attribute должно быть массивом.',
    'before'     => ':attribute должно быть датой до :date.',
    'between'    => [
        'numeric' => ':attribute должно быть между :min и :max.',
        'file'    => ':attribute должно быть между :min и :max kb.',
        'string'  => ':attribute должно быть между :min и :max символов.',
        'array'   => ':attribute должно содержать от :min до :max элементов.',
    ],
    'boolean'        => ':attribute поле должно быть true или false.',
    'confirmed'      => ':attribute значения не совпадают.',
    'date'           => ':attribute не является датой.',
    'date_format'    => ':attribute значение не совпадает с форматом :format.',
    'different'      => ':attribute и :other должны различаться.',
    'digits'         => ':attribute должен быть в формате :digits цифр.',
    'digits_between' => ':attribute значение цифр должно быть между :min и :max.',
    'email'          => ':attribute должен быть в формате email.',
    'exists'         => 'Неправильный формат :attribute.',
    'distinct'       => 'Поле :attribute содержит дублирующееся значение.',
    'filled'         => 'Поле :attribute является обязательным.',
    'image'          => ':attribute должно быть изображением.',
    'in'             => 'Неправильный формат :attribute.',
    'in_array'       => 'Поле :attribute не существует в :other.',
    'integer'        => ':attribute должен быть в формате integer.',
    'ip'             => ':attribute должен быть в IP формате.',
    'json'           => ':attribute должен быть в JSON формате.',
    'max'            => [
        'numeric' => ':attribute не должен быть больше чем :max.',
        'file'    => ':attribute не должен быть больше чем :max kb.',
        'string'  => ':attribute не должен быть больше чем :max символов.',
        'array'   => ':attribute не может содержать больше чем :max элементов.',
    ],
    'mimes' => ':attribute должен соответстовать типу файлов: :values.',
    'min'   => [
        'numeric' => ':attribute должно быть не меньше :min.',
        'file'    => ':attribute должно быть не меньше :min kb.',
        'string'  => ':attribute должно быть не меньше :min символов.',
        'array'   => ':attribute должно содержать не меньше :min элементов.',
    ],
    'not_in'               => 'Неправильный формат :attribute.',
    'numeric'              => ':attribute должен быть числом.',
    'present'              => 'Поле :attribute должно быть заполнено.',
    'regex'                => 'Неправильный формат :attribute.',
    'required'             => 'Поле :attribute является обязательным.',
    'required_if'          => 'Поле :attribute является обязательным, когда :other является :value.',
    'required_unless'      => 'Поле :attribute обязательно, если :other не из :values.',
    'required_with'        => 'Поле :attribute является обязательным, если все :values заполнены.',
    'required_with_all'    => 'Поле :attribute является обязательным, если все :values заполнены.',
    'required_without'     => 'Поле :attribute является обязательным, когда :values не существует.',
    'required_without_all' => 'Поле :attribute является обязательным :values существует.',
    'same'                 => ':attribute и :other должны совпадать.',
    'size'                 => [
        'numeric' => ':attribute must be :size.',
        'file'    => ':attribute должно быть объемом :size килобайт.',
        'string'  => 'Поле :attribute должно содержать :size символов.',
        'array'   => ':attribute must contain :size items.',
    ],
    'string'   => ':attribute должно быть строкой.',
    'timezone' => ':attribute должно быть корректным часовым поясом.',
    'unique'   => ':attribute уже занято.',
    'url'      => 'Неправильный формат :attribute.',

    /*
    |--------------------------------------------------------------------------
    | Custom Validation Language Lines
    |--------------------------------------------------------------------------
    |
    | Here you may specify custom validation messages for attributes using the
    | convention "attribute.rule" to name the lines. This makes it quick to
    | specify a specific custom language line for a given attribute rule.
    |
    */

    'custom' => [
        'attribute-name' => [
            'rule-name' => 'настраиваемое сообщение',
        ],
    ],

    /*
    |--------------------------------------------------------------------------
    | Custom Validation Attributes
    |--------------------------------------------------------------------------
    |
    | The following language lines are used to swap attribute place-holders
    | with something more reader friendly such as E-Mail Address instead
    | of "email". This simply helps us make messages a little cleaner.
    |
    */

    'attributes' => [],

];
