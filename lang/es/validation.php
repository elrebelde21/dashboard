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
 
    'accepted' => ' El :attribute debe ser aceptado.',
    'accepted_if' => ' El :attribute debe aceptarse cuando :other es :value.',
    'active_url' => ' El :attribute no es una URL válida.',
    'after' => ' El :attribute debe ser una fecha posterior :date.',
    'after_or_equal' => 'The :attribute debe ser una fecha posterior o igual a :date.',
    'alpha' => ' El :attribute solo debe contener letras.',
    'alpha_dash' => ' El :attribute solo debe contener letras, números, guiones y guiones bajos.',
    'alpha_num' => ' El :attribute solo debe contener letras y números.',
    'array' => ' El :attribute debe ser una matriz.',
    'ascii' => ' El :attribute solo debe contener caracteres alfanuméricos y símbolos de un solo byte.',
    'before' => ' El :attribute debe ser una fecha anterior :date.',
    'before_or_equal' => 'The :attribute debe ser una fecha anterior o igual a :date.',
    'between' => [
        'array' => ' El :attribute debe tener entre :min y :max artículos.',
        'file' => ' El :attribute debe estar entre :min y :max kilobytes.',
        'numeric' => ' El :attribute must be between :min and :max.',
        'string' => ' El :attribute debe estar entre :min y :max caracteres.',
    ],
    'boolean' => ' El :attribute el campo debe ser verdadero o falso.',
    'confirmed' => ' El :attribute la confirmación no coincide.',
    'current_password' => ' La contraseña es incorrecta.',
    'date' => ' El :attribute no es una fecha válida.',
    'date_equals' => ' El :attribute debe ser una fecha igual a :date.',
    'date_format' => ' El :attribute no coincide con el formato :format.',
    'decimal' => 'The :attribute debe tener :decimal lugares decimales.',
    'declined' => ' El :attribute debe rechazarse.',
    'declined_if' => ' El :attribute debe rechazarse cuando :other es :value.',
    'different' => ' El :attribute y :other debe ser diferente.',
    'digits' => ' El :attribute debe ser :digits dígitos.',
    'digits_between' => 'The :attribute debe estar entre :min y :max dígitos.',
    'dimensions' => ' El :attribute tiene dimensiones de imagen no válidas.',
    'distinct' => ' El :attribute el campo tiene un valor duplicado.',
    'doesnt_end_with' => 'The :attribute no puede terminar con una de las siguientes: :values.',
    'doesnt_start_with' => ' El :attribute no puede empezar con uno de los siguientes: :values.',
    'email' => ' El :attribute debe ser una dirección de correo electrónico válida.',
    'ends_with' => ' El :attribute debe terminar con uno de los siguientes: :values.',
    'enum' => ' El seleccionado :attribute no es válido.',
    'exists' => ' El seleccionado :attribute no es válido.',
    'file' => ' El :attribute debe ser un archivo.',
    'filled' => ' El :attribute el campo debe tener un valor.',
    'gt' => [
        'array' => ' El :attribute debe tener más de :value artículos.',
        'file' => ' El :attribute debe ser mayor que :value kilobytes.',
        'numeric' => ' El :attribute debe ser mayor que :value.',
        'string' => ' El :attribute debe ser mayor que :value caracteres.',
    ],
    'gte' => [
        'array' => ' El :attribute debe tener :value artículos o más.',
        'file' => ' El :attribute debe ser mayor o igual a :value kilobytes.',
        'numeric' => ' El :attribute debe ser mayor o igual a :value.',
        'string' => ' El :attribute debe ser mayor o igual a :value caracteres.',
    ],
    'image' => ' El :attribute debe ser una imagen.',
    'in' => ' El seleccionado :attribute no es válido.',
    'in_array' => ' El :attribute el campo no existe en :other.',
    'integer' => 'El :attribute debe ser un entero.',
    'ip' => 'El :attribute debe ser una dirección IP válida.',
    'ipv4' => 'El :attribute debe ser una dirección IPv4 válida.',
    'ipv6' => 'El :attribute debe ser una dirección IPv6 válida.',
    'json' => 'El :attribute debe ser una cadena JSON válida.',
    'lowercase' => 'El :attribute debe estar en minúscula.',
    'lt' => [
        'array' => 'El :attribute debe tener menos de :value artículos.',
        'file' => 'El :attribute debe ser inferior a :value kilobytes.',
        'numeric' => 'El :attribute debe ser inferior a :value.',
        'string' => 'El :attribute debe ser inferior a :value caracteres.',
    ],
    'lte' => [
        'array' => 'El :attribute no debe tener más de :value artículos.',
        'file' => 'El :attribute debe ser inferior o igual a :value kilobytes.',
        'numeric' => 'El :attribute debe ser inferior o igual a :value.',
        'string' => 'El :attribute debe ser inferior o igual a :value caracteres.',
    ],
    'mac_address' => 'El :attribute debe ser una dirección MAC válida.',
    'max' => [
        'array' => 'el :attribute no debe tener más de :max artículos.',
        'file' => 'el :attribute no debe ser mayor que :max kilobytes.',
        'numeric' => 'el :attribute no debe ser mayor que :max.',
        'string' => 'el :attribute no debe ser mayor que :max caracteres.',
    ],
    'max_digits' => 'el :attribute no debe tener más de :max dígitos.',
    'mimes' => 'el :attribute debe ser un archivo de tipo: :values.',
    'mimetypes' => 'el :attribute debe ser un archivo de tipo: :values.',
    'min' => [
        'array' => 'el :attribute debe tener al menos :min artículos.',
        'file' => 'el :attribute debe ser al menos :min kilobytes.',
        'numeric' => 'el :attribute debe ser al menos :min.',
        'string' => 'el :attribute debe ser al menos :min caracteres.',
    ],
    'min_digits' => 'el :attribute debe tener al menos :min dígitos.',
    'multiple_of' => 'el :attribute debe ser un múltiplo de :value.',
    'not_in' => 'El seleccionado :attribute no es válido.',
    'not_regex' => 'el :attribute el formato no es válido.',
    'numeric' => 'el :attribute debe ser un número.',
    'password' => [
        'letters' => 'el :attribute debe contener al menos una letra.',
        'mixed' => 'el :attribute debe contener al menos una letra mayúscula y una minúscula.',
        'numbers' => 'el :attribute debe contener al menos un número.',
        'symbols' => 'el :attribute debe contener al menos un símbolo.',
        'uncompromised' => 'Lo dado :attribute ha aparecido en una filtración de datos. Por favor, elige una opción diferente :attribute.',
    ],
    'present' => 'el :attribute el campo debe estar presente.',
    'prohibited' => 'el :attribute el campo está prohibido.',
    'prohibited_if' => 'el :attribute el campo está prohibido cuando :other es :value.',
    'prohibited_unless' => 'el :attribute el campo está prohibido a menos que :other está en :values.',
    'prohibits' => 'el :attribute campo prohíbe :other de estar presente.',
    'regex' => 'el :attribute el formato no es válido.',
    'required' => 'el :attribute el campo es obligatorio.',
    'required_array_keys' => 'el :attribute el campo debe contener entradas para: :values.',
    'required_if' => 'el :attribute este campo es obligatorio cuando :other es :value.',
    'required_if_accepted' => 'el :attribute este campo es obligatorio cuando :other se acepta.',
    'required_unless' => 'el :attribute este campo es obligatorio a menos que :other está en :values.',
    'required_with' => 'el :attribute este campo es obligatorio cuando :values está presente.',
    'required_with_all' => 'el :attribute este campo es obligatorio cuando :values están presentes.',
    'required_without' => 'el :attribute este campo es obligatorio cuando :values no está presente.',
    'required_without_all' => 'el :attribute el campo es obligatorio cuando ninguno de :values están presentes.',
    'same' => 'el :attribute y :other debe coincidir.',
    'size' => [
        'array' => 'el :attribute debe contener :size artículos.',
        'file' => 'el :attribute debe ser :size kilobytes.',
        'numeric' => 'el :attribute debe ser :size.',
        'string' => 'el :attribute debe ser :size caracteres.',
    ],
    'starts_with' => 'el :attribute debe empezar con uno de los siguientes: :values.',
    'string' => 'el :attribute debe ser una cadena.',
    'timezone' => 'el :attribute debe ser una zona horaria válida.',
    'unique' => 'el :attribute ya se ha tomado.',
    'uploaded' => 'el :attribute no se pudo cargar.',
    'uppercase' => 'el :attribute debe estar en mayúsculas.',
    'url' => 'el :attribute debe ser una URL válida.',
    'ulid' => 'el :attribute debe ser un ULID válido.',
    'uuid' => 'el :attribute debe ser un UUID válido.',

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
            'rule-name' => 'custom-message',
        ],
    ],

    /*
    |--------------------------------------------------------------------------
    | Custom Validation Attributes
    |--------------------------------------------------------------------------
    |
    | The following language lines are used to swap our attribute placeholder
    | with something more reader friendly such as "E-Mail Address" instead
    | of "email". This simply helps us make our message more expressive.
    |
    */

    'attributes' => [],

];
