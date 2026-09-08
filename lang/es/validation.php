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
            'rule-name' => 'پیام سفارشی',
        ],
        'parent_id' => [
            'required_unless' => 'فیلد دسته بندی اصلی الزامی است مگر اینکه گزینه "این یک گروه اصلی است" در حالت انتخاب باشد',
        ],
        'published_at' => [
            'after_or_equal' => 'تاریخ انتشار باید برابر یا بزرگتر از تاریخ الان باشد',
        ],
        'attachment' => [
            'mimes' => 'لطفاً فایل با پسوند های پشتیبانی شده را انتخاب کنید',
        ],
        'description' => [
            'minlength' =>  ' توضیحات باید حداقل :min کاراکتر باشد (تعداد کاراکترهای مورد استفاده :current میباشد)',

        ],
        'username' => [
            'lowercase' => 'نام کاربری باید حروف کوچک باشد'
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
        'slug' => 'نامک',
        'schema_code' => 'کد اسکیما',
        'date' => 'تاریخ',
        'content' => 'محتوا',
        "search_term" => "جستجو",
        'national_code' => "کد ملی",
        'certificate_code' => "شماره گواهینامه",
        'certificate_url' => "تصویر گواهینامه",
        'phone' => "تلفن",
        'agree_gdpr' => 'با پردازش داده‌های شخصی موافقم',
        'agree_terms' => 'با شرایط و ضوابط موافقم',
        'agree_terms_privacy' => 'با شرایط و ضوابط و سیاست حفظ حریم خصوصی موافقم',
        'full_name' => 'نام کامل',
        'name' => 'نام',
        'username' => 'نام کاربری',
        'username_email' => 'نام کاربری یا ایمیل',
        'email' => 'ایمیل',
        'password' => 'رمز عبور',
        'password_confirmation' => 'تأیید رمز عبور',
        'website' => 'وب‌سایت',
        'location' => 'مکان',
        'countries_id' => 'کشور',
        'twitter' => 'توییتر',
        'facebook' => 'فیسبوک',
        'google' => 'گوگل',
        'instagram' => 'اینستاگرام',
        'comment' => 'نظر',
        'title' => 'عنوان',
        'description' => 'توضیحات',
        'old_password' => 'رمز عبور قدیمی',
        'new_password' => 'رمز عبور جدید',
        'email_paypal' => 'ایمیل پی‌پل',
        'email_paypal_confirmation' => 'تأیید ایمیل پی‌پل',
        'bank_details' => 'جزئیات بانکی',
        'video_url' => 'لینک ویدیو',
        'categories_id' => 'دسته‌بندی',
        'story' => 'داستان',
        'image' => 'تصویر',
        'avatar' => 'آواتار',
        'message' => 'پیام',
        'profession' => 'حرفه',
        'thumbnail' => 'تصویر بندانگشتی',
        'address' => 'آدرس',
        'city' => 'شهر',
        'zip' => 'کد پستی',
        'payment_gateway' => 'درگاه پرداخت',
        'payment_gateway_tip' => 'درگاه پرداخت',
        'MAIL_FROM_ADDRESS' => 'ایمیل بدون پاسخ',
        'FILESYSTEM_DRIVER' => 'فضا',
        'price' => 'قیمت',
        'amount' => 'مقدار',
        'birthdate' => 'تاریخ تولد',
        'navbar_background_color' => 'رنگ پس‌زمینه نوار ناوبری',
        'navbar_text_color' => 'رنگ متن نوار ناوبری',
        'footer_background_color' => 'رنگ پس‌زمینه فوتر',
        'footer_text_color' => 'رنگ متن فوتر',
        'register_phone' => 'شماره موبایل',

        'AWS_ACCESS_KEY_ID' => 'کلید آمازون', // Not necessary edit
        'AWS_SECRET_ACCESS_KEY' => 'راز آمازون', // Not necessary edit
        'AWS_DEFAULT_REGION' => 'ناحیه آمازون', // Not necessary edit
        'AWS_BUCKET' => 'سطل آمازون', // Not necessary edit

        'DOS_ACCESS_KEY_ID' => 'کلید دیجیتال اقیانوس', // Not necessary edit
        'DOS_SECRET_ACCESS_KEY' => 'راز دیجیتال اقیانوس', // Not necessary edit
        'DOS_DEFAULT_REGION' => 'ناحیه دیجیتال اقیانوس', // Not necessary edit
        'DOS_BUCKET' => 'سطل دیجیتال اقیانوس', // Not necessary edit

        'WAS_ACCESS_KEY_ID' => 'کلید واسابی', // Not necessary edit
        'WAS_SECRET_ACCESS_KEY' => 'راز واسابی', // Not necessary edit
        'WAS_DEFAULT_REGION' => 'ناحیه واسابی', // Not necessary edit
        'WAS_BUCKET' => 'سطل واسابی', // Not necessary edit

        //===== v2.0
        'BACKBLAZE_ACCOUNT_ID' => 'شناسه حساب بک بلز', // Not necessary edit
        'BACKBLAZE_APP_KEY' => 'کلید برنامه اصلی بک بلز', // Not necessary edit
        'BACKBLAZE_BUCKET' => 'نام سطل بک بلز', // Not necessary edit
        'BACKBLAZE_BUCKET_REGION' => 'ناحیه سطل بک بلز', // Not necessary edit
        'BACKBLAZE_BUCKET_ID' => 'نقطه انتهایی سطل بک بلز', // Not necessary edit

        'VULTR_ACCESS_KEY' => 'کلید ولتر', // Not necessary edit
        'VULTR_SECRET_KEY' => 'راز ولتر', // Not necessary edit
        'VULTR_REGION' => 'ناحیه ولتر', // Not necessary edit
        'VULTR_BUCKET' => 'سطل ولتر', // Not necessary edit
        "picture" => "تصویر",
        'en.slogan' => 'شعار برند انگلیسی',
        'de.slogan' => 'شعار برند آلمانی ',
        'fa.slogan' => 'شعار برند فارسی ',
        'en.content' => ' متن انگلیسی',
        'fa.content' => 'متن فارسی',
        'de.content' => 'متن آلمانی',
        'en.title' => ' عنوان انگلیسی',
        'fa.title' => 'عنوان فارسی',
        'de.title' => 'عنوان آلمانی',
        'en.meta_keyword' => ' کلمه کلیدی انگلیسی',
        'fa.meta_keyword' => 'کلمه کلیدی فارسی',
        'de.meta_keyword' => 'کلمه کلیدی آلمانی',
        'en.meta_description' => ' متا دیسکریپشن انگلیسی',
        'fa.meta_description' => 'متا دیسکریپشن فارسی',
        'de.meta_description' => 'متا دیسکریپشن آلمانی',
        "landing-video" => "ویدیو سایت",
        'en.seo_title' => ' عنوان سئو انگلیسی',
        'fa.seo_title' => 'عنوان سئو فارسی',
        'de.seo_title' => 'عنوان سئو آلمانی',
        'en.landing' => ' متن نمایش صفحه اصلی انگلیسی',
        'fa.landing' => 'متن نمایش صفحه اصلی فارسی',
        'de.landing' => 'متن نمایش صفحه اصلی آلمانی',
        'en.name' => ' نام انگلیسی',
        'fa.name' => 'نام فارسی',
        'de.name' => 'نام آلمانی',
        'first_name' => 'نام',
        'last_name' => 'نام خانوادگی',
        'roles' => 'نقش ها',
        "color" => "رنگ",
        "parent_id" => "دسته بندی اصلی",
        "is_root" => 'گزینه گروه اصلی ',
        "yes" => "در حالت انتخاب",
        'en.question' => ' سوال انگلیسی',
        'fa.question' => 'سوال فارسی',
        'de.question' => 'سوال آلمانی',
        'en.answer' => ' جواب انگلیسی',
        'fa.answer' => 'جواب فارسی',
        'de.answer' => 'جواب آلمانی',
        'permissions' => 'دسترسی',
        'role' => 'نقش',
        'category_id' => "دسته بندی",
        'published_at' => 'تاریخ انتشار',
        "type" => "نوع",
        "duration" => "مدت زمان اعتبار",
        "job_post" => "تعداد پیشنهاد ها",
        "job_highlight" => "تعداد پیشنهاد های برجسته",
        "job_featured" => "تعداد ویژگی‌های شغلی",
        "attachment" => "ضمیمه",
        "sub_category_id" => "زیر دسته بندی",
        "level" => "سطح",
        "skill" => "مهارت",
        "hourly_rate" => "دستمزد هر ساعت",
        "estimated_hours" => "ساعت تخمینی جهت انجام کار",
        "budget" => "بودجه",
        "current_password" => "رمز عبور قبلی",
        "country_id" => "کشور",
        "state_id" => "استان",
        "city_id" => "شهر",
        "language" => "زبان",
        "cover_letter" => "توضیحات",
        "page" => "این صفحه",
        "site_title" => "عنوان سایت",
        "site_fee_commission" => "کمیسیون دریافتی سایت",
        "bid_deadline" => "مهلت ارسال پیشنهاد",
        "client_selection_freelancer_deadline" => "مهلت انتخاب فریلنسر",
        "portfolio_title" => "عنوان نمونه کار",
        "portfolio_description" => "توضیحات نمونه کار",
        'en.text' => ' متن انگلیسی',
        'fa.text' => 'متن فارسی',
        'de.text' => 'متن آلمانی',
        "currency" => "ارز",
        "bankAccount" => "حساب بانکی",
        "subject" => "موضوع",
        "assigned_ids" => "کاربران",
        "user_id" => 'کاربر',


        'es.seo_title' => 'عنوان سئو فارسی',
        'start_time' => 'زمان شروع',
        'end_time' => 'زمان پایان',
        'wage' => 'دستمزد',
        'commission' => 'کمیسیون',
        'es.name' => 'نام اسپانیایی',
        'ar.name' => 'نام عربی',
        'ru.name' => 'نام روسی',
        'en.description' => 'توضیحات انگلیسی',
        'es.description' => 'توضیحات اسپانیایی',
        'fa.description' => 'توضیحات فارسی',
        'ar.description' => 'توضیحات عربی',
        'ru.description' => 'توضیحات روسی',
        'de.description' => 'توضیحات آلمانی',
        'gallery' => 'عکس گالری',
        'video' => 'ویدیو',
        'family' => 'نام خانوادگی',
        "postcode" => 'کدپستی',
        "wallet" => "کیف پول",
        "balance" => "موجودی",
        "identity_no" => "شناسه کاربری",
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
