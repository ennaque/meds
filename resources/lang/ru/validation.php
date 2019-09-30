<?php

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

    'accepted'             => ':attribute должен быть принят.',//'The :attribute must be accepted.',
    'active_url'           => ':attribute является некорректным URL.',//'The :attribute is not a valid URL.',
    'after'                => ':attribute должен быть датой после :date.',//'The :attribute must be a date after :date.',
    'alpha'                => ':attribute может содержать только буквы.',//'The :attribute may only contain letters.',
    'alpha_dash'           => ':attribute может содержать только буквы, числа и дефисы.',//'The :attribute may only contain letters, numbers, and dashes.',
    'alpha_num'            => ':attribute может содержать только буквы и числа.',//'The :attribute may only contain letters and numbers.',
    'array'                => ':attribute должен быть массивом.',//'The :attribute must be an array.',
    'before'               => ':attribute должен быть датой до :date.',//'The :attribute must be a date before :date.',
    'between'              => [
        'numeric' => ':attribute должен быть в диапазоне от :min до :max.',//'The :attribute must be between :min and :max.',
        'file'    => ':attribute должен быть в диапазоне от :min до :max. килобайт',//'The :attribute must be between :min and :max kilobytes.',
        'string'  => ':attribute должен быть в диапазоне от :min до :max символов.',//'The :attribute must be between :min and :max characters.',
        'array'   => ':attribute должен содержать от :min до :max элементов.',//'The :attribute must have between :min and :max items.',
    ],
    'boolean'              => 'Поле :attribute должно иметь значение TRUE или FALSE.',//'The :attribute field must be true or false.',
    'confirmed'            => ':attribute не подтверждён.',//'The :attribute confirmation does not match.',
    'date'                 => ':attribute является некорректной датой.',//'The :attribute is not a valid date.',
    'date_format'          => ':attribute не соответствует формату :format.',//'The :attribute does not match the format :format.',
    'different'            => ':attribute и :other должны отличаться.',//'The :attribute and :other must be different.',
    'digits'               => ':attribute должен быть :digits цифрами.',//'The :attribute must be :digits digits.',
    'digits_between'       => ':attribute должен иметь значение в диапазоне от :min до :max цифр.',//'The :attribute must be between :min and :max digits.',
    'dimensions'           => ':attribute имеет некорректные размеры изображения.',//'The :attribute has invalid image dimensions.',
    'distinct'             => 'Поле :attribute имеет двойное значение.',//'The :attribute field has a duplicate value.',
    'email'                => ':attribute должен быть корректным email-адресоом.',//'The :attribute must be a valid email address.',
    'exists'               => 'Выбранный :attribute некорректен.',//'The selected :attribute is invalid.',
    'file'                 => ':attribute должен быть файлом.',//'The :attribute must be a file.',
    'filled'               => 'Поле :attribute обязательно для заполнения.',//'The :attribute field is required.',
    'image'                => ':attribute должен быть изображением.',//'The :attribute must be an image.',
    'in'                   => 'Выбранный :attribute некорректен.',//'The selected :attribute is invalid.',
    'in_array'             => 'Поле :attribute не существует в :other.',//'The :attribute field does not exist in :other.',
    'integer'              => ':attribute должен быть целым числом.',//'The :attribute must be an integer.',
    'ip'                   => ':attribute должен быть корректным IP-адресом.',//'The :attribute must be a valid IP address.',
    'json'                 => ':attribute должен быть корректной строкой в формате JSON.',//'The :attribute must be a valid JSON string.',
    'max'                  => [
        'numeric' => ':attribute не может быть больше :max.',//'The :attribute may not be greater than :max.',
        'file'    => ':attribute не может быть больше :max килобайт.',//'The :attribute may not be greater than :max kilobytes.',
        'string'  => ':attribute не может быть больше :max символов.',//'The :attribute may not be greater than :max characters.',
        'array'   => ':attribute не может содержать больше :max элементов.',//'The :attribute may not have more than :max items.',
    ],
    'mimes'                => ':attribute должен быть файлом типа: :values.',//'The :attribute must be a file of type: :values.',
    'min'                  => [
        'numeric' => ':attribute должен быть как минимум :min.',//'The :attribute must be at least :min.',
        'file'    => ':attribute должен быть как минимум :min килобайт.',//'The :attribute must be at least :min kilobytes.',
        'string'  => ':attribute должен быть как минимум :min символов.',//'The :attribute must be at least :min characters.',
        'array'   => ':attribute должен содержать как минимум :min элементов.',//'The :attribute must have at least :min items.',
    ],
    'not_in'               => 'Выбранный :attribute некорректен.',//'The selected :attribute is invalid.',
    'numeric'              => ':attribute должен быть числом.',//'The :attribute must be a number.',
    'present'              => 'Поле :attribute должно присутствовать.',//'The :attribute field must be present.',
    'regex'                => 'Формат :attribute некорректен.',//'The :attribute format is invalid.',
    'required'             => 'Поле :attribute обязательно для заполнения.',//'The :attribute field is required.',
    'required_if'          => 'Поле :attribute обязательно для заполнения когда :other это :value.',//'The :attribute field is required when :other is :value.',
    'required_unless'      => 'Поле :attribute обязательно для заполнения если :other в :values.',//'The :attribute field is required unless :other is in :values.',
    'required_with'        => 'Поле :attribute обязательно для заполнения когда :values присутствуют.',//'The :attribute field is required when :values is present.',
    'required_with_all'    => 'Поле :attribute обязательно для заполнения когда :values присутствуют.',//'The :attribute field is required when :values is present.',
    'required_without'     => 'Поле :attribute обязательно для заполнения когда :values отсутствуют.',//'The :attribute field is required when :values is not present.',
    'required_without_all' => 'Поле :attribute обязательно для заполнения когда ни одно из :values не присутствует.',//'The :attribute field is required when none of :values are present.',
    'same'                 => ':attribute и :other должны совпадать.',//'The :attribute and :other must match.',
    'size'                 => [
        'numeric' => ':attribute должент быть :size.',//'The :attribute must be :size.',
        'file'    => ':attribute должент быть :size килобайт.',//'The :attribute must be :size kilobytes.',
        'string'  => ':attribute должент быть :size символов.',//'The :attribute must be :size characters.',
        'array'   => ':attribute должент содержать :size элементов.',//'The :attribute must contain :size items.',
    ],
    'string'               => ':attribute должен быть строкой.',//'The :attribute must be a string.',
    'timezone'             => ':attribute должен быть корректной зоной.',//'The :attribute must be a valid zone.',
    'unique'               => ':attribute уже был взят.',//'The :attribute has already been taken.',
    'url'                  => 'Формат :attribute некорректен.',//'The :attribute format is invalid.',

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
            'rule-name' => 'Пользовательское (нестандартное) сообщение',//'custom-message',
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
