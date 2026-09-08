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

    'accepted' => 'This field must be accepted.',
    'accepted_if' => 'This field must be accepted when :other is :value.',
    'active_url' => 'This field must be a valid URL.',
    'after' => 'This field must be a date after :date.',
    'after_or_equal' => 'This field must be a date after or equal to :date.',
    'alpha' => 'This field must only contain letters.',
    'alpha_dash' => 'This field must only contain letters, numbers, dashes, and underscores.',
    'alpha_num' => 'This field must only contain letters and numbers.',
    'array' => 'This field must be an array.',
    'ascii' => 'This field must only contain single-byte alphanumeric characters and symbols.',
    'before' => 'This field must be a date before :date.',
    'before_or_equal' => 'This field must be a date before or equal to :date.',
    'between' => [
        'array' => 'This field must have between :min and :max items.',
        'file' => 'This field must be between :min and :max kilobytes.',
        'numeric' => 'This field must be between :min and :max.',
        'string' => 'This field must be between :min and :max characters.',
    ],
    'boolean' => 'This field must be true or false.',
    'can' => 'This field contains an unauthorized value.',
    'confirmed' => 'This field confirmation does not match.',
    'contains' => 'This field is missing a required value.',
    'current_password' => 'The password is incorrect.',
    'date' => 'This field must be a valid date.',
    'date_equals' => 'This field must be a date equal to :date.',
    'date_format' => 'This field must match the format :format.',
    'decimal' => 'This field must have :decimal decimal places.',
    'declined' => 'This field must be declined.',
    'declined_if' => 'This field must be declined when :other is :value.',
    'different' => 'This field and :other must be different.',
    'digits' => 'This field must be :digits digits.',
    'digits_between' => 'This field must be between :min and :max digits.',
    'dimensions' => 'This field has invalid image dimensions.',
    'distinct' => 'This field has a duplicate value.',
    'doesnt_end_with' => 'This field must not end with one of the following: :values.',
    'doesnt_start_with' => 'This field must not start with one of the following: :values.',
    'email' => 'This field must be a valid email address.',
    'ends_with' => 'This field must end with one of the following: :values.',
    'enum' => 'The selected :attribute is invalid.',
    'exists' => 'The selected :attribute is invalid.',
    'extensions' => 'This field must have one of the following extensions: :values.',
    'file' => 'This field must be a file.',
    'filled' => 'This field must have a value.',
    'gt' => [
        'array' => 'This field must have more than :value items.',
        'file' => 'This field must be greater than :value kilobytes.',
        'numeric' => 'This field must be greater than :value.',
        'string' => 'This field must be greater than :value characters.',
    ],
    'gte' => [
        'array' => 'This field must have :value items or more.',
        'file' => 'This field must be greater than or equal to :value kilobytes.',
        'numeric' => 'This field must be greater than or equal to :value.',
        'string' => 'This field must be greater than or equal to :value characters.',
    ],
    'hex_color' => 'This field must be a valid hexadecimal color.',
    'image' => 'This field must be an image.',
    'in' => 'The selected :attribute is invalid.',
    'in_array' => 'This field must exist in :other.',
    'integer' => 'This field must be an integer.',
    'ip' => 'This field must be a valid IP address.',
    'ipv4' => 'This field must be a valid IPv4 address.',
    'ipv6' => 'This field must be a valid IPv6 address.',
    'json' => 'This field must be a valid JSON string.',
    'list' => 'This field must be a list.',
    'lowercase' => 'This field must be lowercase.',
    'lt' => [
        'array' => 'This field must have less than :value items.',
        'file' => 'This field must be less than :value kilobytes.',
        'numeric' => 'This field must be less than :value.',
        'string' => 'This field must be less than :value characters.',
    ],
    'lte' => [
        'array' => 'This field must not have more than :value items.',
        'file' => 'This field must be less than or equal to :value kilobytes.',
        'numeric' => 'This field must be less than or equal to :value.',
        'string' => 'This field must be less than or equal to :value characters.',
    ],
    'mac_address' => 'This field must be a valid MAC address.',
    'max' => [
        'array' => 'This field must not have more than :max items.',
        'file' => 'This field must not be greater than :max kilobytes.',
        'numeric' => 'This field must not be greater than :max.',
        'string' => 'This field must not be greater than :max characters.',
    ],
    'max_digits' => 'This field must not have more than :max digits.',
    'mimes' => 'This field must be a file of type: :values.',
    'mimetypes' => 'This field must be a file of type: :values.',
    'min' => [
        'array' => 'This field must have at least :min items.',
        'file' => 'This field must be at least :min kilobytes.',
        'numeric' => 'This field must be at least :min.',
        'string' => 'This field must be at least :min characters.',
    ],
    'min_digits' => 'This field must have at least :min digits.',
    'missing' => 'This field must be missing.',
    'missing_if' => 'This field must be missing when :other is :value.',
    'missing_unless' => 'This field must be missing unless :other is :value.',
    'missing_with' => 'This field must be missing when :values is present.',
    'missing_with_all' => 'This field must be missing when :values are present.',
    'multiple_of' => 'This field must be a multiple of :value.',
    'not_in' => 'The selected :attribute is invalid.',
    'not_regex' => 'This field format is invalid.',
    'numeric' => 'This field must be a number.',
    'password' => [
        'letters' => 'This field must contain at least one letter.',
        'mixed' => 'This field must contain at least one uppercase and one lowercase letter.',
        'numbers' => 'This field must contain at least one number.',
        'symbols' => 'This field must contain at least one symbol.',
        'uncompromised' => 'The given :attribute has appeared in a data leak. Please choose a different :attribute.',
    ],
    'present' => 'This field must be present.',
    'present_if' => 'This field must be present when :other is :value.',
    'present_unless' => 'This field must be present unless :other is :value.',
    'present_with' => 'This field must be present when :values is present.',
    'present_with_all' => 'This field must be present when :values are present.',
    'prohibited' => 'This field is prohibited.',
    'prohibited_if' => 'This field is prohibited when :other is :value.',
    'prohibited_unless' => 'This field is prohibited unless :other is in :values.',
    'prohibits' => 'This field prohibits :other from being present.',
    'regex' => 'This field format is invalid.',
    'required' => 'Este campo es obligatorio.',
    'required_array_keys' => 'This field must contain entries for: :values.',
    'required_if' => 'This field is required when :other is :value.',
    'required_if_accepted' => 'This field is required when :other is accepted.',
    'required_if_declined' => 'This field is required when :other is declined.',
    'required_unless' => 'This field is required unless :other is in :values.',
    'required_with' => 'This field is required when :values is present.',
    'required_with_all' => 'This field is required when :values are present.',
    'required_without' => 'This field is required when :values is not present.',
    'required_without_all' => 'This field is required when none of :values are present.',
    'same' => 'This field must match :other.',
    'size' => [
        'array' => 'This field must contain :size items.',
        'file' => 'This field must be :size kilobytes.',
        'numeric' => 'This field must be :size.',
        'string' => 'This field must be :size characters.',
    ],
    'starts_with' => 'This field must start with one of the following: :values.',
    'string' => 'This field must be a string.',
    'timezone' => 'This field must be a valid timezone.',
    'unique' => 'Estos datos de campo ya se han tomado.',
    'uploaded' => 'This failed to upload.',
    'uppercase' => 'This field must be uppercase.',
    'url' => 'This field must be a valid URL.',
    'ulid' => 'This field must be a valid ULID.',
    'uuid' => 'This field must be a valid UUID.',
    "currency_no_match_bank" => "Selected bank account currency does not match the wallet currency.",

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
        'parent_id' => [
            'required_unless' => 'Das übergeordnete Feld ist erforderlich, es sei denn, "es ist eine Mutterkategorie", wird ausgewählt.',
        ],
        'published_at' => [
            'after_or_equal' => 'تاریخ انتشار باید برابر یا بزرگتر از تاریخ الان باشد',
        ],
        'attachment' => [
            'mimes' => 'Please Select Supported Files',
        ],
        'description' => [
            'minlength' =>  'Description must be at least :min characters (the number of characters used is :current)',
        ],
        'username' => [
            'lowercase' => 'the username field must be lowercase'
        ],
        'end_time' => [
            'after' => 'زمان پایان باید بعد از زمان شروع باشد',
        ],
        'password' => [
            'same' => 'رمز عبور و تایید رمز عبور  مطابقت  ندارد.',
        ],
        'paymentWallet' => [
            'required' => 'لطفا یک کیف پول را انتخاب کنید',
        ],
        'acceptTerms' => [
            'accepted' => 'Please accept the Terms and Conditions to continue.',
        ],
        'phone' => [
            'unique' => 'The phone number has already been taken.',
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

    'attributes' => [
        'schema_code' => 'schema code',
        'role' => 'role',
        'en.slogan' => 'Eslogan inglés',
        'es.slogan' => 'Eslogan español ',
        'fa.slogan' => 'Eslogan persa ',
        'en.content' => 'Contenido inglés',
        'fa.content' => 'Contenido persa',
        'es.content' => 'Contenido español',
        'en.title' => ' Título en inglés',
        'fa.title' => 'Título persa',
        'es.title' => 'Título español',
        'en.meta_keyword' => 'English Meta_Keyword',
        'fa.meta_keyword' => 'Meta Keyword persa',
        'es.meta_keyword' => 'Meta keyword española',
        'en.meta_description' => ' Meta descripción inglesa',
        'fa.meta_description' => 'Meta descripción persa',
        'es.meta_description' => 'Meta Descripción española',
        'en.seo_title' => ' seo title inglesa',
        'fa.seo_title' => 'seo title persa',
        'es.seo_title' => 'seo title española',
        'en.landing' => 'contenido de aterrizaje inglesa',
        'fa.landing' => 'contenido de aterrizaje persa',
        'es.landing' => 'contenido de aterrizaje española',
        'permissions' => 'permissions',
        "color" => "color",
        "parent_id" => "parent_id",
        'en.question' => 'English question',
        'fa.question' => 'Persian question',
        'de.question' => 'German question',
        'en.answer' => 'English answer',
        'fa.answer' => 'Persian answer',
        'de.answer' => 'German answer',
        'category_id' => "category",
        'published_at' => 'published_at',
        "type" => "type",
        "duration" => "duration",
        "job_post" => "job_post",
        "job_highlight" => "job_highlight",
        "job_featured" => "job_featured",
        "attachment" => "attachment",
        "sub_category_id" => "subcategory",
        "level" => "level",
        "skill" => "skill",
        "hourly_rate" => "hourly rate",
        "estimated_hours" => "estimated hours",
        "budget" => "budget",
        "current_password" => "current_password",
        "country_id" => "country",
        "state_id" => "state",
        "city_id" => "city",
        "language" => "language",
        "cover_letter" => "Description",
        "page" => "page",
        "site_title" => "site title",
        "site_fee_commission" => "site fee commission",
        "bid_deadline" => "Bid deadline",
        "client_selection_freelancer_deadline" => "Freelancer selection deadline",
        "portfolio_title" => "portfolio title",
        "portfolio_description" => "portfolio description",
        'en.text' => 'English text',
        'fa.text' => 'Persian text',
        'de.text' => 'German text',
        "bankAccount" => "Bank account",
        "subject" => "Thema",
        "assigned_ids" => "Users",
        "user_id" => 'Benutzer',
        "userLanguage" => "زبان مورد استفاده شما",
        "advisorLanguage" => "زبان مشاور",
        "estimateHours" => "برآورد زمان ",
        "state" => "استان",
        'category' => 'دسته‌بندی',
        "serviceDate" => "تاریخ سرویس",
        "serviceTime" => "زمان سرویس",
        "country_code" => 'country code',
        'lastname' => 'نام خانوادگی',
        "languages" => "languages",
        "confirm_password" => "Confirm password",
        'currency_type' => "Currency Type",
        'bank_name' => "Bank Name",
        'account_name' => "Account Name",
        'account_number' => "Account Number",
        "reference" => "reference",
        "country" => "country",
        "countryCode" => 'country code'















    ],

];
