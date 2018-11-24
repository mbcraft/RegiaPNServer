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

    'accepted'             => 'Il campo :attribute deve essere accettato.',
    'active_url'           => 'Il campo :attribute non &egrave; un URL valido.',
    'after'                => 'Il campo :attribute deve essere una data dopo :date.',
    'alpha'                => 'Il campo :attribute pu&ograve; contenere solo lettere.',
    'alpha_dash'           => 'Il campo :attribute pu&ograve; contenere solo letter, numeri, e trattini.',
    'alpha_num'            => 'Il campo :attribute pu&ograve; contenere solo lettere e numeri.',
    'array'                => 'Il campo :attribute deve essere un array.',
    'before'               => 'Il campo :attribute deve essere una data prima di :date.',
    'between'              => [
        'numeric' => 'Il campo :attribute deve essere compreso tra :min e :max.',
        'file'    => 'Il campo :attribute deve essere compreso tra i :min e :max kilobytes.',
        'string'  => 'Il campo :attribute deve essere compreso tra i :min e :max caratteri.',
        'array'   => 'Il campo :attribute deve avere tra i :min e :max elementi.',
    ],
    'boolean'              => 'Il campo :attribute deve essere vero o falso.',
    'confirmed'            => 'Il campo :attribute di conferma non coincide.',
    'date'                 => 'Il campo :attribute non &egrave; una data valida.',
    'date_format'          => 'Il campo :attribute non &egrave; nel formato :format.',
    'different'            => 'Il campo :attribute e :other devono essere diversi.',
    'digits'               => 'Il campo :attribute deve avere :digits cifre.',
    'digits_between'       => 'Il campo :attribute deve avere fra le :min e :max cifre.',
    'email'                => 'Il campo :attribute deve essere un indirizzo email valido.',
    'filled'               => 'Il campo :attribute &egrave; richiesto.',
    'exists'               => 'Il campo :attribute selezionato non &egrave; valido.',
    'image'                => 'Il campo :attribute deve essere un\'immagine.',
    'in'                   => 'Il campo :attribute selezionato non &egrave; valido.',
    'integer'              => 'Il campo :attribute deve essere un intero.',
    'ip'                   => 'Il campo :attribute deve essere un indirizzo IP valido.',
    'max'                  => [
        'numeric' => 'Il campo :attribute non pu&ograve; essere pi&ugrave; grande di :max.',
        'file'    => 'Il campo :attribute non pu&ograve; essere pi&ugrave; grande di :max kilobytes.',
        'string'  => 'Il campo :attribute non pu&ograve; essere pi&ugrave; grande di :max caratteri.',
        'array'   => 'Il campo :attribute non pu&ograve; avere pi&ugrave; di :max elementi.',
    ],
    'mimes'                => 'Il :attribute deve essere un file del tipo: :values.',
    'min'                  => [
        'numeric' => 'Il :attribute deve essere almeno :min.',
        'file'    => 'Il :attribute deve essere almeno di :min kilobytes.',
        'string'  => 'Il :attribute deve essere di almeno :min caratteri.',
        'array'   => 'Il :attribute deve avere almeno :min elementi.',
    ],
    'not_in'               => 'Il valore selezionato per :attribute non &egrave; valido.',
    'numeric'              => 'Il campo :attribute deve essere un numero.',
    'regex'                => 'Il formato del campo :attribute non &egrave; valido.',
    'required'             => 'Il campo :attribute &egrave; richiesto.',
    'required_if'          => 'Il campo :attribute &egrave; richiesto quando :other &egrave; :value.',
    'required_with'        => 'Il campo :attribute &egrave; richiesto quando :values &egrave; presente.',
    'required_with_all'    => 'Il campo :attribute &egrave; richiesto quando :values sono presenti.',
    'required_without'     => 'Il campo :attribute &egrave; richiesto quando :values non &egrave; presente.',
    'required_without_all' => 'Il campo :attribute &egrave; richiesto quando nessuno di :values sono presenti.',
    'same'                 => 'Il :attribute e :other devono coincidere.',
    'size'                 => [
        'numeric' => 'Il :attribute deve essere :size.',
        'file'    => 'Il :attribute deve essere di :size kilobytes.',
        'string'  => 'Il :attribute deve essere di :size caratteri.',
        'array'   => 'Il :attribute deve contenere :size elementi.',
    ],
    'string'               => 'Il :attribute deve essere una stringa.',
    'timezone'             => 'Il :attribute deve essere una timezone valida.',
    'unique'               => 'Il :attribute &egrave; gi&agrave; utilizzato.',
    'url'                  => 'Il formato di :attribute non &egrave; valido.',

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
    | The following language lines are used to swap attribute place-holders
    | with something more reader friendly such as E-Mail Address instead
    | of "email". This simply helps us make messages a little cleaner.
    |
    */

    'attributes' => [],

];
