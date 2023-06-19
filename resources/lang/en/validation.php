<?php

return [
    'accepted' => 'The :attribute must be accepted.',
    'active_url' => 'The :attribute is not a valid URL.',
    'name_ar'=>'name in arabic',
    'name_en'=>'name in english',
    'name_price'=>' price',
    'bank_name'=>'  bank name',
    'iban_number'=>'bank iban number',
    'commercial_id'=>' commercial number',
    'category'=>' category',
    'icon'=>' icon',
    'cover'=>' cover',
    'store_menu_category_id'=>'menu field',
    'price'=>' price',
    'new_password'=>' new password',
    'current_password'=>'current password',
    'after' => 'The :attribute must be a date after :date.',
    'after_or_equal' => 'The :attribute must be a date after or equal to :date.',
    'alpha' => 'The :attribute may only contain letters.',
    'alpha_dash' => 'The :attribute may only contain letters, numbers, dashes and underscores.',
    'alpha_num' => 'The :attribute may only contain letters and numbers.',
    'array' => 'The :attribute must be an array.',
    'before' => 'The :attribute must be a date before :date.',
    'before_or_equal' => 'The :attribute must be a date before or equal to :date.',
    'between' => [
        'numeric' => 'The :attribute must be between :min and :max.',
        'file' => 'The :attribute must be between :min and :max kilobytes.',
        'string' => 'The :attribute must be between :min and :max characters.',
        'array' => 'The :attribute must have between :min and :max items.',
    ],
    'date_equals' => 'The :attribute must be a date equal to :date.',
    'boolean' => 'the :attribute must be either true or false ',
    'confirmed' => 'The confirmation field does not match the :attribute field',
    'date' => ':attribute is not a valid date',
    'date_format' => 'The :attribute does not match the :format.',
    'different' => 'The :attribute and :other fields must be different',
    'digits' => 'The :attribute must contain :digits number(s)',
    'digits_between' => 'The :attribute must contain between :min and :max digits',
    'dimensions' => 'The :attribute contains invalid image dimensions.',
    'distinct' => 'The :attribute has a repeated value.',
    'email' => 'The :attribute must be a valid email address',
    'exists' => 'The specified :attribute value does not exist',
    'file' => 'The :attribute must be a file.',
    'filled' => ':attribute is mandatory',
    'image' => 'The :attribute must be an image',
    'in' => ':attribute null',
    'in_array' => ':attribute does not exist in :other.',
    'integer' => ' :attribute must be an integer',
    'ip' => 'The :attribute must be a valid IP address',
    'ipv4' => 'The :attribute must be a valid IPv4 address.',
    'ipv6' => 'The :attribute must be a valid IPv6 address.',
    'json' => 'The :attribute must be a JSON string.',
    'gt' => [
        'numeric' => 'The :attribute must be greater than :value.',
        'file' => 'The :attribute must be greater than :value kilobytes.',
        'string' => 'The :attribute must be greater than :value characters.',
        'array' => 'The :attribute must have more than :value items.',
    ],
    'gte' => [
        'numeric' => 'The :attribute must be greater than or equal :value.',
        'file' => 'The :attribute must be greater than or equal :value kilobytes.',
        'string' => 'The :attribute must be greater than or equal :value characters.',
        'array' => 'The :attribute must have :value items or more.',
    ],

    'lt' => [
        'numeric' => 'The :attribute must be less than :value.',
        'file' => 'The :attribute must be less than :value kilobytes.',
        'string' => 'The :attribute must be less than :value characters.',
        'array' => 'The :attribute must have less than :value items.',
    ],
    'lte' => [
        'numeric' => 'The :attribute must be less than or equal :value.',
        'file' => 'The :attribute must be less than or equal :value kilobytes.',
        'string' => 'The :attribute must be less than or equal :value characters.',
        'array' => 'The :attribute must not have more than :value items.',
    ],
    'max' => [
        'numeric' => 'The :attribute may not be greater than :max.',
        'file' => 'The :attribute may not be greater than :max kilobytes.',
        'string' => 'The :attribute may not be greater than :max characters.',
        'array' => 'The :attribute may not have more than :max items.',
    ],
    'mimes' => 'The :attribute must be a file of type: :values.',
    'mimetypes' => 'The :attribute must be a file of type: :values.',
    'min' => [
        'numeric' => 'The :attribute must be at least :min.',
        'file' => 'The :attribute must be at least :min kilobytes.',
        'string' => 'The :attribute must be at least :min characters.',
        'array' => 'The :attribute must have at least :min items.',
    ],
    'not_in' => 'The selected :attribute is invalid.',
    'not_regex' => 'The :attribute format is invalid.',
    'numeric' => 'The :attribute must be a number.',
    'present' => 'The :attribute field must be present.',
    'regex' => 'The :attribute format is invalid.',
    'required' => 'The :attribute field is required.',
    'required_if' => 'The :attribute field is required when :other is :value.',
    'required_unless' => 'The :attribute field is required unless :other is in :values.',
    'required_with' => 'The :attribute field is required when :values is present.',
    'required_with_all' => 'The :attribute field is required when :values are present.',
    'required_without' => 'The :attribute field is required when :values is not present.',
    'required_without_all' => 'The :attribute field is required when none of :values are present.',
    'same' => 'The :attribute and :other must match.',
    'size' => [
        'numeric' => 'The :attribute must be :size.',
        'file' => 'The :attribute must be :size kilobytes.',
        'string' => 'The :attribute must be :size characters.',
        'array' => 'The :attribute must contain :size items.',
    ],
    'starts_with' => 'The :attribute must start with one of the following: :values',
    'string' => 'The :attribute must be a string.',
    'timezone' => 'The :attribute must be a valid zone.',
    'unique' => 'The :attribute has already been taken.',
    'uploaded' => 'The :attribute failed to upload.',
    'url' => 'The :attribute format is invalid.',
    'uuid' => 'The :attribute must be a valid UUID.',
    'from' => 'Starting Date' ,
    'discount_price' => 'Discount price',
    'to' => 'Ending date' ,
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

    'attributes' => [
        'message'  => ' Message',
        'register_link'=>'registeration link',
        'commercial_number'=>'commercial number',
        'fullname'=>'Full name',
        'nationality_id'=>' Nationality',
        'identity_card_image'=>'Identity image',
        'bank_iban_number'=>'bank number',
        'car_type_id'=>'car type',
        'region_id'=>' region',
        'driver_date_of_birth'=>'  date of birth',
        'personal_image'=>'   personal image',
        'car_model'=>'   car model',
        'car_letters'=>'  car letters',
        'car_numbers'=>' car numbers',
        'manufacturing_year'=>'manufacturing year',
        'car_front'=>' car from front',
        'car_back'=>' car from back',
        'driving_license'=>' license image',
        'bank_account_number'=>'Bank account number',
        'commercial_image'=>'commercial log image',
        'name' => 'Name ',
        'terms' => 'Terms and Conditions',
        'username' => 'User name ',
        'user_id' => 'User name ',
        'email' => 'E-mail ',
        'first_name' => 'First Name ',
        'last_name' => 'Last Name ',
        'password' => 'Password ',
        'password_confirmation' => 'Password Confirmation ',
        'city' => 'City ',
        'country' => 'Country ',
        'address' => 'Address ',
        'phone' => 'Phone ',
        'mobile' => 'Mobile ',
        'age' => 'Age',
        'gender' => 'Gender',
        'day' => 'Day',
        'month' => 'Month',
        'year' => 'Year',
        'hour' => 'Hour',
        'minute' => 'Minute',
        'second' => 'Second',
        'title' => 'Title',
        'content' => 'Conetent',
        'description' => 'Description',
        'excerpt' => 'Excerpt',
        'date' => 'Date',
        'time' => 'Time',
        'available' => 'Available',
        'size' => 'Size',
        'image' => 'Image',
        'avatar' => 'Company Logo',
        'total_pay' => 'Total Pay',
        'permissions' => 'Permissions',
        'start_date' => 'Start Date',
        'end_date' => 'End Date',
        'start_time' => 'Start Time',
        'end_time' => 'End Time',
        'number_of_days' => 'Number of days',
        'old_password' => 'Old Password',
        'discount_percentage' => 'Discount percentage',
        'ar' => [
            'name' => 'Name in Arabic',
            'title' => 'Title in Arabic',
            'description' => 'Description in Arabic',
        ],

        'en' => [
            'name' => 'Name in English',
            'title' => 'Title in English',
            'description' => 'Description in English',
        ],

        'category_id' => 'Category',
        'purchase_price' => 'Purchase Price',
        'sale_price' => 'Sale Price',
        'stock' => 'Stock',
        'code' => 'Code',
        'subject' => 'Subject',
    ],

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

    'field_min_6' => 'Field must be 6-digits at least',
    'field_min_5' => 'Field must be 5-digits at least',
    'field_min_3' => 'Field must be 3-digits at least',
    'field_max_255' => 'Field must greater than 255 digits',
    'field_image' => 'Field must an image',
    'field_required_name' => 'Name field is required',
    'field_required_emails' => 'Please Select emails',
    'Message Required' => 'Please Enter your Message',
    'field_required_ar_name' => 'Arabic name field is required',
    'field_required_en_name' => 'English Name field is required',
    'field_policies_ar_name' => 'Arabic policies field is required',
    'field_policies_en_name' => 'English policies field is required',
    'field_about_ar_name' => 'Arabic about field is required',
    'field_about_en_name' => 'English about field is required',
    'field_currency_ar_name' => 'Arabic currency field is required',
    'field_currency_en_name' => 'English currency field is required',
    'field_delivery_price' => 'Delivery price field is required',
    'field_required_ar_description' => 'Arabic description field is required',
    'field_required_en_description' => 'English description field is required',
    'field_required_ar_question' => 'Arabic question field is required',
    'field_required_en_question' => 'English question field is required',
    'field_required_ar_answer' => 'Arabic answer field is required',
    'field_required_en_answer' => 'English answer field is required',
    'field_required_price' => 'Price field is required',
    'field_required_quantity' => 'Quantity field is required',
    'field_required_image' => 'Image field is required',
    'field_required_category' => 'Category field is required',
    'field_required_code' => 'Code field is required',
    'field_required_product' => 'Product field is required',
    'field_required_comment' => 'Comment field is required',
    'field_rate_required' => 'ٌRate field is required',
    'field_required_amount' => 'Value field is required',
    'field_required_status' => 'Status field is required',
    'field_required_discount' => 'Discount field is required',
    'field_email' => 'Email field is required',
    'field_required_email' => 'Email field is required',
    'field_required_address' => 'Address field is required',
    'field_required_phone' => 'Phone field is required',
    'field_required_payment_method' => 'Payment method field is required',
    'field_required_url' => 'Url field is required',
    'field_required_ordered' => 'Ordered field is required',
    'field_unique_ordered' => 'Please select other Ordered',
    'field_required_duration_in_day' => 'Duration in day field is required',
    'field_required_type' => 'Type field is required',
    'field_required_password' => 'Password field is required',
    'field_required_old_password' => 'Old Password field is required',
    'password_confirmed' => 'Password is not confirmed',
    'field_numeric' => 'field must be numeric',
    'field_whatsapp' => 'Whatsapp field is required',
    'field_facebook' => 'Facebook field is required',
    'field_twitter' => 'Twitter field is required',
    'field_instagram' => 'Instagram field is required',
    'field_linkedin' => 'Linkedin field is required',
    'field_snapchat' => 'Snapchat field is required',
    'field_exists' => 'Field already exsits',
    'field_exists_code' => 'Code already exsits',
    'field_exists_phone' => 'Phone already exsits',
    'field_exists_email' => 'Email already exsits',
    'field_required' => 'This field is required',
    'field_wrong_code' => 'This code is incorrect',
    'These credentials do not match our data.' => 'These credentials do not match our data, please try again',
    'These credentials is wrong' => 'These credentials is wrong',
    'Please Enter Correct saudi arabia phone' => 'Please Enter Correct saudi arabia Or Egyptian phone',
    'Please Enter Correct date' => 'Please Enter Correct date',
    'Please Enter The Start date' => 'Please Enter The Start date',
    'Please Enter The End date' => 'Please Enter The End date',
    'policy' => 'You must agree to our policy to sign up',
    'policy_check' => 'I agree that I have read and acknowledge the',
    'identity_card' => 'Identity car number',
    'sponsor_name' => 'Sponsor name',
];
